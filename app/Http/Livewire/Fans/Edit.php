<?php

namespace App\Http\Livewire\Fans;
use App\Models\Fan;
use Livewire\Component;
use App\Events\UserLog;

class Edit extends Component
{

    public $fanId;
    public $name, $age, $address, $idol_name, $group_name;
    public function mount() {
        $this->name = $this->fan->name;
        $this->age = $this->fan->age;
        $this->address = $this->fan->address;
        $this->idol_name = $this->fan->idol_name;
        $this->group_name = $this->fan->group_name;

    }

    public function editFan() {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'idol_name' => ['required', 'string', 'max:255'],
            'group_name' => ['required', 'string', 'max:255'],
        ]);

        $this->fan->update([
            'name'             =>      $this->name,
            'age'            =>      $this->age,
            'address'                =>      $this->address,
            'idol_name'                =>      $this->idol_name,
            'group_name'                =>      $this->group_name,
        ]);

        $log_entry = 'Update Fan: "' . $this->fan->name . '" with an ID: ' . $this->fan->id;
        event(new UserLog($log_entry));

        return redirect('/fan')->with('fan', 'Updated Successfully');
    }

    public function back() {
        return redirect('/fan');
    }
    public function getFanProperty() {
        return Fan::find($this->fanId);
    }

    public function render()
    {
        return view('livewire.fans.edit');
    }
}
