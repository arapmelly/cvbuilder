@extends('layouts.cvbuilder')

@section('content')


    <div class="jumbotron jumbotron-fluid">
        <div class="cv-tabs">
            <div class="container">
                <tab-component :resume="resume"></tab-component>
            </div>
        </div>
        <div class="container cv-preview" >
            <cvbuilder-component :resume_data="{{$resumeData}}"></cvbuilder-component>
        </div>
    </div>

@endsection
