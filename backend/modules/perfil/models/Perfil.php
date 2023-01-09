<?php

namespace backend\modules\perfil\models;
use backend\modules\gradoacademico\models\Gradoacademico;
use backend\modules\user\models\User;
use Yii;

/**
 * This is the model class for table "perfil".
 *
 * @property int $idperfil
 * @property string $nombre_perfil
 * @property string $apellido_perfil
 * @property string $genero_perfil 1.profesora\\\\\\\\n2.profesor
 * @property string $ingenieria_perfil sistemas\\\\\\\\nambiental\\\\\\\\ngestion\\\\\\\\nindistrial\\\\\\\\ncivil\\\\\\\\nadmon
 * @property string $SNI nivel de sistema nacional de investigadores 
 * @property string $promep_perfil
 * @property string $tc_perfil Si\\\\\\\\r\\\\\\\\nNo
 * @property int $idgradoacademico
 * @property int $user_id
 *
 * @property Gradoacademico $idgradoacademico0
 * @property User $user
 */
class Perfil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perfil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_perfil', 'apellido_perfil', 'genero_perfil', 'ingenieria_perfil', 'SNI', 'promep_perfil', 'tc_perfil', 'idgradoacademico', 'user_id'], 'required'],
            [['idgradoacademico', 'user_id'], 'integer'],
            [['nombre_perfil', 'apellido_perfil', 'genero_perfil', 'ingenieria_perfil'], 'string', 'max' => 45],
            [['SNI', 'promep_perfil', 'tc_perfil'], 'string', 'max' => 2],
            [['idgradoacademico'], 'exist', 'skipOnError' => true, 'targetClass' => Gradoacademico::className(), 'targetAttribute' => ['idgradoacademico' => 'idgradoacademico']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idperfil' => 'Idperfil',
            'nombre_perfil' => 'Nombre Perfil',
            'apellido_perfil' => 'Apellido Perfil',
            'genero_perfil' => 'Genero Perfil',
            'ingenieria_perfil' => 'Ingenieria Perfil',
            'SNI' => 'Sni',
            'promep_perfil' => 'Promep Perfil',
            'tc_perfil' => 'Tc Perfil',
            'idgradoacademico' => 'Idgradoacademico',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[Idgradoacademico0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdgradoacademico0()
    {
        return $this->hasOne(Gradoacademico::className(), ['idgradoacademico' => 'idgradoacademico']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
