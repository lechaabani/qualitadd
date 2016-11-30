<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "certificat".
 *
 * @property string $Identifiant
 * @property string $Libelle
 * @property string $Campagne
 * @property string $Donnee
 * @property string $Controle
 * @property string $Critere_de_seuil
 * @property string $Type_de_critere
 * @property string $Seuil_Qualite_Moyenne
 * @property string $Seuil_Qualite_Faible
 * @property string $Resultat
 * @property string $Evaluation
 * @property string $Evaluation_forcee
 * @property string $Analyse
 * @property string $Remediation
 * @property string $Justificatifs
 */
class Certificat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'certificat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Campagne', 'Donnee', 'Controle', 'Critere_de_seuil', 'Type_de_critere', 'Seuil_Qualite_Moyenne', 'Seuil_Qualite_Faible', 'Resultat', 'Evaluation', 'Evaluation_forcee', 'Analyse', 'Remediation', 'Justificatifs'], 'required'],
            [['Identifiant'], 'string', 'max' => 30],
            [['Libelle', 'Campagne', 'Controle', 'Type_de_critere', 'Seuil_Qualite_Moyenne', 'Seuil_Qualite_Faible', 'Resultat', 'Remediation', 'Justificatifs'], 'string', 'max' => 250],
            [['Donnee', 'Critere_de_seuil', 'Evaluation', 'Evaluation_forcee', 'Analyse'], 'string', 'max' => 200],
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
            'Campagne' => 'Campagne',
            'Donnee' => 'Donnee',
            'Controle' => 'Controle',
            'Critere_de_seuil' => 'Critere De Seuil',
            'Type_de_critere' => 'Type De Critere',
            'Seuil_Qualite_Moyenne' => 'Seuil  Qualite  Moyenne',
            'Seuil_Qualite_Faible' => 'Seuil  Qualite  Faible',
            'Resultat' => 'Resultat',
            'Evaluation' => 'Evaluation',
            'Evaluation_forcee' => 'Evaluation Forcee',
            'Analyse' => 'Analyse',
            'Remediation' => 'Remediation',
            'Justificatifs' => 'Justificatifs',
        ];
    }
}
