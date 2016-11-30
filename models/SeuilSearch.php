<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Seuil;

/**
 * SeuilSearch represents the model behind the search form about `app\models\Seuil`.
 */
class SeuilSearch extends Seuil
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Controle', 'Critere', 'Donnee', 'Seuil_Qualite_Faible', 'Seuil_Qualite_Moyenne', 'Type_de_critere'], 'safe'],
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
        $query = Seuil::find();

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
        $query->andFilterWhere(['like', 'Identifiant', $this->Identifiant])
            ->andFilterWhere(['like', 'Controle', $this->Controle])
            ->andFilterWhere(['like', 'Critere', $this->Critere])
            ->andFilterWhere(['like', 'Donnee', $this->Donnee])
            ->andFilterWhere(['like', 'Seuil_Qualite_Faible', $this->Seuil_Qualite_Faible])
            ->andFilterWhere(['like', 'Seuil_Qualite_Moyenne', $this->Seuil_Qualite_Moyenne])
            ->andFilterWhere(['like', 'Type_de_critere', $this->Type_de_critere]);

        return $dataProvider;
    }
}
