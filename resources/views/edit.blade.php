@extends('master.app')
@section('title', 'Page Title')
@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                        <h1 class="text-center">Todo App</h1>
                        <form action="{{route('todo.update',['id'=>$todo->id])}}" class="form-horizontal" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="control-label col-sm-2">Name</label>
                                <input type="text" class="form-control col-md-10" id="name" name="name" value="{{$todo->name}}">
                            </div>
                        <button  type="submit" class=" col-md-offset-2 btn btn-raised btn-primary">Editer</button>
                    </form>
                </div>
            </div>
    </div>
@stop

