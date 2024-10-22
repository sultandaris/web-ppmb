<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: 500;
            color: #34495e;
        }

        input[type="file"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccd0d5;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        input[type="file"]:focus {
            border-color: #3b82f6;
            outline: none;
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
        }

        button:hover {
            background-color: #2563eb;
        }

        /* Dashboard Component Styles */
        .dashboard {
            width: 100%;
            margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .dashboard h2 {
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .dashboard p {
            color: #34495e;
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

            .container, .dashboard {
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
            <h1>Rekap Jadwal</h1>
            <form action="{{ route('excel.merge') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="file1">Data Peserta</label>
                <input type="file" name="file1" id="file1" required>

                <label for="file2">Data Pewawancara</label>
                <input type="file" name="file2" id="file2" required>

                <label for="file3">Data Host Zoom</label>
                <input type="file" name="file3" id="file3" required>

                <button type="submit">Buat Jadwal</button>
            </form>
        </div>
    </div>
</body>
</html>
