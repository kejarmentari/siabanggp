<!DOCTYPE html>
<html lang="en">
<head>
    <title>Print Cetak Bangunan</title>
    <style>
        h1, h2, h3, h4, h5, h6, p {
            margin: 0;
        }
        body {
            max-width: 768px;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <td style="width: 50px;">
                <img src="{{ asset('images/logo.png') }}" alt="logo bpn">
            </td>
            <td>
                <h5>PEMERINTAH KOTA BALIKPAPAN</h5>
                <h4>DINAS PEKERJAAN UMUM</h4>
                <h5>BIDANG GEDUNG PEMERINTAH</h5>
            </td>
            <td>
                <h5>KODE BANGUNAN<br>{{ $data->kode }}</h5>
            </td>
            <td>
                <p>{{ $data->nama_gedung }}</p>
                <p>{{ $data->tanggal }}</p>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <h5>I. DATA UMUM PROYEK</h5>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <h5>II. DATA TEKNIS</h5>
            </td>
            <td>
                <h5>TAHUN ANGGARAN : 0000</h5>
            </td>
        </tr>
    </table>
</body>
</html>

