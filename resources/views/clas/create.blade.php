<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kelas PPLG</title>

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
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #e91e63;
            border-radius: 8px;
            background-color: #ffe4ec;
            margin-bottom: 12px;
            font-size: 14px;
        }
        textarea {
            resize: vertical;
            min-height: 80px;
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
    </style>
</head>
<body>
<h1>Halaman Kelas PPLG</h1>

<form action="/kelas/store" method="post">
    @csrf

    <label for="name">Nama Kelas:</label>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name') <small>{{ $message }}</small> @enderror

    <label for="description">Deskripsi:</label>
    <textarea name="description">{{ old('description') }}</textarea>
    @error('description') <small>{{ $message }}</small> @enderror

    <button type="submit">Simpan</button>
    <a href="/kelas">Kembali</a>
</form>

</body>
</html>
