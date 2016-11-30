<?php

namespace app\controllers;

use Yii;
use app\models\Donneesource;
use app\models\DonneesourceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DonneesourceController implements the CRUD actions for Donneesource model.
 */
 
 
class DonneesourceController extends Controller
{
	
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all Donneesource models.
     * @return mixed
     */
    public function actionIndex($id_donnee)
    {
        $searchModel = new DonneesourceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        	'id_donnee' => $id_donnee,
        	//'model' => $this->findModel($Id_donnee),
        ]);
    }

    /**
     * Displays a single Donneesource model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Donneesource model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Donneesource();
        
        $Id_donnee = $_POST['Id_donnee'] ;
        
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {  	
        //    return $this->redirect(['view', 'id' => $model->Identifiant]);
        //} else {
        
        	foreach($_POST['selection'] as $valeur){
        		$model->addRelation($valeur, $Id_donnee) ;
        	}
        	
            return $this->redirect(['/donnee/update','id' => $Id_donnee ]);
        //}
    }

    /**
     * Updates an existing Donneesource model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Identifiant]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Donneesource model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete1($id_source, $id_donnee)
    {
        $model = new Donneesource();
         
        $model->deleteRelation($id_source, $id_donnee) ;

        return $this->redirect(['/donnee/update','id' => $id_donnee ]);
    }

    /**
     * Finds the Donneesource model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Donneesource the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Donneesource::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
