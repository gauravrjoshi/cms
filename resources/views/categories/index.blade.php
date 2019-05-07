@extends('layouts.app')
@section('content')
<div class="card card-defult">
<div class="d flex justify-contnet-end mb-2">
    <a href="{{route('catagories.create')}}" class="btn btn-success float-right">Add Category</a>
</div>

    <div class="card-header">
        Categories
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Name</th>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr><td>
                {{$category->name}}
                </td></tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection