@extends('layouts.app')

@section('content')


<h1>Search song integrate with JOOX</h1>


<form action="/post" method="POST">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Song Title</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="title">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Artist</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="artist">
        </div>
    </div>
    <button class="btn btn-danger" type="reset">Reset</button>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
    
   

@endsection