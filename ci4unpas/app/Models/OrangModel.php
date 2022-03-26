<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model
{
  protected $table = 'orang';
  protected $useTimestamps = true;
  protected $allowedFields = ['nama', 'alamat'];
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  public function search($keyword)
  {
    // $builder = $this->table('orang');
    // $builder->like('nama', $keyword);
    // $builder->orLike('alamat', $keyword);
    // return $builder;

    return $this->table('orang')
      ->like('nama', $keyword)
      ->orLike('alamat', $keyword);
  }
}
