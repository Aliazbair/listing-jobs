<?php

namespace App\Http\Livewire;

use App\Models\Listing;
use Livewire\Component;
use Livewire\WithPagination;

class ListingList extends Component
{
    use WithPagination;
    public $perpage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public function render()
    {
        // return view('livewire.listing-list', ['jobs' => Listing::all()]);
        return view('livewire.listing-list', ['jobs' => Listing::search($this->search)->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')->paginate($this->perpage)]);
        // return view('livewire.listing-list', ['jobs' => Listing::all()])->layout('')->slot('');
    }
}
