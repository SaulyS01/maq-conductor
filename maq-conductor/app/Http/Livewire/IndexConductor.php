<?php

namespace App\Http\Livewire;

use App\Models\Conductor;
use Livewire\Component;
use Livewire\WithPagination;

class IndexConductor extends Component
{
    public $palabraBuscar;
    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $conductores = Conductor::latest('id')->where('nombre', 'like', '%' . $this->palabraBuscar . '%')->paginate(10);
        return view('livewire.index-conductor', compact('conductores'));
    }
}
