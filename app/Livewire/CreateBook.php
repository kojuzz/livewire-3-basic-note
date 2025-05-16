<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
class CreateBook extends Component
{
    // #[Layout('components.layouts.second')]
    public function render()
    {
        return view('livewire.create-book');
    }
}
