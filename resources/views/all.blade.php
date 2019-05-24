@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">articles</div>

                    <div class="card-body">

                        @foreach($arr as $one)
                            <p>
                            <a href="{{asset($one->url)}}">
                                {{$one->name}}
                            </a>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
