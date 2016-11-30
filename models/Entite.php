<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entite".
 *
 * @property string $Identifiant
 * @property string $Libelle
 * @property string $Description
 * @property string $Type
 * @property string $Entite_parente
 * @property string $Entites_filles
 */
class Entite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'entite';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Description', 'Type', 'Entite_parente', 'Entites_filles'], 'required'],
            [['Identifiant'], 'string', 'max' => 30],
            [['Libelle', 'Description', 'Type', 'Entite_parente', 'Entites_filles'], 'string', 'max' => 250],
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
            'Type' => 'Type',
            'Entite_parente' => 'Entite Parente',
            'Entites_filles' => 'Entites Filles',
        ];
    }
}
