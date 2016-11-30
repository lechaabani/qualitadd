<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "donnee".
 *
 * @property string $Identifiant
 * @property string $Libelle
 * @property string $Description
 * @property string $Code_systeme
 * @property string $Typologie
 * @property string $Format
 * @property string $Granularite
 * @property string $Application
 * @property string $Table
 * @property string $Etape
 * @property string $Mode_de_production
 * @property string $Origine
 * @property string $Frequence_de_mise_a_jour
 * @property string $Commentaires
 * @property string $Statut
 * @property string $Justification
 * @property string $Priorite
 * @property integer $Donnee_sensible
 */
class Donnee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'donnee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Description', 'Code_systeme', 'Typologie', 'Format', 'Granularite', 'Application', 'Table', 'Etape', 'Mode_de_production', 'Origine', 'Frequence_de_mise_a_jour', 'Commentaires'], 'required'],
            [['Donnee_sensible'], 'integer'],
            [['Identifiant'], 'string', 'max' => 30],
            [['Libelle', 'Typologie', 'Format', 'Granularite', 'Application', 'Table', 'Mode_de_production', 'Origine', 'Frequence_de_mise_a_jour', 'Statut', 'Priorite'], 'string', 'max' => 250],
            [['Description', 'Etape'], 'string', 'max' => 200],
            [['Code_systeme'], 'string', 'max' => 50],
            [['Commentaires', 'Justification'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Identifiant' => Yii::t('app', 'Identifiant'),
            'Libelle' => Yii::t('app', 'Libelle'),
            'Description' => Yii::t('app', 'Description'),
            'Code_systeme' => Yii::t('app', 'Code Systeme'),
            'Typologie' => Yii::t('app', 'Typologie'),
            'Format' => Yii::t('app', 'Format'),
            'Granularite' => Yii::t('app', 'Granularite'),
            'Application' => Yii::t('app', 'Application'),
            'Table' => Yii::t('app', 'Table'),
            'Etape' => Yii::t('app', 'Etape'),
            'Mode_de_production' => Yii::t('app', 'Mode De Production'),
            'Origine' => Yii::t('app', 'Origine'),
            'Frequence_de_mise_a_jour' => Yii::t('app', 'Frequence De Mise A Jour'),
            'Commentaires' => Yii::t('app', 'Commentaires'),
            'Statut' => Yii::t('app', 'Statut'),
            'Justification' => Yii::t('app', 'Justification'),
            'Priorite' => Yii::t('app', 'Priorite'),
            'Donnee_sensible' => Yii::t('app', 'Donnee Sensible'),
        ];
    }
}
