<?php

use Livewire\Component;

new class extends Component
{
    public $numberOne = 0;
    public $numberTwo = 0;
    public string $operation = '+';
    public float $result = 0;
    public bool $disabled = false;

    public function calculate(){
        $numberOne = (float)$this->numberOne;
        $numberTwo = (float)$this->numberTwo;

        switch ($this->operation) {
            case '+':
                $result = $numberOne + $numberTwo;
                break;
            case '-':
                $result = $numberOne - $numberTwo;
                break;
            case '*':
                $result = $numberOne * $numberTwo;
                break;
            case '/':
                $result = $numberOne / $numberTwo;
                break;
            case '%':
                $result = $numberOne % $numberTwo;
                break;
            default:
                $result = 0;
                break;
        }

        $this->result = $result;
    }

    public function updated($proprety){
        if($this->numberOne == '' || $this->numberTwo == ''){
            $this->disabled = true;
        }else{
            $this->disabled = false;
        }
    }
};
?>

<div class="flex flex-col items-center">
    <div class="p-16 flex justify-center mx-auto items-center gap-4">
        <input type="number" wire:model="numberOne" placeholder="Number One">
        <select class="w-24" wire:model="operation">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
            <option>%</option>
        </select>
        <input type="number" wire:model="numberTwo" placeholder="Number Two">
        <button wire:click="calculate" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
        {{ $disabled ? 'disabled' : '' }}>=</button>
        <p class="text-3xl">{{ $result }}</p>
    </div>
</div>
