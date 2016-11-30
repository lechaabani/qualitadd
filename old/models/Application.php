<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "application".
 *
 * @property string $Identifiant
 * @property string $Libelle
 * @property string $Description
 * @property string $Responsable
 * @property string $Origine
 */
class Application extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'application';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Description', 'Responsable', 'Origine'], 'required'],
            [['Identifiant'], 'string', 'max' => 30],
            [['Libelle', 'Description', 'Responsable', 'Origine'], 'string', 'max' => 200],
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
            'Responsable' => 'Responsable',
            'Origine' => 'Origine',
        ];
    }
}
