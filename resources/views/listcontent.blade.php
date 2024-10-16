<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Konten</title>
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
            max-width: 700px;
        }

        h1 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
            color: #2c3e50;
        }

        .content-list {
            margin-top: 20px;
            width: 100%;
        }

        .content-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .content-item:last-child {
            border-bottom: none;
        }

        .content-item span {
            color: #34495e;
        }

        .edit-button, .delete-button {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .edit-button {
            background-color: #3b82f6;
            color: white;
        }

        .edit-button:hover {
            background-color: #2563eb;
        }

        .delete-button {
            background-color: #f87171;
            color: white;
        }

        .delete-button:hover {
            background-color: #dc2626;
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
        <h2>Dashboard</h2>
        <a href="/home">Rekap Jadwal</a>
        <a href="/nilai">Rekap Nilai</a>
        <a href="/konten">Upload Konten</a>
        <a href="/listkonten">List Konten</a>
        <a href="/">Log Out</a>
    </div>
    <div class="content">
        <div class="container">
            <h1>Daftar Konten</h1>
            <div class="content-list">
                <div class="content-item">
                    <span>Konten 1: Data Peserta</span>
                    <div>
                        <button class="edit-button">Edit</button>
                        <button class="delete-button" onclick="deleteContent()">Delete</button>
                    </div>
                </div>
                <div class="content-item">
                    <span>Konten 2: Data Pewawancara</span>
                    <div>
                        <button class="edit-button">Edit</button>
                        <button class="delete-button" onclick="deleteContent()">Delete</button>
                    </div>
                </div>
                <div class="content-item">
                    <span>Konten 3: Data Host Zoom</span>
                    <div>
                        <button class="edit-button">Edit</button>
                        <button class="delete-button" onclick="deleteContent()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function deleteContent() {
            if (confirm('Apakah Anda yakin ingin menghapus konten ini?')) {
                alert('Konten telah dihapus!'); // Replace with actual delete logic
            }
        }
    </script>
</body>
</html>
