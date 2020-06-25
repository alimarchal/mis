<?php

namespace App\Http\Livewire;

use App\Branch;
use Livewire\Component;

class BranchList extends Component
{
    public $regionValue = null;
    public $zoneValue = null;
    public $regions = ['North', 'South'];

    public function render()
    {
        return view('livewire.branch-list');
    }

    public function region($event)
    {
        if ($event != null) {
            $this->regionValue = Branch::where('region', $event)->get();
        }
        if ($event == '') {
            $this->regionValue = null;
            $this->zoneValue = null;
        }
    }

    public function zone($event)
    {
        if ($event != null) {
            $this->zoneValue = Branch::where('zone', $event)->get();
        }
        if ($event == '') {
            $this->zoneValue = null;
        }
    }

    public function district($event)
    {
        if ($event != null) {
            $this->districtValue = Branch::where('district', $event)->where('zone', $this->zoneValue)->get();
        }
        if ($event == '') {
            $this->districtValue = null;
        }
    }
}
