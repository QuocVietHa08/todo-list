@extends('layouts.app')

@section('content')
<div class="grid place-items-center ">
<div class="w-full max-w-lg">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="/todos/{{ $todo->id }}">
    @method('PUT')
  @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
      Title 
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="title" value="{{ $todo->title }}" id="title" type="text" placeholder="{{ $todo->title}}">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="context">
       Context 
      </label>
      <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700  leading-tight focus:outline-none focus:shadow-outline" name="context" value="{{ $todo->context}}" id="context" type="text" placeholder="{{ $todo->context}}">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="due">
        Due 
      </label>
      <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700  leading-tight focus:outline-none focus:shadow-outline" name="due" id="due" value="{{ $todo->due }}" type="text" placeholder="{{ $todo->due}}">
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Edit
      </button>
     </div>
  </form>
</div>
</div>

@endsection