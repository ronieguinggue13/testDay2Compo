<?php

namespace App\Livewire;

use Livewire\Component;

class TestDay1component extends Component
{

    public int $count;

    public $name;

    public int $countA;
    public int $countB;

    public $wordA;
    public $wordB;

    public $word;

    public $selected;

    public function add(){
        
        $this->count++;
    }

    public function test(){
        $this->name=$this->name;
    }


    public function sumoftwointegers(){
        $this->count= $this->countA + $this->countB;

    }


    public function combotext(){
        $this->count= $this->wordA + $this->wordB;

    }

    public function liveselect(){
        $this->selected= $this->selected;

    }


    

    public function render()
    {
        return view('livewire.test-day1component');
    }
}


