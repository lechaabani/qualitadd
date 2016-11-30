<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Controle;

/**
 * ControleSearch represents the model behind the search form about `app\models\Controle`.
 */
class ControledonneeSearch extends Controle
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Description', 'Type', 'Frequence', 'Statut', 'Responsable', 'Application', 'Etape', 'Actions_a_effectuer_si_anomalie', 'Donnees_controlees', 'Preuves', 'Commentaires_preuves', 'Documents', 'Commentaires_documents'], 'safe'],
            [['Exhaustivite', 'Exactitude', 'Pertinence'], 'integer'],
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
        $query = Controle::find();

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
            'Exhaustivite' => $this->Exhaustivite,
            'Exactitude' => $this->Exactitude,
            'Pertinence' => $this->Pertinence,
        ]);

        $query->andFilterWhere(['like', 'Identifiant', $this->Identifiant])
            ->andFilterWhere(['like', 'Libelle', $this->Libelle])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'Type', $this->Type])
            ->andFilterWhere(['like', 'Frequence', $this->Frequence])
            ->andFilterWhere(['like', 'Statut', $this->Statut])
            ->andFilterWhere(['like', 'Responsable', $this->Responsable])
            ->andFilterWhere(['like', 'Application', $this->Application])
            ->andFilterWhere(['like', 'Etape', $this->Etape])
            ->andFilterWhere(['like', 'Actions_a_effectuer_si_anomalie', $this->Actions_a_effectuer_si_anomalie])
            ->andFilterWhere(['like', 'Donnees_controlees', $this->Donnees_controlees])
            ->andFilterWhere(['like', 'Preuves', $this->Preuves])
            ->andFilterWhere(['like', 'Commentaires_preuves', $this->Commentaires_preuves])
            ->andFilterWhere(['like', 'Documents', $this->Documents])
            ->andFilterWhere(['like', 'Commentaires_documents', $this->Commentaires_documents]);

        return $dataProvider;
    }
}
