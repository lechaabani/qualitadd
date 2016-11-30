<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Constat;

/**
 * ConstatSearch represents the model behind the search form about `app\models\Constat`.
 */
class ConstatSearch extends Constat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Etape', 'Priorite', 'Applications_concernees', 'Responsable', 'Cree_le', 'Cree_par', 'Description', 'Valide_le', 'Valide_par', 'Commentaires_du_valideur', 'Plans_actions_associes', 'Pieces_jointes'], 'safe'],
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
        $query = Constat::find();

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
            'Cree_le' => $this->Cree_le,
            'Valide_le' => $this->Valide_le,
        ]);

        $query->andFilterWhere(['like', 'Identifiant', $this->Identifiant])
            ->andFilterWhere(['like', 'Libelle', $this->Libelle])
            ->andFilterWhere(['like', 'Etape', $this->Etape])
            ->andFilterWhere(['like', 'Priorite', $this->Priorite])
            ->andFilterWhere(['like', 'Applications_concernees', $this->Applications_concernees])
            ->andFilterWhere(['like', 'Responsable', $this->Responsable])
            ->andFilterWhere(['like', 'Cree_par', $this->Cree_par])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'Valide_par', $this->Valide_par])
            ->andFilterWhere(['like', 'Commentaires_du_valideur', $this->Commentaires_du_valideur])
            ->andFilterWhere(['like', 'Plans_actions_associes', $this->Plans_actions_associes])
            ->andFilterWhere(['like', 'Pieces_jointes', $this->Pieces_jointes]);

        return $dataProvider;
    }
}
