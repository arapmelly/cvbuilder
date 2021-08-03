@extends('layouts.cvbuilder')

@section('content')


    <div class="jumbotron jumbotron-fluid">
        <div class="container" >
            <cvbuilder-component :resume_data="{{$resumeData}}"></cvbuilder-component>
        </div>
    </div>

@endsection
