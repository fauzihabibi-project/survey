<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Employees as ModelsEmployees;

#[Layout('components.layouts.admin')]
class Employees extends Component
{
    public function delete($id)
    {
        $employees = ModelsEmployees::find($id);

        if (! $employees) {
            $this->js(<<<JS
            Swal.fire({
                icon: 'error',
                title: 'Employee not found!',
                showConfirmButton: false,
                timer: 1500
            });
        JS);
            return;
        }

        $employees->delete();

        $this->js(<<<JS
            Swal.fire({
                icon: 'success',
                title: 'Employee deleted successfully!',
                toast: true,
                position: 'top-end',
                timer: 2000,
                showConfirmButton: false
            });
        JS);
    }

    public function render()
    {
        $employees = ModelsEmployees::all();
        return view('livewire.admin.employees',[
            'employees' => $employees
        ]);
    }
}
