<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kelas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #fff0f5; color: #e91e63; padding: 20px; }
        h1 { text-align: center; font-weight: 700; margin-bottom: 20px; }
        .card { background: white; padding: 20px; border-radius: 15px; max-width: 800px; margin: auto; box-shadow: 0px 6px 12px rgba(233, 30, 99, 0.15); }
        .field { margin-bottom: 15px; }
        .field label { font-weight: 500; display: block; margin-bottom: 5px; color: #d81b60; }
        .field p { background-color: #ffe4ec; padding: 10px; border-radius: 8px; border: 1px solid #e91e63; margin: 0; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; background: white; }
        table th, table td { border: 1px solid #e91e63; padding: 10px; text-align: left; }
        table th { background-color: #f8bbd0; }
        a { background-color: #e91e63; color: white; padding: 10px 15px; border-radius: 8px; text-decoration: none; font-size: 14px; display: inline-block; margin-top: 15px; }
        a:hover { background-color: #d81b60; }
    </style>
</head>
<body>

<h1>Detail Kelas</h1>

<div class="card">
    <div class="field">
        <label>Nama Kelas:</label>
        <p>{{ $kelas->name }}</p>
    </div>

    <div class="field">
        <label>Deskripsi:</label>
        <p>{{ $kelas->description }}</p>
    </div>

    <h3>Daftar Siswa</h3>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NISN</th>
                <th>Email</th>
                <th>No Handphone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelas->user as $siswa)
                <tr>
                    <td>{{ $siswa->name }}</td>
                    <td>{{ $siswa->nisn }}</td>
                    <td>{{ $siswa->email }}</td>
                    <td>{{ $siswa->no_handphone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/kelas">Kembali</a>
</div>

</body>
</html>
