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
            'Libelle' => 'Libellé',
            'Description' => 'Description',
            'Statut' => 'Statut',
            'Date_de_debut' => 'Date de Début',
            'Date_de_derniere_pause' => 'Date de Dernière Pause',
            'Date_de_fin_effective' => 'Date De Fin Effective',
            'Date_de_fin_previsionnelle' => 'Date De Fin Prévisionnelle',
            'Entites_associees' => 'Entités Associées',
            'Controles_associes' => 'Contrôles Associés',
        ];
    }
	
	public function afterFind()
    {
        // convert to display format
        $this->Date_de_debut = $this->Date_de_debut == 0 ? null : \DateTime::createFromFormat('Y-m-d H:i:s',$this->Date_de_debut)->format('d/m/Y');
		$this->Date_de_derniere_pause = $this->Date_de_derniere_pause == 0 ? null : \DateTime::createFromFormat('Y-m-d H:i:s',$this->Date_de_derniere_pause)->format('d/m/Y');
		$this->Date_de_fin_effective = $this->Date_de_fin_effective == 0 ? null : \DateTime::createFromFormat('Y-m-d H:i:s',$this->Date_de_fin_effective)->format('d/m/Y');
		$this->Date_de_fin_previsionnelle = $this->Date_de_fin_previsionnelle == 0 ? null : \DateTime::createFromFormat('Y-m-d H:i:s',$this->Date_de_fin_previsionnelle)->format('d/m/Y');

        parent::afterFind();
    }

    public function beforeSave($insert)
    {
        // convert to storage format
        $this->Date_de_debut = \DateTime::createFromFormat('d/m/Y',$this->Date_de_debut)->format('Y-m-d H:i:s');
        $this->Date_de_derniere_pause = \DateTime::createFromFormat('d/m/Y',$this->Date_de_derniere_pause)->format('Y-m-d H:i:s');
        $this->Date_de_fin_effective = \DateTime::createFromFormat('d/m/Y',$this->Date_de_fin_effective)->format('Y-m-d H:i:s');
        $this->Date_de_fin_previsionnelle = \DateTime::createFromFormat('d/m/Y',$this->Date_de_fin_previsionnelle)->format('Y-m-d H:i:s');

        return parent::beforeSave($insert);
    }
}
