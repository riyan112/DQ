<?php

namespace app\models;

use Yii;
use \app\models\base\Pegawai as BasePegawai;

/**
 * This is the model class for table "pegawai".
 */
class Pegawai extends BasePegawai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['pegawai_id', 'nip', 'nama_pegawai', 'jk', 'tempat_lahir', 'tgl_lahir', 'alamat', 'status_kawin', 'sekolah_id', 'pendidikan_id', 'jenispegawai_id', 'tugas_tambahan'], 'required'],
            [['tgl_lahir', 'tmt'], 'safe'],
            [['sekolah_id', 'pangkatgolongan_id', 'pendidikan_id'], 'integer'],
            [['pegawai_id', 'statuspegawai_id'], 'string', 'max' => 20],
            [['nip', 'jurusan', 'nama_sekolah', 'tugas_tambahan'], 'string', 'max' => 30],
            [['nama_pegawai'], 'string', 'max' => 100],
            [['jk'], 'string', 'max' => 1],
            [['tempat_lahir', 'nama_pasangan'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 150],
            [['status_kawin', 'sertifikasi', 'status_inpasing', 'jenispegawai_id', 'kaderisasi_nu'], 'string', 'max' => 10]
        ]);
    }
	
}
