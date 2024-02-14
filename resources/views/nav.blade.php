<!DOCTYPE html>
<html>
<head>
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a href="{{route('home')}}" class="w3-bar-item w3-button">Home</a>
  <a href="{{route('data')}}" class="w3-bar-item w3-button">Data Pegawai</a>
  <a href="{{route('tambah')}}" class="w3-bar-item w3-button">Tambah Pegawai</a>
  <a href="{{route('kehadiran')}}" class="w3-bar-item w3-button">Kehadiran dan gaji pegawai</a>
  <a href="{{route('logout')}}" class="w3-bar-item w3-red w3-button">Logout</a>
</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
