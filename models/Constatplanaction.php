<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Constatplanaction".
 *
 * @property string $id_constat
 * @property string $id_planaction
 */
class Constatplanaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Constatplanaction';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_constat', 'id_planaction'], 'required'],
            [['id_constat', 'id_planaction'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_constat' => Yii::t('app', 'Id Constat'),
            'id_planaction' => Yii::t('app', 'Id Entite'),
        ];
    }
	
	public function addRelation($id_planaction,$id_constat)
    {
    	try {
	    	$sql = "insert into Constatplanaction (id_planaction,id_constat) values ('$id_planaction','$id_constat')"; 
	    
	    	$connection = Yii::$app->db;  
	    	$query = $connection->createCommand($sql);
	    	$query->execute();
    	} catch (\Exception $exception) {
    		echo "KO" ;
    	}

    }
    
    public function deleteRelation($id_planaction,$id_constat)
    {
    	try {
	    	$sql = "delete from Constatplanaction where id_planaction = '$id_planaction' and id_constat = '$id_constat'";
			
			// var_dump($sql);
	    	 
	    	$connection = Yii::$app->db;
	    	$query = $connection->createCommand($sql);
	    	$query->execute();
    	} catch (\Exception $exception) {
    		echo "KO" ;
    	}
    }
}
