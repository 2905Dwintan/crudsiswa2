<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <td>Foto</th>
                <th>Nama</th>
                <td>kelas</th>
                <th>Email</th>
                <th>no_handphone</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>@Foreach ($siswas as $siswa)
            <tr>
                <td><img src="{{ asset('storage/'.$siswa->photo)}}" alt ="" width ="50"</td>
                <td>{{ $siswa->name      }}</td>
                  <td>{{ $siswa->clas->name }}</td>
                 <td>{{ $siswa->email  }}</td>
                <td>{{$siswa->no_handphone }}</td>
                <td>
                 <a href="/siswa/create"><button>Detail</button></a>
                <a href="edit.html"><button>Edit</button></a>
                <a href="hapus.html"><button>Hapus</button></a>
                <a href="/siswa/create"><button>Tambah</button></a>
                </td>
            </tr>
            @endforeach
            <br>
            <br>
        </tbody>
    </table>
</body>
</html>
