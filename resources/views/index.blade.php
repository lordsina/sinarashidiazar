@extends('layouts.app')

@section('content')

<div class="container bg-cyan-600/[.2] mx-auto  text-center  py-10 rounded-lg">
    <p class="text-amber-200 text-4xl	">Wellcome To My personal Website</p>
    <h1 class="text-lime-500 text-2xl"> I'm Sina Rashidiazar</h1>
    <p>This is just my personal website and i will share my personal opinion.</p>
    <p>if you want to contact me please go to contact page.</p>
    <h2 class="text-2xl text-violet-400">My Project</h2>
    <div class="grid gap-4 grid-cols-3 grid-rows-3 mt-5 mx-5">
        <div class="flex-1 ">
            <a href="/date">
                <div class="bg-lime-600 hover:bg-yellow-500 p-5 rounded-lg">
                    Photography System
                </div>
            </a>
        </div>

        <div class="flex-1 ">
            <div class="bg-orange-700 hover:bg-yellow-500 p-5 rounded-lg">
                WebSite
            </div>
        </div>

        <div class="flex-1">
            <div class="bg-teal-600 hover:bg-yellow-500 p-5 rounded-lg">
                Music Composing
            </div>
        </div>

    </div> 
</div>


@endsection
     