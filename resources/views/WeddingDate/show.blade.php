@extends('layouts.app')

@section('content')
<hr class="mt-4 mb-8">

<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            Wdding Date Show Page
        </h1>
    </div>
</div>

<div class="m-auto w-4/5 py-24">
    <ul>
        <li>
            {{ $wedding_dates->id}} -- {{  $wedding_dates['date']}} --
            @foreach ($wedding_dates->weddingocation as $ocation )
                @if ($ocation['wedding_date_id']==$wedding_dates->id)

                @foreach ($wedding_hall as $hall )
                @if ($ocation['wedding_hall_id']==$hall->id)
                    {{ $hall['name'] }}
                @endif
                @endforeach
                    
                @endif
            @endforeach
        </li>
            

            
    </ul>
</div>


@endsection
     