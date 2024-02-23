<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Tài khoản quản trị cấp 1',
                'email' => 'admin1@gmail.com',
                'password' => password_hash('123123', PASSWORD_BCRYPT),
            ],
            [
                'name' => 'Tài khoản quản trị cấp 2',
                'email' => 'admin2@gmail.com',
                'password' => password_hash('123123', PASSWORD_BCRYPT),
            ],
            
        ];

        $this->db->table('admin_user')->insertBatch($data); 

    }
}
