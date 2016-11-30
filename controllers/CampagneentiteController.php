<?php

namespace app\controllers;

use Yii;
use app\models\Campagneentite;
use app\models\CampagneentiteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CampagneentiteController implements the CRUD actions for Campagneentite model.
 */
class CampagneentiteController extends Controller
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
     * Lists all Campagneentite models.
     * @return mixed
     */
    public function actionIndex($id_campagne)
    {
        $searchModel = new CampagneentiteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'id_campagne' => $id_campagne,
        ]);
    }

    /**
     * Displays a single Campagneentite model.
     * @param string $id_campagne
     * @param string $id_entite
     * @return mixed
     */
    public function actionView($id_campagne, $id_entite)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_campagne, $id_entite),
        ]);
    }

    /**
     * Creates a new Campagneentite model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Campagneentite();

        $Id_campagne = $_POST['Id_campagne'] ;
       
		foreach($_POST['selection'] as $valeur){
			$model->addRelation($valeur, $Id_campagne) ;
		}
		
		return $this->redirect(['/campagne/update','id' => $Id_campagne ]);
    }

    /**
     * Updates an existing Campagneentite model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_campagne
     * @param string $id_entite
     * @return mixed
     */
    public function actionUpdate($id_campagne, $id_entite)
    {
        $model = $this->findModel($id_campagne, $id_entite);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_campagne' => $model->id_campagne, 'id_entite' => $model->id_entite]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Campagneentite model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_campagne
     * @param string $id_entite
     * @return mixed
     */
    public function actionDelete($id_campagne, $id_entite)
    {
        $this->findModel($id_campagne, $id_entite)->delete();

        return $this->redirect(['index']);
    }
	
	public function actionDelete1($id_entite, $id_campagne)
    {
        $model = new Campagneentite();
         
        $model->deleteRelation($id_entite, $id_campagne) ;

        return $this->redirect(['/campagne/update','id' => $id_campagne ]);
    }

    /**
     * Finds the Campagneentite model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_campagne
     * @param string $id_entite
     * @return Campagneentite the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_campagne, $id_entite)
    {
        if (($model = Campagneentite::findOne(['id_campagne' => $id_campagne, 'id_entite' => $id_entite])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
