<?php

namespace App\Livewire;

use Livewire\Component;

class Chart extends Component
{
    public $label=[
        ['Type'=>'H1 Digitale voetafdruk'],
        ['Type'=>'H2 Website'],
        ['Type'=>'H3 Organisatorische'],
        ['Type'=>'H4 Technische'],
    ];

    public $kwarterly=[
        ['Month'=>'1e Kwartiel', 'Stats'=>[79,61,57,60]],
        ['Month'=>'2e Kwartiel', 'Stats'=>[87, 68, 66, 64]],
        ['Month'=>'3e Kwartiel', 'Stats'=>[95,76,73,76]],
        ['Month'=>'4e Kwartiel', 'Stats'=>[100,86,100,97]],
    ];

    public function render()
    {
        return view('livewire.chart');
    }
}
