<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Sumenep',
            'nomor_tlp' => '081225417493',
            'ttl' => '2002-07-21',
            'foto' => 'picture.png'
        ]);
    }
}
?>