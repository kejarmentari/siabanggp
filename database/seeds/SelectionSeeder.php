<?php

use Illuminate\Database\Seeder;
use App\Selection;

class SelectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array();

        foreach ($this->administrasiData() as $item) {
            $data[] = ['user_id' => 1, 'title' => $item, 'type' => 1];
        }

        foreach ($this->konstruksiData() as $item) {
            $data[] = ['user_id' => 1, 'title' => $item, 'type' => 2];
        }

        foreach ($this->pemeliharaanData() as $item) {
            $data[] = ['user_id' => 1, 'title' => $item, 'type' => 3];
        }

        Selection::insert($data);
    }

    private function administrasiData()
    {
        return [
            "Surat/bukti pemanfaatan tanah",
            "Gambar situasi atau rencana tapak",
            "Gambar denah",
            "Gambar tampak",
            "Gambar potongan",
            "Gambar detai arsitektur",
            "Spesifikasi umum",
            "Perhitungan struktur",
            "Hasil penyelidikan tanah",
            "Gambar rencana pondasi termasuk detail",
            "Rencana basemen",
            "Gambar rencana kolom, balok, plat dan detailnya",
            "Gambar rencana rangka atap,penutup dan detailnya",
            "Spesifikasi umum struktur",
            "Spesifikasi khusus",
            "Analisis model komputer",
            "Perhitungan utilitas",
            "Perhitungan kebisingan",
            "Gambar sistem sanitasi",
            "Gambar pengelolaan air hujan",
            "Gambar sistem instalasi listrik",
            "Gambar sistem proteksi kebakaran",
            "Gambar sistem penghawaan",
            "Gambar sistem transportasi vertikal",
            "Gambar sistem komunikasi intern dan ekstern",
            "Gambar sistem penangkal petir",
            "Spesifikasi umum utilitas",
        ];
    }

    private function konstruksiData()
    {
        return [
            "Gambar terbangun sesuai rencana",
            "Gambar terbangun arsitektur",
            "Gambar terbangun struktur",
            "Gambar terpasang utilitas/instalasi",
            "Dokumentasi setiap pelaksanaan konstruksi",
            "Laporan inspeksi berkala",
            "Dokumen ikatan kerja",
            "Laporan pengawasan konstruksi BG",
            "Rekomendasi teknis dari PD terkait",
            "Manual pengoperasian, pemeliharaan & rawat",
            "Hasil pengetesan dan pengujian",
            "Hasil pengujian material dan ",
        ];
    }

    private function pemeliharaanData()
    {
        return [
            "Laporan pemeriksaan berkala BG",
            "Laporan pengetesan dan pengujian",
            "Laporan hasil perbaikan dan/ penggantian alat",
        ];
    }
}
