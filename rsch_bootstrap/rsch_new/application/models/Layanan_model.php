<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Layanan_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    /* Instalasi Gawat Darurat */
    public function igd()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function createIgd($data)
    {
        $this->db->insert('info_layanan', $data);
    }


    public function detailIgd($info_id)
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->where('info_id', $info_id);
        $this->db->order_by('info_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function deleteIgd($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->delete('info_layanan', $data);
    }

    public function listIgd()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function editIgd($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->update('info_layanan', $data);
    }


    /* Rawat jalan - Informasi Umum */
    public function info()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function createInfo($data)
    {
        $this->db->insert('info_layanan', $data);
    }


    public function detailInfo($info_id)
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->where('info_id', $info_id);
        $this->db->order_by('info_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function deleteInfo($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->delete('info_layanan', $data);
    }

    public function listInfo()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function editInfo($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->update('info_layanan', $data);
    }

    // rawat Inap Info
    public function deleteInfo_ri($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->delete('rawat_inap', $data);
    }

    public function createInfo_ri($data)
    {
        $this->db->insert('rawat_inap', $data);
    }

    public function info_ri()
    {
        $this->db->select('*');
        $this->db->from('rawat_inap');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function detailInfo_ri($info_id)
    {
        $this->db->select('*');
        $this->db->from('rawat_inap');
        $this->db->where('info_id', $info_id);
        $this->db->order_by('info_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function editInfo_ri($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->update('rawat_inap', $data);
    }

    /* Rawat jalan - Jadwal */
    public function jadwal()
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('poli', 'poli.poli_id = jadwal.poli_id', 'LEFT');
        $this->db->order_by('updated', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function createJadwal($data)
    {
        $this->db->insert('jadwal', $data);
    }

    public function detailJadwal($jadwal_id)
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->where('jadwal_id', $jadwal_id);
        $this->db->order_by('jadwal_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function deleteJadwal($data)
    {
        $this->db->where('jadwal_id', $data['jadwal_id']);
        $this->db->delete('jadwal', $data);
    }

    public function listJadwal()
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('poli', 'poli.poli_id = jadwal.poli_id', 'LEFT');
        $this->db->order_by('nama_poli', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function editJadwal($data)
    {
        $this->db->where('jadwal_id', $data['jadwal_id']);
        $this->db->update('jadwal', $data);
    }


    /* Rawat jalan - Jadwal/poli */
    public function poli()
    {
        $this->db->select('*');
        $this->db->from('poli');
        $this->db->order_by('poli_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function createPoli($data)
    {
        $this->db->insert('poli', $data);
    }

    public function detailPoli($poli_id)
    {
        $this->db->select('*');
        $this->db->from('poli');
        $this->db->where('poli_id', $poli_id);
        $this->db->order_by('poli_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function deletePoli($data)
    {
        $this->db->where('poli_id', $data['poli_id']);
        $this->db->delete('poli', $data);
    }

    public function listPoli()
    {
        $this->db->select('*');
        $this->db->from('poli');
        $this->db->order_by('poli_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function editPoli($data)
    {
        $this->db->where('poli_id', $data['poli_id']);
        $this->db->update('poli', $data);
    }


    /* Kamar Operasi */
    public function ok()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function createOk($data)
    {
        $this->db->insert('info_layanan', $data);
    }

    public function detailOk($info_id)
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->where('info_id', $info_id);
        $this->db->order_by('info_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function deleteOk($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->delete('info_layanan', $data);
    }

    public function listOk()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function editOk($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->update('info_layanan', $data);
    }


    /* Intensive Care Unit */
    public function icu()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function createIcu($data)
    {
        $this->db->insert('info_layanan', $data);
    }

    public function detailIcu($info_id)
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->where('info_id', $info_id);
        $this->db->order_by('info_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function deleteIcu($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->delete('info_layanan', $data);
    }

    public function listIcu()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function editIcu($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->update('info_layanan', $data);
    }


    /* Penunjang Medis */
    public function penunjang()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function createPenunjang($data)
    {
        $this->db->insert('info_layanan', $data);
    }

    public function detailPenunjang($info_id)
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->where('info_id', $info_id);
        $this->db->order_by('info_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function deletePenunjang($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->delete('info_layanan', $data);
    }

    public function listPenunjang()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function editPenunjang($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->update('info_layanan', $data);
    }


    /* Medical Checkup */
    public function medical()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function createMedical($data)
    {
        $this->db->insert('info_layanan', $data);
    }

    public function detailMedical($info_id)
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->where('info_id', $info_id);
        $this->db->order_by('info_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function deleteMedical($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->delete('info_layanan', $data);
    }

    public function listMedical()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function editMedical($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->update('info_layanan', $data);
    }


    /* Pemeriksaan Psikologis */
    public function psikologi()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function createPsikologi($data)
    {
        $this->db->insert('info_layanan', $data);
    }

    public function detailPsikologi($info_id)
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->where('info_id', $info_id);
        $this->db->order_by('info_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function deletePsikologi($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->delete('info_layanan', $data);
    }

    public function listPsikologi()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function editPsikologi($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->update('info_layanan', $data);
    }


    /* Mutu dan Kinerja */
    public function mutu()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function createMutu($data)
    {
        $this->db->insert('info_layanan', $data);
    }

    public function detailMutu($info_id)
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->where('info_id', $info_id);
        $this->db->order_by('info_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function deleteMutu($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->delete('info_layanan', $data);
    }

    public function listMutu()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function editMutu($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->update('info_layanan', $data);
    }


    /* Laser dan Estetika */
    public function laser()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function createLaser($data)
    {
        $this->db->insert('info_layanan', $data);
    }

    public function detailLaser($info_id)
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->where('info_id', $info_id);
        $this->db->order_by('info_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function deleteLaser($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->delete('info_layanan', $data);
    }

    public function listLaser()
    {
        $this->db->select('*');
        $this->db->from('info_layanan');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function editLaser($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->update('info_layanan', $data);
    }


    // gambar rawat inap
    // Listing rawat inap
    public function listGbrRanap()
    {
        $this->db->select('*');
        $this->db->from('gambar_ri');
        $this->db->join('rawat_inap', 'rawat_inap.info_id = gambar_ri.info_id', 'RIGHT');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function listGbr()
    {
        $this->db->select('*');
        $this->db->from('gambar_ri');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function listGbrRanap2()
    {
        $this->db->select('*');
        $this->db->from('gambar_ri');
        $this->db->join('rawat_inap', 'rawat_inap.info_id = gambar_ri.info_id', 'LEFT');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Create Gallery
    public function createGbrRanap($data)
    {
        $this->db->insert('gambar_ri', $data);
    }

    // Detail Gambar Rawat Inap
    public function detailGbrRanap($id)
    {
        $this->db->select('*');
        $this->db->from('gambar_ri');
        $this->db->where('id', $id);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function detailInfoRanap($info_id)
    {
        $this->db->select('*');
        $this->db->from('rawat_inap');
        $this->db->where('info_id', $info_id);
        $this->db->order_by('info_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    // Edit Gallery
    public function editGbrRanap($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('gambar_ri', $data);
    }

    // Delete Gallery
    public function deleteGbrRanap($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('gambar_ri', $data);
    }
}

/* End of file Controllername.php */
