@extends('admin.common')
@section('content')
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div class="table-agile-info">
	
    <div class="panel-heading">
     Order Deatils
    </div>
    <br>
    <a href="{{ URL::to('orderview') }}" align="right" class="btn btn-danger">back</a>
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
              <th class="text-center">Image</th>
							<th class="text-center">Name</th>
							<th class="text-center">Category</th>
              <th class="text-center">price</th>
              <th class="text-center">quantity</th>
              <th class="text-center">Total</th>
              </tr>
                  </thead>
        <tbody>
           <?php $i=0;?>
        @foreach($detail as $item)
            <?php $i++;?>   
					   <tr>  
                <td>{{$i}}</td>
                <td><img src="{{URL::to($item->image)}}" alt="news image" class="rounded mx-3" height="150px" width="200px" ></td>  
                <td>{{$item->pname}}</td>  
                <td>{{$item->catname}}</td>  
                <td>{{$item->price}}</td>  
                <td>{{$item->quantity}}</td>  
                <td>{{ $total=($item->price*$item->quantity)  }}</td>  
                
                
                <!-- <td><a href="{{ URL::to('editproduct') }}/{{$item->id}}">EDIT</a></td>   -->
                
            </tr>  
        @endforeach
  
      
        </tbody>
      </table>
      
      </center>
    </div>

</body>
</html>


@endsection
