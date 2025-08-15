<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
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

        /* ===== Navbar Menu ===== */
        .navbar {
            background-color: #f8bbd0;
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 12px 0;
            border-radius: 0 0 15px 15px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .navbar a {
            text-decoration: none;
            color: #880e4f;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 20px;
            transition: all 0.3s ease;
        }
        .navbar a:hover {
            background-color: #f48fb1;
            color: white;
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
 
    <div class="navbar">
        <a href="/">📚 Menu Siswa</a>
        <a href="/clas">🏫 Menu Kelas</a>
    </div>


    <div class="header-wrapper">
        <a href="/kelas/create" class="btn-tambah">➕ Tambah Kelas</a>
        <h2>📋 Daftar Kelas</h2>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nama Kelas</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
       @foreach ($kelas as $k)
<tr>
    <td>{{ $k->name }}</td>
    <td>{{ $k->description }}</td>
    <td>
        <a href="/kelas/show/{{ $k->id }}" class="btn btn-edit" style="background-color:#87CEFA; color:white;">Detail</a>
        <a href="/kelas/edit/{{ $k->id }}" class="btn btn-edit">Edit</a>
        
       <form action="{{ route('destroy', $k->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-delete">Delete</button>
</form>
    </td>
</tr>
@endforeach

        </tbody>
    </table>
</div>

</body>
</html>