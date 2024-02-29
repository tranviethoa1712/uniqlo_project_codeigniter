<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactsSeeder extends Seeder
{
    public function run()
    {
        $data = [];

        for ($i = 0; $i < 50; $i++) {
            array_push($data, [
                'name' => 'James Fernado',
                'email' => 'emailcontacts' . $i . '@gmail.com',
                'phone' => '09838736' . $i,
                'content' => 'Noi dung ' . $i,
            ]);
        }
        $this->db->table('contacts')->insertBatch($data);
    }
}
