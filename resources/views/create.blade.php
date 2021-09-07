@extends('layouts.app')

@section('content')
<div class="grid place-items-center ">
<div class="w-full max-w-lg">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="/todos">
  @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
      Title 
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="title" value="{{ old('title') }}" id="title" type="text" placeholder="Title">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="context">
       Context 
      </label>
      <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700  leading-tight focus:outline-none focus:shadow-outline" name="context" value="{{old('context')}}" id="context" type="text" placeholder="Context">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="due">
        Due 
      </label>
      <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700  leading-tight focus:outline-none focus:shadow-outline" name="due" id="due" value="{{old('due')}}" type="text" placeholder="Due">
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Add
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
          Delete
      </a>
    </div>
  </form>
</div>
</div>
@endsection