@extends('admin.common')
@section('content')
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div class="table-agile-info">
	
    <div class="panel-heading">
     Customer Deatils
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
							 <th class="text-center">User Id</th>
							<th class="text-center">User Name</th>
							<th class="text-center">Email Id</th>
                                                     
                             </tr>
                             </thead>
        <tbody>
           <?php $i=0;?>
        @foreach($user as $item)
            <?php $i++;?>   
					   <tr>  
                <td>{{$i}}</td>  
                <td>{{$item->id}}</td>  
                <td>{{$item->name}}</td>  
                <td>{{$item->email}}</td>  
                
                
                <!-- <td><a href="{{ URL::to('editproduct') }}/{{$item->id}}">EDIT</a></td>  
                <td><a href="{{ URL::to('deleteproduct') }}/{{$item->id}}">DELETE</a> </td> -->
            </tr>  
        @endforeach
  
      
        </tbody>
      </table>
      
      </center>
    </div>

</body>
</html>


@endsection
