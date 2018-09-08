<!DOCTYPE html>
<html>
<head>
	<title>YiGO Name - @yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="//datatables.net/download/build/nightly/jquery.dataTables.css" rel="stylesheet" type="text/css" />

	<link href="//datatables.net/download/build/dataTables.responsive.nightly.css?_=10286c5adce287862954c6f702966dd3.css" rel="stylesheet" type="text/css" />
</head>
<body>
	@section('sidebar')

	@show

	<div class="container">
		@yield('content')
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//datatables.net/download/build/nightly/jquery.dataTables.js"></script>
	<script src="//datatables.net/download/build/dataTables.responsive.nightly.js?_=10286c5adce287862954c6f702966dd3"></script>
	<script type="text/javascript">
		$("table.transaction-table").DataTable({
			responsive: true
		});
		function myFunction(e) {
			var baseUrl = window.location.protocol + "//" + window.location.host;
			if (confirm('Are You Sure?')){
				window.location = baseUrl+"/blog/destroy/"+e;
			}else{
				return false;
			}
		}
	</script>
</body>
</html>