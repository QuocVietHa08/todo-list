@extends('layouts.app')

@section('content')
<div class="mx-20">
    <div>
        <h1 class="font-medium py-1 text-5xl">Todos</h1>

        @if(count($todos) > 0)
            @foreach($todos as $todo)
            <div class="todo-card p-1 m-5  bg-gray-200">
                <p><a href="todo/{{ $todo->id }}">Title: {{$todo->title}}</a></p>
                <p>Context: {{$todo->context}}</p>
                <p>Due: {{$todo->due}}</p>
            </div>
            @endforeach
        @endif
    </div>
</div>
@endsection