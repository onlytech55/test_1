<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rol".
 *
 * @property int $id_rol
 * @property string $nombre
 *
 * @property RolUsuarios[] $rolUsuarios
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
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rol' => 'Identificador',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * Gets query for [[RolUsuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRolUsuarios()
    {
        return $this->hasMany(RolUsuarios::class, ['id_rol' => 'id_rol']);
    }
}
