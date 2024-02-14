<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Pegawai</title>
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
    @if(Session::has('success'))
        <script>alert("{{ Session::get('success') }}");</script>
    @endif
    @if(Session::has('error'))
        <script>alert("{{ Session::get('error') }}");</script>
    @endif
    @include('nav')
    <div class="w3-main">
        <div class="w3-container">
            <h2>Tambah Pegawai</h2>
            <form action="{{route('actiontambah')}}" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
                @csrf
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name="nama" placeholder="nama" required="">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name="alamat" placeholder="alamat" required="">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="email" name="email" placeholder="email" required="">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name="nomor_telepon" placeholder="nomor telepon" required="">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
                    <div class="w3-rest">
                        <label><input class="w3-radio" type="radio" name="jk" value="laki"> Laki-laki</label>
                        <label><input class="w3-radio" type="radio" name="jk" value="perempuan"> Perempuan</label>
                    </div>
                </div>
                <button type="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Register</button>
            </form>
        </div>
    </div>
</body>
</html>