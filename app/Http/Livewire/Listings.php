<?php

namespace App\Http\Livewire;

use App\Models\Listing;
use Livewire\Component;

class Listings extends Component
{

    public $title = '', $email = '', $location = '', $company = '', $logo = '', $description, $tags = '', $website = '', $user_id = 1;

    // set validation
    protected $rules = [
        'title' => 'required|min:5|max:20',
        'email' => 'required|email|unique:listings',
        'location' => 'required|min:5|max:200',
        'company' => 'required|min:5|max:100',
        'logo' => 'required',
        'description' => 'required|min:5|max:500',
        'tags' => 'required',
        'website' => 'required',
    ];

    public function updated($pro)
    {
        $this->validateOnly($pro);
    }

    // create submit function
    public function submit()
    {
        $this->validate();

        // create new jobs and redirect user to home page with flash message
        $formFields = [
            'title' => $this->title,
            'company' => $this->company,
            'location' => $this->location,
            'website' => $this->website,
            'email' => $this->email,
            'tags' => $this->tags,
            'description' => $this->description,
            'user_id' => $this->user_id,
            'logo' => $this->logo,
        ];
        // dd($formFields);
        Listing::create($formFields);
        return redirect('/jobs')->with('message', 'Listing Created Successfully');
    }
    public function render()
    {
        return view('livewire.listings', ['jobs' => Listing::all()]);
    }
}
