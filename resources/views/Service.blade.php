
@extends('Layout.navigation')
@section('content')

<h1>Product Table</h1>
   
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>Code Number</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</a></td>
                <td>{{$product->code}}</td>
            </tr>
        @endforeach
    </table>
@endsection