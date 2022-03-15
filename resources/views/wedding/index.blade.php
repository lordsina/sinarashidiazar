@extends('layouts.app')

@section('content')
<hr class="mt-4 mb-8">

<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            Wedding Page
        </h1>
    </div>
</div>

<div class="pt-10 m-auto text-center p-10">
  <a class="border-b-2 pb-2 border-dotted italic text-gray-500" href="wedding/create">Add New</a>
</div>

<div class="flex justify-center ">
      @foreach ( $wedding_date as $date )
          <div class="basis-1/4 border m-5 text-center">
              {{ $date->wedding_date }}
              <div>
                <a class="text-green-500" href="wedding/{{ $date->id }}/edit">Edit &rarr;</a>
                <form action="/wedding/{{ $date->id }}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="text-red-500" type="submit">Delete &rarr;</button>
                </form>
              </div>
          </div>
          
      @endforeach
  </div>
  <hr class="mt-4 mb-8">
@endsection
     