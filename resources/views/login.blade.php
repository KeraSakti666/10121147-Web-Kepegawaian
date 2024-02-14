<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    @if(Session::has('error'))
        <script>alert("{{ Session::get('error') }}");</script>
    @endif
    <div class="w3-container">
        <h1 class="w3-center">Selamat Datang</h1>
        <br>
        <form action="{{route('actionlogin')}}" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
            @csrf
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" type="email" name="email" placeholder="Email" required="">
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" type="password" name="password" placeholder="Password" required="">
                </div>
            </div>
            <button type="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Log In</button>
            <hr>
            <p class="w3-center">Belum punya akun? <a href="{{route('register')}}">Daftar sekarang!</p>
        </form>
    </div>
</body>
</html>
