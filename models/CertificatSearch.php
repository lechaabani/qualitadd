<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Certificat;

/**
 * CertificatSearch represents the model behind the search form about `app\models\Certificat`.
 */
class CertificatSearch extends Certificat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Campagne', 'Donnee', 'Controle', 'Critere_de_seuil', 'Type_de_critere', 'Seuil_Qualite_Moyenne', 'Seuil_Qualite_Faible', 'Resultat', 'Evaluation', 'Evaluation_forcee', 'Analyse', 'Remediation', 'Justificatifs'], 'safe'],
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
        $query = Certificat::find();

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
            ->andFilterWhere(['like', 'Libelle', $this->Libelle])
            ->andFilterWhere(['like', 'Campagne', $this->Campagne])
            ->andFilterWhere(['like', 'Donnee', $this->Donnee])
            ->andFilterWhere(['like', 'Controle', $this->Controle])
            ->andFilterWhere(['like', 'Critere_de_seuil', $this->Critere_de_seuil])
            ->andFilterWhere(['like', 'Type_de_critere', $this->Type_de_critere])
            ->andFilterWhere(['like', 'Seuil_Qualite_Moyenne', $this->Seuil_Qualite_Moyenne])
            ->andFilterWhere(['like', 'Seuil_Qualite_Faible', $this->Seuil_Qualite_Faible])
            ->andFilterWhere(['like', 'Resultat', $this->Resultat])
            ->andFilterWhere(['like', 'Evaluation', $this->Evaluation])
            ->andFilterWhere(['like', 'Evaluation_forcee', $this->Evaluation_forcee])
            ->andFilterWhere(['like', 'Analyse', $this->Analyse])
            ->andFilterWhere(['like', 'Remediation', $this->Remediation])
            ->andFilterWhere(['like', 'Justificatifs', $this->Justificatifs]);

        return $dataProvider;
    }
}
