<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campagne".
 *
 * @property string $Identifiant
 * @property string $Libelle
 * @property string $Description
 * @property string $Statut
 * @property string $Date_de_debut
 * @property string $Date_de_derniere_pause
 * @property string $Date_de_fin_effective
 * @property string $Date_de_fin_previsionnelle
 * @property string $Entites_associees
 * @property string $Controles_associes
 */
class Campagne extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campagne';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Description', 'Statut', 'Date_de_debut', 'Date_de_derniere_pause', 'Date_de_fin_effective', 'Date_de_fin_previsionnelle', 'Entites_associees', 'Controles_associes'], 'required'],
            [['Date_de_debut', 'Date_de_derniere_pause', 'Date_de_fin_effective', 'Date_de_fin_previsionnelle'], 'safe'],
            [['Identifiant'], 'string', 'max' => 30],
            [['Libelle', 'Statut', 'Entites_associees', 'Controles_associes'], 'string', 'max' => 250],
            [['Description'], 'string', 'max' => 200],
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
            'Statut' => 'Statut',
            'Date_de_debut' => 'Date De Debut',
            'Date_de_derniere_pause' => 'Date De Derniere Pause',
            'Date_de_fin_effective' => 'Date De Fin Effective',
            'Date_de_fin_previsionnelle' => 'Date De Fin Previsionnelle',
            'Entites_associees' => 'Entites Associees',
            'Controles_associes' => 'Controles Associes',
        ];
    }
}
