<h2>TÍNH TUỔI</h2>

<form action="{{ url('tinhtuoi') }}" method="post">
    Nhập năm sinh:
    <input type="text" name="namsinh">
    <br><br>

    <input type="submit" value="Tính tuổi">

    {{ csrf_field() }}
</form>