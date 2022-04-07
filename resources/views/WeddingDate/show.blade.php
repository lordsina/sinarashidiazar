@extends('layouts.app')

@section('content')
<div class="container bg-cyan-600/[.2] mx-auto  text-center  py-10 rounded-lg">
    <div>
        @if ($errors->any())
        <div class="w-4/8 m-auto text-center">
            @foreach ( $errors->all() as $error )
            <li class="text-red-500 list-none">{{ $error}}</li>
            @endforeach
        </div>  
        @endif
    </div>

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Wdding Date Show Page
            </h1>
        </div>
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
                <div class="basis-1/3  m-4 text-center rounded-lg bg-indigo-50/20 h-60 align-middle">

                    <form action="/date" method="post">
                        @csrf
                        <input type="hidden" name="date_id" value="{{ $wedding_dates->id}}">
                        <label for="hall" class="block mb-2 text-sm font-medium text-white	">اضافه کردن باغ جدید</label>
                        <select id="hall" name="hall_id" class=" w-40 m-auto bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($wedding_hall as $hall )
                                <option value="{{ $hall->id }}">{{ $hall['name'] }}</option>
                            @endforeach
                        </select>
                        <button><svg class="fa-solid fa-plus text-5xl text-green-500 "></svg></button>
                    </form>
                    
                </div>
            </div>

        
    </div>
    
</div>



@endsection
     