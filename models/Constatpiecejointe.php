<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "constatpiecejointe".
 *
 * @property string $id_constat
 * @property string $piece
 * @property integer $id_piece
 */
class Constatpiecejointe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'constatpiecejointe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_constat', 'piece'], 'required'],
            [['id_constat'], 'string', 'max' => 30],
            [['piece'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_constat' => Yii::t('app', 'Id Constat'),
            'piece' => Yii::t('app', 'Piece'),
            'id_piece' => Yii::t('app', 'Id Piece'),
        ];
    }
}
