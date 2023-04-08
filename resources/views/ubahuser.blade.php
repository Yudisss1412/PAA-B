@extends('master')
@section('konten')
<h3>Ubah Data User</h3>
  @foreach($ubah as $s)
    <form method="post" action="{{route('updateuser')}}">
      @csrf
      <input type="hidden" name="id_user" value="{{$s->id_user}}">
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="{{$s->email}}" class="form-control" placeholder="Email" required="">
      </div>
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" value="{{$s->username}}" class="form-control" placeholder="Username" required="">
        </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
      </div>
    </form>
  @endforeach
@endsection