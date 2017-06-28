

<center>

<table border="1" cellpadding="10">
<tr>
	<th>
		Task name 
	</th>
	<th>
		Task details 
	</th>

</tr>
	

@foreach($data as $value)


<tr>
	
	<td>
		
		{{$value->task_name}}
	</td>



	
	<td>
		
		{{$value->task_detail}}
	</td>

</tr>

<tr>
	
	<td><a href = 'edit/{{ $value->id }}'><button> Edit</button></a></td>
	<td><a href = 'delete/{{ $value->id }}'><button>delete</button></a></td>

</tr>

<tr>
	
	

</tr>


@endforeach



</table>

</center>