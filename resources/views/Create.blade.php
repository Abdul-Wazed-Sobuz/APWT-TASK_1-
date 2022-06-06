@extends('Layout.navigation')
@section('content')
<h1>Create Page</h1>
<br>
<br>

<form action="" method="post">
    {{csrf_field()}}
    Product Name : <input type="text" value="{{old('name')}}" name="name"> </br>
    @error('name')
    <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>

    Product Id : <input type="text" name="id" value="{{old('id')}}"> </br>
    @error('id')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>

    Product Price : <input type="number" name="price" value="{{old('price')}}"> </br>
    @error('price')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>

    <input type="submit" value="Create">

</form>
@endsection