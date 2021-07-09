@extends('layout')


@section('content')

<form action="/createsubmit" method="POST" class="col-lg-5 bg-light m-auto ">
    @csrf
    <div class="mb-3 ">
        <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name = 'name' class="form-control" id="name" >
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" name = 'email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name = 'password' type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary btn-lg ">Submit</button>
</form>

@endsection
