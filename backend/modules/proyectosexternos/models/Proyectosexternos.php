<?php

namespace backend\modules\proyectosexternos\models;
use backend\modules\user\models\User;
use Yii;

/**
 * This is the model class for table "proyectosexternos".
 *
 * @property int $idproyectosexternos
 * @property string $nombre_proyectos_externos
 * @property string|null $evidencia
 * @property string|null $observaciones
 * @property int $user_id
 *
 * @property User $user
 */
class Proyectosexternos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proyectosexternos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_proyectos_externos', 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['nombre_proyectos_externos', 'evidencia', 'observaciones'], 'string', 'max' => 45],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idproyectosexternos' => 'Idproyectosexternos',
            'nombre_proyectos_externos' => 'Nombre Proyectos Externos',
            'evidencia' => 'Evidencia',
            'observaciones' => 'Observaciones',
            'user_id' => 'User ID',
        ];
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
