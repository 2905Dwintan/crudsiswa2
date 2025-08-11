<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <style>
        body {
            background-color: #fff0f5;
            font-family: Arial, sans-serif;
            color: #e91e63;
        }
        h1 {
            text-align: center;
            color: #e91e63;
        }
        form {
            max-width: 500px;
            margin: auto;
            background: #ffe4ec;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(233, 30, 99, 0.2);
        }
        label {
            font-weight: bold;
            color: #ad1457;
        }
        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #e91e63;
            border-radius: 5px;
            background-color: #fff;
        }
        input[type="file"] {
            border: none;
        }
        button {
            padding: 10px 20px;
            background-color: #e91e63;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #d81b60;
        }
        a {
            background-color: #f06292;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
        }
        a:hover {
            background-color: #ec407a;
        }
        small {
            color: #f50057;
        }
        .photo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .photo-container img {
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <h1>Halaman Edit Siswa PPLG</h1><br>

    <div class="photo-container">
        <img width="70" src="{{ asset('storage/'.$datauser->photo) }}">
    </div>

    <form action="/siswa/store" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="kelas">Kelas PPLG</label><br>
            <select name="kelas_id">
                @foreach($clases as $clas)
                    <option {{ $clas->id == $datauser->clas_id ? 'selected' : '' }} value="{{ $clas->id }}">{{ $clas->name }}</option>
                @endforeach
            </select>
        </div><br>
        @error('kelas_id')
            <small>{{ $message }}</small>
        @enderror

        <div>
            <label for="name">Nama:</label><br>
            <input type="text" name="name" value="{{ $datauser->name }}">
            <br>
            @error('name')
                <small>{{ $message }}</small>
            @enderror
        </div><br>

        <div>
            <label for="nisn">NISN:</label><br>
            <input type="text" name="nisn" value="{{ $datauser->nisn }}">
            <br>
            @error('nisn')
                <small>{{ $message }}</small>
            @enderror
        </div><br>

        <div>
            <label for="no_handphone">No Handphone:</label><br>
            <input type="text" name="no_handphone" value="{{ $datauser->no_handphone }}">
            <br>
            @error('no_handphone')
                <small>{{ $message }}</small>
            @enderror
        </div><br>

        <div>
            <label for="email">Email:</label><br>
            <input type="text" name="email" value="{{ $datauser->email }}">
            <br>
            @error('email')
                <small>{{ $message }}</small>
            @enderror
        </div><br>

        <div>
            <label for="password">Password:</label><br>
            <input type="password" name="password">
            <small style="color: #0040ff">Abaikan jika tidak ingin diubah</small>
            <br>
            @error('password')
                <small>{{ $message }}</small>
            @enderror
        </div><br>

        <div style="margin-bottom: 15px;">
            <label for="photo" style="display: block; margin-bottom: 5px; font-weight: bold; color: #e91e63;">
                📷 Upload Photo
            </label>
            <input type="file" name="photo" style="padding: 6px; border: 1px solid #e91e63; border-radius: 6px; background-color: #fce4ec;">
        </div>

        <button type="submit">
            Simpan
        </button>
        <br><br>

        <a href="/">Kembali</a>
    </form>
</body>
</html>
