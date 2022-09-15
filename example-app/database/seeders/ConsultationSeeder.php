<?php

namespace Database\Seeders;

use App\Models\MasterData\Consultation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consultation = [
            [
               'name' => 'jantung sesak',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],
            
            [
                'name' => 'Tekanan Darah Tinggi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'name' => 'Gangguan irama Jantung',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        Consultation::insert($consultation);
    }

    
}
