<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\PricingPlan;
use App\Models\Project;
use App\Models\Service;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the dashboard with content summary statistics.
     */
    public function __invoke(): View
    {
        $servicesCount = Service::count();
        $activeServicesCount = Service::where('is_active', true)->count();
        $pricingCount = PricingPlan::count();
        $advantagesCount = Advantage::count();
        $projectsCount = Project::count();
        $activeProjectsCount = Project::where('is_active', true)->count();

        return view('dashboard', compact(
            'servicesCount',
            'activeServicesCount',
            'pricingCount',
            'advantagesCount',
            'projectsCount',
            'activeProjectsCount'
        ));
    }
}

