<?php
class ImageUpload extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
  }
  public function index()
  {
    $this->load->view('imageUploadForm', array('error' => ''));
  }

  public function uploadImage()
  {
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 1100;
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('image')) {
      $error = array('error' => $this->upload->display_errors());
      $this->load->view('imageUploadForm', $error);
    } else {
      $uploadedImage = $this->upload->data();
      $this->resizeImage($uploadedImage['file_name']);

      print_r('Image Uploaded Successfully');
      exit;
    }
  }

  // function to resize
  public function resizeImage($filename)
  {
    $source_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $filename;
    $target_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
    $config_manip = array(
      'image_library' => 'gd2',
      'source_image' => $source_path,
      'new_image' => $target_path,
      'maintain_ratio' => TRUE,
      'width' => 500,
    );

    $this->load->library('image_lib', $config_manip);
    if (!$this->image_lib->resize()) {
      echo $this->image_lib->display_errors();
    }

    $this->image_lib->clear;
  }
}
