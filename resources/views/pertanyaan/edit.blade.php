@extends('adminlte.master')

@section('content')
<form action="/pertanyaan/{{$data->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="comment">Edit:</label>
    <textarea class="form-control" rows="5" id="comment" name="pertanyaan" ></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  
@endsection