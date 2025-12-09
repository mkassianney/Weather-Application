<?php

namespace App\Livewire;

use Livewire\Component;

class Changer extends Component
{
    public $activeComponent = 'index';

    public function switchComponent()
    {
        $this->activeComponent = 'weather';
    }

    public function render()
    {
        return view('livewire.changer');
    }


}