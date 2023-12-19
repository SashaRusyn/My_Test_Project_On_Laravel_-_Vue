@extends('layouts.main')

@section('content')
<edit-component class="m-auto w-50" id="{{$good->id}}" name="{{$good->name}}" description="{{$good->description}}" image="{{$good->image}}" price="{{$good->price}}"></edit-component>
{{-- <form action="{{route('good.update', $good->id)}}" method="post" class="m-auto w-50">
    @csrf
    @method('patch')
    <div class="form-group mb-3">
      <label for="exampleInputName">Name</label>
      <input type="text" class="form-control" value="{{$good->name}}" name="name" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter name">
    </div>
    <div class="form-group mb-3">
      <label for="exampleInputDescription">Description</label>
      <textarea type="text" class="form-control" name="description" id="exampleInputDescription" placeholder="Enter description">{{$good->description}}</textarea>
    </div>
    <div class="form-group mb-3">
        <label for="exampleInputImage">Image</label>
        <input type="text" class="form-control" value="{{$good->image}}" name="image" id="exampleInputImage" placeholder="Enter image">
    </div>
    <div class="form-group mb-3">
        <label for="exampleInputPrice">Price</label>
        <input type="number" class="form-control" value="{{$good->price}}" name="price" id="exampleInputPrice" placeholder="Enter price">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form> --}}
@endsection