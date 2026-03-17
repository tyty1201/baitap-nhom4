<!DOCTYPE html>
<html>
<head>
    <title>Top 10 Phim Điểm Cao</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Danh sách 10 bộ phim có điểm bình chọn cao nhất</h1>
    <table>
        <tr>
            <th>Tên phim</th>
            <th>Ngày phát hành</th>
            <th>Điểm trung bình</th>
        </tr>
        @foreach($movies as $movie)
        <tr>
            <td>{{ $movie->movie_name }}</td>
            <td>{{ $movie->release_date }}</td>
            <td><strong>{{ $movie->vote_average }}</strong></td>
        </tr>
        @endforeach
    </table>
</body>
</html>