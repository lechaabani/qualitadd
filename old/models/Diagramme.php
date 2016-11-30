<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diagramme".
 *
 * @property integer $Diag
 */
class Diagramme extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diagramme';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Diag'], 'required'],
            [['Diag'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Diag' => Yii::t('app', 'Diag'),
        ];
    }
}
