<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Dashboard"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true"/>
        </x-slot>
    </x-sidebar.link>

    {{--    <x-sidebar.dropdown--}}
    {{--        title="Buttons"--}}
    {{--        :active="Str::startsWith(request()->route()->uri(), 'buttons')"--}}
    {{--    >--}}
    {{--        <x-slot name="icon">--}}
    {{--            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />--}}
    {{--        </x-slot>--}}

    {{--        <x-sidebar.sublink--}}
    {{--            title="Text button"--}}
    {{--            href="{{ route('buttons.text') }}"--}}
    {{--            :active="request()->routeIs('buttons.text')"--}}
    {{--        />--}}
    {{--        <x-sidebar.sublink--}}
    {{--            title="Icon button"--}}
    {{--            href="{{ route('buttons.icon') }}"--}}
    {{--            :active="request()->routeIs('buttons.icon')"--}}
    {{--        />--}}
    {{--        <x-sidebar.sublink--}}
    {{--            title="Text with icon"--}}
    {{--            href="{{ route('buttons.text-icon') }}"--}}
    {{--            :active="request()->routeIs('buttons.text-icon')"--}}
    {{--        />--}}
    {{--    </x-sidebar.dropdown>--}}

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        {{ __('Pages') }}
    </div>

    <x-sidebar.link title="Employees" href="#">
        <x-slot name="icon">
            <i class="fa-solid fa-users"></i>
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Departments" href="#">
        <x-slot name="icon">
            <i class="fa-sharp fa-solid fa-users-rectangle"></i>
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Jobs" href="#">
        <x-slot name="icon">
            <i class="fa-solid fa-briefcase"></i>
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Locations" href="#">
        <x-slot name="icon">
            <i class="fa-solid fa-map-location-dot"></i>
        </x-slot>
    </x-sidebar.link>

</x-perfect-scrollbar>
