<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
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
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #e91e63;
            border-radius: 8px;
            background-color: #fff;
            font-size: 14px;
        }
        textarea {
            resize: none;
            height: 80px;
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
    </style>
</head>

<body>
    <h1>✏️ Edit Kelas</h1>

    <div class="form-container">
        <form action="/kelas/update/{{$kelas->id}}" method="post">
            @csrf

        <div>
                <label>Nama Kelas</label>
                <input type="text" name="name" value="{{ $kelas->name }}">
                @error('name') 
                <small>{{ $message }}</small>
                 @enderror
            </div><br>

            <div>
                <label>Deskripsi</label>
                <textarea name="description">{{ $kelas->description }}</textarea>
                @error('description')
                 <small>{{ $message }}</small>
                 @enderror
            </div><br>

            <button type="submit">💾 Simpan</button>
            <a href="/kelas"> ⬅ Kembali</a>
        </form>
    </div>
</body>
</html>
