@extends('layout.master')
  
@section('content')
<div class="row mb-3">
    <div class="col-lg-12 margin-tb mt-5">
       
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('pages.index')}}"> Back</a>
        </div>
    </div>
</div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h1>{{ $page->title }}</h1>
            <p> {{ $page->content }}</p>
        </div>
        
    </div>
@endsection