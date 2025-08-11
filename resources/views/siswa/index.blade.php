<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffe4ec;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            font-size: 40px;
            color: #d81b60;
            font-weight: bold;
            letter-spacing: 2px;
            margin-top: 30px;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            text-align: center;
        }
        .btn-tambah {
            display: inline-block;
            background-color: #d81b60;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: white;
            font-size: 18px;
        }
        th, td {
            padding: 15px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f8bbd0;
            color: #880e4f;
        }
        tr:hover {
            background-color: #fce4ec;
        }
        img {
            width: 80px;
            height: 80px;
            object-fit: cover; /* tetap kotak */
        }
        .aksi-btn a {
            padding: 8px 12px;
            margin: 0 3px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-size: 14px;
        }
        .edit-btn {
            background-color: #ff4081;
        }
        .detail-btn {
            background-color: #f48fb1;
        }
        .delete-btn {
            background-color: #c2185b;
        }
    </style>
</head>
<body>

    <h1>✨ Data Siswa ✨</h1>
    <div class="container">
        <a href="/siswa/create" class="btn-tambah">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>NISN</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa)
                <tr>
                    <td><img src="{{ asset('storage/'.$siswa->photo) }}" alt=""></td>
                    <td>{{ $siswa->name }}</td>
                    <td>{{ $siswa->clas->name }}</td>
                    <td>{{ $siswa->nisn }}</td>
                    <td>{{ $siswa->email }}</td>
                    <td class="aksi-btn">
                        <a href="/siswa/edit/{{ $siswa->id }}" class="edit-btn">Edit</a>
                        <a href="/siswa/show/{{ $siswa->id }}" class="detail-btn">Detail</a>
                        <a href="/siswa/delete/{{ $siswa->id }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="delete-btn">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
