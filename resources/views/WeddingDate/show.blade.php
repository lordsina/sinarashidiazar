@extends('layouts.app')

@section('content')
<div class="container bg-cyan-600/[.2] mx-auto  text-center  py-10 rounded-lg">

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Wdding Date Show Page
            </h1>
        </div>
    </div>

    <div class="pt-10 m-auto text-center p-10">
        <a class="border-b-2 pb-2 border-dotted italic text-gray-500" href="">Add New</a>
      </div>
    
    <div class="m-auto w-4/5 py-24">
        <p class="text-2xl">  {{ $wedding_dates['date']}}</p>
        <p>ID : {{ $wedding_dates->id}}</p>

        
            <div class="flex justify-center">
            @foreach ($wedding_dates->weddingocation as $ocation )
            @if ($ocation['wedding_date_id']==$wedding_dates->id)

            @foreach ($wedding_hall as $hall )
            
            @if ($ocation['wedding_hall_id']==$hall->id)
            <div class="basis-1/3  m-4 text-center rounded-lg bg-indigo-50/20 h-60">
                {{ $hall['name'] }}
            </div>
            @endif

            @endforeach
                
            @endif
        @endforeach
            </div>

        
    </div>
    
</div>



@endsection
     