@extends('layouts.main')
@section('content')
        <div>
        <div>
            <form action="{{route('todo.store')}}" method="post">
                @csrf
        <div class="input-group mb-3" width='100px'>
             <span class="input-group-text" id="content"></span>
             <input type="text" width="100px" name="content" class="form-control" placeholder="Task" aria-describedby="inputGroup-sizing-default">
             <button type="submit" class="btn btn-outline-primary">Добавить задачу</button>
        </div>
            </form>
        
        </div>
        <div>
            
                
            @foreach($todolists as $todo)
            <div>
                {{$todo->content}}
                <a href="{{route('todo.show', $todo->id)}}"class="btn btn-primary">Подробнее</a>
                
            </div>
            
            @endforeach
            
        </div>
        
        </div>

 @endsection