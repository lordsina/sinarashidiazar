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
  <a class="border-b-2 pb-2 border-dotted italic text-gray-500" href="date/create">Add New</a>
</div>

<div class="flex justify-center ">
      @foreach ( $wedding_dates as $wedding_date )
          <div class="basis-1/4 border m-5 text-center">
              <h1 class="hover:text-blue-500 "><a href="/date/{{$wedding_date->id}}">{{ $wedding_date->date }}</a></h1>
              <div>
                <a class="text-green-500" href="date/{{ $wedding_date->id }}/edit">Edit &rarr;</a>
                <form action="/date/{{$wedding_date->id }}" method="POST">
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
     