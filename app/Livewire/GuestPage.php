<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Guest;

use Livewire\WithPagination;

class GuestPage extends Component
{

    use WithPagination;

    public $search_term;
    public $search_status = "all";
    public $search_zone = "all";
    public $search_years = "all";



    public function mount()
    {

    }

    public function updated($property)
    {
        // $property: The name of the current property that was updated

        if(in_array($property,['search_term','search_status','search_zone','search_years'])){
            $this->resetPage();
        }
    }


    public function render()
    {
        $records = Guest::select('*');

        if($this->search_status == "pending" || $this->search_status == "registered"){
            $records->where('status',$this->search_status);
        }

        if($this->search_zone != "all"){
            $records->where('zone',$this->search_zone);
        }

        if($this->search_years != "all"){
            $records->where('years',$this->search_years);
        }

        if($this->search_term != ""){
            $term = $this->search_term;

            $records->where(function($q) use($term){
                $q->where('name','like', "%$term%" );
                $q->orWhere('employee','like', "%$term%" );
            });

        }

        $records->orderBy('name','asc');

        $records = $records->paginate(15);


        return view('livewire.guest-page',compact('records'));
    }

    public function toggleStatus(Guest $record)
    {
        if($record->status == "pending"){
            $record->status = 'registered';
            $record->registered_at = \Carbon\Carbon::now();
        }
        elseif($record->status == "registered"){
            $record->status = 'pending';
            $record->registered_at = null;
        }

        $record->save();

    }

}
