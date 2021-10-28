@extends('master')

@section('content')
    <h1 class="my-5 text-3xl text-center">Good Resources</h1>
    <div class="mt-20"></div>
    <code class="flex flex-col ml-20">
        <a class="text-blue-500" href="https://tailwindcomponents.com/" target="__blank">- Tailwind Components</a>
        <a class="text-blue-500" href="https://tailblocks.cc/" target="__blank">- Tailblocks</a>
        <a class="text-blue-500" href="https://tailwindtemplates.io/" target="__blank">- Tailwindtemplates</a>
        <a class="text-blue-500" href="https://marketplace.visualstudio.com/items?itemName=bradlc.vscode-tailwindcss" target="__blank">- Tailwind CSS IntelliSense</a>
        <a class="text-blue-500" href="https://marketplace.visualstudio.com/items?itemName=bourhaouta.tailwindshades" target="__blank">- Tailwind Shades</a>
        <a class="text-blue-500" href="https://marketplace.visualstudio.com/items?itemName=heybourn.headwind" target="__blank">- Headwind</a>
    </code>
    <x-controls current-slide="10" />
@endsection
