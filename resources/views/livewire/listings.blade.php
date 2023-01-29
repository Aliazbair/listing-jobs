@php
    $disabled=$errors->any() || empty($this->title) ||empty($this->email) ? true:false;
@endphp
<div class='container max-w-7xl mx-auto px-10 py-10'>
    <form class='flex flex-col p-5 max-w-2xl mx-auto mb-10' wire:submit.prevent='submit'>
        <h3 class='text-sm text-yellow-500'>Enjoyed this article</h3>
        <h4 class='text-3xl font-bold'>Leave a comment below</h4>
        <hr class='py-3 mt-2'>

        <div class='grid gap-3 md:grid-cols-2'>
            <label class='block mb-5'>
                <span class='text-gray-700'>Title</span>
                <x-input placeholder="Ali osman" name='title' wire:model='title'
                    class='shadow border rounded py-2 px-3 form-input mt-1 block w-full ring-yellow-500 focus:ring outline-none' />
                @error('title')
                    <span class="text-red-800 font-bold">{{ $message }}</span>
                @enderror

            </label>
            {{-- email --}}
            <label class='block mb-5'>
                <span class='text-gray-700'> Company Email</span>
                <x-input placeholder="Enter Your Name" name='email' wire:model='email'
                    class='shadow border rounded py-2 px-3 form-input mt-1 block w-full ring-yellow-500 focus:ring outline-none' />
                @error('email')
                    <span class="text-red-800 font-bold">{{ $message }}</span>
                @enderror
            </label>

        </div>

        <div class='grid gap-3 md:grid-cols-2'>
            <label class='block mb-5'>
                <span class='text-gray-700'>Company Name</span>
                <x-input placeholder="company name" name='company' wire:model='company'
                    class='shadow border rounded py-2 px-3 form-input mt-1 block w-full ring-yellow-500 focus:ring outline-none' />
                @error('company')
                    <span class="text-red-800 font-bold">{{ $message }}</span>
                @enderror

            </label>
            {{-- location --}}
            <label class='block mb-5'>
                <span class='text-gray-700'> Company location</span>
                <x-input placeholder="Enter Your location" name='location' wire:model='location'
                    class='shadow border rounded py-2 px-3 form-input mt-1 block w-full ring-yellow-500 focus:ring outline-none' />
                @error('location')
                    <span class="text-red-800 font-bold">{{ $message }}</span>
                @enderror
            </label>


        </div>

        <div class='grid gap-3 md:grid-cols-2'>
            <label class='block mb-5'>
                <span class='text-gray-700'>Company website</span>
                <x-input placeholder="website  company" name='website' wire:model='website'
                    class='shadow border rounded py-2 px-3 form-input mt-1 block w-full ring-yellow-500 focus:ring outline-none' />
                @error('website')
                    <span class="text-red-800 font-bold">{{ $message }}</span>
                @enderror
            </label>

            <label class='block mb-5'>
                <span class='text-gray-700'> Company logo</span>
                <x-input placeholder="Enter Your location" name='logo' wire:model='logo'
                    class='shadow border rounded py-2 px-3 form-input mt-1 block w-full ring-yellow-500 focus:ring outline-none' />
                @error('logo')
                    <span class="text-red-800 font-bold">{{ $message }}</span>
                @enderror
            </label>

        </div>

        {{-- tags --}}
        <label class='block mb-5'>
            <span class='text-gray-700'>Tags</span>
            <x-input placeholder="Enter Your location" name='tags' wire:model='tags'
                class='shadow border rounded py-2 px-3 form-input mt-1 block w-full ring-yellow-500 focus:ring outline-none' />
            @error('tags')
                <span class="text-red-800 font-bold">{{ $message }}</span>
            @enderror
        </label>

        {{-- description --}}
        <label class='block mb-5'>
            <span class='text-gray-700'>description</span>
            <textarea placeholder="write some thing to us" rows="8"
                class='shadow border rounded py-2 px-3 form-textarea text-gray-600  mt-1 block w-full ring-yellow-500 focus:ring outline-none'
                name='description' wire:model='description'></textarea>
            @error('description')
                <span class="text-red-800 font-bold">{{ $message }}</span>
            @enderror
        </label>

        <div>
            <x-button type='submit' wire:loading.attr='disabled' :disabled='$disabled' wire:target='submit'>Save</x-button>
        </div>
    </form>
</div>
