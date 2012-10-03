@if($errors->has())
	<ul>
		{{ $errors->first('name', '<li>:message</li>') }}
		{{ $errors->first('bio', '<li>:message</li>') }}
	</ul>
@endif