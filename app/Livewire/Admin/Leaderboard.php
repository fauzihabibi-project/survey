<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Employees;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\DB;

#[Layout('components.layouts.admin')]
class Leaderboard extends Component
{
    public $limit = 10;
    
    public function render()
    {
        $leaderboard = Employees::query()
            ->leftJoin('surveys', 'employees.id', '=', 'surveys.employee_id')
            ->select(
                'employees.id',
                'employees.name',
                'employees.position',
                'employees.photo',
                DB::raw('AVG(surveys.rating) as avg_rating'),
                DB::raw('COUNT(surveys.id) as total_survey')
            )
            ->where('employees.is_active', true)
            ->groupBy(
                'employees.id',
                'employees.name',
                'employees.position',
                'employees.photo'
            )
            ->orderByDesc('avg_rating')
            ->orderByDesc('total_survey')
            ->limit($this->limit)
            ->get();

        return view('livewire.admin.leaderboard', [
            'leaderboard' => $leaderboard
        ]);
    }
}
