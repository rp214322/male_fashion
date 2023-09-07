<?php

namespace App\Livewire;

use Livewire\Component;

class WatchlistComponent extends Component
{
    public function render()
    {
        return view('livewire.watchlist-component')->layout('layouts.base');
    }
}
