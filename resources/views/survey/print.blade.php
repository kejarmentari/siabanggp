<!DOCTYPE html>
<html lang="en">
<head>
    <title>Print Cetak Bangunan</title>
    <style>
        h1, h2, h3, h4, h5, h6, p {
            margin: 0;
            font-weight: normal;
        }
        body {
            max-width: 768px;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        h5 {
            font-size: .9rem;
        }

        h4 {
            font-size: 1.2rem;
        }

        td {
            border: 1px solid #000;
            padding: 6px;
            font-size: .8rem;
        }
    </style>
</head>
<body>
    <table style="width: 100%;" border="1">
        <tr style="text-align: center;">
            <td style="width: 40px; border-right: 0;">
                <img src="{{ asset('images/logo.png') }}" alt="logo bpn" style="width: 100%; margin-left: 10px;">
            </td>
            <td style="width: 260px; border-left: 0;">
                <h5>PEMERINTAH KOTA BALIKPAPAN</h5>
                <h4>DINAS PEKERJAAN UMUM</h4>
                <h5>BIDANG GEDUNG PEMERINTAH</h5>
            </td>
            <td>
                <h5>KODE BANGUNAN<br>{{ $data->kode }}</h5>
            </td>
            <td style="text-align: left">
                <p style="margin-bottom: .5rem;">{{ $data->nama_gedung }}</p>
                <p>{{ $data->tanggal }}</p>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <h5>I. DATA UMUM PROYEK</h5>
            </td>
        </tr>
        <tr style="border: none;">
            <td colspan="2" style="border-right: 0; border-bottom: 0;">
                <p >1. NAMA PEMILIK BANGUNAN</p>
                <p style="margin-top:10px">2. NAMA BANGUNAN GEDUNG</p>
                <p style="margin-top:10px">3. FUNGSI BANGUNAN GEDUNG</p>
                <p style="margin-top:10px">4. KLASIFIKASI BANGUNAN GEDUNG</p>
                <p style="margin-top:10px">5. LOKASI BANGUNAN GEDUNG</p>
                <p style="margin-top:10px">6. JUMLAH LANTAI BANGUNAN</p>
                <p style="margin-top:10px">7. KETINGGIAN BANGUNAN</p>
                <p style="margin-top:10px">8. LUAS LANTAI BANGUNAN</p>
                <p style="margin-top:10px">9. LUAS LANTAI DASAR BANGUNAN</p>
                <p style="margin-top:10px">10. LUAS TANAH</p>
                <p style="margin-top:10px">11. POSISI KOORDINAT</p>
                <p style="margin-top:10px">12. SURAT BUKTI ATAS HAK TANAH</p>
                <p style="margin-top:10px">13. NAMA PPTK</p>
                <p style="margin-top:10px">14. NAMA PPK</p>
            </td>
            <td colspan="2" style="border-left: 0; border-bottom: 0;">
                <p>: {{$data->pemilik_gedung}}</p>
                <p  style="margin-top:10px">: {{$data->nama_gedung}}</p>
                <p  style="margin-top:10px">: {{$data->fungsi_gedung == null ? '-' : $data->fungsi_gedung}}</p>
                <p  style="margin-top:10px">: {{$data->klasifikasi_gedung == null ? '-' : $data->klasifikasi_gedung}}</p>
                <p  style="margin-top:10px">: {{$data->lokasi_gedung == null ? '-' : $data->lokasi_gedung}}</p>
                <p  style="margin-top:10px">: {{$data->jumlah_lantai}} Lantai</p>
                <p  style="margin-top:10px">: {{$data->ketinggian}} M</p>
                <p  style="margin-top:10px">: {{$data->luas_lantai}} M2</p>
                <p  style="margin-top:10px">: {{$data->luas_lantai_dasar}} M</p>
                <p  style="margin-top:10px">: {{$data->luas_tanah}} M2</p>
                <p  style="margin-top:10px">: {{$data->latitude}}, {{$data->longitude}}</p>
                @if ($data->surat_bukti == 1)
                    <p  style="margin-top:10px">: Sertifikat</p>
                @elseif($data->surat_bukti == 2)
                    <p  style="margin-top:10px">: IMTN</p>
                @else
                    <p  style="margin-top:10px">: Bukti Lainnya</p>
                @endif
                <p  style="margin-top:10px">: {{$data->nama_pptk == null ? '-' : $data->nama_pptk}}</p>
                <p  style="margin-top:10px">: {{$data->nama_ppk == null ? '-' : $data->nama_ppk}}</p>
            </td>
        </tr>
       
        <tr>
            <td colspan="3" style="border-right: 0;">
                <h5>II. DATA TEKNIS</h5>
            </td>
            <td style="border-left: 0;">
                <h5>TAHUN ANGGARAN : {{$data->tahun_anggaran == null ? '-' : $data->tahun_anggaran}}</h5>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding-left: 1.4rem;">

                1. CARA PELAKSANAAN
            </td>
            <td colspan="2">
            <img src="{{ $data->cara_pelaksanaan == 1 ? asset('images/checkbox.png') : asset('images/check.png') }}" alt="logo bpn" style="margin-left: 10px; margin-bottom: -4px"> PERUSAHAAN
            <img src="{{ $data->cara_pelaksanaan == 0 ? asset('images/checkbox.png') : asset('images/check.png') }}" alt="logo bpn" style="margin-left: 10px; margin-bottom: -4px"> SWAKELOLA
            </td>
        </tr>
        <tr>
            <table style="width: 100%;">
                <tr>
                    <td colspan="3" style="width: 618px; padding-left: 1.4rem;">2. DATA PELAKSANAAN</td>
                    <td>NAMA REKANAN</td>
                    <td>NILAI KONTRAK</td>
                    <td>KUALIFIKASI</td>
                    <td>JANGKA WAKTU</td>
                </tr>
                <tr style="height: 80px;">
                    <td style="width: 20px">&nbsp;</td>
                    <td style="width: 133px; text-align: center;">A</td>
                    <td style="width: 133px;">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr style="height: 80px;">
                    <td>&nbsp;</td>
                    <td style=" text-align: center;">B</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr style="height: 80px;">
                    <td>&nbsp;</td>
                    <td style="text-align: center;">C</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </tr>
    </table>
</body>
</html>

