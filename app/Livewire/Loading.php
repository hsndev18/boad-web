<?php

namespace App\Livewire;

use App\Models\Chat;
use App\Models\Problem;
use App\Models\Video;
use Livewire\Component;

class Loading extends Component
{
    public $problem;

    public function mount($problem)
    {
        $this->problem = $problem;
    }

    public function render()
    {

        $problem = Problem::find($this->problemId);
        if ($problem->disease) {

           dd($problem->disease);
        }
        return view('livewire.loading', compact('problem'));
    }
}
