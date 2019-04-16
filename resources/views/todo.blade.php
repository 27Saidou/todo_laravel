@extends('master.app')
@section('title', 'Page Title')
@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                        <h1 class="text-center">Todo App</h1>
                        <form action="{{route('todo.save')}}" class="form-horizontal" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="control-label col-sm-2">Name</label>
                                <input type="text" class="form-control col-md-10" id="name" name="name">
                            </div>
                        <button  type="submit" class=" col-md-offset-2 btn btn-raised btn-primary">ajouter</button>
                    </form>
                </div>
                <div class="col-md-6 col-md-offset-3">
                <ul class="paginate">
                    @foreach ($todos as $todo)
                        <li class="list-group-item">
                            {{$todo->name}}&nbsp;
                            <a href="{{route ('todo.delete', ['id'=>$todo->id])}}" class="btn btn-raised btn-sm btn-danger">delete</a>
                            <a href="{{route ('todo.edit', ['id'=>$todo->id])}}" class="btn btn-raised btn-sm btn-warning">Editer</a>
                        </li>
                    @endforeach
                </ul>
                {{$todos->links()}}
            </div>
        </div>
    </div>
@stop
