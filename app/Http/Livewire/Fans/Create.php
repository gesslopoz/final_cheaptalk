<?php

namespace App\Http\Livewire\Fans;

use Livewire\Component;
use App\Models\Fan;
use App\Events\UserLog;

class Create extends Component
{
    public $name, $age, $address, $idol_name, $group_name;

    public function addFan() {
        $this->validate([
            'name'             =>          ['required', 'string', 'max:255'],
            'age'            =>          ['required', 'string', 'max:255'],
            'address'                =>          ['required', 'string', 'max:255'],
            'idol_name'                =>          ['required', 'string', 'max:255'],
            'group_name'        => ['required', 'string', 'max:255'],
        ]);

        Fan::create([
            'name'             =>      $this->name,
            'age'            =>      $this->age,
            'address'                =>      $this->address,
            'idol_name'                =>      $this->idol_name,
            'group_name'                =>      $this->group_name,
        ]);

        $log_entry = 'Added Fan: "' .$this->name;
        event(new UserLog($log_entry));

            return redirect('/fan')->with('message', $this->name . ' added successfully');
    }


   


    public function render()
    {
        return view('livewire.fans.create');
    }
}
