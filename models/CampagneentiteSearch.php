<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\db\Query ;
use app\models\Campagneentite;

/**
 * CampagneentiteSearch represents the model behind the search form about `app\models\Campagneentite`.
 */
class CampagneentiteSearch extends Campagneentite
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_entite', 'id_entite'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
 		// var_dump($params);
		
		
		$query = (new Query())
		->select("entite.*")
		->from('entite')
		->join('LEFT OUTER JOIN','Campagneentite','Campagneentite.id_entite = entite.identifiant')
		->where('entite.identifiant not in (select id_entite from Campagneentite where id_campagne = :identifiant)')
		->params([':identifiant' => $params['id_campagne']]);

		// var_dump($query);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

		$dataProvider->sort->attributes['Identifiant'] = [
        'asc' => ['entite.identifiant' => SORT_ASC],        
		'desc' => ['entite.identifiant' => SORT_DESC],
        ];
		
		$dataProvider->sort->attributes['Libelle'] = [
        'asc' => ['entite.libelle' => SORT_ASC],        
		'desc' => ['entite.libelle' => SORT_DESC],
        ];
		
		$dataProvider->sort->attributes['Description'] = [
        'asc' => ['entite.description' => SORT_ASC],        
		'desc' => ['entite.description' => SORT_DESC],
        ];
		
		
		$dataProvider->sort->attributes['Type'] = [
        'asc' => ['entite.type' => SORT_ASC],        
		'desc' => ['entite.type' => SORT_DESC],
        ];
		

		$dataProvider->key = 'Identifiant' ;

        $this->load($params);
		
		if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', 'id_entite', $this->id_entite])
            ->andFilterWhere(['like', 'id_entite', $this->id_entite]);

        return $dataProvider;
    }
}
