<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail kelas</title>
    
</head>
<body>

    <div>
        <h1>📋 Detail kelas</h1>


        <table>
            <tr>
                <th>Nama</th>
                <td>{{ $dataclass->name }}</td>
            </tr>
            <tr>
                <th>DESKRIPSI</th>
                <td>{{ $dataclass->description }}</td>
            </tr>
            
        </table>

        <a href="/kelas" class="btn-back">← Kembali</a>
    </div>

</body>
</html>
