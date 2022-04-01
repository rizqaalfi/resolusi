<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function index()
    {
        // hanya mengambil satu table
        // $users = new \Myth\Auth\Models\UserModel();
        // $data = [
        //     'title' => 'Admin',
        //     'user' => $users->findAll(),
        // ];


        // diberi alias ( as ) jika ada nama kolom yang sama
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data = [
            'title' => 'Admin',
            'user' => $query->getResult(), //pengambilannya berbentuk object bukan array
        ];

        return view('admin/index', $data);
    }
    public function detail($id = 0)
    {

        // diberi alias ( as ) jika ada nama kolom yang sama
        $this->builder->select('users.id as userid, username, email, fullname, user_image, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');

        $query = $this->builder->getWhere(['users.id' => $id]);
        // atau
        // $this->builder->where('users.id', $id);
        // $query = $this->builder->get();

        $data = [
            'title' => 'Admin',
            'user' => $query->getRow(), //pengambilannya berbentuk object bukan array
        ];

        // kalau ada yang ngirimin kosong
        if (empty($data['user'])) {
            // throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            return redirect()->to('/admin');
        }

        return view('admin/detail', $data);
    }
}
