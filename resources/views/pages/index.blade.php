@extends('layout.master')
 
@section('content')
    <div class="row mb-3 mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-3">
                <h3>Pages List</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pages.create') }}">Add new</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <!-- <th>Email</th> -->
            <th width="280px">Action</th>
        </tr>
        @foreach ($pages as $page)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $page->title }}</td>
            <td>
               
   
                    <a class="btn btn-info" href="{{ route('pages.show',$page->slug) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pages.edit',$page->id) }}">Edit</a>

                    <a class="btn btn-danger" href="{{ route('pages.destroy', $page->id) }}">Delete</a>
   
                    @csrf
                    
      
                
              
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pages->links() !!}
      
@endsection