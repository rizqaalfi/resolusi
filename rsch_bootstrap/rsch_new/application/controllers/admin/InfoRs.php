<?php


defined('BASEPATH') or exit('No direct script access allowed');

class InfoRs extends CI_Controller
{

    public function index()
    {
        $site  = $this->mConfig->list_config();
        $infoRs = $this->mInfoRs->index();

        $data = array(
            'title'        => 'Info - ' . $site['nameweb'],
            'infoRs'        => $infoRs,
            'isi'        => 'admin/infoRs/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    public function edit($info_id)
    {
        $infoRs  = $this->mInfoRs->detail($info_id);
        $site    = $this->mConfig->list_config();

        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules('infoRs', 'Info Rs', 'required');

        if ($valid->run() === FALSE) {

            $data = array(
                'title'    => 'Edit Info - ' . $site['nameweb'],
                'infoRs'    => $infoRs,
                'isi'    => 'admin/infoRs/edit'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {

            $i = $this->input;
            if ($i->post('infoRs') == true) {

                $data = array(
                    'info_id'     => $infoRs['info_id'],
                    'infoRs'    => $i->post('infoRs'),
                    'jamRs'    => $i->post('jamRs'),
                    'call'    => $i->post('call'),
                );
            }

            $data = array(
                'info_id'     => $infoRs['info_id'],
                'infoRs'    => $i->post('infoRs'),
                'jamRs'    => $i->post('jamRs'),
                'call'    => $i->post('call'),
            );
            $this->mInfoRs->edit($data);
            $this->session->set_flashdata('sukses', 'Success');

            redirect(base_url('admin/infoRs/index'));
        }
    }
}

/* End of file InfoRs.php */
