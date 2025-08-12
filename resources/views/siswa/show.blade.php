<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background: linear-gradient(135deg, #ffe6f0, #fff5f8);
            margin: 0;
            padding: 0;
        }
        .container {
            text-align: center;
            padding: 40px 20px;
        }
        h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 32px;
            color: #d81b60;
            margin-bottom: 30px;
        }
        img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 25px;
            border: 5px solid #f8bbd0;
            box-shadow: 0 4px 12px rgba(216, 27, 96, 0.2);
        }
        table {
            margin: auto;
            border-collapse: collapse;
            border-radius: 16px;
            overflow: hidden;
            font-size: 18px;
            min-width: 500px; /* kotak lebih lebar */
            background: white;
            box-shadow: 0 6px 18px rgba(255, 105, 180, 0.2);
        }
        th, td {
            border: 1px solid #f8bbd0;
            padding: 16px 24px; /* lebih lega */
            text-align: left;
        }
        th {
            background-color: #fce4ec;
            color: #880e4f;
            font-weight: 600;
            width: 200px; /* kolom label lebih lebar */
        }
        td {
            color: #555;
        }
        .btn-back {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 24px;
            font-size: 16px;
            background: linear-gradient(135deg, #f48fb1, #f06292);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            box-shadow: 0 4px 8px rgba(216, 27, 96, 0.2);
            transition: all 0.3s ease;
        }
        .btn-back:hover {
            background: linear-gradient(135deg, #ec407a, #d81b60);
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>📋 Detail Siswa</h1>

        <img src="{{ asset('storage/'.$datauser->photo) }}" alt="Foto Siswa">

        <table>
            <tr>
                <th>Nama</th>
                <td>{{ $datauser->name }}</td>
            </tr>
            <tr>
                <th>NISN</th>
                <td>{{ $datauser->nisn }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $datauser->email }}</td>
            </tr>
            <tr>
                <th>No HP</th>
                <td>{{ $datauser->no_handphone }}</td>
            </tr>
        </table>

        <a href="/" class="btn-back">← Kembali</a>
    </div>

</body>
</html>
