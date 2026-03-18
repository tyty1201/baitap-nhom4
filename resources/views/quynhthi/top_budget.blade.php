<!DOCTYPE html>
<html>
<head>
    <title>Top 10 Budget Movies</title>
    <style>
        body { font-family: "Times New Roman", Times, serif; padding: 20px; }
        h1 { font-size: 24px; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px 5px; text-align: left; border-bottom: 1px solid #ddd; }
        th { font-size: 18px; }
    </style>
</head>
<body>

    <h1>Danh sách 10 bộ phim có doanh thu cao nhất</h1>

    <table>
        <thead>
            <tr>
                <th>Tên phim</th>
                <th>Ngày phát hành</th>
                <th>Doanh thu (Budget)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->movie_name }}</td>
                <td>{{ $movie->release_date }}</td>
                <td>{{ number_format($movie->budget) }} USD</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>