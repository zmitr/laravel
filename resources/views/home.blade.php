@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<form method=POST action="{{asset('home')}}">
{!!csrf_field()!!}
  <div class="form-group">
    <label for="glassname">Название </label>
    <input class="form-control" id="exampleInputEmail1" name ="name" placeholder="Название">
	@if ($errors->has('name'))
	<b>
		{{$errors->first('name')}}
	</b>
	@endif
  </div>
  <div class="form-group">
    <label for="exampleDescription">Описание</label>
  	<textarea rows="10" cols="45" name="body"></textarea></p>
  </div>
	<div>
	<label for="razdel">Раздел </label>
    <select name="nameselect">
	  <option>Пункт 1</option>
	  <option>Пункт 2</option>
	</select>
	
  </div>
  
  <div class="form-group">
    <label for="exampleInputFile">Изображение</label>
    <input type="file" id="exampleInputFile">
    
  </div>
  
  <button type="submit" class="btn btn-default">Сохранить</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
