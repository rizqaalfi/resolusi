<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{

    /* Instalasi Gawat Darurat */
    public function igd()
    {
        $site  = $this->mConfig->list_config();
        $igd = $this->mLayanan->igd();

        $data = array(
            'title'        => 'IGD - ' . $site['nameweb'],
            'igd'        => $igd,
            'isi'        => 'admin/layanan/igd/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    public function createIgd()
    {
        $igd    = $this->mLayanan->listIgd();
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');
        $valid->set_rules('position', 'Position', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Create Info IGD - ' . $site['nameweb'],
                'igd '    => $igd,
                'isi'    => 'admin/layanan/igd/create'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;

            $slug = url_title($this->input->post('information'), 'dash', TRUE);
            $data = array(
                'information'    => $i->post('information'),
                'position'    => $i->post('position'),
            );
            $this->mLayanan->createIgd($data);
            $this->session->set_flashdata('sukses', 'Info telah ditambah');
            redirect(base_url('admin/layanan/igd '));
        }
    }

    public function editIgd($info_id)
    {
        $igd  = $this->mLayanan->detailIgd($info_id);
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Edit information - ' . $site['nameweb'],
                'igd'    => $igd,
                'isi'    => 'admin/layanan/igd/edit'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;
            if ($i->post('information') == true) {

                $data = array(
                    'info_id'     => $igd['info_id'],
                    'information'    => $i->post('information'),

                );
            }

            $data = array(
                'info_id'     => $igd['info_id'],
                'information'    => $i->post('information'),

            );
            $this->mLayanan->editIgd($data);
            $this->session->set_flashdata('sukses', 'Success');

            redirect(base_url('admin/layanan/igd'));
        }
    }

    public function delete_igd($info_id)
    {
        $data = array('info_id'    => $info_id);
        $this->mLayanan->deleteIgd($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/layanan/igd'));
    }


    /* Rawat Jalan - information Umum */
    public function info()
    {
        $site  = $this->mConfig->list_config();
        $info = $this->mLayanan->info();

        $data = array(
            'title'        => 'Info Umum - ' . $site['nameweb'],
            'info'        => $info,
            'isi'        => 'admin/layanan/rajal/info/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    public function createInfo()
    {
        $info    = $this->mLayanan->listInfo();
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');
        $valid->set_rules('position', 'Position', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Create Info Umum - ' . $site['nameweb'],
                'info '    => $info,
                'isi'    => 'admin/layanan/rajal/info/create'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;

            $slug = url_title($this->input->post('information'), 'dash', TRUE);
            $data = array(
                'information'    => $i->post('information'),
                'position'    => $i->post('position'),
            );
            $this->mLayanan->createInfo($data);
            $this->session->set_flashdata('sukses', 'Info telah ditambah');
            redirect(base_url('admin/layanan/info '));
        }
    }

    public function editInfo($info_id)
    {
        $info  = $this->mLayanan->detailInfo($info_id);
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Edit information Umum - ' . $site['nameweb'],
                'info'    => $info,
                'isi'    => 'admin/layanan/rajal/info/edit'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;
            if ($i->post('information') == true) {

                $data = array(
                    'info_id'     => $info['info_id'],
                    'information'  => $i->post('information'),

                );
            }

            $data = array(
                'info_id'     => $info['info_id'],
                'information'  => $i->post('information'),

            );
            $this->mLayanan->editInfo($data);
            $this->session->set_flashdata('sukses', 'Success');

            redirect(base_url('admin/layanan/info'));
        }
    }

    public function delete_info($info_id)
    {
        $data = array('info_id'    => $info_id);
        $this->mLayanan->deleteInfo($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/layanan/info'));
    }

    /* Rawat Jalan - Jadwal */
    public function jadwal()
    {
        $site  = $this->mConfig->list_config();
        $jadwal = $this->mLayanan->listJadwal();

        $data = array(
            'title'        => 'Jadwal - ' . $site['nameweb'],
            'poli'  => $this->mLayanan->poli(),
            'jadwal'        => $jadwal,
            'isi'        => 'admin/layanan/rajal/jadwal/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    // Add a new item
    public function createJadwal()

    {
        $jadwal    = $this->mLayanan->listJadwal();
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('poli_id', 'Poli', 'required');
        $valid->set_rules('nama_dokter', 'Nama Dokter', 'required');
        $valid->set_rules('hari', 'Hari', 'required');
        $valid->set_rules('jam', 'Jam', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Create Jadwal - ' . $site['nameweb'],
                'poli'  => $this->mLayanan->poli(),
                'jadwal'    => $jadwal,
                'isi'    => 'admin/layanan/rajal/jadwal/create'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;

            $slug = url_title($this->input->post('nama_dokter'), 'dash', TRUE);
            $data = array(
                'poli_id'    => $i->post('poli_id'),
                'nama_dokter'    => $i->post('nama_dokter'),
                'hari'        => $i->post('hari'),
                'jam'        => $i->post('jam'),
                'updated' => date('Y-m-d'),
            );
            $this->mLayanan->createJadwal($data);
            $this->session->set_flashdata('sukses', 'Jadwal telah ditambah');
            redirect(base_url('admin/layanan/jadwal'));
        }
    }

    //Update one item
    public function editJadwal($jadwal_id)
    {
        $jadwal  = $this->mLayanan->detailJadwal($jadwal_id);
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('poli_id', 'Poli', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Edit Jadwal - ' . $jadwal['nama_dokter'],
                'jadwal'    => $jadwal,
                'poli'  => $this->mLayanan->poli(),
                'isi'    => 'admin/layanan/rajal/jadwal/edit'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;
            if ($i->post('poli_id') == true) {

                $data = array(
                    'jadwal_id'    => $jadwal['jadwal_id'],
                    'poli_id'    => $i->post('poli_id'),
                    'nama_dokter'        => $i->post('nama_dokter'),
                    'hari'        => $i->post('hari'),
                    'jam'        => $i->post('jam'),
                    'updated' => date('Y-m-d'),
                );
            }

            $data = array(
                'jadwal_id'    => $jadwal['jadwal_id'],
                'poli_id'    => $i->post('poli_id'),
                'nama_dokter'        => $i->post('nama_dokter'),
                'hari'        => $i->post('hari'),
                'jam'        => $i->post('jam'),
                'updated' => date('Y-m-d'),
            );
            $this->mLayanan->editJadwal($data);
            $this->session->set_flashdata('sukses', 'Success');

            redirect(base_url('admin/layanan/jadwal'));
        }
    }

    //Delete one item
    public function delete_jadwal($jadwal_id)
    {
        $data = array('jadwal_id' => $jadwal_id);
        $this->mLayanan->deleteJadwal($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/layanan/jadwal'));
    }


    /* Rawat Jalan - Jadwal/poli */
    public function poli()
    {
        $site  = $this->mConfig->list_config();
        $poli = $this->mLayanan->poli();

        $data = array(
            'title'        => 'Poli - ' . $site['nameweb'],
            'poli'        => $poli,
            'isi'        => 'admin/layanan/rajal/poli/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    public function createPoli()
    {
        $poli    = $this->mLayanan->listPoli();
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('nama_poli', 'Nama Poli', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Create Poli - ' . $site['nameweb'],
                'poli'    => $poli,
                'isi'    => 'admin/layanan/rajal/poli/create'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;

            $slug = url_title($this->input->post('nama_poli'), 'dash', TRUE);
            $data = array(
                'nama_poli'    => $i->post('nama_poli'),
            );
            $this->mLayanan->createPoli($data);
            $this->session->set_flashdata('sukses', 'Poli telah ditambah');
            redirect(base_url('admin/layanan/poli'));
        }
    }

    public function editPoli($poli_id)
    {
        $poli  = $this->mLayanan->detailPoli($poli_id);
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('nama_poli', 'Nama Poli', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Edit Poli - ' . $poli['nama_poli'],
                'poli'    => $poli,
                'isi'    => 'admin/layanan/rajal/poli/edit'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;
            if ($i->post('nama_poli') == true) {

                $data = array(
                    'poli_id'    => $poli['poli_id'],
                    'nama_poli'        => $i->post('nama_poli'),
                );
            }

            $data = array(
                'poli_id'    => $poli['poli_id'],
                'nama_poli'        => $i->post('nama_poli'),
            );
            $this->mLayanan->editPoli($data);
            $this->session->set_flashdata('sukses', 'Success');

            redirect(base_url('admin/layanan/poli'));
        }
    }

    public function delete_poli($poli_id)
    {
        $data = array('poli_id'    => $poli_id);
        $this->mLayanan->deletePoli($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/layanan/poli'));
    }


    // Rawat Inap

    public function createInfo_ri()
    {

        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('informasi', 'informasi', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Create Info Umum - ' . $site['nameweb'],

                'isi'    => 'admin/layanan/ranap/info/create'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;


            $data = array(
                'informasi'    => $i->post('informasi'),
                'nama'         => $i->post('nama')
            );
            $this->mLayanan->createInfo_ri($data);
            $this->session->set_flashdata('sukses', 'Info telah ditambah');
            redirect(base_url('admin/layanan/info_ri'));
        }
    }

    public function info_ri()
    {
        $site  = $this->mConfig->list_config();
        $info = $this->mLayanan->info_ri();

        $data = array(
            'title'        => 'Info Umum - ' . $site['nameweb'],
            'info'        => $info,
            'isi'        => 'admin/layanan/ranap/info/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    public function editInfo_ri($info_id)
    {
        $info  = $this->mLayanan->detailInfo_ri($info_id);
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('informasi', 'informasi', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Edit informasi Umum - ' . $site['nameweb'],
                'info'    => $info,
                'isi'    => 'admin/layanan/ranap/info/update'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;
            if ($i->post('informasi') == true) {

                $data = array(
                    'info_id'     => $info['info_id'],
                    'informasi'  => $i->post('informasi'),
                    'nama'         => $i->post('nama')
                );
            }

            $data = array(
                'info_id'     => $info['info_id'],
                'informasi'  => $i->post('informasi'),
                'nama'         => $i->post('nama')
            );
            $this->mLayanan->editInfo_ri($data);
            $this->session->set_flashdata('sukses', 'Success');

            redirect(base_url('admin/layanan/info_ri'));
        }
    }

    public function delete_info_ri($info_id)
    {
        $data = array('info_id'    => $info_id);
        $this->mLayanan->deleteInfo_ri($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/layanan/info_ri'));
    }


    /* Kamar Operasi */
    public function ok()
    {
        $site  = $this->mConfig->list_config();
        $operasi = $this->mLayanan->ok();

        $data = array(
            'title'        => 'Kamar Operasi - ' . $site['nameweb'],
            'operasi'        => $operasi,
            'isi'        => 'admin/layanan/ok/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    public function createOk()
    {
        $operasi    = $this->mLayanan->listOk();
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');
        $valid->set_rules('position', 'Position', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Create Info OK - ' . $site['nameweb'],
                'operasi'    => $operasi,
                'isi'    => 'admin/layanan/ok/create'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;

            $slug = url_title($this->input->post('information'), 'dash', TRUE);
            $data = array(
                'information'    => $i->post('information'),
                'Position'    => $i->post('position'),
            );
            $this->mLayanan->createOk($data);
            $this->session->set_flashdata('sukses', 'Info telah ditambah');
            redirect(base_url('admin/layanan/ok'));
        }
    }

    public function editOk($info_id)
    {
        $operasi  = $this->mLayanan->detailOk($info_id);
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Edit Info Ok - ' . $site['nameweb'],
                'operasi'    => $operasi,
                'isi'    => 'admin/layanan/ok/edit'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;
            if ($i->post('information') == true) {

                $data = array(
                    'info_id'    => $operasi['info_id'],
                    'information'        => $i->post('information'),

                );
            }

            $data = array(
                'info_id'    => $operasi['info_id'],
                'information'        => $i->post('information'),

            );
            $this->mLayanan->editOk($data);
            $this->session->set_flashdata('sukses', 'Success');

            redirect(base_url('admin/layanan/ok'));
        }
    }

    public function delete_ok($info_id)
    {
        $data = array('info_id'    => $info_id);
        $this->mLayanan->deleteOk($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/layanan/ok'));
    }


    /* Intensive Care Unit */
    public function icu()
    {
        $site  = $this->mConfig->list_config();
        $icu = $this->mLayanan->icu();

        $data = array(
            'title'        => 'ICU - ' . $site['nameweb'],
            'icu'        => $icu,
            'isi'        => 'admin/layanan/icu/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    public function createIcu()
    {
        $icu    = $this->mLayanan->listIcu();
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');
        $valid->set_rules('position', 'Position', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Create Info OK - ' . $site['nameweb'],
                'icu'    => $icu,
                'isi'    => 'admin/layanan/icu/create'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;

            $slug = url_title($this->input->post('information'), 'dash', TRUE);
            $data = array(
                'information'    => $i->post('information'),
                'position'    => $i->post('position'),
            );
            $this->mLayanan->createIcu($data);
            $this->session->set_flashdata('sukses', 'Info telah ditambah');
            redirect(base_url('admin/layanan/icu'));
        }
    }

    public function editIcu($info_id)
    {
        $icu  = $this->mLayanan->detailIcu($info_id);
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Edit Info ICU - ' . $site['nameweb'],
                'icu'    => $icu,
                'isi'    => 'admin/layanan/icu/edit'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;
            if ($i->post('information') == true) {

                $data = array(
                    'info_id'    => $icu['info_id'],
                    'information'        => $i->post('information'),

                );
            }

            $data = array(
                'info_id'    => $icu['info_id'],
                'information'        => $i->post('information'),

            );
            $this->mLayanan->editIcu($data);
            $this->session->set_flashdata('sukses', 'Success');

            redirect(base_url('admin/layanan/icu'));
        }
    }

    public function delete_icu($info_id)
    {
        $data = array('info_id'    => $info_id);
        $this->mLayanan->deleteIcu($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/layanan/icu'));
    }


    /* Penunjang Medis */
    public function penunjang()
    {
        $site  = $this->mConfig->list_config();
        $penunjang = $this->mLayanan->penunjang();

        $data = array(
            'title'        => 'Penunjang Medis - ' . $site['nameweb'],
            'penunjang'        => $penunjang,
            'isi'        => 'admin/layanan/penunjang/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    public function createPenunjang()
    {
        $penunjang   = $this->mLayanan->listPenunjang();
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');
        $valid->set_rules('position', 'Position', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Create Info Penunjang Medis - ' . $site['nameweb'],
                'penunjang'    => $penunjang,
                'isi'    => 'admin/layanan/penunjang/create'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;

            $slug = url_title($this->input->post('information'), 'dash', TRUE);
            $data = array(
                'information'    => $i->post('information'),
                'position'    => $i->post('position'),
            );
            $this->mLayanan->createPenunjang($data);
            $this->session->set_flashdata('sukses', 'Info telah ditambah');
            redirect(base_url('admin/layanan/penunjang'));
        }
    }

    public function editPenunjang($info_id)
    {
        $penunjang  = $this->mLayanan->detailPenunjang($info_id);
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Edit Info Penunjang Medis - ' . $site['nameweb'],
                'penunjang'    => $penunjang,
                'isi'    => 'admin/layanan/penunjang/edit'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;
            if ($i->post('information') == true) {

                $data = array(
                    'info_id'    => $penunjang['info_id'],
                    'information'        => $i->post('information'),
                );
            }

            $data = array(
                'info_id'    => $penunjang['info_id'],
                'information'        => $i->post('information'),
            );
            $this->mLayanan->editPenunjang($data);
            $this->session->set_flashdata('sukses', 'Success');

            redirect(base_url('admin/layanan/penunjang'));
        }
    }

    public function delete_penunjang($info_id)
    {
        $data = array('info_id'    => $info_id);
        $this->mLayanan->deletePenunjang($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/layanan/penunjang'));
    }


    /* Medical Checkup */
    public function medical()
    {
        $site  = $this->mConfig->list_config();
        $medical = $this->mLayanan->medical();

        $data = array(
            'title'        => 'Medical Checkup - ' . $site['nameweb'],
            'medical'        => $medical,
            'isi'        => 'admin/layanan/medical/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    public function createMedical()
    {
        $medical   = $this->mLayanan->listMedical();
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');
        $valid->set_rules('position', 'Position', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Create Info Medical Checkup - ' . $site['nameweb'],
                'medical'    => $medical,
                'isi'    => 'admin/layanan/medical/create'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;

            $slug = url_title($this->input->post('information'), 'dash', TRUE);
            $data = array(
                'information'    => $i->post('information'),
                'position'    => $i->post('position'),
            );
            $this->mLayanan->createMedical($data);
            $this->session->set_flashdata('sukses', 'Info telah ditambah');
            redirect(base_url('admin/layanan/medical'));
        }
    }

    public function editMedical($info_id)
    {
        $medical  = $this->mLayanan->detailMedical($info_id);
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Edit Info Medical Checkup - ' . $site['nameweb'],
                'medical'    => $medical,
                'isi'    => 'admin/layanan/medical/edit'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;
            if ($i->post('information') == true) {

                $data = array(
                    'info_id'    => $medical['info_id'],
                    'information'        => $i->post('information'),

                );
            }

            $data = array(
                'info_id'    => $medical['info_id'],
                'information'        => $i->post('information'),

            );
            $this->mLayanan->editMedical($data);
            $this->session->set_flashdata('sukses', 'Success');

            redirect(base_url('admin/layanan/medical'));
        }
    }

    public function delete_medical($info_id)
    {
        $data = array('info_id'    => $info_id);
        $this->mLayanan->deleteMedical($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/layanan/medical'));
    }


    /* Pemeriksaan psikologis */
    public function psikologi()
    {
        $site  = $this->mConfig->list_config();
        $psikologi = $this->mLayanan->psikologi();

        $data = array(
            'title'        => 'Pemeriksaan Psikologi - ' . $site['nameweb'],
            'psikologi'        => $psikologi,
            'isi'        => 'admin/layanan/psikologi/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    public function createPsikologi()
    {
        $psikologi   = $this->mLayanan->listPsikologi();
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');
        $valid->set_rules('position', 'Position', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Create Info Pemeriksaan Psikologis - ' . $site['nameweb'],
                'psikologi'    => $psikologi,
                'isi'    => 'admin/layanan/psikologi/create'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;

            $slug = url_title($this->input->post('information'), 'dash', TRUE);
            $data = array(
                'information'    => $i->post('information'),
                'position'    => $i->post('position'),
            );
            $this->mLayanan->createPsikologi($data);
            $this->session->set_flashdata('sukses', 'Info telah ditambah');
            redirect(base_url('admin/layanan/psikologi'));
        }
    }

    public function editPsikologi($info_id)
    {
        $psikologi  = $this->mLayanan->detailPsikologi($info_id);
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Edit Info Pemeriksaan Psikologis - ' . $site['nameweb'],
                'psikologi'    => $psikologi,
                'isi'    => 'admin/layanan/psikologi/edit'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;
            if ($i->post('information') == true) {

                $data = array(
                    'info_id'     => $psikologi['info_id'],
                    'information'   => $i->post('information'),
                    'position'    => $i->post('position'),
                );
            }

            $data = array(
                'info_id'     => $psikologi['info_id'],
                'information'   => $i->post('information'),

            );
            $this->mLayanan->editPsikologi($data);
            $this->session->set_flashdata('sukses', 'Success');

            redirect(base_url('admin/layanan/psikologi'));
        }
    }

    public function delete_psikologi($info_id)
    {
        $data = array('info_id'    => $info_id);
        $this->mLayanan->deletePsikologi($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/layanan/psikologi'));
    }


    /* Mutu dan Kinerja */
    public function mutu()
    {
        $site  = $this->mConfig->list_config();
        $mutu = $this->mLayanan->mutu();

        $data = array(
            'title'        => 'Mutu dan Kinerja - ' . $site['nameweb'],
            'mutu'        => $mutu,
            'isi'        => 'admin/layanan/mutu/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    public function createMutu()
    {
        $mutu   = $this->mLayanan->listMutu();
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');
        $valid->set_rules('position', 'Position', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Create Info Mutu dan Kinerja - ' . $site['nameweb'],
                'mutu'    => $mutu,
                'isi'    => 'admin/layanan/mutu/create'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;

            $slug = url_title($this->input->post('information'), 'dash', TRUE);
            $data = array(
                'information'    => $i->post('information'),
                'position'    => $i->post('position'),
            );
            $this->mLayanan->createMutu($data);
            $this->session->set_flashdata('sukses', 'Info telah ditambah');
            redirect(base_url('admin/layanan/mutu'));
        }
    }

    public function editMutu($info_id)
    {
        $mutu  = $this->mLayanan->detailMutu($info_id);
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Edit Info Mutu dan Kinerja - ' . $site['nameweb'],
                'mutu'    => $mutu,
                'isi'    => 'admin/layanan/mutu/edit'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;
            if ($i->post('information') == true) {

                $data = array(
                    'info_id'    => $mutu['info_id'],
                    'information'       => $i->post('information'),

                );
            }

            $data = array(
                'info_id'        => $mutu['info_id'],
                'information'      => $i->post('information'),

            );
            $this->mLayanan->editMutu($data);
            $this->session->set_flashdata('sukses', 'Success');

            redirect(base_url('admin/layanan/mutu'));
        }
    }

    public function delete_mutu($info_id)
    {
        $data = array('info_id'    => $info_id);
        $this->mLayanan->deleteMutu($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/layanan/mutu'));
    }


    /* Laser dan Estetika */
    public function laser()
    {
        $site  = $this->mConfig->list_config();
        $laser = $this->mLayanan->laser();

        $data = array(
            'title'        => 'Laser dan Estetika - ' . $site['nameweb'],
            'laser'        => $laser,
            'isi'        => 'admin/layanan/laser/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    public function createLaser()
    {
        $laser   = $this->mLayanan->listLaser();
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');
        $valid->set_rules('position', 'Position', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Create Info Laser & Estetika - ' . $site['nameweb'],
                'laser'    => $laser,
                'isi'    => 'admin/layanan/laser/create'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;

            $slug = url_title($this->input->post('information'), 'dash', TRUE);
            $data = array(
                'information'    => $i->post('information'),
                'position'    => $i->post('position'),
            );
            $this->mLayanan->createLaser($data);
            $this->session->set_flashdata('sukses', 'Info telah ditambah');
            redirect(base_url('admin/layanan/laser'));
        }
    }

    public function editLaser($info_id)
    {
        $laser  = $this->mLayanan->detailLaser($info_id);
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('information', 'information', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Edit Info Laser & Estetika - ' . $site['nameweb'],
                'laser'    => $laser,
                'isi'    => 'admin/layanan/laser/edit'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;
            if ($i->post('information') == true) {

                $data = array(
                    'info_id'    => $laser['info_id'],
                    'information'        => $i->post('information'),

                );
            }

            $data = array(
                'info_id'    => $laser['info_id'],
                'information'        => $i->post('information'),

            );
            $this->mLayanan->editLaser($data);
            $this->session->set_flashdata('sukses', 'Success');

            redirect(base_url('admin/layanan/laser'));
        }
    }

    public function delete_laser($info_id)
    {
        $data = array('info_id'    => $info_id);
        $this->mLayanan->deleteLaser($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/layanan/laser'));
    }


    // Upload gambar rawat inap 

    public function ruang_ri()
    {

        $site      = $this->mConfig->list_config();
        $ranap = $this->mLayanan->listGbrRanap2();

        $data = array(
            'title'        => 'Foto Ruang- ' . $site['nameweb'],
            'ranap'    => $ranap,
            'site'        => $site,
            'isi'        => 'admin/layanan/ranap/ruang/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }


    public function createRuang_ri()
    {

        $site = $this->mConfig->list_config();
        $ranap = $this->mLayanan->info_ri();


        $v = $this->form_validation;
        $v->set_rules('info_id', 'info id', 'required');

        if ($v->run()) {

            $config['upload_path']         = './assets/upload/image/ruang/';
            $config['allowed_types']     = 'jpeg|jpg|png';
            $config['max_size']            = '1000'; // KB			
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {

                $data = array(
                    'title'            => 'Create Gallery - ' . $site['nameweb'],
                    'site'            => $site,
                    'ranap' => $ranap,
                    'error'            => $this->upload->display_errors(),
                    'isi'            => 'admin/layanan/ranap/ruang/create'
                );
                $this->load->view('admin/layout/wrapper', $data);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './assets/upload/image/ruang/' . $upload_data['uploads']['file_name'];
                $config['new_image']         = './assets/upload/image/thumbs/ruang/';
                $config['create_thumb']     = TRUE;
                $config['maintain_ratio']     = TRUE;
                $config['width']             = 150; // Pixel
                $config['height']             = 150; // Pixel
                $config['thumb_marker']     = '';
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $i = $this->input;

                $data = array(

                    'tanggal'            => date('Y-m-d'),
                    'nama_gambar'            => $upload_data['uploads']['file_name'],
                    'info_id'          => $i->post('info_id'),

                );
                $this->mLayanan->createGbrRanap($data);
                $this->session->set_flashdata('sukses', 'Success');
                redirect(base_url('admin/layanan/ruang_ri'));
            }
        }
        // Default page
        $data = array(
            'title'        => 'Create Gallery - ' . $site['nameweb'],
            'site'        => $site,
            'ranap' => $ranap,

            'isi'        => 'admin/layanan/ranap/ruang/create'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }



    public function updateRuang_ri($id)
    {

        $ranap    = $this->mLayanan->info_ri();
        $site = $this->mConfig->list_config();
        $detail = $this->mLayanan->detailGbrRanap($id);


        // Validation
        $v = $this->form_validation;
        $v->set_rules('info_id', 'info id', 'required');

        if ($v->run()) {
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path']         = './assets/upload/image/ruang/';
                $config['allowed_types']     = 'gif|jpg|png|svg|jpeg';
                $config['max_size']            = '1000'; // KB			
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {

                    $data = array(
                        'title'        => 'Edit Gallery - ' . $site['nameweb'],
                        'ranap'    => $ranap,
                        'detail' => $detail,
                        'error'        => $this->upload->display_errors(),
                        'isi'        => 'admin/layanan/ranap/ruang/update'
                    );
                    $this->load->view('admin/layout/wrapper', $data);
                } else {

                    //hapus foto lama
                    if ($detail['nama_gambar'] != "") {
                        unlink('./assets/upload/image/ruang/' . $detail['nama_gambar']);
                        unlink('./assets/upload/image/thumbs/ruang/' . $detail['nama_gambar']);
                    }

                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './assets/upload/image/ruang/' . $upload_data['uploads']['file_name'];
                    $config['new_image']         = './assets/upload/image/thumbs/ruang/';
                    $config['create_thumb']     = TRUE;
                    $config['quality']             = "100%";
                    $config['maintain_ratio']     = FALSE;
                    $config['width']             = 360; // Pixel
                    $config['height']             = 200; // Pixel
                    $config['x_axis']             = 0;
                    $config['y_axis']             = 0;
                    $config['thumb_marker']     = '';
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $i = $this->input;


                    $data = array(
                        'id'    => $detail['id'],
                        'tanggal'            => date('Y-m-d'),
                        'nama_gambar'        => $upload_data['uploads']['file_name'],
                        'info_id'          => $i->post('info_id'),

                    );
                    $this->mLayanan->editGbrRanap($data);
                    $this->session->set_flashdata('sukses', 'Success');
                    redirect(base_url('admin/Layanan/ruang_ri'));
                }
            } else {
                $i = $this->input;

                $data = array(

                    'id'    => $detail['id'],
                    'tanggal'            => date('Y-m-d'),
                    'info_id'          => $i->post('info_id'),


                );
                $this->mLayanan->editGbrRanap($data);
                $this->session->set_flashdata('sukses', 'Success');
                redirect(base_url('admin/Layanan/ruang_ri'));
            }
        }

        $data = array(
            'title'        => 'Edit Gallery - ' . $site['nameweb'],
            'ranap'    => $ranap,
            'detail' => $detail,
            'isi'        => 'admin/layanan/ranap/ruang/update'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    // Delete Gallery
    public function deleteRuang_ri($id)
    {
        $detail = $this->mLayanan->detailGbrRanap($id);
        //hapus foto lama
        if ($detail['nama_gambar'] != "") {
            unlink('./assets/upload/image/ruang/' . $detail['nama_gambar']);
            unlink('./assets/upload/image/thumbs/ruang/' . $detail['nama_gambar']);
        }

        $data = array('id'    => $id);
        $this->mLayanan->deleteGbrRanap($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/layanan/ruang_ri'));
    }
}

/* End of file Controllername.php */
