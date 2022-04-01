@extends('layouts.app')

@section('content')

<div class="container bg-cyan-600/[.2] mx-auto  text-center  py-10 rounded-lg">

    <div class="grid gap-4 grid-cols-3 grid-rows-3 mt-5 mx-5">
        <div class="flex-1 ">
            <a href="/date">
                <div class="bg-lime-600 hover:bg-yellow-500 p-5 rounded-lg">
                    Wedding Dates
                </div>
            </a>
        </div>

        <div class="flex-1 ">
            <a href="/ocation">
                <div class="bg-orange-700  hover:bg-yellow-500 p-5 rounded-lg">
                    Wedding Ocations
                </div>
            </a>
        </div>

        <div class="flex-1">
            <a href="/hall">
                <div class="bg-teal-600 hover:bg-yellow-500 p-5 rounded-lg">
                    Wedding Halls
                </div>
            </a>
        </div>

    </div> 

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
            <div class="basis-1/3  m-4 text-center rounded-lg bg-indigo-50/20 h-60">

                <p class="hover:text-blue-500 text-3xl text-yellow-500 "><a href="/date/{{$wedding_date->id}}">{{ $wedding_date->date }}</a></p>

                <ul class="">
                    @foreach ($wedding_ocations as $ocation )
                        @if ($ocation['wedding_date_id']==$wedding_date->id)
                            @foreach ($wedding_halls as $hall )
                                @if ($ocation['wedding_hall_id']==$hall->id)
                                <li class="hover:text-red-500"><a href="/ocation/{{ $ocation->id }}">{{ $hall['name'] }}</a></li>
                                @endif
                            @endforeach  
                        @endif
                    @endforeach
                </ul>

                <div class="grid gap-4 grid-cols-2 grid-rows-2 mt-5 mx-5 ">
                    <div class="flex-1 ">
                        <a class="text-green-500" href="date/{{ $wedding_date->id }}/edit">Edit &rarr;</a>
                    </div>
                    <div class="flex-1 ">
                        <form action="/date/{{$wedding_date->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="text-red-500" type="submit">Delete &rarr;</button>
                        </form>
                    </div>
                    

                </div>

            </div>
            
        @endforeach
    </div>

</div>

@endsection
     