<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemantauan Progress Pengisian Nilai</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            height: 100vh;
            background-color: #f4f6f8;
        }

        .sidebar {
            width: 200px;
            background-color: #34495e;
            color: #ffffff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100%;
        }

        .sidebar h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            margin: 10px 0;
            transition: color 0.3s;
        }

        .sidebar a:hover {
            color: #3b82f6;
        }

        .content {
            margin-left: 220px; /* Add space for the sidebar */
            padding: 40px;
            width: calc(100% - 220px);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
            color: #2c3e50;
        }

        .progress-info {
            margin-bottom: 20px;
            text-align: center;
            color: #34495e;
        }

        .progress-info span {
            font-weight: bold;
        }

        button {
            padding: 12px;
            background-color: #3b82f6;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin: 0 auto; /* Center the button */
        }

        button:hover {
            background-color: #2563eb;
        }

        /* Responsive adjustments */
        @media (max-width: 600px) {
            .sidebar {
                width: 100px;
            }

            .content {
                margin-left: 120px;
                width: calc(100% - 120px);
            }

            .container {
                max-width: 90%;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <a href="/home">Rekap Jadwal</a>
        <a href="/nilai">Rekap Nilai</a>
        <a href="/konten">Upload Konten</a>
        <a href="/listkonten">List Konten</a>
        <a href="/">Log Out</a>
    </div>
    <div class="content">
        <div class="container">
            <h1>Pemantauan Progress Pengisian Nilai</h1>
            <div class="progress-info">
                <p>Jumlah Nilai Sudah Dimasukkan: <span id="scores-entered">75</span></p>
                <p>Jumlah Nilai Belum Dimasukkan: <span id="scores-missing">25</span></p>
            </div>
            <canvas id="progressChart" width="400" height="400"></canvas>
            <button onclick="recapScores()">Rekap Nilai</button>
        </div>
    </div>

    <script>
        const scoresEntered = 75;
        const scoresMissing = 25;

        const ctx = document.getElementById('progressChart').getContext('2d');
        const progressChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Sudah Dimasukkan', 'Belum Dimasukkan'],
                datasets: [{
                    data: [scoresEntered, scoresMissing],
                    backgroundColor: ['#3b82f6', '#f87171'],
                    borderColor: '#ffffff',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                }
            }
        });

        function recapScores() {
            alert('Rekap nilai telah dimulai!'); // Replace this with your actual recap logic
        }
    </script>
</body>
</html>
