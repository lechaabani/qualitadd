<?php

namespace app\controllers;

use Yii;
use app\models\Constatplanaction;
use app\models\ConstatplanactionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ConstatplanactionController implements the CRUD actions for Constatplanaction model.
 */
class ConstatplanactionController extends Controller
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
     * Lists all Constatplanaction models.
     * @return mixed
     */
    public function actionIndex($id_constat)
    {
        $searchModel = new ConstatplanactionSearch();
		
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'id_constat' => $id_constat,
        ]);
    }

    /**
     * Displays a single Constatplanaction model.
     * @param string $id_constat
     * @param string $id_planaction
     * @return mixed
     */
    public function actionView($id_constat, $id_planaction)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_constat, $id_planaction),
        ]);
    }

    /**
     * Creates a new Constatplanaction model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Constatplanaction();

        $Id_constat = $_POST['Id_constat'] ;
       
		foreach($_POST['selection'] as $valeur){
			$model->addRelation($valeur, $Id_constat) ;
		}
		
		return $this->redirect(['/constat/update','id' => $Id_constat ]);
    }

    /**
     * Updates an existing Constatplanaction model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_constat
     * @param string $id_planaction
     * @return mixed
     */
    public function actionUpdate($id_constat, $id_planaction)
    {
        $model = $this->findModel($id_constat, $id_planaction);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_constat' => $model->id_constat, 'id_planaction' => $model->id_planaction]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Constatplanaction model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_constat
     * @param string $id_planaction
     * @return mixed
     */
    public function actionDelete($id_constat, $id_planaction)
    {
        $this->findModel($id_constat, $id_planaction)->delete();

        return $this->redirect(['index']);
    }
	
	public function actionDelete1($id_planaction, $id_constat)
    {
        $model = new Constatplanaction();
         
        $model->deleteRelation($id_planaction, $id_constat) ;

        return $this->redirect(['/constat/update','id' => $id_constat ]);
    }

    /**
     * Finds the Constatplanaction model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_constat
     * @param string $id_planaction
     * @return Constatplanaction the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_constat, $id_planaction)
    {
        if (($model = Constatplanaction::findOne(['id_constat' => $id_constat, 'id_planaction' => $id_planaction])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
