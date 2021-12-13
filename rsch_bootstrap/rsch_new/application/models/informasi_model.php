<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  // Listing Artikels
  public function listArtikels()
  {
    $this->db->select('*');
    $this->db->from('artikels');
    $this->db->join('admins', 'admins.admin_id = artikels.user_id', 'LEFT');
    $this->db->order_by('artikel_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Listing Artikels Publish
  public function listArtikelsPub()
  {
    $this->db->select('*');
    $this->db->from('artikels');
    $this->db->where(array('status' => 'publish'));
    $this->db->join('admins', 'admins.admin_id = artikels.user_id', 'LEFT');
    $this->db->order_by('artikel_id', 'DESC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Last Artikels Publish
  public function listLastArtikelsPub()
  {
    $this->db->select('*');
    $this->db->from('artikels');
    $this->db->where(array('status' => 'publish'));
    $this->db->join('admins', 'admins.admin_id = artikels.user_id', 'LEFT');
    $this->db->order_by('artikel_id', 'DESC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Create Artikel
  public function createArtikel($data)
  {
    $this->db->insert('artikels', $data);
  }

  // Detail Artikel
  public function detailArtikel($artikel_id)
  {
    $this->db->select('*');
    $this->db->from('artikels');
    $this->db->where('artikel_id', $artikel_id);
    $this->db->order_by('artikel_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Read Artikel
  public function readArtikel($slugArtikel)
  {
    $this->db->select('*');
    $this->db->from('artikels');
    $this->db->where(array('status' => 'publish'));
    $this->db->where('slug_artikel', $slugArtikel);
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit Artikel
  public function editArtikel($data)
  {
    $this->db->where('artikel_id', $data['artikel_id']);
    $this->db->update('artikels', $data);
  }

  // Delete Artikel
  public function deleteArtikel($data)
  {
    $this->db->where('artikel_id', $data['artikel_id']);
    $this->db->delete('artikels', $data);
  }

  // End Artikel
  public function endartikel()
  {
    $this->db->select('*');
    $this->db->from('artikels');
    $this->db->order_by('artikel_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Per Page Artikels
  public function perPageArtikels($limit, $start)
  {
    $this->db->select('*');
    $this->db->from('artikels');
    $this->db->where(array('status' => 'publish'));
    $this->db->order_by('artikel_id', 'DESC');
    $this->db->limit($limit, $start);
    $query = $this->db->get();
    return $query->result_array();
  }

  // Total Artikels
  public function totalartikels()
  {
    $this->db->select('*');
    $this->db->from('artikels');
    $this->db->where(array('status' => 'publish'));
    $this->db->order_by('artikel_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Pencarian Artikel
  public function cariArtikel($perPage, $uri, $ringkasan)
  {
    $this->db->select('*');
    $this->db->from('artikels');
    if (!empty($ringkasan)) {
      $this->db->like('title', $ringkasan);
    }
    $this->db->order_by('artikel_id', 'asc');
    $getData = $this->db->get('', $perPage, $uri);

    if ($getData->num_rows() > 0)
      return $getData->result_array();
    else
      return null;
  }

  // Artikel Terkait
  public function blogTerkait($category_id)
  {
    $this->db->select('*');
    $data = array();
    $this->db->where('artikels.category_id', $category_id);
    $this->db->order_by('artikels.artikel_id', 'ASC');
    $Q = $this->db->get('artikels');
    if ($Q->num_rows() > 0) {
      foreach ($Q->result_array() as $row) {
        $data[] = $row;
      }
    }
    $Q->free_result();
    return $data;
  }

  // Listing Kegiatans
  public function listKegiatans()
  {
    $this->db->select('*');
    $this->db->from('kegiatans');
    $this->db->join('admins', 'admins.admin_id = kegiatans.user_id', 'LEFT');
    $this->db->order_by('kegiatan_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Listing Kegiatans Publish
  public function listKegiatansPub()
  {
    $this->db->select('*');
    $this->db->from('kegiatans');
    $this->db->where(array('status' => 'publish'));
    $this->db->join('admins', 'admins.admin_id = kegiatans.user_id', 'LEFT');
    $this->db->order_by('kegiatan_id', 'DESC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Last Kegiatans Publish
  public function listLastKegiatansPub()
  {
    $this->db->select('*');
    $this->db->from('kegiatans');
    $this->db->where(array('status' => 'publish'));
    $this->db->join('admins', 'admins.admin_id = kegiatans.user_id', 'LEFT');
    $this->db->order_by('kegiatan_id', 'DESC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Create Kegiatan
  public function createKegiatan($data)
  {
    $this->db->insert('kegiatans', $data);
  }

  // Detail Kegiatan
  public function detailKegiatan($kegiatan_id)
  {
    $this->db->select('*');
    $this->db->from('kegiatans');
    $this->db->where('kegiatan_id', $kegiatan_id);
    $this->db->order_by('kegiatan_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Read Kegiatan
  public function readKegiatan($slugKegiatan)
  {
    $this->db->select('*');
    $this->db->from('kegiatans');
    $this->db->where(array('status' => 'publish'));
    $this->db->where('slug_kegiatan', $slugKegiatan);
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit Kegiatan
  public function editKegiatan($data)
  {
    $this->db->where('kegiatan_id', $data['kegiatan_id']);
    $this->db->update('kegiatans', $data);
  }

  // Delete Kegiatan
  public function deleteKegiatan($data)
  {
    $this->db->where('kegiatan_id', $data['kegiatan_id']);
    $this->db->delete('kegiatans', $data);
  }

  // End Kegiatan
  public function endkegiatan()
  {
    $this->db->select('*');
    $this->db->from('kegiatans');
    $this->db->order_by('kegiatan_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Per Page Kegiatans
  public function perPageKegiatans($limit, $start)
  {
    $this->db->select('*');
    $this->db->from('kegiatans');
    $this->db->where(array('status' => 'publish'));
    $this->db->order_by('kegiatan_id', 'ASC');
    $this->db->limit($limit, $start);
    $query = $this->db->get();
    return $query->result_array();
  }

  // Total Kegiatans
  public function totalkegiatans()
  {
    $this->db->select('*');
    $this->db->from('kegiatans');
    $this->db->where(array('status' => 'publish'));
    $this->db->order_by('kegiatan_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Pencarian Kegiatan
  public function cariKegiatan($perPage, $uri, $ringkasan)
  {
    $this->db->select('*');
    $this->db->from('kegiatans');
    if (!empty($ringkasan)) {
      $this->db->like('title', $ringkasan);
    }
    $this->db->order_by('kegiatan_id', 'asc');
    $getData = $this->db->get('', $perPage, $uri);

    if ($getData->num_rows() > 0)
      return $getData->result_array();
    else
      return null;
  }

  // Kegiatan Terkait
  public function blogTerkaitKeg($category_id)
  {
    $this->db->select('*');
    $data = array();
    $this->db->where('kegiatans.category_id', $category_id);
    $this->db->order_by('kegiatans.kegiatan_id', 'ASC');
    $Q = $this->db->get('kegiatans');
    if ($Q->num_rows() > 0) {
      foreach ($Q->result_array() as $row) {
        $data[] = $row;
      }
    }
    $Q->free_result();
    return $data;
  }

  // Listing Fasilitas
  public function listFasilitas()
  {
    $this->db->select('*');
    $this->db->from('fasilitas');
    $this->db->order_by('Fasilitas_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }


  // Create Fasilitas
  public function createFasilitas($data)
  {
    $this->db->insert('fasilitas', $data);
  }

  // Detail Fasilitas
  public function detailFasilitas($Fasilitas_id)
  {
    $this->db->select('*');
    $this->db->from('fasilitas');
    $this->db->where('fasilitas_id', $Fasilitas_id);
    $this->db->order_by('fasilitas_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit Fasilitas
  public function editFasilitas($data)
  {
    $this->db->where('fasilitas_id', $data['fasilitas_id']);
    $this->db->update('fasilitas', $data);
  }

  // Delete Fasilitas
  public function deleteFasilitas($data)
  {
    $this->db->where('fasilitas_id', $data['fasilitas_id']);
    $this->db->delete('fasilitas', $data);
  }

  // End Fasilitas
  public function endFasilitas()
  {
    $this->db->select('*');
    $this->db->from('fasilitas');
    $this->db->order_by('fasilitas_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Listing Rekanan
  public function listRekanan()
  {
    $this->db->select('*');
    $this->db->from('rekanan');
    $this->db->order_by('rekanan_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Listing Rekanan Asuransi
  public function listRekananAs()
  {
    $this->db->select('*');
    $this->db->from('rekanan');
    $this->db->where(array('position' => 'asuransi'));
    $this->db->order_by('Rekanan_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Listing Rekanan Non Asuransi
  public function listRekananNon()
  {
    $this->db->select('*');
    $this->db->from('Rekanan');
    $this->db->where(array('position' => 'nonasuransi'));
    $this->db->order_by('Rekanan_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Listing Rekanan RS
  public function listRekananRs()
  {
    $this->db->select('*');
    $this->db->from('Rekanan');
    $this->db->where(array('position' => 'rs'));
    $this->db->order_by('Rekanan_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Create Rekanan
  public function createRekanan($data)
  {
    $this->db->insert('rekanan', $data);
  }

  // Detail Rekanan
  public function detailRekanan($rekanan_id)
  {
    $this->db->select('*');
    $this->db->from('rekanan');
    $this->db->where('rekanan_id', $rekanan_id);
    $this->db->order_by('rekanan_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit Rekanan
  public function editRekanan($data)
  {
    $this->db->where('rekanan_id', $data['rekanan_id']);
    $this->db->update('rekanan', $data);
  }

  // Delete Rekanan
  public function deleteRekanan($data)
  {
    $this->db->where('rekanan_id', $data['rekanan_id']);
    $this->db->delete('rekanan', $data);
  }

  // End Rekanan
  public function endRekanan()
  {
    $this->db->select('*');
    $this->db->from('rekanan');
    $this->db->order_by('rekanan_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Listing info layanan
  public function listLayanan()
  {
    $this->db->select('*');
    $this->db->from('layanan');
    $this->db->order_by('layanan_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }


  // Create info layanan
  public function createLayanan($data)
  {
    $this->db->insert('layanan', $data);
  }

  // Detail info layanan
  public function detailLayanan($layanan_id)
  {
    $this->db->select('*');
    $this->db->from('layanan');
    $this->db->where('layanan_id', $layanan_id);
    $this->db->order_by('layanan_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit Info layanan
  public function editLayanan($data)
  {
    $this->db->where('layanan_id', $data['layanan_id']);
    $this->db->update('layanan', $data);
  }

  // Delete info layanan
  public function deleteLayanan($data)
  {
    $this->db->where('layanan_id', $data['layanan_id']);
    $this->db->delete('layanan', $data);
  }

  // End info layanan
  public function endLayanan()
  {
    $this->db->select('*');
    $this->db->from('layanan');
    $this->db->order_by('layanan_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }
}
