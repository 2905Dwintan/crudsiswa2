<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff5f8;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 1100px;
            margin: 0 auto;
        }

        /* ===== Header ===== */
        .header-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            margin: 25px 0;
        }
        h2 {
            font-size: 28px;
            color: #d81b60;
            font-weight: 700;
        }
        .btn-tambah {
            position: absolute;
            left: 0;
            background: linear-gradient(135deg, #f48fb1, #f06292);
            color: white;
            padding: 10px 18px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 15px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 12px rgba(240, 98, 146, 0.3);
            transition: all 0.3s ease;
        }
        .btn-tambah:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(240, 98, 146, 0.5);
        }

        /* ===== Table ===== */
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: white;
            font-size: 16px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            animation: fadeIn 0.5s ease-in-out;
        }
        th, td {
            padding: 14px;
            border-bottom: 1px solid #f8bbd0;
            text-align: center;
        }
        th {
            background-color: #f8bbd0;
            color: #880e4f;
        }
        tr:hover {
            background-color: #fff0f5;
            transition: 0.3s;
        }

        /* Foto bulat */
        img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #f8bbd0;
        }

        /* Tombol Aksi */
        .aksi-btn a {
            padding: 6px 12px;
            margin: 0 3px;
            border-radius: 20px;
            text-decoration: none;
            color: white;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        .edit-btn { background-color: #ff80ab; }
        .edit-btn:hover { background-color: #ec407a; }
        .detail-btn { background-color: #f48fb1; }
        .detail-btn:hover { background-color: #d81b60; }
        .delete-btn { background-color: #c2185b; }
        .delete-btn:hover { background-color: #880e4f; }

        /* Animasi */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
 
<div class="container">
    <!-- Header -->
    <div class="header-wrapper">
        <a href="/siswa/create" class="btn-tambah">➕ Tambah Siswa</a>
        <h2>📋 Daftar Siswa</h2>
        <a href="/kelas">class </a>
    </div>

    <!-- Table -->
    <table>
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <td>kelas</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
            <tr>
                <td><img src="{{asset('storage/'.$siswa->photo)}}" alt ="" width ="50"</td>
                <td>{{ $siswa->name}}</td>
                  <td>{{ $siswa->clas->name }}</td>
                  <td>{{ $siswa->alamat}}</td>
              <td>
                <a href="/siswa/edit/{{ $siswa->id }}" style="padding: 5px 10px; text-decoration: none; border: 1px solid #aaa; border-radius: 4px; margin-right: 5px;">Edit</a>
                <a href="/siswa/show/{{ $siswa->id }}" style="padding: 5px 10px; text-decoration: none; border: 1px solid #aaa; border-radius: 4px; margin-right: 5px;">Detail</a>
                <a href="/siswa/delete/{{ $siswa->id }}" onclick="return confirm('Yakin ingin menghapus data ini?')" style="padding: 5px 10px; text-decoration: none; border: 1px solid #aaa; border-radius: 4px;">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
