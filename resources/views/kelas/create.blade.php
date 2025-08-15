<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa PPLG</title>
</head>
<body>
<h1>Tambahkan data siswa</h1>
<p> Halaman untuk menambahkan data siswa</p>
<form action="/kelas/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
    <label>Nama</label>
    <br>
    <input type="text" name="name">
    @error('name') 
    <small>{{ $message }}</small> 
    @enderror
</div>

   <div>
    <label>Deskripsi</label>
    <br>
    <input type="text" name="description">
    @error('description') 
    <small>{{ $message }}</small> 
    @enderror
</div>
    
    <br>
    <div>
    <button type="submit">Simpan</button>
    </div>
</form>
</body>
</html>
