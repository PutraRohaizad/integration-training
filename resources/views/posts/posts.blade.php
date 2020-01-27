@extends('layouts.app')

@section('content')


{{-- <h1>Search song integrate with JOOX</h1> --}}

<h2>Create Post</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="/posts" method="POST">

    @csrf
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="title">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Body</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="body">
        </div>
    </div>
    <button class="btn btn-danger" type="reset">Reset</button>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>

<table class="table table-striped m-2 text-center">
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Body</th>
    </tr>
    <tr>
        <td>1</td>
        <td>title</td>
        <td>body</td>
    </tr>
</table>
    
   

@endsection