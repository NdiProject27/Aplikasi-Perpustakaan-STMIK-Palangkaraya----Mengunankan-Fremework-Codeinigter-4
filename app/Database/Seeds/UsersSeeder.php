<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'username' => 'andilafito',
        //         'password' => password_hash('andi27', PASSWORD_BCRYPT),
        //         'name' => 'Herkules S.Kom.,M.Cs',
        //         'created_at' => Time::now()
        //     ]
        // ];
        // $this->db->table('users')->insertBatch($data);

        $data = [
            [
                'username'   => 'andilafito',
                'name'       => 'Andi lafito',
                'password'   => password_hash('C2055201031', PASSWORD_BCRYPT),
                'foto'       => 'andi.jpg',
            ],
            [
                'username'   => 'rhamajason',
                'name'       => 'Rhama Jason',
                'password'   => password_hash('C2055201033', PASSWORD_BCRYPT),
                'foto'       => 'RHAMA.jpg',
            ],
            [
                'username'   => 'feri',
                'name'       => 'Feri',
                'password'   => password_hash('C2055201093', PASSWORD_BCRYPT),
                'foto'       => 'feri.png',
            ],
            [
                'username'   => 'rahmaniah',
                'name'       => 'Rahmaniah',
                'password'   => password_hash('C2055201014', PASSWORD_BCRYPT),
                'foto'       => 'RAHMA.jpg',
            ],
            [
                'username'   => 'ekywijianti',
                'name'       => 'Eky Wijianti',
                'password'   => password_hash('C2055201001', PASSWORD_BCRYPT),
                'foto'       => 'eky.jpg',
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
