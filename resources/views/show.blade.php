@extends('layouts.app')        
  
@section('content')
<a href="/" class="ml-10 mt-1 border rounded p-1">Back</a>    
        <div class="bg-gray-200 p-10 m-10">
            <div>Title: {{$todo->title}}</div>
            <div>Content: {{$todo->context}}</div>
            <div>due: {{$todo->due}}</div>
        </div>
        <form method="POST" action="/todo/{{$todo->id}}">
        @csrf
        @method('DELETE')
            <button class="inline-block align-baseline ml-10 mt-1 border mt-2 p-1 rounded font-bold text-sm " type="submit" >
                Delete
            </button>
       </form> 
    <a href="/todo/{{ $todo->id}}/edit" class="ml-10 mt-1 border rounded color-white bg-gray-200 p-1 ">Edit</a>
@endsection