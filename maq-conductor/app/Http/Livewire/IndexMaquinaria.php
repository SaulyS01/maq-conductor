<?php

namespace App\Http\Livewire;

use App\Models\Maquinaria;
use Livewire\Component;
use Livewire\WithPagination;

class IndexMaquinaria extends Component
{

    public $palabraBuscar;
    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $maquinarias = Maquinaria::latest('id')->where('nombre', 'like', '%' . $this->palabraBuscar . '%')->paginate(10);
        return view('livewire.index-maquinaria', compact('maquinarias'));
    }
}
