<?php

namespace backend\modules\rol\models;

use Yii;

/**
 * This is the model class for table "rol".
 *
 * @property int $id
 * @property string $tipo_rol 1.Administrador\\\\\\\\n2.Lider\\\\\\\\n
 * @property string $nivel_rol 1\\\\\\\\n2\\\\\\\\n
 *
 * @property User[] $users
 */
class Rol extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rol';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_rol', 'nivel_rol'], 'required'],
            [['tipo_rol', 'nivel_rol'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo_rol' => 'Tipo Rol',
            'nivel_rol' => 'Nivel Rol',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['rol_id' => 'id']);
    }
}
