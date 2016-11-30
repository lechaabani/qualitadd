<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Campagneentite".
 *
 * @property string $id_campagne
 * @property string $id_entite
 */
class Campagneentite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Campagneentite';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_campagne', 'id_entite'], 'required'],
            [['id_campagne', 'id_entite'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_campagne' => Yii::t('app', 'Id Campagne'),
            'id_entite' => Yii::t('app', 'Id Entite'),
        ];
    }
	
	public function addRelation($id_entite,$id_campagne)
    {
    	try {
	    	$sql = "insert into Campagneentite (id_entite,id_campagne) values ('$id_entite','$id_campagne')"; 
	    
	    	$connection = Yii::$app->db;  
	    	$query = $connection->createCommand($sql);
	    	$query->execute();
    	} catch (\Exception $exception) {
    		echo "KO" ;
    	}

    }
    
    public function deleteRelation($id_entite,$id_campagne)
    {
    	try {
	    	$sql = "delete from Campagneentite where id_entite = '$id_entite' and id_campagne = '$id_campagne'";
			
			// var_dump($sql);
	    	 
	    	$connection = Yii::$app->db;
	    	$query = $connection->createCommand($sql);
	    	$query->execute();
    	} catch (\Exception $exception) {
    		echo "KO" ;
    	}
    }
}
