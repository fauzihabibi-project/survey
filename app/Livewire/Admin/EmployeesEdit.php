<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Employees;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.admin')]
class EmployeesEdit extends Component
{
    use WithFileUploads;

    public $employee;
    public $name;
    public $position;
    public $photo;
    public $is_active;

    public function mount($id)
    {
        $this->employee = Employees::findOrFail($id);
        $this->name = $this->employee->name;
        $this->position = $this->employee->position;
        $this->is_active = $this->employee->is_active;
    }

    protected $rules = [
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'photo' => 'nullable|image|max:2048',
    ];

    public function update()
    {
        $this->validate();

        $photoPath = $this->employee->photo;

        if ($this->photo) {
            if ($photoPath && file_exists(storage_path('app/public/' . $photoPath))) {
                unlink(storage_path('app/public/' . $photoPath));
            }

            $photoPath = $this->photo->store('employees', 'public');
        }

        $this->employee->update([
            'name' => $this->name,
            'position' => $this->position,
            'photo' => $photoPath,
            'is_active' => $this->is_active
        ]);

        return redirect()->route('admin.employees');
    }

    public function render()
    {
        return view('livewire.admin.employees-edit');
    }
}
