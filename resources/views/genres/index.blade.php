<!DOCTYPE html>
<html>
<head>
    <title>Danh sách thể loại phim</title>
    <style>
        table {
            border-collapse: collapse; /* gộp viền -> nét đơn */
            width: 60%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid black; /* viền đơn */
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2; /* highlight tiêu đề */
            font-weight: bold;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Danh sách thể loại phim</h1>

<table>
    <tr>
        <th>Tên thể loại (English)</th>
        <th>Tên thể loại (Tiếng Việt)</th>
    </tr>

    @foreach($genres as $genre)
    <tr>
        <td>{{ $genre->genre_name }}</td>
        <td>{{ $genre->genre_name_vn }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>
</html>