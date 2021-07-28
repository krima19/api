@extends('admin.common')
@section('content')
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div class="table-agile-info">
	
    <div class="panel-heading">
     Category Table
    </div>
  <center>
    
      <table class="table text-center" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
         <thead class="text-center">
                             <tr >
							 <th class="text-center">ID</th>
							<th class="text-center">Category name</th>
							
							<th class="text-center">Edit category</th>	                                       
							<th class="text-center">Delete category</th>	                                       
                             </tr>
                             </thead>
        <tbody>
           <?php $i=0;?>
        @foreach($cat as $item)
            <?php $i++;?>   
					   <tr>  
                <td>{{$i}}</td>  
                <td>{{$item->catname}}</td>  
                <td><a href="{{ URL::to('editcat') }}/{{$item->id}}">EDIT</a></td>  
                <td><a href="{{ URL::to('deletecat') }}/{{$item->id}}">DELETE</a> </td>
            </tr>  
        @endforeach
  
      
        </tbody>
      </table>
      
      <a  href="{{ URL::to('addcat') }}"><button class="btn btn-danger">Add category</button></a>
      </center>
    </div>

</body>
</html>


@endsection
