<?php
defined('BASEPATH') or exit('No direct script access allowed');

class aduanModel extends MY_Model
{
    function __construct()
    {
        parent::__construct();
        $this->tabel = "tb_aduan";
        $this->primaryKey = "aduan_id";
        $this->kolomBawaanCrud = [
            "aduan_isi",
            "aduan_foto"
        ];
    }
}
