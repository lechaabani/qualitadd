<?php

namespace app\controllers;

use Yii;
use app\models\Donneeentite;
use app\models\DonneeentiteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DonneeentiteController implements the CRUD actions for Donneeentite model.
 */
class DonneeentiteController extends Controller
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
     * Lists all Donneeentite models.
     * @return mixed
     */
    public function actionIndex($id_donnee)
    {
        $searchModel = new DonneeentiteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'id_donnee' => $id_donnee,
        ]);
    }

    /**
     * Displays a single Donneeentite model.
     * @param string $id_donnee
     * @param string $id_entite
     * @return mixed
     */
    public function actionView($id_donnee, $id_entite)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_donnee, $id_entite),
        ]);
    }

    /**
     * Creates a new Donneeentite model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Donneeentite();

        $Id_donnee = $_POST['Id_donnee'] ;
       
		foreach($_POST['selection'] as $valeur){
			$model->addRelation($valeur, $Id_donnee) ;
		}
		
		return $this->redirect(['/donnee/update','id' => $Id_donnee ]);
    }

    /**
     * Updates an existing Donneeentite model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_donnee
     * @param string $id_entite
     * @return mixed
     */
    public function actionUpdate($id_donnee, $id_entite)
    {
        $model = $this->findModel($id_donnee, $id_entite);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_donnee' => $model->id_donnee, 'id_entite' => $model->id_entite]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Donneeentite model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_donnee
     * @param string $id_entite
     * @return mixed
     */
    public function actionDelete($id_donnee, $id_entite)
    {
        $this->findModel($id_donnee, $id_entite)->delete();

        return $this->redirect(['index']);
    }
	
	public function actionDelete1($id_entite, $id_donnee)
    {
        $model = new Donneeentite();
         
        $model->deleteRelation($id_entite, $id_donnee) ;

        return $this->redirect(['/donnee/update','id' => $id_donnee ]);
    }

    /**
     * Finds the Donneeentite model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_donnee
     * @param string $id_entite
     * @return Donneeentite the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_donnee, $id_entite)
    {
        if (($model = Donneeentite::findOne(['id_donnee' => $id_donnee, 'id_entite' => $id_entite])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
