<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PesertaSeeder extends Seeder
{
    public function run()
    {
        $data = [
        	[
        		'name' => 'Alex Budiman',
        		'email' => 'alex.budiman@gmail.com',
        		'created_at' => Time::now()
        	],
        	[
        		'name' => 'Ivanka Putri',
        		'email' => 'ivanka.putri@gmail.com',
        		'created_at' => Time::now()
        	],
        	[
        		'name' => 'Sastro Wardoyo',
        		'email' => 'sastro.wardoyo@gmail.com',
        		'created_at' => Time::now()
        	],
        	[
        		'name' => 'Mahesa Gemilang',
        		'email' => 'mahesa.gemilang@gmail.com',
        		'created_at' => Time::now()
        	],
        	[
        		'name' => 'Randu Putri',
        		'email' => 'randu.putri@gmail.com',
        		'created_at' => Time::now()
        	],
        ];

        $this->db->table('peserta')->insertBatch($data); //insertBatch: insert multiple line
    }
}
