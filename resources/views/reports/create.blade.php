@extends('layouts.app')
@section('content')

<h3> New Report Form</h3>


<img src="https://cdn.shopify.com/s/files/1/0840/8370/3830/articles/1603898809-image3-1.jpg?v=1714646986" style="width: 100%; height: responsive;" class="img-fluid" alt="Image description">




<form action = "/reports" method = "POST" class="form-group">
    @csrf






Title : <input type="text" placeholder="please insert report title" name="title" class="form-control"><br>
@if($errors->has ('title'))<span>
    {{$errors->first('title')}}</span> 
    @endif<br>
Description : <br>
 <textarea name= "description" class="form-control"></textarea><br>
 @if($errors->has ('description'))<span>
    {{$errors->first('description')}}</span> 
    @endif<br>
Priority : <select name="priority" class="form-control"> 
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
</select><br>
<input type="submit" class="btn btn-dark" value="Hantar">
<input type="reset" class="btn btn-warning" value="Batal la.. Silap"><br>
</form>
@endsection