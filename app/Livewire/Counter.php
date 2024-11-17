<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 1;

    public $todos = []; // This will store the to-do items

    public $todo; // This will hold the input value for the new to-do

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment()
    {
        $this->counter++;
    }

    public function decrement()
    {
        $this->counter--;
    }

    // Method to add a new to-do
    public function addTodo()
    {
        // Add the current $todo to the $todos array and reset the $todo input
        $this->todos[] = $this->todo;
        $this->todo = ''; // Reset the input field
    }
}
