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
        $data = [
            [
                kode => 'A.1',
                nama_gedung => 'Kelurahan Teritip',
                long => 117.002301,
                lat => -1.169818,
                tanggal => "2019-07-14",
                nama_pemilik => 'Pemerintah Kota Balikpapan',
                fungsi_bangunan => null,
                klasifikasi_bangunan => null,
                lokasi_bangunan => null
            ],
            [
                kode => 'A.2',
                nama_gedung => 'Kelurahan Manggar',
                long => 116.96307,
                lat => -1.224963,
            ],
            [
                kode => 'A.3',
                nama_gedung => 'Kelurahan Lamaru',
                long => 116.977304,
                lat => -1.207017,
            ],
            [
                kode => 'A.7',
                nama_gedung => 'Kelurahan Baru Ilir',
                long => 116.820902,
                lat => -1.234366,
            ],
            [
                kode => 'A.8',
                nama_gedung => 'Kelurahan Baru Ulu',
                long => 116.816035,
                lat => -1.224438,
            ],
            [
                kode => 'A.9',
                nama_gedung => 'Kelurahan Baru Tengah',
                long => 116.812818,
                lat => -1.23136,
            ],
            [
                kode => 'A.11',
                nama_gedung => 'Kelurahan Sumber Rejo',
                long => 116.848582,
                lat => -1.244618,
            ],
            [
                kode => 'A.14',
                nama_gedung => 'Kelurahan Gunung Sari Ulu',
                long => 116.846668,
                lat => -1.256916,
            ],
            [
                kode => 'A.19',
                nama_gedung => 'Kelurahan Gunung Samarinda Baru',
                long => 116.860404,
                lat => -1.234196,
            ],
            [
                kode => 'A.21',
                nama_gedung => 'Kelurahan Graha Indah',
                long => 116.848048,
                lat => -1.195136,
            ],
            [
                kode => 'B.4',
                nama_gedung => 'Kecamatan Balikpapan Utara',
                long => 116.861881,
                lat => -1.20525,
            ],
            [
                kode => 'C.1',
                nama_gedung => 'Sekretariat Daerah/Walikota Balikpapan',
                long => 116.827713,
                lat => -1.276575,
            ],
            [
                kode => 'C.8',
                nama_gedung => 'Dinas Pekerjaan Umum (DPU)',
                long => 116.892081,
                lat => -1.242688,
            ],
            [
                kode => 'C.11',
                nama_gedung => 'Dinas Penanaman Modal dan Perizinan Terpadu (DPMPT)',
                long => 116.7426524,
                lat => -0.8696095,
            ],
            [
                kode => 'C.12',
                nama_gedung => 'Dinas Penanaman Modal dan Perizinan Terpadu (DPMPT)',
                long => 116.895174,
                lat => -1.242956,
            ],
        ];
        $long = [117.002301, 116.96307, 116.848582, 116.861881, 116.860404, 116.895174, 116.892022, 116.875545, 116.885751, 116.846668];
        $lat = [-1.169818, -1.224963, -1.244618, -1.20525, -1.234196, -1.242956, -1.248077, -1.269722, -1.251203, -1.256916];
        $kode = ["A.1", "A.2", "A.3", "A.11", "B.4", "A.19", "C.12", "E.2", "C.17", "I.1", "A.14"];
        $nama_gedung = ["Kelurahan Teritip", "Kelurahan Manggar", "Kelurahan Lamaru", "Kelurahan Sumber Rejo", "Kecamatan Balikpapan Utara", "Kelurahan Gunung Samarinda Baru", "Dinas Perhubungan", "Gedung Kesenian", "Dinas Pemuda, Olahraga dan Pariwisata", "Tennis Stadium", "Kelurahan Gunung Sari Ulu"];
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
