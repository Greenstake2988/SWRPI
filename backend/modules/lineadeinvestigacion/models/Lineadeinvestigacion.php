<?php

namespace backend\modules\lineadeinvestigacion\models;

use Yii;

/**
 * This is the model class for table "lineadeinvestigacion".
 *
 * @property int $id
 * @property string $clave_linea
 * @property string $nombre_linea
 *
 * @property ProyectosinternosHasLineadeinvestigacion[] $proyectosinternosHasLineadeinvestigacions
 */
class Lineadeinvestigacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lineadeinvestigacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clave_linea', 'nombre_linea'], 'required'],
            [['clave_linea'], 'string', 'max' => 22],
            [['nombre_linea'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'clave_linea' => 'Clave Linea',
            'nombre_linea' => 'Nombre Linea',
        ];
    }

    /**
     * Gets query for [[ProyectosinternosHasLineadeinvestigacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProyectosinternosHasLineadeinvestigacions()
    {
        return $this->hasMany(ProyectosinternosHasLineadeinvestigacion::className(), ['lineadeinvestigacion_idlineadeinvestigacion' => 'id']);
    }
}
