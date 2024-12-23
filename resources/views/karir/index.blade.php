@extends('template.main')
@section('karir', 'active')
@section('judul', 'Table Karir')
@section('konten')

  <div class="card">
    <div class="m-3 d-flex justify-content-end">
      <a href="/daftar" class="btn btn-primary m-1">Daftar</a>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Kota</th>
            <th scope="col">Bidang</th>
            <th scope="col">Skill</th>
            <th scope="col"></th>
          </tr>
        </thead>
        @foreach ($karir as $item)
        <tbody>
            <tr>
              <th>1</th>
              <td>{{$item->name}}</td>
              <td>{{$item->kota}}</td>
              <td>{{$item->bidang}}</td>
              <td>{{$item->skill}}</td>
              <td>
                  <a href="{{ route('karir.show', $item->id) }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                      <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14"/>
                    </svg>
                  </a>  
                  <a href="" class="btn btn-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                    </svg>  
                  </a>  
              </td>
            </tr>
          </tbody>
          @endforeach
      </table>
    </div>
  </div>

@endsection
