<div>
    <!-- Display the to-do list -->
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>

    <!-- Input and button to add a new to-do -->
    <form wire:submit.prevent="addTodo">
        <input type="text" wire:model="todo" class="text-black" placeholder="Enter a todo" />
        <button type="submit">Add Todo</button>
    </form>

    <!-- Counter display with increment and decrement buttons -->
    <div>
        <button wire:click="increment">Increment Counter</button>
        <button wire:click="decrement">Decrement Counter</button>
        <span>{{ $counter }}</span>
    </div>
</div>
