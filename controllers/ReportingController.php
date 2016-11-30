<?php

namespace app\controllers;

use Yii;
use app\models\Entite;
use app\models\EntiteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
//use yii\bootstrap\Modal;

class ReportingController extends \yii\web\Controller
{
    public function actionIndex($report_file)
    {
        $searchModel = new EntiteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		// $report_file = $_POST['report_file'] ;
		// $current_content = $_POST['current_content'] ;
		
		//var_dump($_POST) ;
		
		$js='$("#modal").modal("show")';
		$this->getView()->registerJs($js);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'report_file' => $report_file,
        ]);

    }
	
	// download fichier
	public function actionDownload() 
	{
		$report_file = $_POST['report_file'];
		
		$path = Yii::getAlias('@webroot') . '/documents';

		$file = $path . '/' . $report_file ;

		if (file_exists($file)) {
			Yii::$app->response->sendFile($file);
		} 
	}

}
