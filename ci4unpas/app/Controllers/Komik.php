<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{

  //supaya bisa dipanggil di kelas ini dan kelas turunannya
  protected $komikModel;
  public function __construct()
  {
    $this->komikModel = new KomikModel();
  }

  public function index()
  {
    // $komik = $this->komikModel->findAll();
    $data = [
      'title' => 'Daftar Komik',
      'komik' => $this->komikModel->getKomik()

    ];

    // konek tanpa model
    // $db = \Config\Database::connect();
    // $komik = $db->query("SELECT * FROM komik");
    // foreach ($komik->getResultArray() as $k) {
    //   d($k);
    // }

    // konek dengan model
    // $komikModel = new \App\Models\KomikModel();



    return view('komik/index', $data);
  }

  public function detail($slug)
  {
    // $komik = $this->komikModel->getKomik($slug);

    $data = [
      'title' => 'detail',
      'komik' => $this->komikModel->getKomik($slug)
    ];

    //jika komik tidak ada di table
    if (empty($data['komik'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik ' . $slug . ' tidak di temukan');
    }



    return view('komik/detail', $data);
  }

  public function create()
  {
    // mengambil session dari validation

    $data = [
      'title' => 'Tambah Data Komik',
      'validation' => \Config\Services::validation()
    ];

    return view('komik/create', $data);
  }

  public function save()
  {
    if (!$this->validate([
      'judul' => 'required|is_unique[komik.judul]',

      // membuat validasi dengan keterangan costum
      'sampul' => [
        'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'File gambar harus lebih kecil dari 1MB',
          'is_image' => 'File harus berupa gambar',
          'mime_in' => 'File harus berupa gambar'
        ]
      ]

    ])) {
      // mengambil pesan kesalahan
      // $validation = \Config\Services::validation();
      // return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
      return redirect()->to('/komik/create')->withInput();
    }

    // ambil gambar
    $fileSampul = $this->request->getFile('sampul');

    // apakah tidak ada gambar yang di up?
    if ($fileSampul->getError() == 4) {
      $namaSampul = 'default.jpg';
    } else {
      // nama sampul
      $namaSampul = $fileSampul->getRandomName();
      // pindahkan file
      $fileSampul->move('img', $namaSampul);
    }

    // generate nama sampul random
    // $namaSampul = $fileSampul->getRandomName();

    // pindahkan file ke folder img
    // $fileSampul->move('img', $namaSampul);

    // ambil nama sampul- klo gk mau yg random
    // $namaSampul = $fileSampul->getName();

    $this->komikModel->save([

      'judul' => $this->request->getVar('judul'),
      'slug' => url_title($this->request->getVar('judul'), '-', true),
      'penulis' => $this->request->getVar('penulis'),
      'penerbit' => $this->request->getVar('penerbit'),
      'sampul' => $namaSampul
    ]);

    //dd($this->request->getPost());

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

    return redirect()->to('/komik');
  }

  public function delete($id)
  {
    // cari gambar berdasarkan id
    $komik = $this->komikModel->find($id);

    // cek jika gambarnya default.jpg
    if ($komik['sampul'] != 'default.jpg') {
      // hapus gambar
      unlink('img/' . $komik['sampul']);
    }

    // hapus data
    $this->komikModel->delete($id);
    session()->setFlashdata('pesan', 'Data berhasil dihapus');
    return redirect()->to('/komik');
  }

  public function edit($slug)
  {
    $data = [
      'title' => 'Edit Data Komik',
      'validation' => \Config\Services::validation(),
      'komik' => $this->komikModel->getKomik($slug)
    ];

    return view('komik/edit', $data);
  }

  public function update($id)
  {
    // slug diambil dari input hidden
    $komikLama = $this->komikModel->getKomik($this->request->getVar('slug'));
    if ($komikLama['judul'] == $this->request->getVar('judul')) {
      $rule_judul = 'required';
    } else {
      $rule_judul = 'required|is_unique[komik.judul]';
    }

    if (!$this->validate([
      'judul' => $rule_judul,
      'sampul' => [
        'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'File gambar harus lebih kecil dari 1MB',
          'is_image' => 'File harus berupa gambar',
          'mime_in' => 'File harus berupa gambar'
        ]
      ]
    ])) {
      // mengambil pesan kesalahan
      return redirect()->to('/komik/edit/' . $this->request->getVar('slug'))->withInput();
    }

    $fileSampul = $this->request->getFile('sampul');

    // cek gambar
    if ($fileSampul->getError() == 4) {
      // tidak ada gambar yg di upload
      $namaSampul = $this->request->getVar('sampulLama');
    } else {

      // pindahkan file
      $namaSampul = $fileSampul->getRandomName();
      $fileSampul->move('img', $namaSampul);

      // hapus file lama jika tidak default.jpg
      if ($this->request->getVar('sampulLama') != 'default.jpg') {
        unlink('img/' . $this->request->getVar('sampulLama'));
      }
    }

    $this->komikModel->save([
      'id' => $id,
      'judul' => $this->request->getVar('judul'),
      'slug' => url_title($this->request->getVar('judul'), '-', true),
      'penulis' => $this->request->getVar('penulis'),
      'penerbit' => $this->request->getVar('penerbit'),
      'sampul' => $namaSampul
    ]);

    session()->setFlashdata('pesan', 'Data berhasil diubah');
    return redirect()->to('/komik');
  }
}
