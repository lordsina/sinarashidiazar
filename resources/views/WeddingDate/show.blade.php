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
        @forelse ( $wedding_dates->weddingocation as $ocation )
        <li> {{ $ocation['id'] }} </li>
        @empty
            <p> No Halls Found</p>
        @endforelse

    </ul>
</div>


@endsection
     