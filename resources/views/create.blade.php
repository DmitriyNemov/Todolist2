@extends('layouts.main')
@section('content')
<div>
            <form action="{{route('todo.store')}}" method="post">
                @csrf
        <div class="input-group mb-3" width='100px'>
             <span class="input-group-text" id="content"></span>
             <input type="text" width="100px" name="content" class="form-control" placeholder="Task" aria-describedby="inputGroup-sizing-default">
             <button type="submit" class="btn btn-outline-primary">+</button>
        </div>
            </form>
        
        </div>

 @endsection