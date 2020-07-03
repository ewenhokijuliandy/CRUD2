@extends('adminlte.master')

@section('content')

    <form action="/pertanyaan" method='POST'>
    @csrf
    <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea class="form-control" rows="5" id="comment" name="pertanyaan"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  
@endsection