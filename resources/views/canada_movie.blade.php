<h2>Danh sách các bộ phim Canada</h2>

@if($movies->isEmpty())
    <p>Không có phim nào của Canada</p>
@else

    <div style="display: flex; font-weight: bold; border-bottom: 2px solid black; padding: 10px 0;">
        <div style="width: 33%;">Tên phim</div>
        <div style="width: 33%; text-align: center;">Ngày phát hành</div>
        <div style="width: 33%; text-align: center;">Thời lượng</div>
    </div>

    @foreach($movies as $m)
        <div style="display: flex; border-bottom: 1px solid #ccc; padding: 10px 0;">
            <div style="width: 33%;">{{ $m->movie_name }}</div>
            <div style="width: 33%; text-align: center;">{{ $m->release_date }}</div>
            <div style="width: 33%; text-align: center;">{{ $m->runtime }} phút</div>
        </div>
    @endforeach

@endif