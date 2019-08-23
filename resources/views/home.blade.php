@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Pages</div>
                <div style="margin: 15px;">
                    <a href="pageCreate" class="btn btn-success btn-sm">New Page</a>
                    <hr>
                </div>


                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>content</th>
                            <th>Created On</th>
                            <th>Page sections</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($pages as $page)
                            <tr>
                                <td>{{$page->id}}</td>
                                <td>{{$page->name}}</td>
                                <td>{{$page->content}}</td>
                                <td>{{$page->created_at}}</td>
                                <td><a href="content/page/{{$page->id}}" class="btn btn-info btn-xs">Page Content</a></td>
                                <td><a href="{{url('/page/'.$page->id.'/edit')}}" class="btn btn-success btn-xs">Edit</a></td>
                                <td><a href="" class="btn btn-danger btn-xs">Delete</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
