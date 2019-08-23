@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Section</div>


                    <div class="panel-body">
                        <form method="POST" action="{{url('content/page/'.$content->id.'/update')}}">

                            {{csrf_field()}}
                            <div class="form-group">
                                <label >Section Name:</label>
                                <input type="text" value="{{$content->name}}" name="name" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="pwd">content:</label>
                                <textarea name="content" class="form-control" rows="5" id="comment">{{$content->content}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="comment">Short Description</label>
                                <input name="description" value="{{$content->description}}" class="form-control" id="comment">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection