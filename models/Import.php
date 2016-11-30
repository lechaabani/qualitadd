<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "import".
 *
 * @property integer $import
 */
class Import extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'import';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['import'], 'required'],
            [['import'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'import' => Yii::t('app', 'Import'),
        ];
    }
}
