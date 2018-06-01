<br>
<br>
<br>
<pre>
{{ print_r( Session::all() ) }}
</pre>
<form method="post" action="{{ route('contact',array('name'=>'hello')) }}">
	Имя <br>
	<input type="text" name = "name" id = 'name' value="{{ old('name') }}"><br>
	Текст<br>
	<input type="text" name = "text" id = 'text' value="{{ old('text') }}"><br>
	<input type="submit" value= "Отправить"><br>
</form>