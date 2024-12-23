@extends('template.main')
@section('users', 'active')
@section('judul', 'Table user')
@section('konten')

<div class="card">
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col"></th>
          </tr>
        </thead>
        @foreach ($users as $item)
        <tbody>
            <tr>
              <th>1</th>
              <td>{{$item->name}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->role}}</td>
              <td>
                  
              </td>
            </tr>
          </tbody>
          @endforeach
      </table>
    </div>
  </div>

@endsection
