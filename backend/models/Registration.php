<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property string $nom
 * @property string $prenom
 * @property string $annee
 * @property string $specialite
 * @property string $email
 * @property integer $telephone
 * @property integer $known
 * @property integer $level
 * @property string $coming
 * @property integer $participated
 * @property string $interested
 * @property integer $id
 * @property integer $accepted
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nom', 'prenom', 'annee', 'specialite', 'email', 'telephone', 'known', 'coming', 'participated', 'interested'], 'required'],
            [['telephone', 'known', 'level', 'participated', 'accepted','usthb'], 'integer'],
            [['interested'], 'string'],
            [['nom', 'prenom', 'specialite'], 'string', 'max' => 20],
            [['annee', 'coming'], 'string', 'max' => 10],
            [['email'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nom' => 'Nom',
            'prenom' => 'Prenom',
            'annee' => 'Année d\'étude',
            'specialite' => 'Specialite',
            'email' => 'Email',
            'telephone' => 'Numero de telephone',
            'known' => 'connaît arduino ',
            'level' => 'Niveau Arduino',
            'coming' => 'Jours de venu',
            'participated' => 'A dejà participé ?',
            'interested' => 'Interêt',
            'id' => 'Numero de l\'inscrit',
            'accepted' => 'Accepter/refuser',
            'usthb' => 'Interne/Externe'
        ];
    }
}
