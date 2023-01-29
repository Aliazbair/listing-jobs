<div class='py-20 max-w-7xl mx-auto'>
    <div>
        <input type="text" name='task' placeholder='enter task name' wire:model='name'
            class='w-full p-2 rounded-md outline-none text-white bg-gray-600'>

        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror

    </div>

    <div class='mt-5'>
        <input type="text" name='description' placeholder='enter task name' wire:model='description'
            class='w-full p-2 rounded-md outline-none text-white bg-gray-600'>
        @error('description')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <div class='mt-5'>
        <input type="text" name='type' placeholder='enter task name' wire:model='type'
            class='w-full p-2 rounded-md outline-none text-white bg-gray-600'>
        @error('type')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class='bg-yellow-500 p-3 rounded-md text-white px-10 text-xl block mt-10'
        wire:click="save">send</button>

</div>
