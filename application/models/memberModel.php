<?php
defined('BASEPATH') or exit('No direct script access allowed');

class memberModel extends MY_Model
{
    function __construct()
    {
        parent::__construct();
        $this->tabel = "tb_member";
        $this->primaryKey = "member_id";
        $this->kolomBawaanCrud = [
            "member_nama",
            "member_email",
            "member_password",
            "member_nik",
            "member_gender",
            "member_notelp",
            "member_bio",
            "member_alamat",
            "member_koordinat"
        ];
    }
}
