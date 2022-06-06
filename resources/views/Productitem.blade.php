@extends('Layout.navigation')
@section('content')

<h1>Product Item Table</h1>
   
    <table border="5">
        <tr>
            <th>Product_Name</th>
            <th>Product_ID</th>
            <th>Price</th>
        </tr>
        @foreach($proitem as $pro)
            <tr>
                <td>{{$pro->name}}</td>
                <td>{{$pro->id}}</td>
                <td>{{$pro->price}}</td>
            </tr>
        @endforeach
    </table>
@endsection