<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
// use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

class CreateBook extends Component
{
    // #[Layout('components.layouts.second')]
    #[Rule('required|string|min:3|max:50')]
    public $title;

    #[Rule('required|string|min:3|max:50')]
    public $author;

    #[Rule('required|integer|min:1|max:10')] 
    public $rating;

    public function save()
    {
        $this->validate();
        
        Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating
        ]);
        $this->redirect('/', navigate: true);
    }

    #[Title('Create Book')]
    public function render()
    {
        return view('livewire.create-book');
    }
}
