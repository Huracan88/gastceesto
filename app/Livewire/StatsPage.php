<?php

namespace App\Livewire;

use App\Models\Guest;
use Livewire\Component;

class StatsPage extends Component
{
    public function render()
    {
        $records = Guest::all();

        $status = $records->groupBy('status');

        return view('livewire.stats-page',compact('records'));
    }
}
