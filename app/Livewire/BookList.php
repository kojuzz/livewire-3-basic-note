<?php
namespace App\Livewire;
use App\Models\Book;
use Livewire\Attributes\Title;
use Livewire\Component;
class BookList extends Component
{
    public $term = '';

    public function delete(Book $book)
    {
        $book->delete();
    }

    #[Title('Book List - Home')]
    public function render()
    {
        if($this->term) {
            return view('livewire.book-list', [
                'books' => Book::where('title', 'LIKE', '%' . $this->term . '%')
                    ->orWhere('author', 'LIKE', '%' . $this->term . '%')
                    ->orderByDesc('created_at')
                    ->get()
            ]);
        }
        return view('livewire.book-list', [
            'books' => Book::orderByDesc('created_at')->get()
        ]);
    }
}
