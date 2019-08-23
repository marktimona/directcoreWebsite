@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Page Content Section</div>

                    <div style="margin: 15px;">
                        <a href="{{url('/home')}}" class="btn btn-primary btn-sm">Back</a>
                        <a href="{{url('/content/page/create/'.$page->id)}}" class="btn btn-success btn-sm">New Content Section</a>
                        <hr>

                    <div class="panel-body">




                                        <div class="panel-body">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Page</th>
                                                    <th>Section Name</th>
                                                    <th>Description</th>
                                                    <th>Created On</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($contents as $content)
                                                    <tr>
                                                        <td>{{$content->id}}</td>
                                                        <td>{{$content->page->name}}</td>
                                                        <td>{{$content->name}}</td>
                                                        <td>{{$content->description}}</td>
                                                        <td>{{$content->created_at}}</td>
                                                        <td><a href="{{url('content/page/'.$content->id.'/edit')}}" class="btn btn-success btn-xs">Edit</a></td>
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
        </div>
    </div>
@stop