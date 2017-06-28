
<center>
<form method="POST" action="{{url('/insert')}}" class="form-horizontal">
{!! csrf_field() !!}
    <label for="comment">task_name:</label>
  <input type="text" name="task_name" required><br>
  <br>
  
 <label for="comment">task_detail:</label>
      <textarea class="form-control" rows="5" id="comment" name="task_detail" required ></textarea>
      <br>

  <input type="submit" value="Submit" value="save">
</form>

</center>


