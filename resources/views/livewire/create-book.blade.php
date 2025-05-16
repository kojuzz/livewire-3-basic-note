<div class="create">
    <h3>Create new book</h3>
    <form wire:submit="save">
        <div class="field">
            <label for="">Book Title:</label>
            <input type="text" wire:model="title">
        </div>
        <div class="field">
            <label for="">Book Author:</label>
            <input type="text" wire:model="author">
        </div>
        <div class="field">
            <label for="">Book Rating:</label>
            <input type="number" wire:model="rating">
        </div>
        <button>Add Book</button>
    </form>
</div>
