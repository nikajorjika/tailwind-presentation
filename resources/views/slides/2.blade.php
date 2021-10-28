@extends('master')

@section('content')
    <h1 class="my-5 text-3xl text-center">Why do we need to use Tailwind.css</h1>

    <div class="flex px-20">
        <div class="flex w-1/2 m-10 my-6 overflow-hidden bg-gray-800 rounded-xl h-96">
            <div class="flex items-center justify-center w-20 h-20 m-auto text-white bg-red-700 rounded-full">
                #1
            </div>
        </div>

        <div class="flex items-center justify-center w-1/2 m-10 my-6 overflow-hidden bg-gray-800 rounded-xl h-96">
            <div class="flex items-center justify-center w-20 h-20 text-white bg-red-700 rounded-full">
                #2
            </div>
        </div>
    </div>
    <x-controls current-slide="2" />
@endsection
