@extends('adminlte.master')

@section('content')
  <h1>Daftar Pertanyaan</h1>
  <form action="/pertanyaan/create">
    <button type="submit" class="btn btn-md btn-info">Pertanyaan Baru</button>
  </form>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Pertanyaan</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pertanyaan as $key => $q)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $q->pertanyaan }}</td>
                <td>
                <a href="/pertanyaan/{{$q->id}}/edit" class="btn btn-sm btn-info">edit</a>
                <form style="display:inline" action="/pertanyaan/{{$q->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
@endsection