<?php

namespace App\Livewire\Admin;

use App\Models\Surveys;
use Livewire\Component;
use App\Models\Employees;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

#[Layout('components.layouts.admin')]
class Dashboard extends Component
{
    public $totalEmployees;
    public $activeEmployees;
    public $totalSurveys;
    public $avgRating;
    public $topEmployee;
    public $chartLabels = [];
    public $chartData = [];


    public function mount()
    {
        $this->totalEmployees = Employees::count();
        $this->activeEmployees = Employees::where('is_active', true)->count();
        $this->totalSurveys = Surveys::count();
        $this->avgRating = Surveys::avg('rating') ?? 0;

        $this->topEmployee = Employees::select(
            'employees.*',
            DB::raw('AVG(surveys.rating) as avg_rating'),
            DB::raw('COUNT(surveys.id) as total_survey')
        )
            ->join('surveys', 'surveys.employee_id', '=', 'employees.id')
            ->groupBy('employees.id')
            ->orderByDesc('avg_rating')
            ->first();

        // 📊 Grafik survey per bulan (tahun berjalan)
        $surveys = Surveys::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        foreach ($surveys as $item) {
            $this->chartLabels[] = Carbon::create()->month($item->month)->format('M');
            $this->chartData[] = $item->total;
        }
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
