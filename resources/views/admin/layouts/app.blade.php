{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin Dashboard
        </h2>
    </x-slot>
</x-app-layout> --}}
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../admin/assets/" data-template="vertical-menu-template-free">
<base href="/public">

<head>
    @include('admin.components.styles')
</head>

<body>
    <!-- Layout wrapper -->
    @yield('admincontent')
</body>

</html>
