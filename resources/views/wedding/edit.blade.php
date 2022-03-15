@extends('layouts.app')

@section('content')
<hr class="mt-4 mb-8">

<div class="m-auto w-4/8 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">Edit Car</h1>
    </div>
</div>

<div class="flex justify-center pt-20">
    <form action="/wedding/{{ $wedding->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="block">
            <h2 class="text-center text-lg">{{ $wedding->id }}</h2>
            <input type="text"
            value="{{ $wedding->wedding_date }}"
            class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 text-sky-400 text-center" name="date" placeholder="Wedding Date" id="">
        </div>
        <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w80 m-auto">submit</button>
    </form>
</div>

<hr class="mt-4 mb-8">
@endsection