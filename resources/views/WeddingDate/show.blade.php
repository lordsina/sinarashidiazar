{{-- @extends('layouts.app')

@section('content')
<hr class="mt-4 mb-8">

<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            Show Page
        </h1>
    </div>
</div>

<div class="m-auto w-4/5 py-24">
    <ul>
        {{ $wedding->id }}
        @forelse ( $wedding->weddinghall as $hall )
        <li> {{ $hall['hall_name'] }} </li>
        @empty
            <p> No Halls Found</p>
        @endforelse

    </ul>
</div>


@endsection
      --}}