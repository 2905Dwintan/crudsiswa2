<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <a href="/siswa/create">Tambah </a>
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
                <a href="/siswa/edit{{ $siswa->id }}" style="padding: 5px 10px; text-decoration: none; border: 1px solid #aaa; border-radius: 4px; margin-right: 5px;">Edit</a>
                <a href="/siswa/detail{{ $siswa->id }}" style="padding: 5px 10px; text-decoration: none; border: 1px solid #aaa; border-radius: 4px; margin-right: 5px;">Detail</a>
                <a href="/siswa/delete/{{ $siswa->id }}" onclick="return confirm('Yakin ingin menghapus data ini?')" style="padding: 5px 10px; text-decoration: none; border: 1px solid #aaa; border-radius: 4px;">Delete</a>
        </td>
                </td>
            </tr>
            @endforeach
            <br>
            <br>
        </tbody>
    </table>
</body>
</html>
