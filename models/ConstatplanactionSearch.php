<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\db\Query ;
use app\models\Constatplanaction;

/**
 * ConstatplanactionSearch represents the model behind the search form about `app\models\Constatplanaction`.
 */
class ConstatplanactionSearch extends Constatplanaction
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_planaction', 'id_planaction'], 'safe'],
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
		->select("planaction.*")
		->from('planaction')
		->join('LEFT OUTER JOIN','Constatplanaction','Constatplanaction.id_planaction = planaction.identifiant')
		->where('planaction.identifiant not in (select id_planaction from Constatplanaction where id_constat = :identifiant)')
		->params([':identifiant' => $params['id_constat']]);

		// var_dump($query);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

		$dataProvider->sort->attributes['Identifiant'] = [
        'asc' => ['planaction.identifiant' => SORT_ASC],        
		'desc' => ['planaction.identifiant' => SORT_DESC],
        ];
		
		$dataProvider->sort->attributes['Libelle'] = [
        'asc' => ['planaction.libelle' => SORT_ASC],        
		'desc' => ['planaction.libelle' => SORT_DESC],
        ];
		
		$dataProvider->sort->attributes['Description'] = [
        'asc' => ['planaction.description' => SORT_ASC],        
		'desc' => ['planaction.description' => SORT_DESC],
        ];
		
		

		$dataProvider->key = 'Identifiant' ;
        $this->load($params);
		
		if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', 'id_planaction', $this->id_planaction])
            ->andFilterWhere(['like', 'id_planaction', $this->id_planaction]);

        return $dataProvider;
    }
}
