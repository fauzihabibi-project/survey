<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\Employees;

class Home extends Component
{
    public function render()
    {
        return view('livewire.public.home', [
            'employees' => Employees::where('is_active', true)->get()
        ]);
    }
}
