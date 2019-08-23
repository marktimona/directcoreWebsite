@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Page</div>


                    <div class="panel-body">
                        <form method="POST" action="{{url('pageSave')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label >Name:</label>
                                <input type="text" name="name" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="pwd">Short Description:</label>
                                <input type="text" name="content" class="form-control" id="pwd">
                            </div>
                            <div class="form-group">
                                <label for="comment">Description:</label>
                                <textarea name="description" class="form-control" rows="5" id="comment"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection