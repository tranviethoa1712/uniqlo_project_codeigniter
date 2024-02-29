<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\Query;

class ContactModel extends Model
{
    protected $table = 'contacts';

    public function getContacts()
    {
        $db = $this->db;
        $builder = $db->table('contacts');
        $builder->select('*');
        $result = $builder->get()->getResultArray();

        return $result;
    }
}