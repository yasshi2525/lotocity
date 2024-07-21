<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Loto extends Component
{
    #[Layout('components.layouts.app', ['active' => 'loto'])]
    public function render()
    {
        return view('livewire.loto');
    }
}
