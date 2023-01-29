@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class='fixed top-0 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-green-400 to-blue-500 to-fuchsia-500" text-white px-20 py-3 mt-4 rounded w-auto '>
        <p>{{ session('message') }}</p>
    </div>
@endif
