<!-- Change all `sm:` breakpoints to `md:` so the navbar switches at 850px (md = 768px, closest to 850px in Tailwind) -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sneakerness</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <nav class="relative bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 md:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" command="--toggle" commandfor="mobile-menu"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center md:items-stretch md:justify-start">
                    <div class="flex shrink-0 items-center">
                        <img src="{{ asset('img/Sneakerlogo3.png') }}" alt="logo" class="h-8 w-auto" />
                    </div>
                    <div class="hidden md:ml-6 md:block">
                        <div class="flex space-x-4">
                            <a href="/"
                                class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                                Home
                            </a>
                            <a href="/stands"
                                class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('stands') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                                Stands
                            </a>
                            <a href="/events"
                                class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('events') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                                Events
                            </a>
                            <a href="/vendors"
                                class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('vendors') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                                Vendors
                            </a>
                            <a href="/Tickets"
                                class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('Tickets') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                                Tickets kopen
                            </a>
                            <a href="/contact"
                                class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                                Contact
                            </a>
                        </div>
                    </div>

                    <div class="hidden md:flex flex-1 items-center justify-end gap-3">
                        @guest
                            <a href="/login"
                                class="inline-flex items-center rounded-full border border-white/30 bg-white/5 px-4 py-2 text-sm font-semibold text-white transition hover:border-white hover:bg-white/10">
                                Log In
                            </a>
                            <a href="/register"
                                class="inline-flex items-center rounded-full bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-indigo-600/40 transition hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">
                                Register
                            </a>
                        @endguest
                        @auth
                            <a href="/mandje"
                                class="inline-flex items-center rounded-full border border-white/30 bg-white/5 px-4 py-2 text-sm font-semibold text-white transition hover:border-white hover:bg-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7A1 1 0 007.6 17h8.8a1 1 0 00.95-.68L21 13M7 13V6h13" />
                                </svg>
                                Mandje
                            </a>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit"
                                    class="rounded-full bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-indigo-600/40 transition hover:bg-indigo-500">
                                    Log Out
                                </button>
                            </form>
                        @endauth
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">


                    <!-- Profile dropdown -->
                    <el-dropdown class="relative ml-3">
                        <button
                            class="relative flex rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                        </button>

                        <el-menu anchor="bottom end" popover
                            class="w-48 origin-top-right rounded-md bg-white py-1 shadow-lg outline outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Your
                                profile</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Settings</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Sign
                                out</a>
                        </el-menu>
                    </el-dropdown>
                </div>
            </div>
        </div>

        <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <a href="/"
                    class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Home</a>
                <a href="/Stands"
                    class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('Stands') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Stand</a>
                <a href="/Evenementen"
                    class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('Evenementen') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Evenementen</a>
                <a href="/verkoper"
                    class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('verkoper') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Verkopers</a>
                <a href="/Tickets"
                    class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('Tickets') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Tickets
                    kopen</a>
                <a href="/contact"
                    class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Contact</a>
                <a href="/mandje"
                    class="block rounded-md px-3 py-2 text-base font-medium bg-orange-500 text-white hover:bg-orange-600">Mandje</a>
            
            </div>

            <div class="border-t border-gray-700 px-2 pt-3 pb-3">
                @guest
                    <a href="/login"
                        class="block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-base font-medium text-white hover:bg-indigo-500">
                        Log In
                    </a>
                    <a href="/register"
                        class="mt-2 block w-full rounded-md bg-green-600 px-3 py-2 text-center text-base font-medium text-white hover:bg-green-500">
                        Register
                    </a>
                @endguest

                @auth
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit"
                            class="w-full rounded-md bg-red-600 px-3 py-2 text-center text-base font-medium text-white hover:bg-red-500">
                            Log Out
                        </button>
                    </form>
                @endauth
            </div>
        </el-disclosure>
    </nav>

</body>

</html>
