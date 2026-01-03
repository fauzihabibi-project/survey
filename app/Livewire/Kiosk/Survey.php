<?php

namespace App\Livewire\Kiosk;

use App\Models\Employees;
use App\Models\Surveys;
use Livewire\Component;

class Survey extends Component
{
    public $employee;
    public $rating;
    public $client_name;
    public $message;

    public function mount(Employees $employee)
    {
        if (!$employee->is_active) {
            abort(404);
        }

        $this->employee = $employee;
    }

    public function submit()
    {
        $this->validate([
            'client_name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'nullable|string|max:500',
        ]);

        Surveys::create([
            'employee_id' => $this->employee->id,
            'rating' => $this->rating,
            'client_name' => $this->client_name,
            'message' => $this->message,
            'source' => 'public',
            'ip_address' => request()->ip(),
        ]);

        $this->reset(['rating', 'message']);

        session()->flash('success', 'Terima kasih atas penilaian Anda 🙏');

        return redirect()->route('home-public');
    }

    public function render()
    {
        return view('livewire.kiosk.survey');
    }
}
