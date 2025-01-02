@extends('layouts.main')

@section('container')
<div class="carousel carousel-end rounded-box flex justify-center mb-8 py-8">
    <div class="carousel-item relative h-100 mx-2 my-200">
      <img src="https://source.unsplash.com/1200x400?Library" alt="Library" />
    </div>
    <div class="carousel-item relative h-100 mx-2 my-200">
      <img src="https://source.unsplash.com/1200x400?Book" alt="Book" />
    </div>
    <div class="carousel-item relative h-100 mx-2 my-200">
      <img src="https://source.unsplash.com/1200x400?Novel" alt="Novel" />
    </div>
</div>

<div class="text-gray-600 text-lg mb-8 text-center">
    <p>kmerchhub Website</p>
    <p class="text-xs">Butuh penjelasan untuk berbagai fitur di kmerchhub? Cari tahu di sini</p>
</div>

<div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-[#FFCCAC] text-[#584f49]" data-inactive-classes="text-[#584f49]">
    <h2 id="accordion-flush-heading-1">
        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-[#584f49] border-b border-gray-700 gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
            <span class="px-5">About kmerchhub</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
    </h2>
    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
        <div class="py-5 border-b border-gray-700">
            <p class="mb-2 text-gray-600 px-5">Kami adalah KMerchHub, sebuah destinasi bagi para penggemar K-Pop yang ingin mendekatkan diri dengan dunia musik dan budaya Korea. Berkomitmen untuk menjadi jembatan antara artis dan penggemar, toko kami menyediakan berbagai merchandise K-Pop berkualitas yang dapat menjadi bagian dari perjalanan fandom Anda
                Di KMerchHub, Anda akan menemukan tim yang penuh semangat dan antusias terhadap dunia K-Pop. Dari album, lightstick, hingga aksesori eksklusif, kami menyediakan pilihan terbaik untuk memenuhi kebutuhan para penggemar dari berbagai generasi.
                Kami percaya bahwa K-Pop bukan hanya sekadar genre musik, tetapi juga sebuah gaya hidup, komunitas, dan cerita yang menyatukan hati banyak orang di seluruh dunia. Dengan semangat ini, kami berkomitmen untuk menghadirkan produk dan pengalaman belanja yang memuaskan bagi Anda.
                Terima kasih telah mengunjungi halaman "About". Kami berharap Anda menemukan merchandise yang Anda cari dan mendapatkan pengalaman belanja yang menyenangkan bersama KMerchHub.
                Jika Anda memiliki pertanyaan atau saran, jangan ragu untuk menghubungi kami. Kami selalu siap untuk melayani dan berbagi cinta terhadap dunia K-Pop bersama Anda.</p>
            <p class="text-gray-600 px-5">Salam literasi,
                Tim kmerchhub ❤ </p>
        </div>
    </div>
    <h2 id="accordion-flush-heading-2">
        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-[#584f49] border-b border-gray-700 gap-3" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
            <span class="px-5">Bagaimana cara mendaftar di kmerchhub?</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
    </h2>
    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
        <div class="py-5 border-b border-gray-700">
            <p class="mb-2 text-gray-600 px-5">Buka website kmerchhub, lalu klik login pada halaman home. Jika belum mempunyai akun, maka klik
                <a href="/register" class="text-blue-600 hover:underline">Create Account</a>.
            </p>
        </div>
    </div>
    <h2 id="accordion-flush-heading-3">
        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-[#584f49] border-b border-gray-700 gap-3" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
            <span class="px-5">Di mana saya bisa menghubungi kmerchhub?</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
    </h2>
    <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
        <div class="py-5 border-b border-gray-700">
            <p class="mb-2 text-gray-600 px-5">Chat: Buka website kmerchhub, dan klik
                <a href="/contact" class="text-blue-600 hover:underline">Contact</a>
            </p>
            <p class="mb-2 text-gray-600 px-5">Email:
                <a href="mailto:kmerchhub0@gmail.com" class="text-blue-600 hover:underline">kmerchhub0@gmail.com</a>
            </p>
        </div>
    </div>
</div>
@endsection
