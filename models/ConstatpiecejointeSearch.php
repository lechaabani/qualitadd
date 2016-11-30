<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Constatpiecejointe;

/**
 * ConstatpiecejointeSearch represents the model behind the search form about `app\models\Constatpiecejointe`.
 */
class ConstatpiecejointeSearch extends Constatpiecejointe
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_constat', 'piece'], 'safe'],
            [['id_piece'], 'integer'],
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
        $query = Constatpiecejointe::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_piece' => $this->id_piece,
        ]);

        $query->andFilterWhere(['like', 'id_constat', $this->id_constat])
            ->andFilterWhere(['like', 'piece', $this->piece]);

        return $dataProvider;
    }
}
