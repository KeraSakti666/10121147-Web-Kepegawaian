<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Script Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
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
        canvas#jenisKelaminChart {
            height: 30px;
        }

    </style>
</head>
<body>
    @include('nav')
    <div class="w3-main">
        <div class="w3-container">
            <h2>Grafik Jumlah Pegawai Berdasarkan Jenis Kelamin</h2>
            <canvas id="jenisKelaminChart" width="30" height="30" style="height: 30px;"></canvas>
        </div>
    </div>


    <script>
        var dataJenisKelamin = {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah Pegawai',
                data: [{{ $jumlahPegawaiLaki }}, {{ $jumlahPegawaiPerempuan }}],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 99, 132, 0.2)' 
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        };

        var jenisKelaminChartConfig = {
            type: 'bar',
            data: dataJenisKelamin,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        var ctx = document.getElementById('jenisKelaminChart').getContext('2d');
        var jenisKelaminChart = new Chart(ctx, jenisKelaminChartConfig);
    </script>
</body>
</html>
