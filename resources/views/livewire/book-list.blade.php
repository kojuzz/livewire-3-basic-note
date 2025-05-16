<div>
    <header class="flex justify-between">
        <div>
            <h2>Hi {{ $name }}</h2>
            <p>Here's a list of your book reviews ...</p>
        </div>
        <form wire:submit="$refresh">
            <span class="mr-2">Your Name: </span>
            <input type="text" wire:model.live.debounce.500ms="name">
            <button>Update</button>
        </form>
    </header>
    <ul class="list">
        @foreach($books as $book)
            <li wire:key="{{ $book->id }}">
                <button wire:click="delete({{ $book }})">
                    Delete
                </button>
                <h3>{{ $book->title }}</h3>
                <h4>{{ $book->author }}</h4>
                <p>Rationg: {{ $book->rating }}/10</p>
            </li>
        @endforeach
    </ul>
</div>
