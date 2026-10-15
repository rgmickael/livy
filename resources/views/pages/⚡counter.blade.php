<?php

use Livewire\Component;

new class extends Component
{
    public $count = 0;

    public function increment(){
        $this->count++;
    }

    public function decrement(){
        $this->count--;
    }
};
?>

<div class="p-16 flex justify-center gap-6 items-center">
   <button wire:click="increment" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">+</button>
   <span>{{ $count }}</span>
   <button wire:click="decrement" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">-</button>
</div>
