<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "donneeentite".
 *
 * @property string $id_donnee
 * @property string $id_entite
 */
class Donneeentite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'donneeentite';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_donnee', 'id_entite'], 'required'],
            [['id_donnee', 'id_entite'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_donnee' => Yii::t('app', 'Id Donnee'),
            'id_entite' => Yii::t('app', 'Id Entite'),
        ];
    }
	
	public function addRelation($id_entite,$id_donnee)
    {
    	try {
	    	$sql = "insert into donneeentite (id_entite,id_donnee) values ('$id_entite','$id_donnee')"; 
	    
	    	$connection = Yii::$app->db;  
	    	$query = $connection->createCommand($sql);
	    	$query->execute();
    	} catch (\Exception $exception) {
    		echo "KO" ;
    	}

    }
    
    public function deleteRelation($id_entite,$id_donnee)
    {
    	try {
	    	$sql = "delete from donneeentite where id_entite = '$id_entite' and id_donnee = '$id_donnee'";
			
			// var_dump($sql);
	    	 
	    	$connection = Yii::$app->db;
	    	$query = $connection->createCommand($sql);
	    	$query->execute();
    	} catch (\Exception $exception) {
    		echo "KO" ;
    	}
    }
}
