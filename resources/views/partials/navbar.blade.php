<style>
    .shopping-cart {
        position: absolute;
        top: 100%;
        right: -100%;
        height: 100vh;
        width: 35rem;
        padding: 0 1.5rem;
        color: #000000;
        background-color: #ffffff;
        transition: all 0.5s ease-in-out;
    }

    .shopping-cart.active {
        right: 0;
    }

    .shopping-cart .cart-item {
        position: relative;
        margin: 2rem 0;
        display: flex;
        align-items: center;
        gap: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 1px dashed #666;
    }

    #shopping-cart-button {
        position: relative;
    }

    #shopping-cart-button .quantity-badge {
        position: absolute;
        top: 0;
        right: -10px;
        display: inline-block;
        padding: 1px 5px;
        border-radius: 6px;
        font-size: 0.5rem;
        color: #000;
    }

    .shopping-cart img {
        height: 4rem;
        width: 4rem;
        border-radius: 50%;
    }

    .shopping-cart h3 {
        font-size: 1.4rem;
    }

    .shopping-cart .item-price {
        font-size: 1.2rem;
    }

    .shopping-cart .remove-item {
        position: absolute;
        right: 1.2rem;
        cursor: pointer;

    }

    .shopping-cart .cart-item #add,
    .shopping-cart .cart-item #remove {
        display: inline-block;
        padding;
        2px 4px;
        cursor: pointer;
        margin: 0 4px;
        background-color: #000000;
        color: #ffffff;
        font-weight: bold;
        font-size: 1.1rem;
    }

    .shopping-cart h4 {
        font-size: 1.6rem;
        margin-top: -1rem;
        text-align: center;

    }

    .form-container {
        width: 100%;
        display: flex;
        justify-content: center;
        border-top: 1px dashed black;
        margin-top: 1rem;
        padding: 1rem;
    }

    .form-container h5 {
        text-align: center;
        font-size: 1rem;
    }

    .form-container form {
        width: 100%;
        text-align: center;
    }

    .form-container label {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 1rem 0;
    }

    .form-container span {
        text-align: right;
    }

    .form-container input {
        background-color: #ddd;
        padding: 5px;
        font-size: 1rem;
        width: 70%;
    }

    .form-container .checkout-button {
        padding: 6px 14px;
        background-color: royalblue;
        color: white;
        font-weight: bold;
        font-size: 1rem;
        border-radius: 20px;
        margin: 1rem auto;
        cursor: pointer;
    }

    .form-container .checkout-button.disabled {
        background-color: #999;
        cursor: not-allowed;
    }
</style>





<!-- Navbar -->
<nav class="bg-[#ffffff] border-gray-200 fixed w-full z-50 top-0 start-0" x-data>
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black"
                style="font-family: 'Caveat', cursive;">kmerchhub.</span>
        </a>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 bg-[#ffffff] border-gray-700">
                <li>
                    <a href="/"
                        class="block py-2 px-3 text-black bg-blue-700 rounded md:bg-transparent md:p-0 hover:text-gray-600">Home</a>
                </li>
                {{-- <li>
                <a href="/about" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 hover:text-white">About</a>
              </li> --}}
                <li>
                    <a href="/Products"
                        class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 hover:text-gray-600">Products</a>
                </li>
                <li>
                    <a href="/categories"
                        class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 hover:text-gray-600">Categories</a>
                </li>
                <li>
                    <button id="shopping-cart-button"
                        class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 hover:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        <span class="quantity-badge" x-show="$store.cart.quantity" x-text="$store.cart.quantity"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>

                    </button>

                    <div class="shopping-cart">
                        <template x-for="(item, index) in $store.cart.items" x-key="index">
                            <div class="cart-item">
                                <img :src="img / $ { item.image }" :alt="`item.name`">
                                <div class="item-detail">
                                    <h3 x-text="item.name"></h3>
                                    <div class="item-price">
                                        <span x-text="rupiah(item.price)"></span> &times;
                                        <button id="remove" @click="$store.cart.remove(item.id)">&minus;</button>
                                        <span x-text="item.quantity"></span>
                                        <button id="add" @click="$store.cart.add(item)">&plus;</button> &equals;
                                        <span x-text="rupiah(item.total)"></span>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <h4 x-show="!$store.cart.items.length" style="margin-top: 1rem;">Cart Is Empty</h4>
                        <h4 x-show="$store.cart.items.length">Total : <span x-text="rupiah($store.cart.total)"></span>
                        </h4>

                        <div class="form-container" x-show="$store.cart.items.length">
                            <form action="" id="checkoutForm">
                                <input type="hidden" name="items" x-model="JSON.stringify($store.cart.items)">
                                <input type="hidden" name="total" x-model="JSON.stringify($store.cart.total)">

                                <h5>Customer Detail</h5>

                                <label for="name">
                                    <span>Name : </span>
                                    <input type="text" name="name" id="name">
                                </label>

                                <label for="email">
                                    <span>Email : </span>
                                    <input type="email" name="email" id="email">
                                </label>

                                <label for="phone">
                                    <span>Phone : </span>
                                    <input type="number" name="phone" id="phone" autocomplete="off">
                                </label>

                                <button class="checkout-button disabled" type="submit" id="checkout-button"
                                    value="checkout">Checkout</button>
                            </form>
                        </div>

                    </div>
                </li>



                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-black bg-[#FFCCAC] hover:text-white font-medium rounded-lg text-sm px-5 py-1 text-center inline-flex items-center "
                            type="button">{{ auth()->user()->username }}
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                @if (auth()->user()->isAdmin())
                                    <a href="/dashboard" type="submit"
                                        class="block px-4 justify-start py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Dashboard
                                    </a>
                                @endif
                                <li>
                                    <button type="submit"
                                        class="block px-4 justify-start py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Sign out
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </form>
                @else
                    <li>
                        <a href="/login"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 text-black md:p-0 hover:text-gray-600 dark:hover:bg-gray-700 md:dark:hover:bg-transparent"><i
                                class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>


<script>
    const shoppingCart = document.querySelector('.shopping-cart');

    document.querySelector('#shopping-cart-button').onclick = (e) => {
        shoppingCart.classList.toggle('active');
        e.preventDefault();
    }
</script>
