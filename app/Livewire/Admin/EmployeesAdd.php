<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Employees;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.admin')]
class EmployeesAdd extends Component
{
    use WithFileUploads;

    public $name;
    public $position;
    public $photo;
    public $is_active = true;

    protected $rules = [
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'photo' => 'nullable|image|max:2048',
    ];

    public function save()
    {
        $this->validate();

        $photoPath = null;
        if ($this->photo) {
            $photoPath = $this->photo->store('employees', 'public');
        }

        Employees::create([
            'name' => $this->name,
            'position' => $this->position,
            'photo' => $photoPath,
            'is_active' => $this->is_active
        ]);

        return redirect()->route('admin.employees');
    }
    public function render()
    {
        return view('livewire.admin.employees-add');
    }
}
