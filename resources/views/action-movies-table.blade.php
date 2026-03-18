<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phim hành động</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
            margin: 0;
            padding: 20px;
            color: black;
        }
        
        h1 {
            text-align: center;
            color: black;
            margin-bottom: 30px;
            font-size: 28px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
            color: black;
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        
        td {
            padding: 10px;
            border: 1px solid #ddd;
            color: black;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .movie-image {
            width: 60px;
            height: 80px;
            object-fit: cover;
            border: 1px solid #ddd;
        }
        
        .no-data {
            text-align: center;
            color: #666;
            padding: 50px;
            font-size: 18px;
        }
        
        .total {
            margin-top: 20px;
            padding: 10px;
            background-color: #f2f2f2;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>📋 DANH SÁCH PHIM HÀNH ĐỘNG</h1>
    
    @if($movies->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ảnh</th>
                    <th>Tên phim</th>
                    <th>Ngày phát hành</th>
                    <th>Mô tả</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $index => $movie)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            @if($movie->image_link)
                                <img src="{{ $movie->image_link }}" alt="{{ $movie->movie_name }}" class="movie-image">
                            @else
                                <span>Không có ảnh</span>
                            @endif
                        </td>
                        <td><strong>{{ $movie->movie_name }}</strong></td>
                        <td>{{ \Carbon\Carbon::parse($movie->release_date)->format('d/m/Y') }}</td>
                        <td>{{ $movie->overview }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="total">
            <strong>Tổng số:</strong> {{ $movies->count() }} phim hành động
        </div>
    @else
        <div class="no-data">
            <p>Không có phim hành động nào trong cơ sở dữ liệu.</p>
            <p>Vui lòng chạy lệnh: <strong>php artisan db:seed</strong></p>
        </div>
    @endif
</body>
</html>