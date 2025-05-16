<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Layout;
class CreateBook extends Component
{
    // #[Layout('components.layouts.second')]
    public $title;
    public $author;
    public $rating;

    public function save()
    {
        Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating
        ]);
        $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.create-book');
    }
}
