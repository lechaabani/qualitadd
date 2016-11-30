<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "utilisateur".
 *
 * @property string $Identifiant
 * @property string $Nom
 * @property string $Prenom
 * @property string $Email
 * @property string $Entite
 * @property string $Habilitations
 */
class Utilisateur extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'utilisateur';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Nom', 'Prenom', 'Email', 'Entite', 'Habilitations'], 'required'],
            [['Identifiant'], 'string', 'max' => 30],
            [['Nom', 'Prenom'], 'string', 'max' => 200],
            [['Email', 'Entite', 'Habilitations'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Identifiant' => 'Identifiant',
            'Nom' => 'Nom',
            'Prenom' => 'Prenom',
            'Email' => 'Email',
            'Entite' => 'Entite',
            'Habilitations' => 'Habilitations',
        ];
    }
}
