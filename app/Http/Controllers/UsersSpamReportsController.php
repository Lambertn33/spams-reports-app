<?php

namespace App\Http\Controllers;

use App\Models\SpamReport;
use Illuminate\Http\Request;

class UsersSpamReportsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $spamReports = SpamReport::where('isBlocked', false)->paginate(5);
        return inertia('users/Index', [
            'spamReports' => $spamReports
        ]);
    }
}
