<!-- resources/views/data-pegawai.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
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
            <h2>Data Pegawai</h2>
            <form action="{{ route('search-id') }}" method="GET" class="w3-container w3-margin-bottom">
                <label for="search-id">Search ID:</label>
                <input type="text" id="search-id" name="search_id">
                <button type="submit" class="w3-button w3-blue">Search</button>
            </form>
            <table class="w3-table w3-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Tindakan</th> <!-- Kolom untuk tindakan -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($pegawai as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->nomor_telepon }}</td>
                            <td>{{ $data->jk }}</td>
                            <td>
                                <a href="{{ route('edit', $data->id) }}" class="w3-button w3-blue">Edit</a>
                                <form action="{{ route('hapus-pegawai', $data->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w3-button w3-red" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button> <!-- Tombol untuk delete -->
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
