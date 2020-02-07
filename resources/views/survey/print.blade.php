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
    <table style="width: 100%;">
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
        <tr>
            <td style="height: 400px" colspan="4"></td>
        </tr>
        <tr>
            <td colspan="3" style="border-right: 0;">
                <h5>II. DATA TEKNIS</h5>
            </td>
            <td style="border-left: 0;">
                <h5>TAHUN ANGGARAN : 0000</h5>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding-left: 1.4rem;">
                1. CARA PELAKSANAAN
            </td>
            <td colspan="2">
                [] PERUSAHAAN
                [] SWAKELOLA
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

