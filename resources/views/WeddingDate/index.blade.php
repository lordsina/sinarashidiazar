@extends('layouts.app')

@section('content')

<div class="container bg-cyan-600/[.2] mx-auto  text-center  py-10 rounded-lg">

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Wedding Date Page
            </h1>
        </div>
    </div>
    
    <div class="pt-10 m-auto text-center p-10">
      <a class="border-b-2 pb-2 border-dotted italic text-gray-500" href="date/create">Add New</a>
    </div>

    <div class="flex justify-center">
        @foreach ( $wedding_dates as $wedding_date )
            <div class="basis-1/4  m-5 text-center rounded-lg bg-indigo-50/20 h-40">

                <p class="hover:text-blue-500 text-3xl text-yellow-500 "><a href="/date/{{$wedding_date->id}}">{{ $wedding_date->date }}</a></p>

                <ul class="">
                    @foreach ($wedding_ocations as $ocation )
                        @if ($ocation['wedding_date_id']==$wedding_date->id)
                            @foreach ($wedding_halls as $hall )
                                @if ($ocation['wedding_hall_id']==$hall->id)
                                <li>{{ $hall['name'] }}</li>
                                @endif
                            @endforeach  
                        @endif
                    @endforeach
                </ul>

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

</div>

@endsection
     