<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa PPLG</title>

    <!-- Import font aesthetic dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff0f5; /* pink muda */
            color: #e91e63;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #e91e63;
            font-weight: 700;
            letter-spacing: 1px;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 15px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0px 6px 12px rgba(233, 30, 99, 0.15);
        }
        label {
            font-weight: 500;
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #e91e63;
            border-radius: 8px;
            background-color: #ffe4ec;
            margin-bottom: 12px;
            font-size: 14px;
        }
        input[type="file"] {
            background-color: white;
        }
        small {
            color: red;
            font-size: 12px;
        }
        button, a {
            background-color: #e91e63;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        button:hover, a:hover {
            background-color: #d81b60;
            transform: scale(1.05);
        }
        .upload-label {
            font-weight: bold;
            color: #e91e63;
        }
    </style>
</head>
<body>
<h1>Halaman Siswa PPLG</h1>

<form action="/siswa/store" method="post" enctype="multipart/form-data">
    @csrf

    <label for="kelas">Kelas PPLG</label>
    <select name="kelas_id">
        @foreach($clases as $clas)
            <option value="{{ $clas->id}}">{{ $clas->name }}</option>
        @endforeach
    </select>
    @error('kelas_id') <small>{{ $message }}</small> @enderror

    <label for="name">Nama:</label>
    <input type="text" name="name">
    @error('name') <small>{{ $message }}</small> @enderror

    <label for="nisn">NISN:</label>
    <input type="text" name="nisn">
    @error('nisn') <small>{{ $message }}</small> @enderror

    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat">
    @error('alamat') <small>{{ $message }}</small> @enderror

    <label for="no_handphone">No Handphone:</label>
    <input type="text" name="no_handphone">
    @error('no_handphone') <small>{{ $message }}</small> @enderror

    <label for="email">Email:</label>
    <input type="text" name="email">
    @error('email') <small>{{ $message }}</small> @enderror

    <label for="password">Password:</label>
    <input type="password" name="password">
    @error('password') <small>{{ $message }}</small> @enderror

    <label for="foto" class="upload-label">📷 Upload Photo</label>
    <input type="file" name="foto">

    <button type="submit">Simpan</button>
    <a href="/">Kembali</a>
</form>

</body>
</html>
