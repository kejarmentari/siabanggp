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
        $long = [116.848582, 116.861881, 116.860404, 116.895174, 116.892022, 116.875545, 116.885751, 116.846668];
        $lat = [-1.244618, -1.20525, -1.234196, -1.242956, -1.248077, -1.269722, -1.251203, -1.256916];
        $kode = ["A.11", "B.4", "A.19", "C.12", "E.2", "C.17", "I.1", "A.14"];
        $nama_gedung = ["Kelurahan Sumber Rejo", "Kecamatan Balikpapan Utara", "Kelurahan Gunung Samarinda Baru", "Dinas Perhubungan", "Gedung Kesenian", "Dinas Pemuda, Olahraga dan Pariwisata", "Tennis Stadium", "Kelurahan Gunung Sari Ulu"];
        $data = array();
        foreach (range(0, 7) as $index) {
            $data[] = [
                'user_id' => 1,
                'kode' => $kode[$index],
                'latitude' => $lat[$index],
                'longitude' => $long[$index],
                'tanggal' => date('Y-m') . '-' . ($index + 1),
                'nama_gedung' => $nama_gedung[$index],
                'pemilik_gedung' => 'Fulan #' . $index,
                'youtube_id' => 'OYlzcXA3LxI',
                'foto' => 'https://placeimg.com/640/480/any',
            ];
        }

        Survey::insert($data);
    }
}
