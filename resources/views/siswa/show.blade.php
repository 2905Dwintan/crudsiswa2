<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f0; /* pink lembut */
        }
        .container {
            text-align: center;
            margin-top: 40px;
        }
        h1 {
            font-size: 28px;
            color: #d81b60;
            margin-bottom: 25px;
        }
        img {
            width: 150px;
            height: 150px;
            border-radius: 50%; /* foto bulat */
            object-fit: cover;
            margin-bottom: 20px;
            border: 4px solid #f48fb1; /* border pink */
        }
        table {
            margin: auto;
            border-collapse: collapse;
            border-radius: 12px;
            overflow: hidden;
            font-size: 18px; /* teks lebih besar */
            box-shadow: 0 4px 10px rgba(255, 105, 180, 0.2);
        }
        th, td {
            border: 2px solid #f48fb1;
            padding: 12px 20px; /* lebih lebar */
            background-color: #fff;
        }
        th {
            background-color: #f8bbd0;
            color: #880e4f;
        }
        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            font-size: 16px;
            background-color: #f48fb1;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
        .btn-back:hover {
            background-color: #f06292;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Detail Siswa</h1>

        <img src="{{ asset('storage/'.$datauser->photo)}}" width="50" alt="Foto Siswa">

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
