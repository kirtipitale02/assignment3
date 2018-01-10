<!DOCTYPE html>
<html lang="en">
<head>
	<title>Countries List</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

</head>
<style type="text/css">
.filter-select
{
	margin-top: 5%
}

#myTable {
  border-collapse: collapse;
  width: 100%;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

 #myTable tr:hover {
  background-color: #f1f1f1;
}</style>
<body>

	<div class="container">
		
		<h2 align="center">Countries With ISO code(ISO2 and ISO3)</h2>
		<div class="row filter-select">
			<div class="col-md-1"><h4>Filter </h4> </div>
			<form id="filter-form" action="{{url('filter-countries')}}" method="get">
				<div class="col-md-3">
					<select class="form-control" id="iso2" name="iso2" >
						<option value='all'> Select code</option>
						@foreach ($country_code as $retrive)

						<option {{ $iso2 ==$retrive->iso2 ? "selected" :''}} value="{{ $retrive->iso2 }}">{{  $retrive->name .' ('.$retrive->iso2.') '}}</option>

						@endforeach
					</select>

				</div>
			</form>
		</div>
		@if(empty(json_decode($countries_data)))

		<h4 align="center">No data found</h4>
		@else 

		<table class="table table-striped table-responsive" id="myTable">
			<thead>
				<tr>
					<th style="width:40%;">Name</th>
					<th style="width:30%;">ISO2</th>
					<th style="width:30%;">ISO3</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach (json_decode($countries_data) as $retrive)
				<tr>
					<td>{{ $retrive->name }}</td>
					<td>{{ $retrive->iso2 }}</td>
					<td>{{ $retrive->iso3 }}</td>
					
				</tr>

				@endforeach



			</tbody>
		</table>
		@endif
	</div>

</body>
</html>
<script>
document.getElementById("iso2").addEventListener("change",function(){
document.getElementById('filter-form').submit();
})
</script>