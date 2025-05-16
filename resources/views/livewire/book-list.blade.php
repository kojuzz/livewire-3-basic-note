<div>
    <livewire:page-header subtitle="Here's a list of your book reviews ...">
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
