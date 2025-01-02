@extends('dashboard.layouts.main')

@section('container')
<<<<<<< HEAD
    <div class="">
        {{-- <h1>My Posts</h1> --}}

        <!-- start: Main -->
        {{-- <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main"> --}}
        <div class="p-6">
            <div class="p-6 bg-gray-900 rounded shadow-md shadow-black/5">
                <div class="flex items-start justify-between mb-4">
                    <div class="font-medium">My Post</div>
                    <div class="flex items-center">

                        {{-- <div class="search">
=======
<div class="">
    {{-- <h1>My Posts</h1> --}}

    <!-- start: Main -->
    {{-- <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main"> --}}
    <div class="p-6">
        <div class="p-6 bg-gray-900 rounded shadow-md shadow-black/5">
            <div class="flex items-start justify-between mb-4">
                <div class="font-medium">My Post</div>
                <div class="flex items-center">

                    {{-- <div class="search">
>>>>>>> main
                            <input type="text" class="search__input" placeholder="Search..." />
                            <div class="search__icon">
                                <ion-icon name="search"></ion-icon>
                            </div>
                        </div> --}}

<<<<<<< HEAD
                        @if (session()->has('success'))
                            <div id="notification"
                                class="w-full max-w-xs p-4 text-gray-900 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-300"
                                role="alert">
                                <div class="flex items-center mb-3">
                                    <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">New
                                        notification</span>
                                    <button type="button"
                                        class="ms-auto -mx-1.5 -my-1.5 bg-white justify-center items-center flex-shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                        data-dismiss-target="#notification" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>
                                {{ session('success') }}
                            </div>
                        @endif


                        <!-- Modal toggle -->
                        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                            class="flex text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            type="button"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                                viewBox="0 0 448 512">
                                <path
                                    d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                            </svg>
                            Tambah Data
                        </button>

                        <style>
                            #crud-modal,
                            #crud-modal2 {
                                display: hidden;
                                justify-content: center;
                                align-items: center;
                                position: fixed;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                background-color: rgba(0, 0, 0, 0.5);
                                /* Adjust the background color and opacity as needed */
                                z-index: 1000;
                            }

                            #crud-modal .max-w-md,
                            #crud-modal2 .max-w-md {
                                width: 100%;
                                max-width: 30rem;
                                /* Adjust the maximum width as needed */
                            }
                        </style>

                        <!-- Main modal -->
                        <div id="crud-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden justify-center items-center fixed top-0 left-0 w-full z-50 md:inset-0 h-[calc(100%-1rem)] ">
                            <div class="relative w-full max-w-lg p-4">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add new Post</h3>
                                        <button type="button"
                                            class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="crud-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form action="{{ route('create_post') }}" method="POST" class="p-4 md:p-5"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="grid grid-cols-2 gap-4 mb-4">
                                            <div class="col-span-2">
                                                <label for="name"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                                <input type="text" name="title" id="title"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="Type product name" required=""
                                                    value="{{ old('title') }}">
                                            </div>
                                            <div class="col-span-2">
                                                <input type="hidden" name="author_id" id="author"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="Type product name" required=""
                                                    value="{{ auth()->user()->id }}">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="name"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Genre</label>
                                                <select id="genre" name="genre_id"
                                                    class="bg-gray-50 border border-black-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                                    <option value="">Select genre</option>
                                                    @foreach ($genres as $genre)
                                                        <option value={{ $genre->id }}>
                                                            {{ $genre->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                    for="image">Upload Image</label>
                                                <img class="max-w-sm img-preview max-h-10 ">
                                                <input
                                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                    id="image" name="image" type="file" onchange="previewImage">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="name"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                                <input type="number" name="price" id="price"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="$2999" required="" value="{{ old('price') }}">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="name"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                                <select id="category_id" name="category_id"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option value="">Select category</option>
                                                    @foreach ($categories as $category)
                                                        <option value={{ $category->id }}>
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                                                    <textarea id="description" name="description" rows="8"
                                                        class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0"
                                                        placeholder="write your description"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <button type="submit"
                                            class="text-Black inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <svg class="w-5 h-5 me-1 -ms-1" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Add Post
                                        </button>
                                </div>
                            </div>
                        </div>

                        </form>

                        {{-- Akhir Modal 1 --}}

                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[460px]">
                        <thead>
                            <tr>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                    ID
                                </th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left">
                                    Image
                                </th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left">
                                    Title
                                </th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left">
                                    Author
                                </th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Category
                                </th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Genre
                                </th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Description
                                </th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Aksi
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
=======
                    @if (session()->has('success'))
                    <div id="notification"
                        class="w-full max-w-xs p-4 text-gray-900 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-300"
                        role="alert">
                        <div class="flex items-center mb-3">
                            <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">New
                                notification</span>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-white justify-center items-center flex-shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                data-dismiss-target="#notification" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                        {{ session('success') }}
                    </div>
                    @endif


                    <!-- Modal toggle -->
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="flex text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        type="button"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                            viewBox="0 0 448 512">
                            <path
                                d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                        </svg>
                        Tambah Data
                    </button>

                    <style>
                    #crud-modal,
                    #crud-modal2 {
                        display: hidden;
                        justify-content: center;
                        align-items: center;
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0, 0, 0, 0.5);
                        /* Adjust the background color and opacity as needed */
                        z-index: 1000;
                    }

                    #crud-modal .max-w-md,
                    #crud-modal2 .max-w-md {
                        width: 100%;
                        max-width: 30rem;
                        /* Adjust the maximum width as needed */
                    }
                    </style>

                    <!-- Main modal -->
                    <div id="crud-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden justify-center items-center fixed top-0 left-0 w-full z-50 md:inset-0 h-[calc(100%-1rem)] ">
                        <div class="relative w-full max-w-lg p-4">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add new Post</h3>
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form action="{{ route('create_post') }}" method="POST" class="p-4 md:p-5"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid grid-cols-2 gap-4 mb-4">
                                        <div class="col-span-2">
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Produk</label>
                                            <input type="text" name="title" id="title"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type product name" required="" value="{{ old('title') }}">
                                        </div>
                                        <div class="col-span-2">
                                            <input type="hidden" name="author_id" id="author"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type product name" required=""
                                                value="{{ auth()->user()->id }}">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Genre</label>
                                            <select id="genre" name="genre_id"
                                                class="bg-gray-50 border border-black-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                                <option value="">Select Agensi</option>
                                                @foreach ($genres as $genre)
                                                <option value={{ $genre->id }}>
                                                    {{ $genre->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-span-2">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="image">Upload Image</label>
                                            <img class="max-w-sm img-preview max-h-10 ">
                                            <input
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                id="image" name="image" type="file" onchange="previewImage">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                            <input type="number" name="price" id="price"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="$2999" required="" value="{{ old('price') }}">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                            <select id="category_id" name="category_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option value="">Select category</option>
                                                @foreach ($categories as $category)
                                                <option value={{ $category->id }}>
                                                    {{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-span-2">
                                            <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                                                <textarea id="description" name="description" rows="8"
                                                    class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0"
                                                    placeholder="write your description"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit"
                                        class="text-Black inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="w-5 h-5 me-1 -ms-1" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Add Post
                                    </button>
                            </div>
                        </div>
                    </div>

                    </form>

                    {{-- Akhir Modal 1 --}}

                    <div class="overflow-x-auto">
                        <table class="w-full min-w-[460px]">
                            <thead>
                                <tr>
                                    <th
                                        class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                        ID
                                    </th>
                                    <th
                                        class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left">
                                        Image
                                    </th>
                                    <th
                                        class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left">
                                        Produk
                                    </th>
                                    <th
                                        class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left">
                                        Grup
                                    </th>
                                    <th
                                        class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                        Category
                                    </th>
                                    <th
                                        class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                        Agensi
                                    </th>
                                    <th
                                        class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                        Description
                                    </th>
                                    <th
                                        class="text-[12px] uppercase tracking-wide font-medium text-black py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                        Aksi
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
>>>>>>> main
                                <tr>
                                    <td class="px-4 py-2">
                                        <span class="text-[13px] font-medium text-gray-600">{{ $post->id }}</span>
                                    </td>
                                    <td class="px-4 py-2">
                                        @if (Str::startsWith($post->image, 'http'))
<<<<<<< HEAD
                                            <img src={{ $post->image }} alt={{ $post->image }}>
                                        @else
                                            <img src={{ asset('storage/' . $post->image) }} alt={{ $post->image }}>
=======
                                        <img src={{ $post->image }} alt={{ $post->image }}>
                                        @else
                                        <img src={{ asset('storage/' . $post->image) }} alt={{ $post->image }}>
>>>>>>> main
                                        @endif
                                    </td>
                                    <td class="px-4 py-2">
                                        <span class="text-[13px] font-medium text-gray-600">{{ $post->title }}</span>
                                    </td>
                                    <td class="px-4 py-2">
                                        <span
                                            class="text-[13px] font-medium text-gray-600">{{ $post->author->username }}</span>
                                    </td>
                                    <td class="px-4 py-2">
                                        <span
                                            class="text-[13px] font-medium text-gray-600">{{ $post->category->name }}</span>
                                    </td>
                                    <td class="px-4 py-2">
                                        <span
                                            class="text-[13px] font-medium text-gray-600">{{ $post->genre->name }}</span>
                                    </td>
                                    <td class="px-4 py-2">
                                        <span
                                            class="text-[13px] font-medium text-gray-600">{{ $post->description }}</span>
                                    </td>
                                    <td class="py-2">
                                        <div class="flex items-center">
                                            <span onclick="window.location.href='/dashboard/show/{{ $post->title }}'"
                                                class="btn-watch btn-btn-watch">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
<<<<<<< HEAD
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 14">
=======
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
>>>>>>> main
                                                    <g stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2">
                                                        <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                        <path
                                                            d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <span
                                                onclick="window.location.href='/dashboard/posts/{{ $post->title }}/edit'"
                                                class="btn-edit btn-btn-edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                                                </svg>
                                            </span>
                                            <form action="/dashboard/posts/{{ $post->id }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn-delete btn-btn-delete"
                                                    onclick="return confirm('Are You Sure!!!')">
<<<<<<< HEAD
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 20 20">
=======
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 20 20">
>>>>>>> main
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>
                                                </button>
                                            </form>
                                            {{-- <span class="btn-delete btn-btn-delete">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                    </span> --}}
                                        </div>
                                    </td>
                                </tr>
<<<<<<< HEAD
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <a href="/cetakBuku" target="_blank">
=======
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <a href="/cetakBuku" target="_blank">
>>>>>>> main
                        <h1 class="flex justify-end mt-8 font-medium text-black border-black rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-blue-500 dark:bg-gray-900 dark:focus:ring-blue-80"> Cetak PDF<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 18a.969.969 0 0 0 .933 1h12.134A.97.97 0 0 0 15 18M1 7V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2v5M6 1v4a1 1 0 0 1-1 1H1m0 9v-5h1.5a1.5 1.5 0 1 1 0 3H1m12 2v-5h2m-2 3h2m-8-3v5h1.375A1.626 1.626 0 0 0 10 13.375v-1.75A1.626 1.626 0 0 0 8.375 10H7Z"/>
                          </svg>
                        </h1>
                    </a> --}}
<<<<<<< HEAD
                </div>
            </div>
        </div>
        {{-- </main> --}}
        <!-- end: Main -->
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
=======
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- </main> --}}
    <!-- end: Main -->
</div>

<script>
function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}
</script>
@endsection
>>>>>>> main
