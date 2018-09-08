@extends('layouts.master')
@section('content')
<h2>Register</h2>
<div class="links">
    <a href="{{url('/register')}}">register</a>
    <a href="{{url('/view-data')}}">users</a>
</div>

{!! Form::open(array('route' => 'fileUpload','enctype' => 'multipart/form-data')) !!}

<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" required>
</div>
<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" required>
</div>

<div class="row cancel">
    <div class="col-md-4">
        {!! Form::file('image', array('class' => 'image','required' => 'required')) !!}
    </div>

</div>
<br>
<div class="col-md-4">
    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
</div>
{!! Form::close() !!}
</form>
@endsection
