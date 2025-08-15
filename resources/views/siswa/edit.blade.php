<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <style>
        body {
            background-color: #fff0f5;
            font-family: 'Poppins', sans-serif;
            color: #e91e63;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #e91e63;
            margin-top: 30px;
        }
        .form-container {
            max-width: 380px;
            margin: 20px auto;
            background: #ffe4ec;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(233, 30, 99, 0.2);
        }
        label {
            font-weight: bold;
            color: #ad1457;
            font-size: 14px;
        }
        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #e91e63;
            border-radius: 8px;
            background-color: #fff;
            font-size: 14px;
        }
        input[type="file"] {
            border: none;
            font-size: 14px;
        }
        button {
            padding: 10px;
            width: 100%;
            background-color: #e91e63;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
        }
        button:hover {
            background-color: #d81b60;
        }
        a {
            display: block;
            text-align: center;
            background-color: #f06292;
            color: white;
            padding: 8px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            margin-top: 10px;
        }
        a:hover {
            background-color: #ec407a;
        }
        small {
            color: #f50057;
            font-size: 12px;
        }
        .photo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }
        .photo-container img {
            border-radius: 50%;
            object-fit: cover;
            width: 80px;
            height: 80px;
            border: 2px solid #e91e63;
        }
    </style>
</head>

<body>
    <h1>✏️ Edit Siswa PPLG</h1>

    <div class="form-container">
        <div class="photo-container">
            <img src="{{ asset('storage/'.$datauser->photo) }}" alt="Foto Siswa">
        </div>

        <form action="/siswa/update/{{ $datauser->id }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="kelas">Kelas</label>
                <select name="kelas_id">
                    @foreach($clases as $clas)
                        <option {{ $clas->id == $datauser->clas_id ? 'selected' : '' }} value="{{ $clas->id }}">
                            {{ $clas->name }}
                        </option>
                    @endforeach
                </select>
                @error('kelas_id') 
                <small>{{ $message }}</small> 
                @enderror
            </div><br>

            <div>
                <label>Nama</label>
                <input type="text" name="name" value="{{ $datauser->name }}">
                @error('name')
                 <small>{{ $message }}</small>
                 @enderror
            </div><br>

            <div>
                <label>NISN</label>
                <input type="text" name="nisn" value="{{ $datauser->nisn }}">
                @error('nisn')
                 <small>{{ $message }}</small>
                 @enderror
            </div><br>

            <div>
                <label>No Handphone</label>
                <input type="text" name="no_handphone" value="{{ $datauser->no_handphone }}">
                @error('no_handphone')
                 <small>{{ $message }}</small> 
                 @enderror
            </div><br>

            <div>
                <label>Email</label>
                <input type="text" name="email" value="{{ $datauser->email }}">
                @error('email') 
                <small>{{ $message }}</small>
                 @enderror
            </div><br>

            <div>
                <label>Password</label>
                <input type="password" name="password">
                <small style="color: #0040ff">Kosongkan jika tidak ingin diubah</small>
                @error('password') 
                <small>{{ $message }}</small>
                 @enderror
            </div><br>

            <div>
                <label>📷 Upload Photo</label>
                <input type="file" name="photo">
            </div><br>

            <button type="submit">💾 Simpan</button>
            <a href="/">⬅ Kembali</a>
        </form>
    </div>
</body>
</html>
