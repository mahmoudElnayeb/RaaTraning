@extends('register')
@section('navbar')
    <div style="color: red">
          <p> Home / User / Register</p>
    </div>
@endsection
@section('content')
    
      {{ Form::open([ 'method'=>'post' , 'route' =>'user.store' ]) }}
                  @csrf
      <div class="form-group">
        <label for="title"> Title </label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="content"> Content  </label>
        <input type="text" name="content" id="content" class="form-control">
    </div>
    <select class="form-control" name="status">
       @foreach($status as $item) 
                <option value="{{$item}}"> {{ ucfirst($item) }} </option>
                {{-- <option value="active"> Active </option> --}}
        @endforeach
      </select>
      <div class="form-group">
        <label for="user_id"> User Id  </label>
        <input type="text" name="user_id" id="user_id" class="form-control">
    </div>
    {{-- <input type='hidden' name='_token' value={{ csrf_token() }}> --}}
    <button type="submit"> Send </button>

       {{ Form::close() }}
@endsection