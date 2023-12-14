<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpamReport;

class ProtectorsSpamReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = SpamReport::where('state', SpamReport::OPEN);
        $spamReports = $query->paginate(5);

        return inertia('protectors/Index', [
            'spamReports' => $spamReports,
            'spamReportsCount' => $spamReports->total(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $type = $request->type;

        $successMessage = $type === "resolveForm" ?
            'Report resolved successfully and no longer visible to protectors' :
            'Report marked as blocked successfully and no longer visible to users';

        if ($type == "stateForm") {
            SpamReport::find($id)->update([
                'isBlocked' => true
            ]);
        }
        if ($type == "resolveForm") {
            SpamReport::find($id)->update([
                'state' => 'CLOSED'
            ]);
        }
        return redirect('/users/reports')->with('success', $successMessage);
    }
}
