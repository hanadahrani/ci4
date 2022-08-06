<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TodoSeeder extends Seeder
{
    public function run()
    {
        $data = [
        	[
        		'task' => 'Ujian',
                'start_date' => '2022-08-06',
                'end_date' => '2022-08-07',
        		'status' => 'Done',
        		'created_at' => Time::now()
        	],
        	[
        		'task' => 'Kursus Bahasa Korea',
                'start_date' => '2022-08-07',
                'end_date' => '2022-08-08',
        		'status' => 'Done',
        		'created_at' => Time::now()
        	],
        	[
        		'task' => 'Dinas luar kota',
                'start_date' => '2022-08-08',
                'end_date' => '2022-08-09',
        		'status' => 'Done',
        		'created_at' => Time::now()
        	],
        	[
        		'task' => 'Reuni',
                'start_date' => '2022-08-09',
                'end_date' => '2022-08-10',
        		'status' => 'Done',
        		'created_at' => Time::now()
        	],
        	[
        		'task' => 'Apel Persiapan 17 Agustus',
                'start_date' => '2022-08-10',
                'end_date' => '2022-08-11',
        		'status' => 'Done',
        		'created_at' => Time::now()
        	],
        ];

        $this->db->table('todo')->insertBatch($data); //insertBatch: insert multiple line
    
    }
}
