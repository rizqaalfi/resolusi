<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Keluhans Model
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Keluhans_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    // Listing Keluhans
    public function listKeluhans()
    {
        $this->db->select('*');
        $this->db->from('keluhans');
        $this->db->order_by('message_id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Send Message
    public function sendMessage($data)
    {
        $this->db->insert('keluhans', $data);
    }

    // Detail Message
    public function detailMessage($message_id)
    {
        $this->db->select('*');
        $this->db->from('keluhans');
        $this->db->where('message_id', $message_id);
        $this->db->order_by('message_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    // Edit Info layanan
    public function editMessage($data)
    {
        $this->db->where('message_id', $data['message_id']);
        $this->db->update('keluhans', $data);
    }

    // Delete Message
    public function deleteMessage($data)
    {
        $this->db->where('message_id', $data['message_id']);
        $this->db->delete('keluhans', $data);
    }

    // Listing hasil
    public function list_hasil()
    {
        $this->db->select('*');
        $this->db->from('hasil');
        $this->db->order_by('hasil_id', 'ASC');
        $query = $this->db->get();
        return $query->row_array();
    }

    // Edit hasil
    public function edit_hasil($data)
    {
        $this->db->where('hasil_id', $data['hasil_id']);
        $this->db->update('hasil', $data);
    }

    // Survey Kepuasan Pasien Rawat Jalan
    public function surveyRj()
    {
        $this->db->select('*');
        $this->db->from('responden_rj');
        $this->db->order_by('responden_name', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function detailSurveyRj($respon_id)
    {
        $this->db->select('*');
        $this->db->from('responden_rj');
        $this->db->where('responden_rj.respon_id', $respon_id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function deleteSurveyRj($data)
    {
        $this->db->where('respon_id', $data['respon_id']);
        $this->db->delete('responden_rj', $data);
    }

    public function sendSurveyRj($data)
    {
        $this->db->insert('responden_rj', $data);
    }
    //data chart Rj
    public function chartSurveyRj()
    {
        return $this->db->query('SELECT question1, count(*) as num from responden_rj GROUP by question1')->result_array();
    }
    public function chartSurveyRj2()
    {
        return $this->db->query('SELECT question2, count(*) as num from responden_rj GROUP by question2')->result_array();
    }
    public function chartSurveyRj3()
    {
        return $this->db->query('SELECT question3, count(*) as num from responden_rj GROUP by question3')->result_array();
    }
    public function chartSurveyRj4()
    {
        return $this->db->query('SELECT question4, count(*) as num from responden_rj GROUP by question4')->result_array();
    }
    public function chartSurveyRj5()
    {
        return $this->db->query('SELECT question5, count(*) as num from responden_rj GROUP by question5')->result_array();
    }
    public function chartSurveyRj6()
    {
        return $this->db->query('SELECT question6, count(*) as num from responden_rj GROUP by question6')->result_array();
    }
    public function chartSurveyRj7()
    {
        return $this->db->query('SELECT question7, count(*) as num from responden_rj GROUP by question7')->result_array();
    }
    public function chartSurveyRj8()
    {
        return $this->db->query('SELECT question8, count(*) as num from responden_rj GROUP by question8')->result_array();
    }
    public function chartSurveyRj9()
    {
        return $this->db->query('SELECT question9, count(*) as num from responden_rj GROUP by question9')->result_array();
    }
    public function chartSurveyRj10()
    {
        return $this->db->query('SELECT question10, count(*) as num from responden_rj GROUP by question10')->result_array();
    }
    public function chartSurveyRj11()
    {
        return $this->db->query('SELECT question11, count(*) as num from responden_rj GROUP by question11')->result_array();
    }


    // Survey Kepuasan Pasien Rawat Inap
    public function surveyRi()
    {
        $this->db->select('*');
        $this->db->from('responden_ri');
        $this->db->order_by('responden_name', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function detailSurveyRi($respon_id)
    {
        $this->db->select('*');
        $this->db->from('responden_ri');
        $this->db->where('responden_ri.respon_id', $respon_id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function deleteSurveyRi($data)
    {
        $this->db->where('respon_id', $data['respon_id']);
        $this->db->delete('responden_ri', $data);
    }

    public function sendSurveyRi($data)
    {
        $this->db->insert('responden_ri', $data);
    }
    //data chart Rj
    public function chartSurveyRi()
    {
        return $this->db->query('SELECT question1, count(*) as num from responden_ri GROUP by question1')->result_array();
    }
    public function chartSurveyRi2()
    {
        return $this->db->query('SELECT question2, count(*) as num from responden_ri GROUP by question2')->result_array();
    }
    public function chartSurveyRi3()
    {
        return $this->db->query('SELECT question3, count(*) as num from responden_ri GROUP by question3')->result_array();
    }
    public function chartSurveyRi4()
    {
        return $this->db->query('SELECT question4, count(*) as num from responden_ri GROUP by question4')->result_array();
    }
    public function chartSurveyRi5()
    {
        return $this->db->query('SELECT question5, count(*) as num from responden_ri GROUP by question5')->result_array();
    }
    public function chartSurveyRi6()
    {
        return $this->db->query('SELECT question6, count(*) as num from responden_ri GROUP by question6')->result_array();
    }
    public function chartSurveyRi7()
    {
        return $this->db->query('SELECT question7, count(*) as num from responden_ri GROUP by question7')->result_array();
    }
    public function chartSurveyRi8()
    {
        return $this->db->query('SELECT question8, count(*) as num from responden_ri GROUP by question8')->result_array();
    }
    public function chartSurveyRi9()
    {
        return $this->db->query('SELECT question9, count(*) as num from responden_ri GROUP by question9')->result_array();
    }
    public function chartSurveyRi10()
    {
        return $this->db->query('SELECT question10, count(*) as num from responden_ri GROUP by question10')->result_array();
    }
    public function chartSurveyRi11()
    {
        return $this->db->query('SELECT question11, count(*) as num from responden_ri GROUP by question11')->result_array();
    }
    public function chartSurveyRi12()
    {
        return $this->db->query('SELECT question12, count(*) as num from responden_ri GROUP by question12')->result_array();
    }
    public function chartSurveyRi13()
    {
        return $this->db->query('SELECT question13, count(*) as num from responden_ri GROUP by question13')->result_array();
    }
    public function chartSurveyRi14()
    {
        return $this->db->query('SELECT question14, count(*) as num from responden_ri GROUP by question14')->result_array();
    }
    public function chartSurveyRi15()
    {
        return $this->db->query('SELECT question15, count(*) as num from responden_ri GROUP by question15')->result_array();
    }
    public function chartSurveyRi16()
    {
        return $this->db->query('SELECT question16, count(*) as num from responden_ri GROUP by question16')->result_array();
    }
    public function chartSurveyRi17()
    {
        return $this->db->query('SELECT question17, count(*) as num from responden_ri GROUP by question17')->result_array();
    }
    public function chartSurveyRi18()
    {
        return $this->db->query('SELECT question18, count(*) as num from responden_ri GROUP by question18')->result_array();
    }
    public function chartSurveyRi19()
    {
        return $this->db->query('SELECT question19, count(*) as num from responden_ri GROUP by question19')->result_array();
    }
    public function chartSurveyRi20()
    {
        return $this->db->query('SELECT question20, count(*) as num from responden_ri GROUP by question20')->result_array();
    }
    public function chartSurveyRi21()
    {
        return $this->db->query('SELECT question21, count(*) as num from responden_ri GROUP by question21')->result_array();
    }
    public function chartSurveyRi22()
    {
        return $this->db->query('SELECT question22, count(*) as num from responden_ri GROUP by question22')->result_array();
    }
    public function chartSurveyRi23()
    {
        return $this->db->query('SELECT question23, count(*) as num from responden_ri GROUP by question23')->result_array();
    }
    public function chartSurveyRi24()
    {
        return $this->db->query('SELECT question24, count(*) as num from responden_ri GROUP by question24')->result_array();
    }
    public function chartSurveyRi25()
    {
        return $this->db->query('SELECT question25, count(*) as num from responden_ri GROUP by question25')->result_array();
    }
    public function chartSurveyRi26()
    {
        return $this->db->query('SELECT question26, count(*) as num from responden_ri GROUP by question26')->result_array();
    }
    public function chartSurveyRi27()
    {
        return $this->db->query('SELECT question27, count(*) as num from responden_ri GROUP by question27')->result_array();
    }
    public function chartSurveyRi28()
    {
        return $this->db->query('SELECT question28, count(*) as num from responden_ri GROUP by question28')->result_array();
    }
    public function chartSurveyRi29()
    {
        return $this->db->query('SELECT question29, count(*) as num from responden_ri GROUP by question29')->result_array();
    }
    public function chartSurveyRi30()
    {
        return $this->db->query('SELECT question30, count(*) as num from responden_ri GROUP by question30')->result_array();
    }
    public function chartSurveyRi31()
    {
        return $this->db->query('SELECT question31, count(*) as num from responden_ri GROUP by question31')->result_array();
    }
    public function chartSurveyRi32()
    {
        return $this->db->query('SELECT question32, count(*) as num from responden_ri GROUP by question32')->result_array();
    }
    public function chartSurveyRi33()
    {
        return $this->db->query('SELECT question33, count(*) as num from responden_ri GROUP by question33')->result_array();
    }
    public function chartSurveyRi34()
    {
        return $this->db->query('SELECT question34, count(*) as num from responden_ri GROUP by question34')->result_array();
    }
    public function chartSurveyRi35()
    {
        return $this->db->query('SELECT question35, count(*) as num from responden_ri GROUP by question35')->result_array();
    }
    public function chartSurveyRi36()
    {
        return $this->db->query('SELECT question36, count(*) as num from responden_ri GROUP by question36')->result_array();
    }
    public function chartSurveyRi37()
    {
        return $this->db->query('SELECT question37, count(*) as num from responden_ri GROUP by question37')->result_array();
    }
}
