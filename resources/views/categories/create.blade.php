@extends('layouts.app')
@section('content')
<div class="card card-defult">
    <div class="card-body">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                 {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
    @endif
        <form action="{{route('catagories.store')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name='name' id='name'>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Add Category</button>
            </div>
        </form>
    </div>
</div>
@endsection