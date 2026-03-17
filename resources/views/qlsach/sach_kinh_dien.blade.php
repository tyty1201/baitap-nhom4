<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sách Tác Phẩm Kinh Điển</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th, td{
            border:1px solid black;
            padding:8px;
            text-align:center;
        }
        img{
            width:80px;
        }
    </style>
</head>
<body>

<h2>Danh sách sách thuộc thể loại "Tác phẩm kinh điển"</h2>

<table>
<tr>
    <th>STT</th>
    <th>Tên sách</th>
    <th>Nhà xuất bản</th>
    <th>Tác giả</th>
    <th>Giá bán</th>
    <th>Hình ảnh</th>
</tr>

@foreach($sach as $index => $s)
<tr>
    <td>{{ $index + 1 }}</td>
    <td>{{ $s->tieu_de }}</td>
    <td>{{ $s->nha_xuat_ban }}</td>
    <td>{{ $s->tac_gia }}</td>
    <td>{{ number_format($s->gia_ban) }} VNĐ</td>
    <td>
        <img src="{{ $s->link_anh_bia }}" width="120">
    </td>
</tr>
@endforeach

</table>

</body>
</html>