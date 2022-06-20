<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public function render()
    {
        return view('livewire.test')->extends('themes.tailwind.layouts.app');
    }
}
