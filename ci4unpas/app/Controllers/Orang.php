<?php

namespace App\Controllers;

use App\Models\OrangModel;

class Orang extends BaseController
{

  //supaya bisa dipanggil di kelas ini dan kelas turunannya
  protected $orangModel;
  public function __construct()
  {
    $this->orangModel = new OrangModel();
  }

  public function index()
  {
    // agar angka datanya bertambah
    $currentPage = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') : 1;

    // cek keyword
    // d($this->request->getVar('keyword'));

    // mengambil data keyword
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $orang = $this->orangModel->search($keyword);
    } else {
      $orang = $this->orangModel;
    }

    $data = [
      'title' => 'Daftar Orang',
      // 'orang' => $this->orangModel->findAll()

      // paginate ('jumlah yang ditampilkan', 'nama tabel')
      'orang' => $orang->paginate(6, 'orang'),
      'pager' => $this->orangModel->pager,
      'currentPage' => $currentPage
    ];

    return view('orang/index', $data);
  }
}
