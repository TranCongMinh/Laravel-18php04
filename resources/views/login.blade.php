<h1>Test Form</h1>
<form action="{{route('MinhLogin2')}}" method="post">
	{!! csrf_field() !!} 
	<!-- Nhớ nhờ thầy giải thích hộ đoạn này bị lỗi TokenMismatchException -->
	<input type="text" name="NameLogin"></br>
	<input type="password" name="Pass">
	<button type="submit">Gửi</button>

</form>