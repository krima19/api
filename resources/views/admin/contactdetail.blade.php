@extends('admin.common')
@section('content')
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div class="table-agile-info">
	
    <div class="panel-heading">
     Contact Details
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
              <th class="text-center">Name</th>
							<th class="text-center">Email</th>
							
							                                       
							<th class="text-center">Delete </th>	                                       
                             </tr>
                             </thead>
        <tbody>
           <?php $i=0;?>
        @foreach($contact as $item)
            <?php $i++;?>   
					   <tr>  
                <td>{{$i}}</td>  
                <td>{{$item->name}}</td>  
                <td>{{$item->email}}</td>  
                 
                <td><a href="{{ URL::to('deletecontact') }}/{{$item->id}}">DELETE</a> </td>
            </tr>  
        @endforeach
  
      
        </tbody>
      </table>
      
     
      </center>
    </div>

</body>
</html>


@endsection
