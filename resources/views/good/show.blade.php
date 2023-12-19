@extends('layouts.main')

@section('content')
<table class="table m-auto mb-3 w-50">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">{{$good->id}}</td>
            <td>{{$good->name}}</td>
            <td>{{$good->description}}</td>
            <td>{{$good->image}}</td>
            <td>{{$good->price}}</td>
        </tr>
    </tbody>
  </table>
  <div class="m-auto w-50 d-flex flex-row gap-2">
    <div>
      <a class="btn btn-primary" href="{{route('good.index')}}">Back</a>
    </div>
    <div>
      <a class="btn btn-warning" href="{{route('good.edit', $good->id)}}">Update</a>
    </div>
    <div>
      <form action="{{route('good.delete', $good->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" class="btn btn-danger" value="Delete">
      </form>
    </div>
  </div>
@endsection