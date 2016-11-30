<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planaction".
 *
 * @property string $Identifiant
 * @property string $Libelle
 * @property string $Description
 * @property string $Responsable
 * @property string $Date_identification
 * @property string $Campagne
 * @property string $Source
 * @property string $Type_amelioration
 * @property string $Type_de_solution
 * @property string $Donnees_associees
 * @property string $Constats_associes
 * @property string $Anomalies
 * @property string $Anomalies_constatees
 * @property string $Date_cible_a_respecter
 * @property string $Recurrence_prevue
 * @property string $Applications
 * @property string $Niveau_de_priorite
 * @property string $Statut
 */
class Planaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'planaction';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Description', 'Responsable', 'Date_identification', 'Campagne', 'Source', 'Type_amelioration', 'Type_de_solution', 'Donnees_associees', 'Constats_associes', 'Anomalies', 'Anomalies_constatees', 'Date_cible_a_respecter', 'Recurrence_prevue', 'Applications', 'Niveau_de_priorite', 'Statut'], 'required'],
            [['Date_identification', 'Date_cible_a_respecter'], 'safe'],
            [['Identifiant'], 'string', 'max' => 30],
            [['Libelle', 'Type_de_solution', 'Donnees_associees', 'Constats_associes', 'Anomalies', 'Anomalies_constatees', 'Statut'], 'string', 'max' => 250],
            [['Description', 'Responsable', 'Campagne', 'Source', 'Type_amelioration', 'Recurrence_prevue', 'Applications', 'Niveau_de_priorite'], 'string', 'max' => 200],
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
            'Date_identification' => 'Date Identification',
            'Campagne' => 'Campagne',
            'Source' => 'Source',
            'Type_amelioration' => 'Type Amelioration',
            'Type_de_solution' => 'Type De Solution',
            'Donnees_associees' => 'Donnees Associees',
            'Constats_associes' => 'Constats Associes',
            'Anomalies' => 'Anomalies',
            'Anomalies_constatees' => 'Anomalies Constatees',
            'Date_cible_a_respecter' => 'Date Cible A Respecter',
            'Recurrence_prevue' => 'Recurrence Prevue',
            'Applications' => 'Applications',
            'Niveau_de_priorite' => 'Niveau De Priorite',
            'Statut' => 'Statut',
        ];
    }
	
	public function afterFind()
    {
        // convert to display format
        $this->Date_identification = $this->Date_identification == 0 ? null : \DateTime::createFromFormat('Y-m-d H:i:s',$this->Date_identification)->format('d/m/Y');
		$this->Date_cible_a_respecter = $this->Date_cible_a_respecter == 0 ? null : \DateTime::createFromFormat('Y-m-d H:i:s',$this->Date_cible_a_respecter)->format('d/m/Y');

        parent::afterFind();
    }

    public function beforeSave($insert)
    {
        // convert to storage format
        $this->Date_identification = \DateTime::createFromFormat('d/m/Y',$this->Date_identification)->format('Y-m-d H:i:s');
        $this->Date_cible_a_respecter = \DateTime::createFromFormat('d/m/Y',$this->Date_cible_a_respecter)->format('Y-m-d H:i:s');
 
        return parent::beforeSave($insert);
    }
}
