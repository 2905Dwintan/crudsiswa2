<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>halaman data siswa</h1>
    <p>data siswa jurusan pplg</P>
    <a href="/kelas/create">tambah data</a>
    <table border="1PX">
        <thead>
            <tr>
            <th>nama</th>
            <th>deskripsi</th>
            <th>opsi</th>
    </tr>
    </thead>
    <tbody> 
    @foreach ($clases as $kelas)

    <tr>
        <td>{{$kelas->name}}</td>
        <td>{{$kelas->description}}</td>
        <td>
            <a href="/kelas/edit/{{$kelas->id}}">edit</a>
            <a href="/kelas/show/{{$kelas->id}}">detail</a>
                <a href="/kelas/delete/{{$kelas->id}}">delete</a>
            
        </td>
</tr>

@endforeach
</tbody>
<table>
    <a href="/">Menu Siswa</a>
</div>
</body>
</html>