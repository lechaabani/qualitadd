<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "constat".
 *
 * @property string $Identifiant
 * @property string $Libelle
 * @property string $Etape
 * @property string $Priorite
 * @property string $Applications_concernees
 * @property string $Responsable
 * @property string $Cree_le
 * @property string $Cree_par
 * @property string $Description
 * @property string $Valide_le
 * @property string $Valide_par
 * @property string $Commentaires_du_valideur
 * @property string $Plans_actions_associes
 * @property string $Pieces_jointes
 */
class Constat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'constat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Etape', 'Priorite', 'Applications_concernees', 'Responsable', 'Cree_le', 'Cree_par', 'Description', 'Valide_le', 'Valide_par', 'Commentaires_du_valideur', 'Plans_actions_associes', 'Pieces_jointes'], 'required'],
            [['Cree_le', 'Valide_le'], 'safe'],
            [['Identifiant'], 'string', 'max' => 30],
            [['Libelle', 'Priorite', 'Applications_concernees', 'Responsable', 'Valide_par'], 'string', 'max' => 250],
            [['Etape', 'Cree_par', 'Description', 'Plans_actions_associes', 'Pieces_jointes'], 'string', 'max' => 200],
            [['Commentaires_du_valideur'], 'string', 'max' => 400],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Identifiant' => 'Identifiant',
            'Libelle' => 'Libelle',
            'Etape' => 'Etape',
            'Priorite' => 'Priorite',
            'Applications_concernees' => 'Applications Concernees',
            'Responsable' => 'Responsable',
            'Cree_le' => 'Cree Le',
            'Cree_par' => 'Cree Par',
            'Description' => 'Description',
            'Valide_le' => 'Valide Le',
            'Valide_par' => 'Valide Par',
            'Commentaires_du_valideur' => 'Commentaires Du Valideur',
            'Plans_actions_associes' => 'Plans Actions Associes',
            'Pieces_jointes' => 'Pieces Jointes',
        ];
    }
}
