<nav x-data = "{open:false}"
    class="bg-gray-800 fixed w-full z-20 top-0 left-0 border-gray-200 px-2 sm:px-4 py-2.5 text-white">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/">
            <span class="self-center text-xl font-semibold whitespace-nowrap">
                {{ $data['title'] }}
            </span>
        </a>

        <button @click = "open = !open" data-collapse-toggle="navbar-main" class="md:hidden">
            <img src="{{ asset('images/burger-menu.png') }}" alt="Burger Menu">
        </button>

        <div x-show = "open" class="w-full md:block md:w-auto" id="navbar-main">
            <x-items />
        </div>

        <div class="hidden w-full md:block md:w-auto" id="navbar-main">
            <x-items />
        </div>
    </div>
</nav>
