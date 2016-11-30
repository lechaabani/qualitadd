<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Campagne;

/**
 * CampagneSearch represents the model behind the search form about `app\models\Campagne`.
 */
class CampagneSearch extends Campagne
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Description', 'Statut', 'Date_de_debut', 'Date_de_derniere_pause', 'Date_de_fin_effective', 'Date_de_fin_previsionnelle', 'Entites_associees', 'Controles_associes'], 'safe'],
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
        $query = Campagne::find();

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
            'Date_de_debut' => $this->Date_de_debut,
            'Date_de_derniere_pause' => $this->Date_de_derniere_pause,
            'Date_de_fin_effective' => $this->Date_de_fin_effective,
            'Date_de_fin_previsionnelle' => $this->Date_de_fin_previsionnelle,
        ]);

        $query->andFilterWhere(['like', 'Identifiant', $this->Identifiant])
            ->andFilterWhere(['like', 'Libelle', $this->Libelle])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'Statut', $this->Statut])
            ->andFilterWhere(['like', 'Entites_associees', $this->Entites_associees])
            ->andFilterWhere(['like', 'Controles_associes', $this->Controles_associes]);

        return $dataProvider;
    }
}
