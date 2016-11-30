<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "domaine".
 *
 * @property string $Identifiant
 * @property string $Libelle
 * @property string $Description 
 */
class Domaine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'domaine';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Description'], 'required'],
            [['Identifiant'], 'string', 'max' => 30],
            [['Libelle', 'Description'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Identifiant' => 'Identifiant',
            'Libelle' => 'Libelle',
            'Description' => 'Description', 
        ];
    }
}
