@extends('layouts.main')

@section('container')
    <style>
        /* .search-label,
                                                            .search-icon {
                                                                color: #ffffff;
                                                            } */

        #searchForm input {
            color: #000000;
            /* Warna teks gelap */
        }

        #searchForm {
            width: 80%;
            /* Lebar formulir 80% dari lebar layar */
            margin: auto;
            /* Pusatkan formulir di tengah layar */
            padding: 18px;
            /* Beri jarak antara tulisan dengan form */
            /* background-color: #736356; */
        }
    </style>



    {{-- Carusel --}}
    <section class="justify-center max-w-screen">
        <div id="default-carousel" class="relative mx-20 mt-20 h-100" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/seventeen.jpg"
                        class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Book">
                </div>

                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://picsum.photos/1200/400?random=carousel1"
                        class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Library">
                </div>

                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://picsum.photos/1200/400?random=carousel2"
                        class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Comics">
                </div>

                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://picsum.photos/1200/400?random=carousel3"
                        class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Novel">
                </div>

                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://picsum.photos/1200/400?random=carousel4"
                        class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Coffe">
                </div>
            </div>

            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>

            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 bg-gray-600 rounded-full dark:bg-white/50 dark:group-hover:bg-gray-400 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 bg-gray-600 rounded-full dark:bg-white/50 group-hover:bg-gray-400 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>
    {{-- Akhir Carousel --}}

    {{-- Search --}}
    <form id="searchForm">
        <label for="search" class="mb-2 text-sm font-medium sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" id="search" name="search"
                class="block w-full p-4 text-sm rounded-lg ps-10 form-control" placeholder="Search.....">
            <button type="submit"
                class="text-white absolute end-2.5 bottom-2.5 bg-[#1E1E1E] hover:bg-[#1E1E1E] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-[#1e1e1e] dark:hover:bg-[#5d5d5d] dark:focus:ring-[#FFCCAC] hover:text-white">Search</button>
        </div>
    </form>
    {{-- Akhir Search --}}

    <div class="container flex items-center justify-between mx-auto mt-8">
        <h1 class="ml-8 text-2xl font-bold text-white">Rekomendasi Untukmu</h1>
        <a href="/categories"
            class="with-banner flex mr-7 py-2 px-4 bg-[#FFFF] text-black rounded-md hover:text-gray-600">
            Lihat Semua
        </a>
    </div>

    {{-- Content --}}
    <section class="grid grid-cols-1 gap-3 mx-5 my-5 ml-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($posts as $post)
            <div class="w-full max-w-[125%] border border-black rounded-lg shadow">
                @if (Str::startsWith($post->image, 'http'))
                    <div class="overflow-hidden max-h-475px max-w-303px">
                        <img class="p-8 rounded-t-lg w-[100%]" src="{{ $post->image }}" alt="{{ $post->title }}" />
                    </div>
                @else
                    <div class="overflow-hidden max-h-475px max-w-303px">
                        <img class="p-8 rounded-t-lg w-[100%]" src="{{ asset('storage/' . $post->image) }}"
                            alt="{{ $post->title }}" />
                    </div>
                @endif
                <div class="px-5 pb-5">
                    <ul>
                        <li>
                            <h5 class="font-sans text-xl tracking-tight text-gray-900">Write by
                                {{ $post->author->username }}</h5>
                        </li>
                        <li>
                            <a href="/showHome/{{ $post->title }} ">
                                <h3 class="font-sans text-xl tracking-tight text-gray-900 hover:font-serif">
                                    {{ $post->title }}</h3>
                            </a>
                        </li>
                        <li>
                            <h3 class="font-sans text-xl tracking-tight text-gray-900">{{ $post->category->name }}</h3>
                        </li>
                    </ul>
                    <div class="flex items-center justify-between">
                        <small class="text-2xl font-bold text-gray-900">Rp.{{ $post->price }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    {{-- Akhir Content --}}

    <div class="flex justify-center">
        {{ $posts->links() }}
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#search").on('keyup', function() {
                var value = $("#search").val();
                if (value == "") {
                    value = "all";
                } else {
                    value = value;
                }
                $.ajax({
                    url: "search",
                    type: 'GET',
                    data: {
                        'search': value
                    },
                    success: function(data) {
                        $("#read").html(data);
                    }
                });
            });
        });
    </script>
@endsection
