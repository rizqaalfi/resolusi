<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Promosi extends CI_Controller
{

    // Main Page Promosi
    public function index()
    {

        $site  = $this->mConfig->list_config();
        $promosi = $this->mPromosi->listPromosi();

        $data = array(
            'title'        => 'List Promosi - ' . $site['nameweb'],
            'promosi'        => $promosi,
            'isi'        => 'admin/promosi/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    /* 
	Function Create
*/

    // Create Karir
    public function create()
    {

        $site       = $this->mConfig->list_config();
        $endPromosi    = $this->mPromosi->endPromosi();

        $v = $this->form_validation;
        $v->set_rules('information', 'information', 'required');

        if ($v->run()) {

            $config['upload_path']         = './assets/upload/image/';
            $config['allowed_types']     = 'gif|jpg|png';
            $config['max_size']            = '1000'; // KB			
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {

                $data = array(
                    'title'            => 'Create Promosi - ' . $site['nameweb'],
                    'site'            => $site,
                    'error'            => $this->upload->display_errors(),
                    'isi'            => 'admin/promosi/create'
                );
                $this->load->view('admin/layout/wrapper', $data);
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                // Image Editor
                $config['image_library']    = 'gd2';
                $config['source_image']     = './assets/upload/image/' . $upload_data['uploads']['file_name'];
                $config['new_image']         = './assets/upload/image/thumbs/';
                $config['create_thumb']     = TRUE;
                $config['maintain_ratio']     = TRUE;
                $config['width']             = 150; // Pixel
                $config['height']             = 150; // Pixel
                $config['thumb_marker']     = '';
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $i = $this->input;
                $slug_karir = url_title($this->input->post('information'), 'dash', TRUE);
                $data = array(
                    'information'        => $i->post('information'),
                    'image'            => $upload_data['uploads']['file_name']
                );

                $this->mPromosi->createPromosi($data);
                $this->session->set_flashdata('sukses', 'Success');
                redirect(base_url('admin/promosi/'));
            }
        }
        // Default page
        $data = array(
            'title'        => 'Create Promosi - ' . $site['nameweb'],
            'site'        => $site,
            'isi'        => 'admin/promosi/create'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    /* 
	Function Edit 
*/

    // Edit Karirs
    public function edit($promosi_id)
    {

        $promosi        = $this->mPromosi->detailPromosi($promosi_id);
        $endPromosi    = $this->mPromosi->endPromosi();
        $site       = $this->mConfig->list_config();

        // Validation
        $v = $this->form_validation;
        $v->set_rules('information', 'information', 'required');

        if ($v->run()) {
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path']         = './assets/upload/image/';
                $config['allowed_types']     = 'gif|jpg|png|svg';
                $config['max_size']            = '1000'; // KB			
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {

                    $data = array(
                        'title'        => 'Edit Promosi - ' . $site['nameweb'],
                        'promosi'        => $promosi,
                        'error'        => $this->upload->display_errors(),
                        'isi'        => 'admin/promosi/edit'
                    );
                    $this->load->view('admin/layout/wrapper', $data);
                } else {

                    //hapus foto lama
                    if ($promosi['image'] != "") {
                        unlink('./assets/upload/image/' . $promosi['image']);
                        unlink('./assets/upload/image/thumbs/' . $promosi['image']);
                    }

                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './assets/upload/image/' . $upload_data['uploads']['file_name'];
                    $config['new_image']         = './assets/upload/image/thumbs/';
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

                    unlink('./assets/upload/image/' . $promosi['image']);
                    unlink('./assets/upload/image/thumbs/' . $promosi['image']);

                    $slugPromosi = $endPromosi['promosi_id'] . '-' . url_title($i->post('information'), 'dash', TRUE);
                    $data = array(
                        'promosi_id'        => $promosi['promosi_id'],
                        'information'        => $i->post('information'),
                        'image'            => $upload_data['uploads']['file_name']
                    );
                    $this->mPromosi->editPromosi($data);
                    $this->session->set_flashdata('sukses', 'Gambar telah diganti');
                    redirect(base_url('admin/promosi/index'));
                }
            } else {
                $i = $this->input;
                $slugPromosi = $endPromosi['promosi_id'] . '-' . url_title($i->post('information'), 'dash', TRUE);
                $data = array(
                    'promosi_id'        => $promosi['promosi_id'],
                    'information'        => $i->post('information'),
                );
                $this->mPromosi->editPromosi($data);
                $this->session->set_flashdata('sukses', 'Success');
                redirect(base_url('admin/promosi'));
            }
        }

        $data = array(
            'title'        => 'Edit Promosi - ' . $site['nameweb'],
            'promosi'        => $promosi,
            'isi'        => 'admin/promosi/edit'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    // Delete Promosi
    public function delete_promosi($promosi_id)
    {
        $data = array('promosi_id'    => $promosi_id);
        $this->mPromosi->deletePromosi($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/promosi'));
    }
}

/* End of file Promosi.php */
