@extends('admin.common')
@section('content')
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div class="table-agile-info">
	
    <div class="panel-heading">
     Product Table
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
							<th class="text-center">product name</th>
							<th class="text-center">Category name</th>
              <th class="text-center">price</th>
              <th class="text-center">image</th>
              
							<th class="text-center">Edit category</th>	                                       
							<th class="text-center">Delete category</th>	                                       
                             </tr>
                             </thead>
        <tbody>
           <?php $i=0;?>
        @foreach($product as $item)
            <?php $i++;?>   
					   <tr>  
                <td>{{$i}}</td>  
                <td>{{$item->pname}}</td>  
                <td>{{$item->catname}}</td>  
                <td>{{$item->price}}</td>  
                <td>
                <img src="{{URL::to($item->image)}}" style="height: 100px; width: 100px;">
                </td>
                <td><a href="{{ URL::to('editproduct') }}/{{$item->id}}" class="btn btn-danger">EDIT</a></td>  
                <td><a href="{{ URL::to('deleteproduct') }}/{{$item->id}}" class="btn btn-danger" >DELETE</a> </td>
            </tr>  
        @endforeach
  
      
        </tbody>
      </table>
      
      <a  href="{{ URL::to('addproduct') }}"><button class="btn btn-danger">Add product</button></a>
      </center>
    </div>

</body>
</html>


@endsection
