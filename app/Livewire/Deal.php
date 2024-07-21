<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Deal extends Component
{
    #[Layout('components.layouts.app', ['active' => 'deal'])]
    public function render()
    {
        return view('livewire.deal');
    }
}
