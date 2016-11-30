<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organigramme".
 *
 * @property integer $Orga
 */
class Organigramme extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organigramme';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Orga'], 'required'],
            [['Orga'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Orga' => Yii::t('app', 'Orga'),
        ];
    }
}
