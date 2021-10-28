@extends('master')

@section('content')
    <h1 class="my-5 text-3xl text-center">TailwindCSS</h1>
    <div class="mt-20"></div>
    <article class="w-full ml-20 prose">
        <h3>A utility-first CSS framework packed with classes like <strong>flex, pt-4, text-center</strong> and
            <strong>rotate-90</strong> that can be composed to
            build any design, directly in your markup.
        </h3>
        <p></p>
    </article>
    <div class="flex w-full p-20 pl-20 mx-20 bg-gray-200">
        <div class="flex overflow-hidden bg-white rounded">
            <div class="relative flex-none w-48">
                <img src="https://tailwindcss.com/_next/static/media/classic-utility-jacket.0f108046e151c8576017eaf383406fe6.jpg"
                    alt="" class="absolute inset-0 object-cover w-full h-full" />
            </div>
            <form class="flex-auto p-6">
                <div class="flex flex-wrap">
                    <h1 class="flex-auto text-xl font-semibold">
                        Classic Utility Jacket
                    </h1>
                    <div class="text-xl font-semibold text-gray-500">
                        $110.00
                    </div>
                    <div class="flex-none w-full mt-2 text-sm font-medium text-gray-500">
                        In stock
                    </div>
                </div>
                <div class="flex items-baseline mt-4 mb-6">
                    <div class="flex space-x-2">
                        <label>
                            <input class="flex items-center justify-center bg-gray-100 rounded-lg w-9 h-9" name="size"
                                type="radio" value="xs" checked>
                            XS
                        </label>
                        <label>
                            <input class="flex items-center justify-center w-9 h-9" name="size" type="radio" value="s">
                            S
                        </label>
                        <label>
                            <input class="flex items-center justify-center w-9 h-9" name="size" type="radio" value="m">
                            M
                        </label>
                        <label>
                            <input class="flex items-center justify-center w-9 h-9" name="size" type="radio" value="l">
                            L
                        </label>
                        <label>
                            <input class="flex items-center justify-center w-9 h-9" name="size" type="radio" value="xl">
                            XL
                        </label>
                    </div>
                    <div class="ml-auto text-sm text-gray-500 underline">Size Guide</div>
                </div>
                <div class="flex mb-4 space-x-3 text-sm font-medium">
                    <div class="flex flex-auto space-x-3">
                        <button class="flex items-center justify-center w-1/2 text-white bg-black rounded-md"
                            type="submit">Buy
                            now</button>
                        <button class="flex items-center justify-center w-1/2 border border-gray-300 rounded-md"
                            type="button">Add to bag</button>
                    </div>
                    <button
                        class="flex items-center justify-center flex-none text-gray-400 border border-gray-300 rounded-md w-9 h-9"
                        type="button" aria-label="like">
                        <svg width="20" height="20" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                        </svg>
                    </button>
                </div>
                <p class="text-sm text-gray-500">
                    Free shipping on all continental US orders.
                </p>
            </form>
        </div>
    </div>

    <x-controls current-slide="1" />
@endsection
