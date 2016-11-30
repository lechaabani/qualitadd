<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Planaction;

/**
 * PlanactionSearch represents the model behind the search form about `app\models\Planaction`.
 */
class PlanactionSearch extends Planaction
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Description', 'Responsable', 'Date_identification', 'Campagne', 'Source', 'Type_amelioration', 'Type_de_solution', 'Donnees_associees', 'Constats_associes', 'Anomalies', 'Anomalies_constatees', 'Date_cible_a_respecter', 'Recurrence_prevue', 'Applications', 'Niveau_de_priorite', 'Statut'], 'safe'],
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
        $query = Planaction::find();

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
            'Date_identification' => $this->Date_identification,
            'Date_cible_a_respecter' => $this->Date_cible_a_respecter,
        ]);

        $query->andFilterWhere(['like', 'Identifiant', $this->Identifiant])
            ->andFilterWhere(['like', 'Libelle', $this->Libelle])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'Responsable', $this->Responsable])
            ->andFilterWhere(['like', 'Campagne', $this->Campagne])
            ->andFilterWhere(['like', 'Source', $this->Source])
            ->andFilterWhere(['like', 'Type_amelioration', $this->Type_amelioration])
            ->andFilterWhere(['like', 'Type_de_solution', $this->Type_de_solution])
            ->andFilterWhere(['like', 'Donnees_associees', $this->Donnees_associees])
            ->andFilterWhere(['like', 'Constats_associes', $this->Constats_associes])
            ->andFilterWhere(['like', 'Anomalies', $this->Anomalies])
            ->andFilterWhere(['like', 'Anomalies_constatees', $this->Anomalies_constatees])
            ->andFilterWhere(['like', 'Recurrence_prevue', $this->Recurrence_prevue])
            ->andFilterWhere(['like', 'Applications', $this->Applications])
            ->andFilterWhere(['like', 'Niveau_de_priorite', $this->Niveau_de_priorite])
            ->andFilterWhere(['like', 'Statut', $this->Statut]);

        return $dataProvider;
    }
}
