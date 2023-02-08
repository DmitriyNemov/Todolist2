@extends('layouts.main')
@section('content')
        <div>
        <div>
           
            <div> {{$todo->content}}</div>

            <div><a href="{{route('todo.edit', $todo->id)}}"class="btn btn-primary">Изменить</a></div>

            <div>
                <form action="{{route('todo.destroy', $todo->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" value="Удалить">
                
                
                </form>
            </div>

            <div><a href="{{route('todo.index')}}" class="btn btn-primary">Назад</a></div>
           
        </div>
        
        </div>

 @endsection