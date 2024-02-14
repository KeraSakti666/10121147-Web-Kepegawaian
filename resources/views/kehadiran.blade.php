<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kehadiran Pegawai</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-sidebar {
            width: 180px; 
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999;
        }
        .w3-main {
            margin-left: 200px;
        }
    </style>
</head>
<body>
    @include('nav')
    <div class="w3-main">
        <div class="w3-container">
            <h2>Kehadiran dan gaji Pegawai</h2>
            <table class="w3-table w3-striped w3-hoverable w3-pale-green">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>pegawai_id</th>
                        <th>absen</th>
                        <th>gaji</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kehadiran as $hadir)
                        <tr>
                            <td>{{ $hadir->id }}</td>
                            <td>{{ $hadir->pegawai_id }}</td>
                            <td>{{ $hadir->absen }}</td>
                            <td>{{ $hadir->gaji }}</td>
                            <td>
                                <form action="{{ route('kehadiran.absen', $hadir->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="w3-button w3-blue">Absen</button>
                                </form>
                                <form action="{{ route('kehadiran.ambil-gaji', $hadir->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="w3-button w3-red">Ambil Gaji</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>