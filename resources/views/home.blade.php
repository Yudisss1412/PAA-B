@extends('master')
@section('konten')
<h3>Tampil Data User</h3>
<a class="btn btn-success" href="{{route('tambahuser')}}"><i class="fa fa-plus"></i> Tambah User</a><br><br>
<table class="table table-bordered table-hover">
  <tr>
    <th>#ID</th>
    <th>username</th>
    <th>email</th>
  </tr>
@foreach($users as $s) 
  <tr>
    <td>{{$s->id_user}}</td>
    <td>{{$s->username}}</td>
    <td>{{$s->email}}</td>
    <td>
      <a href="/user/ubah/{{$s->id_user}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
      <a href="/user/hapus/{{$s->id_user}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
  </tr>
  @endforeach
</table>
@endsection
