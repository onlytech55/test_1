<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario_permisos".
 *
 * @property int $id_usuario_permiso
 * @property int $id_usuario
 * @property int $id_permiso
 *
 * @property Permisos $permiso
 * @property Usuarios $usuario
 */
class UsuarioPermisos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario_permisos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_usuario', 'id_permiso'], 'required'],
            [['id_usuario', 'id_permiso'], 'integer'],
            [['id_permiso'], 'exist', 'skipOnError' => true, 'targetClass' => Permisos::class, 'targetAttribute' => ['id_permiso' => 'id_permiso']],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::class, 'targetAttribute' => ['id_usuario' => 'id_usuario']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_usuario_permiso' => 'Id Usuario Permiso',
            'id_usuario' => 'Id Usuario',
            'id_permiso' => 'Id Permiso',
        ];
    }

    /**
     * Gets query for [[Permiso]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermiso()
    {
        return $this->hasOne(Permisos::class, ['id_permiso' => 'id_permiso']);
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuarios::class, ['id_usuario' => 'id_usuario']);
    }
}
