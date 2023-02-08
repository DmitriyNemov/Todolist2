@extends('layouts.main')
@section('content')
<div>
            <form action="{{route('todo.update', $todo->id)}}" method="post">
                @csrf
                @method('patch')
        <div class="input-group mb-3" width='100px'>
             <span class="input-group-text" id="content"></span>
             <input type="text" width="100px" name="content" class="form-control" placeholder="Task" value="{{$todo->content}}" aria-describedby="inputGroup-sizing-default">
             <button type="submit" class="btn btn-outline-primary">Update</button>
        </div>
            </form>
        
        </div>

 @endsection