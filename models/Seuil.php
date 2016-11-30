<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seuil".
 *
 * @property string $Identifiant
 * @property string $Controle
 * @property string $Critere
 * @property string $Donnee
 * @property string $Seuil_Qualite_Faible
 * @property string $Seuil_Qualite_Moyenne
 * @property string $Type_de_critere
 */
class Seuil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seuil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Controle', 'Critere', 'Donnee', 'Seuil_Qualite_Faible', 'Seuil_Qualite_Moyenne', 'Type_de_critere'], 'required'],
            [['Identifiant'], 'string', 'max' => 30],
            [['Controle', 'Critere', 'Donnee', 'Seuil_Qualite_Moyenne', 'Type_de_critere'], 'string', 'max' => 250],
            [['Seuil_Qualite_Faible'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Identifiant' => 'Identifiant',
            'Controle' => 'Controle',
            'Critere' => 'Critere',
            'Donnee' => 'Donnee',
            'Seuil_Qualite_Faible' => 'Seuil  Qualite  Faible',
            'Seuil_Qualite_Moyenne' => 'Seuil  Qualite  Moyenne',
            'Type_de_critere' => 'Type De Critere',
        ];
    }
}
