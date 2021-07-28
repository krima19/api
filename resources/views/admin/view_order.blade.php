@extends('admin.common')
@section('content')
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div class="table-agile-info">
	
    <div class="panel-heading">
     Orders
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
							<!-- <th class="text-center">product Id</th> -->
							<th class="text-center">User Id</th>
              <th class="text-center">Address</th>
              <th class="text-center">Status</th>
              
							<th class="text-center">Payment Method</th>	                                       
							<th class="text-center">Payment Status</th>	
              <th class="text-center">Action</th>

                             </tr>
                             </thead>
        <tbody>
           <?php $i=0;?>
        @foreach($order as $item)
            <?php $i++;?>   
					   <tr>  
                <td>{{$i}}</td>  
                <!-- <td>{{$item->product_id}}</td>   -->
                <td>{{$item->user_id}}</td>  
                <td>{{$item->address}}</td>  
               <!--  <td>{{$item->status}}</td>   -->

                <td class="center">
                  {{$item->status}}
             <!--  @if($item->status=='processing')
                <span>processing</span>
              @elseif($item->status=='pending')
                <span>pending</span>
              @else
                <span>{{$item->status}}</span>
              @endif -->
            </td> 

                <td>{{$item->payment_method}}</td>  
                <td>{{$item->payment_status}}</td>  
                
                <!-- <td><a href="{{ URL::to('editproduct') }}/{{$item->id}}">EDIT</a></td>   -->
                <td>

                @if($item->status=='processing')
                  <a class="btn btn-danger" href="{{URL::to('/unactive_order/'.$item->id)}}">
                        <i>pending</i>  
                      </a>
                @elseif($item->status=='pending')
                  <a class="btn btn-success" href="{{URL::to('/active_order/'.$item->id)}}">
                  <i>processing</i>  
                  </a>
                @else
                   <i></i>
                   
                @endif

                    <a href="{{ URL::to('orderviewmap') }}/{{$item->id}}" class="btn btn-danger">view</a> 
                </td>
            </tr>  
        @endforeach
  
      
        </tbody>
      </table>
      
      </center>
    </div>

</body>
</html>


@endsection
