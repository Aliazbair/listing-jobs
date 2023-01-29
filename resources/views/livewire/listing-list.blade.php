<div class='max-h-7 mx-auto px-10 py-10'>
    <h2 class='text-5xl font-mono text-yellow-400 text-center'>Jobs List</h2>

    <div class='flex w-full p-3 space-x-2'>
        {{-- search input --}}
        <div class='w-3/6'>
            <input type="search" wire:model.debouce.300ms='search'
                class='relative w-full px-3 py-3  text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded shadow-inner outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-50'>
        </div>

        {{-- order by --}}
        <div class='relative w-1/6'>
            <select name="orderBy" wire:model='orderBy'
                class='relative w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:ring-0 focus:bg-indigo-50'>
                <option value="id">Id</option>
                <option value="title">Title</option>
                <option value="created_at">Create At</option>
            </select>
            <div class='absolute inset-y-0 ring-0 flex items-center px-2 text-gray-700 pointer-events-none'></div>
        </div>

        {{-- order asc --}}
        <div class='relative w-1/6'>
            <select name="orderAsc" wire:model='orderAsc'
                class='relative w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:ring-0 focus:bg-indigo-50'>
                <option value="1">Ascending</option>
                <option value="0">Descending</option>

            </select>
            <div class='absolute inset-y-0 ring-0 flex items-center px-2 text-gray-700 pointer-events-none'></div>
        </div>
        {{-- PerPage --}}
        <div class='relative w-1/6'>
            <select name="perpage" wire:model='perpage'
                class='relative w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:ring-0 focus:bg-indigo-50'>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>


            </select>
            <div class='absolute inset-y-0 ring-0 flex items-center px-2 text-gray-700 pointer-events-none'></div>
        </div>
    </div>

{{-- tabel --}}
<div class="overflow-hidden shadow">
    <table class="w-full divide-y divide-gray-500 table-fixed">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>email</th>
                <th>company name</th>
                <th>location</th>
                <th>website</th>
            </tr>
        </thead>

        <tbody class='text-xs divide-y divide-gray-600 bg-indigo-500'>
                @foreach ($jobs as $item)
           <tr class='whitespace-normal'>
              <td class='p-4'>{{$item->id}}</td>
              <td class='p-4'>{{$item->title}}</td>
              <td class='p-4'>{{$item->email}}</td>
              <td class='p-4'>{{$item->company}}</td>
              <td class='p-4'>{{$item->location}}</td>
              <td class='p-4'>{{$item->website}}</td>
           </tr>
        @endforeach
        </tbody>
    </table>

    <div class="p-2 bg-indigo-400">
        {{-- {{$jobs->links()}} --}}
    </div>
</div>

    <div class='grid gap-4 md:grid-cols-2 lg:grid-cols-3 p-5'>
        @foreach ($jobs as $item)
            <div
                class='shadow-sm shadow-yellow-200 hover:opacity-50 hover:bg-yellow-400 transition-all cursor-pointer duration-300 px-4 py-2 bg-slate-900 rounded text-white'>
                <h3 class='text-2xl font-bold'>{{ $item->title }}</h3>

            </div>
        @endforeach
    </div>
</div>
