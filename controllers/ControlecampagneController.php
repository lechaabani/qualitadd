<?php

namespace app\controllers;

use Yii;
use app\models\Controlecampagne;
use app\models\ControlecampagneSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ControlecampagneController implements the CRUD actions for Controlecampagne model.
 */
class ControlecampagneController extends Controller
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
     * Lists all Controlecampagne models.
     * @return mixed
     */
    public function actionIndex($id_campagne)
    {
        $searchModel = new ControlecampagneSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'id_campagne' => $id_campagne,
        ]);
    }

    /**
     * Displays a single Controlecampagne model.
     * @param string $id_campagne
     * @param string $id_controle
     * @return mixed
     */
    public function actionView($id_campagne, $id_controle)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_campagne, $id_controle),
        ]);
    }

    /**
     * Creates a new Controlecampagne model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Controlecampagne();

        $Id_campagne = $_POST['Id_campagne'] ;
       
		foreach($_POST['selection'] as $valeur){
			$model->addRelation($valeur, $Id_campagne) ;
		}
		
		return $this->redirect(['/campagne/update','id' => $Id_campagne ]);
    }

    /**
     * Updates an existing Controlecampagne model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_campagne
     * @param string $id_controle
     * @return mixed
     */
    public function actionUpdate($id_campagne, $id_controle)
    {
        $model = $this->findModel($id_campagne, $id_controle);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_campagne' => $model->id_campagne, 'id_controle' => $model->id_controle]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Controlecampagne model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_campagne
     * @param string $id_controle
     * @return mixed
     */
    public function actionDelete($id_campagne, $id_controle)
    {
        $this->findModel($id_campagne, $id_controle)->delete();

        return $this->redirect(['index']);
    }
	
	public function actionDelete1($id_controle, $id_campagne)
    {
        $model = new Controlecampagne();
         
        $model->deleteRelation($id_controle, $id_campagne) ;

        return $this->redirect(['/campagne/update','id' => $id_campagne ]);
    }

    /**
     * Finds the Controlecampagne model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_campagne
     * @param string $id_controle
     * @return Controlecampagne the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_campagne, $id_controle)
    {
        if (($model = Controlecampagne::findOne(['id_campagne' => $id_campagne, 'id_controle' => $id_controle])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
