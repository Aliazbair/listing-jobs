<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'shadow bg-yellow-500 hover:bg-yellow-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded cursor-pointer w-full disabled:opacity-25']) }}
    @if ($disabled) disabled @endif>{{ $slot }}</button>
