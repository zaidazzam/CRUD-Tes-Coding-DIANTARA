<ul class="menu p-4">
    {{-- Dashboard --}}
    <li class="menu-title">
        <span>
            Dashboard
        </span>
    </li>
    <li>
        <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <!-- Icon code here -->
            </svg>
            <span>
                Dashboard
            </span>
        </a>
    </li>
    <li>
        <a href="{{ route('user.create') }}" class="{{ request()->routeIs('user.create') ? 'active' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <!-- Icon code here -->
            </svg>
            <span>
                User
            </span>
        </a>
    </li>

    {{-- User Control --}}
    <li class="menu-title mt-4">
        <span>
            User Control
        </span>
    </li>
    <form action="{{ route('logout') }}" method="post" x-ref="form" x-data>
        @csrf
        <li>
            <a href="javascript:void(0)" type="submit" class="hover:bg-red-500 hover:text-white"
                x-on:click="$refs.form.submit()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span class="ml-2">
                    Log Out
                </span>
            </a>
        </li>
    </form>
</ul>
