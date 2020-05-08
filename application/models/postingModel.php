<?php
defined('BASEPATH') or exit('No direct script access allowed');

class postingModel extends MY_Model
{
    function __construct()
    {
        parent::__construct();
        $this->tabel = "tb_posting";
        $this->primaryKey = "posting_id";
        $this->kolomBawaanCrud = [
            "posting_judul",
            "posting_lokasi",
            "posting_url",
            "posting_cover",
            "posting_isi",
            "kategori_id"
        ];
    }
    public function ambilDataPosting()
    {
        $posting = $this->db->query("SELECT tb_posting.posting_id,
                                        tb_posting.posting_judul,
                                        tb_posting.posting_lokasi,
                                        tb_posting.posting_url,
                                        tb_posting.posting_cover,
                                        tb_posting.posting_isi,
                                        tb_kategori.kategori_nama 
                                    FROM tb_posting
                                    JOIN tb_kategori ON tb_posting.kategori_id = tb_kategori.kategori_id")->fetchAll(PDO::FETCH_ASSOC);
        return $posting;
    }
}
