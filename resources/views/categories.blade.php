@extends('layouts.main')

@section('container')

    @include('partials.navbar')
    {{--  bg-[#FFCCAC] text-[#584f49]  --}}
    <div class="container justify-center flex pt-8 mt-20">
        <div class="row">
            <div class="col-span-2">
                @foreach ($categories as $category)
                    @if ($category->id == 1)
                        <a href="/categories?category={{ $category->slug }}"
                            class="justify-center text-black hover:text-white border border-[#C1E1DC] bg-[#FFCCAC] focus:ring-4 focus:outline-none focus:ring-[#C1E1DC] rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:focus:ring-blue-80 ">{{ $category->name }}</a>
                    @elseif($category->id == 2)
                        <a href="/categories?category={{ $category->slug }}"
                            class="justify-center text-black  hover:text-white border border-[#C1E1DC] bg-[#FFCCAC] focus:ring-4 focus:outline-none focus:ring-[#C1E1DC] rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:focus:ring-blue-80">{{ $category->name }}</a>
                    @elseif($category->id == 3)
                        <a href="/categories?category={{ $category->slug }}"
                            class="justify-center text-black hover:text-white border border-[#C1E1DC] bg-[#FFCCAC] focus:ring-4 focus:outline-none focus:ring-[#C1E1DC] rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:focus:ring-blue-80">{{ $category->name }}</a>
                    @elseif($category->id == 4)
                        <a href="/categories?category={{ $category->slug }}"
                            class="justify-center text-black hover:text-white border border-[#C1E1DC] bg-[#FFCCAC] focus:ring-4 focus:outline-none focus:ring-[#C1E1DC] rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:focus:ring-blue-80">{{ $category->name }}</a>
                    @elseif($category->id == 5)
                        <a href="/categories?category={{ $category->slug }}"
                            class="justify-center text-black hover:text-white border border-[#C1E1DC] bg-[#FFCCAC] focus:ring-4 focus:outline-none focus:ring-[#C1E1DC] rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:focus:ring-blue-80">{{ $category->name }}</a>
                        <a href="/categories"
                            class="justify-center text-black hover:text-white border border-[#C1E1DC] bg-[#FFCCAC] focus:ring-4 focus:outline-none focus:ring-[#C1E1DC] rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3  dark:focus:ring-blue-80">Back
                            To 
                            All 
                            Posts</a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="justify-center flex mt-8 font-medium ">
        @if (isset($_GET['category']))
            @foreach ($categories as $category)
                @if ($_GET['category'] == $category->slug)
                    <h1 style="font-size: 30px;">All Posts: {{ $category->name }}</h1>
                @endif
            @endforeach
        @else
            <h1 style="font-size: 30px; ">All Posts</h1>
        @endif
    </div>


    <section class="mx-5 my-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 home ml-6 mt-8">

        @foreach ($posts as $post)
            <div class="w-full max-w-[125%] border border-black rounded-lg shadow">
                @if (Str::startsWith($post->image, 'http'))
                    <div class="max-h-475px max-w-303px overflow-hidden">
                        <img class="p-8 rounded-t-lg w-[100%]" src="{{ $post->image }}" alt="{{ $post->title }}" />
                    </div>
                @else
                    <div class="max-h-475px max-w-303px overflow-hidden">
                        <img class="p-8 rounded-t-lg w-[100%]" src="{{ asset('storage/' . $post->image) }}"
                            alt="{{ $post->title }}" />
                    </div>
                @endif
                <div class="px-5 pb-5">
                    <ul>
                        <li>
                            <a href="">
                                <h5 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900">
                                    {{ $post->author->username }}
                                </h5>
                            </a>
                        </li>
                        <li>
                            <h3 class="text-xl font-sans tracking-tight text-gray-900">{{ $post->title }}</h3>
                        </li>
                        <li>
                            <a href="">
                                <h3 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900">
                                    {{ $post->category->name }}</h3>
                            </a>
                        </li>
                    </ul>
                    <div class="flex items-center justify-between">
                        <small class="text-2xl font-bold text-gray-900">Rp. {{ $post->price }}</small>
                        <a href="#"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5
                                text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>


@endsection
