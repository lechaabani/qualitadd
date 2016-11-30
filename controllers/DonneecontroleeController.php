<?php

namespace app\controllers;

use Yii;
use app\models\Donneecontrolee;
use app\models\DonneecontroleeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\bootstrap\Alert ;

/**
 * DonneecontroleeController implements the CRUD actions for Donneecontrolee model.
 */
 
 
class DonneecontroleeController extends Controller
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
     * Lists all Donneecontrolee models.
     * @return mixed
     */
    public function actionIndex($id_controle)
    {
        $searchModel = new DonneecontroleeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        	'id_controle' => $id_controle,
        ]);
    }

    /**
     * Displays a single Donneecontrolee model.
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
     * Creates a new Donneecontrolee model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Donneecontrolee();
        
        $id_controle = $_POST['id_controle'] ;
        
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {  	
        //    return $this->redirect(['view', 'id' => $model->Identifiant]);
        //} else {
        
        	foreach($_POST['selection'] as $valeur){
        		$model->addRelation($valeur, $id_controle) ;
        	}
        	
            return $this->redirect(['/controle/update','id' => $id_controle]);
        //}
    }

    /**
     * Updates an existing Donneecontrolee model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
		/*
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Identifiant]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
		*/
    }

    /**
     * Deletes an existing Donneecontrolee model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete1($id_donnee,$id_controle)
    {
        $model = new Donneecontrolee();
         
        $model->deleteRelation($id_donnee,$id_controle) ;

        return $this->redirect(['/controle/update','id' => $id_controle ]);

    }
	
	
    /**
     * Deletes an existing Donneecontrolee model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete2($id_donnee,$id_controle)
    {
        $model = new Donneecontrolee();
         
        $model->deleteRelation($id_donnee,$id_controle) ;

        return $this->redirect(['/controle/update','id' => $id_controle ]);

    }
	
		 /**
     * Trouve le controle a partir de la donnee
     * @return mixed
     */
	public function actionList($id_donnee)
    {	
		$$searchModel = Donneecontrolee::getControlefromdonnee($id_donnee) ;
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        	'id_controle' => $id_controle,
        ]);

    }

    /**
     * Finds the Donneecontrolee model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Donneecontrolee the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Donneecontrolee::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
