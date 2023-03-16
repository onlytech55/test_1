<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "permisos".
 *
 * @property int $id_permiso
 * @property int $id_rol
 * @property int $id_comuna
 * @property int $id_empresa
 * @property int $id_etapa
 *
 * @property Comuna $comuna
 * @property Empresa $empresa
 * @property Etapa $etapa
 * @property Rol $rol
 * @property UsuarioPermisos[] $usuarioPermisos
 */
class Permisos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permisos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_rol', 'id_comuna', 'id_empresa', 'id_etapa'], 'required'],
            [['id_rol', 'id_comuna', 'id_empresa', 'id_etapa'], 'integer'],
            [['id_comuna'], 'exist', 'skipOnError' => true, 'targetClass' => Comuna::class, 'targetAttribute' => ['id_comuna' => 'id_comuna']],
            [['id_empresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::class, 'targetAttribute' => ['id_empresa' => 'id_empresa']],
            [['id_etapa'], 'exist', 'skipOnError' => true, 'targetClass' => Etapa::class, 'targetAttribute' => ['id_etapa' => 'id_etapa']],
            [['id_rol'], 'exist', 'skipOnError' => true, 'targetClass' => Rol::class, 'targetAttribute' => ['id_rol' => 'id_rol']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            // 'id_permiso' => 'Id Permiso',
            'id_rol' => 'Rol',
            'id_comuna' => 'Comuna',
            'id_empresa' => 'Empresa',
            'id_etapa' => 'Etapa',
        ];
    }

    /**
     * Gets query for [[Comuna]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComuna()
    {
        return $this->hasOne(Comuna::class, ['id_comuna' => 'id_comuna']);
    }

    /**
     * Gets query for [[Empresa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresa()
    {
        return $this->hasOne(Empresa::class, ['id_empresa' => 'id_empresa']);
    }

    /**
     * Gets query for [[Etapa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEtapa()
    {
        return $this->hasOne(Etapa::class, ['id_etapa' => 'id_etapa']);
    }

    /**
     * Gets query for [[Rol]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRol()
    {
        return $this->hasOne(Rol::class, ['id_rol' => 'id_rol']);
    }

    /**
     * Gets query for [[UsuarioPermisos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioPermisos()
    {
        return $this->hasMany(UsuarioPermisos::class, ['id_permiso' => 'id_permiso']);
    }
}
