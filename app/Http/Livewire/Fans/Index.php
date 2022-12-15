<?php

namespace App\Http\Livewire\Fans;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Fan;

class Index extends Component
{

    public $search, $group_name = 'all', $idol_name = 'all';
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function loadFans() {
        $query = Fan::orderBy('name')
        ->search($this->search);

        if($this->group_name != 'all'){
            $query->where('group_name', $this->group_name);
        }

        if($this->idol_name != 'all'){
            $query->where('idol_name', $this->idol_name);
        }

        $fans =  $query->paginate(2);

        return compact('fans');
    }

    public function render()
    {
        return view('livewire.fans.index', $this->loadFans());
    }
}
