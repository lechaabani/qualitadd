<?php

namespace app\controllers;

use Yii;
use app\models\Controledonnee;
use app\models\ControledonneeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DonneeController implements the CRUD actions for Donnee model.
 */
class ControledonneeController extends Controller
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Controles models.
     * @return mixed
     */
    public function actionIndex($id_donnee)
    {
        $searchModel = new ControledonneeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'id_donnee' => $id_donnee ,
        ]);
    }

    /**
     * Displays a single Controle model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Controledonnee model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Controledonnee();
        
        $Id_donnee = $_POST['Id_donnee'] ;
        
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {  	
        //    return $this->redirect(['view', 'id' => $model->Identifiant]);
        //} else {
        
		var_dump($_POST['selection']);
		
		
        	foreach($_POST['selection'] as $valeur){
        		$model->addRelation($Id_donnee, $valeur) ;
        	}
        	
            return $this->redirect(['/donnee/update','id' => $Id_donnee ]);
        //}
    }
	
	
	 public function actionDelete1($id_donnee,$id_controle)
    {
        $model = new Controledonnee();
         
        $model->deleteRelation($id_donnee,$id_controle) ;

        return $this->redirect(['/donnee/update','id' => $id_donnee ]);
    }

    /**
     * Updates an existing Controledonnee model.
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
     * Deletes an existing Controledonnee model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

	

    /**
     * Finds the donneecontrole model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return controledonnee the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Controle::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
