<?php

use Illuminate\Database\Seeder;
use App\Survey;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array();
        foreach (range(1, 10) as $index) {
            $data[] = [
                'user_id' => 1,
                'kode' => 'A.'.$index,
                'latitude' => rand(117002301, 1170023500),
                'longitude' => rand(118002301, 120002301),
                'tanggal' => date('Y-m').'-'.$index,
                'nama_gedung' => 'Gedung #'.$index,
                'pemilik_gedung' => 'Fulan #'.$index,
                'youtube_id' => 'OYlzcXA3LxI',
                'foto' => 'https://placeimg.com/640/480/any',
            ];
        }

        Survey::insert($data);
    }
}
