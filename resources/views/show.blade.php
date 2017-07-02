

<center>

<table border="1" cellpadding="10">
<tr>
	<th>
		Task name 
	</th>
	<th>
		Task details 
	</th>
	<th>
		Task created at  
	</th>
	<th>
		Task updated at
	</th>
	<th>
		action 
	</th>
	<th>
		action
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


     
	<td>
		
		{{$value->created_at}}
	</td>

	<td>
		
		{{$value->updated_at}}
	</td>

	<td>
	<a href = 'edit/{{ $value->id }}'><button> Edit</button></a>
	</td>

	<td>
	<a href = 'delete/{{ $value->id }}'><button>delete</button></a>
	</td>

</tr>


	
	





@endforeach



</table>

</center>
