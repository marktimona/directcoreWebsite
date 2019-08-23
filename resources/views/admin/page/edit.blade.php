@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Page</div>


                    <div class="panel-body">
                        <form method="POST" action="{{url('/page/'.$page->id.'/update')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label >Name:</label>
                                <input type="text" value="{{$page->name}}" name="name" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="pwd">Short Description:</label>
                                <input type="text" value="{{$page->content}}" name="content" class="form-control" id="pwd">
                            </div>
                            <div class="form-group">
                                <label for="comment">Description:</label>
                                <textarea name="description" class="form-control" rows="5" id="comment">{{$page->description}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection