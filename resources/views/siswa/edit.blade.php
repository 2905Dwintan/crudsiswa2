<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data siswa</title>
</head>
<body>
<h1 style="color: #e91e63;">edit data siswa</h1><br>
<p>halaman untuk mengedit data siswa</p>
<img width="70" src="{{asset('storage/'.$datauser->photo)}}" alt="">

    
<form action="/siswa/update/{{$datauser->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="kelas">Kelas PPLG </label>
        <br>
        <select name="kelas_id">
            @foreach($clases as $clas)
                <option {{$clas->id==$datauser->clas_id ? 'selected' : ''}} value="{{ $clas->id}}">{{ $clas->name }}</option>
            @endforeach
        </select>
    </div><br>

    @error('kelas_id')
    <small style="color: #FF0000">{{ $message }}</small>
    @enderror

    <div>
     
        <label for="name">Nama:</label><br>
        <input type="text" name="name" value="{{$datauser->name}}">
        <br>
        @error('name')
    <small style="color: #FF0000">{{ $message }}</small>
    @enderror
    </div><br>

    <div>
        <label for="nisn">NISN:</label><br>
        <input type="text" name="nisn" value="{{$datauser->nisn}}">
        <br>
        @error('nisn')
    <small style="color: #FF0000">{{ $message }}</small>
    @enderror
    </div><br>

    <div>
        <label for="alamat">Alamat:</label><br>
        <input type="text" name="alamat" value="{{$datauser->alamat}}">
        <br>
        @error('alamat')
    <small style="color: #FF0000">{{ $message }}</small>
    @enderror
    </div><br>

    <div>
        <label for="no_handphone">No Handphone:</label><br>
        <input type="text" name="no_handphone" value="{{$datauser->no_handphone}}">
        <br>
        @error('no_handphone')
    <small style="color: #FF0000">{{ $message }}</small>
    @enderror
    </div><br>

    <div>
        <label for="email">Email:</label><br>
        <input type="text" name="email" value="{{$datauser->email}}">
        <br>
        @error('email')
    <small style="color: #FF0000">{{ $message }}</small>
    @enderror
    </div><br>

    <div>
        <label for="password">Password:</label><br>
        <input type="password" name="password">
        <br>
        @error('password')
    <small style="color: #FF0000">{{ $message }}</small>
    @enderror
    </div><br>

<div style="margin-bottom: 15px;">
    <label for="photo" 
           style="display: block; margin-bottom: 5px; font-weight: bold; color: #e91e63;">
        📷 Upload Photo
    </label>
    
    <input type="file" name="photo" 
           style="padding: 6px; border: 1px solid #e91e63; border-radius: 6px; background-color: #fce4ec;">
</div>

<button type="submit" 
        style="padding: 8px 15px; background-color: #e91e63; color: white; border: none; border-radius: 6px; font-size: 14px;">
    Simpan
</button>
<br><br>

<a href="/" 
   style="display: inline-block; padding: 8px 15px; background-color: #e91e63; color: white; text-decoration: none; border-radius: 6px; font-size: 14px;">
   Kembali
</a>

</body>
</html>