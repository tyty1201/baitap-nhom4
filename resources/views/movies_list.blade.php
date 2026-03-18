<!DOCTYPE html>
<html>
<head>
    <title>Danh sách phim</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Top 10 phim có thời lượng > 120 phút</h1>
    <table>
        <tr>
            <th>Tên bộ phim</th>
            <th>Ngày phát hành</th>
            <th>Thời lượng</th>
        </tr>
        @foreach($movies as $movie)
        <tr>
            <td>{{ $movie->movie_name }}</td>
            <td>{{ $movie->release_date }}</td>
            <td>{{ $movie->runtime }} phút</td>
        </tr>
        @endforeach
    </table>
</body>
</html>