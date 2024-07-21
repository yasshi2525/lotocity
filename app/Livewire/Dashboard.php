<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('components.layouts.app', ['active' => null])]
    public function render()
    {
        return view('livewire.dashboard');
    }
}
