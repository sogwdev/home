<!doctype = html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="{{ asset('css/template.css') }}">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script src="{{ asset('js/app.js') }}"></script>



	<title>{{$prefname}} の思い出</title>
</head>
<body>
	<div id = "main">
	<table>
		<tr class = "header"><th id = "hd-spot"><span id = "spot">SPOT</span></th>
		<th id = "hd-impression"><span id = "impression">IMPRRESSION</span></th></tr>
		@foreach ($contributioncontents as $content)
		<tr>
			<td id = "spotcontent">{{$content->spot}}</td>
			<td id = "reviewcontent">{{$content->review}}</td>
		</tr>
		@endforeach
	</table>

	</div>



</body>
</html>
