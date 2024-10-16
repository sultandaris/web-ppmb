<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
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
            max-width: 800px;
        }

        h1 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
            color: #2c3e50;
        }

        .news {
            margin-bottom: 20px;
        }

        .news-item {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .zoom-button {
            padding: 12px;
            background-color: #3b82f6;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            display: block;
            width: 100%;
        }

        .zoom-button:hover {
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
</head>
<body>
    <div class="sidebar">
        <h2>User Dashboard</h2>
        <a href="/news">Berita</a>
        <a href="/zoom">Ruang Zoom</a>
        <a href="/">Log Out</a>
    </div>
    <div class="content">
        <div class="container">
            <h1>Berita Terbaru</h1>
            <div class="news">
                <div class="news-item">
                    <strong>Berita 1:</strong> Peluncuran program baru akan dilakukan pada bulan depan.
                </div>
                <div class="news-item">
                    <strong>Berita 2:</strong> Kegiatan seminar akan diadakan secara virtual.
                </div>
                <div class="news-item">
                    <strong>Berita 3:</strong> Pengumuman hasil evaluasi akhir semester.
                </div>
            </div>
            <button class="zoom-button" onclick="enterZoom()">Masuk Ruang Zoom</button>
        </div>
    </div>

    <script>
        function enterZoom() {
            window.location.href = 'https://zoom.us/j/your_meeting_id'; // Replace with your Zoom link
        }
    </script>
</body>
</html>
