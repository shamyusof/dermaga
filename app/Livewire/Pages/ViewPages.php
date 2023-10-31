<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ViewPages extends Component
{
    
    public function render()
    {
        dd('hello');
        return view('livewire.pages.view-pages');
    }
}
