<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $ulFile;

    public function rules()
    {
        return [
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'txt, csv'],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
            $this->ulFile->saveAs('uploads/' . $this->ulFile->baseName . '.' . $this->ulFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
?>