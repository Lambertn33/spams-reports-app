<?php

namespace App\Http\Controllers;

use App\Models\SpamReport;
use Illuminate\Http\Request;

class UsersSpamReportsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $query = $spamReports = SpamReport::where('isBlocked', false);
        $spamReports = $query->paginate(5);
        
        return inertia('users/Index', [
            'spamReports' => $spamReports,
            'spamReportsCount' => $spamReports->total()
        ]);
    }
}
