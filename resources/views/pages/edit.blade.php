@extends('layout.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pages.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
        There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('pages.update',$page->id) }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$page->id}}">
   
     <div class="row">
     <div class="col-md-3 mb-3">
            <div class="form-group">
                <label for="Parent" class="form-label"><strong>Parent</strong></label>
                <select class="form-control" id="parent" name="parent">
                    @if(count($pages) > 0)
                    <option value="0">None</option>
                    @foreach($pages as $pag)
                        <option value="{{$pag->id}}"  >{{$pag->title}}</option>
                    @endforeach
                        
                    @else
                        <option value="0">None</option>
                    @endif
                </select>
                </div>
        </div>
     
        <div class="col-md-9 mb-3">
            <div class="form-group">
                <label for="Title" class="form-label"><strong>Title</strong></label>
                <input type="text" name="pageTitle" class="form-control" value="{{ $page->title }}">
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="form-group">
                <label for="Content" class="form-label"><strong>Content</strong></label>
                <textarea class="form-control" style="height:150px" name="pageContent">{{ $page->content }}</textarea>
            </div>
        </div>
        <div class="col-md-12 text-left mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection