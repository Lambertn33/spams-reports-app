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
        $spamReports = SpamReport::where('state', SpamReport::OPEN)->paginate(5);
        return inertia('protectors/Index', [
            'spamReports' => $spamReports
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $type = $request->type;

        $successMessage = $type === "resolveForm" ?
            'Report resolved successfully' :
            'Report marked as blocked successfully';

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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
