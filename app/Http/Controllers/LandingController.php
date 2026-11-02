<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\PricingPlan;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display the landing page with dynamic content.
     */
    public function index()
    {
        $services = Service::where('is_active', true)->orderBy('order')->get();
        $pricingPlans = PricingPlan::where('is_active', true)->orderBy('order')->get();
        $advantages = Advantage::where('is_active', true)->orderBy('order')->get();
        $projects = Project::where('is_active', true)->orderBy('order')->get();

        return view('welcome', compact('services', 'pricingPlans', 'advantages', 'projects'));
    }
}

