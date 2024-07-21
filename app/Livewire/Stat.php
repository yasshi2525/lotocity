<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Stat extends Component
{
    #[Layout('components.layouts.app', ['active' => 'stat'])]
    public function render()
    {
        return view('livewire.stat');
    }
}
