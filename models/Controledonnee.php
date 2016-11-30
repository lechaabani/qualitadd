<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "controle".
 *
 * @property string $Identifiant
 * @property string $Libelle
 * @property string $Description
 * @property string $Type
 * @property string $Frequence
 * @property string $Statut
 * @property string $Responsable
 * @property string $Application
 * @property string $Etape
 * @property string $Actions_a_effectuer_si_anomalie
 * @property integer $Exhaustivite
 * @property integer $Exactitude
 * @property integer $Pertinence
 * @property string $Donnees_controlees
 * @property string $Preuves
 * @property string $Commentaires_preuves
 * @property string $Documents
 * @property string $Commentaires_documents
 */
class Controledonnee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'controle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Description', 'Type', 'Frequence', 'Statut', 'Responsable', 'Application', 'Etape', 'Actions_a_effectuer_si_anomalie', 'Exhaustivite', 'Exactitude', 'Pertinence', 'Donnees_controlees', 'Preuves', 'Commentaires_preuves', 'Documents', 'Commentaires_documents'], 'required'],
            [['Exhaustivite', 'Exactitude', 'Pertinence'], 'integer'],
            [['Identifiant'], 'string', 'max' => 30],
            [['Libelle', 'Responsable', 'Etape', 'Actions_a_effectuer_si_anomalie'], 'string', 'max' => 250],
            [['Description', 'Type', 'Frequence', 'Statut', 'Donnees_controlees', 'Preuves', 'Commentaires_preuves', 'Documents', 'Commentaires_documents'], 'string', 'max' => 200],
            [['Application'], 'string', 'max' => 400],
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
            'Frequence' => 'Frequence',
            'Statut' => 'Statut',
            'Responsable' => 'Responsable',
            'Application' => 'Application',
            'Etape' => 'Etape',
            'Actions_a_effectuer_si_anomalie' => 'Actions A Effectuer Si Anomalie',
            'Exhaustivite' => 'Exhaustivite',
            'Exactitude' => 'Exactitude',
            'Pertinence' => 'Pertinence',
            'Donnees_controlees' => 'Donnees Controlees',
            'Preuves' => 'Preuves',
            'Commentaires_preuves' => 'Commentaires Preuves',
            'Documents' => 'Documents',
            'Commentaires_documents' => 'Commentaires Documents',
        ];
    }
	
	
	public function addRelation($id_donnee,$id_controle)
    {
		echo ">>>>$id_donnee / $id_controle";
		
    	try {
	    	$sql = "insert into controledonnee (id_donnee,id_controle) values ('$id_donnee','$id_controle')"; 
	    
	    	$connection = Yii::$app->db;  
	    	$query = $connection->createCommand($sql);
	    	$query->execute();
    	} catch (\Exception $exception) {
    		echo "KO" ;
    	}

    }
    
    public function deleteRelation($id_donnee,$id_controle)
    {
    	try {
	    	$sql = "delete from controledonnee where id_donnee = '$id_donnee' and id_controle = '$id_controle'";
	    	 
	    	$connection = Yii::$app->db;
	    	$query = $connection->createCommand($sql);
	    	$query->execute();
    	} catch (\Exception $exception) {
    		echo "KO" ;
    	}
    }
}
