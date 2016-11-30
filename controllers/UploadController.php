<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use app\models\UploadForm;
use yii\web\UploadedFile;

class UploadController extends Controller
{
	public function actionUpload()
	{
		$model = new UploadForm();

		if (Yii::$app->request->isPost) {
			$model->file = UploadedFile::getInstance($model, 'file');

			if ($model->validate()) {                
				$model->file->saveAs('uploads/' . $model->file->baseName . '.' . $model->file->extension);
			}
		}

		echo "bp1" ;
		return $this->render('view', ['model' => $model]);
	}
}
?>