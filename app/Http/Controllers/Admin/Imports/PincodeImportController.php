<?php

namespace App\Http\Controllers\Admin\Imports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PincodeImport;
use App\Models\LocationPincode;

class PincodeImportController extends Controller
{
    public function showUploadForm()
    {
        return view('admin.pages.locations.pincodes.upload');
    }

    public function import(Request $request)
    {
        // Set the maximum execution time to 120 seconds
        // ini_set('max_execution_time', 100000);
        $file = $request->file('file');
        \Log::info('Uploaded File:', ['name' => $file->getClientOriginalName(), 'size' => $file->getSize()]);
        $request->validate([
            'file' => 'required|mimes:xls,xlsx,csv',
        ]);

        $file = $request->file('file');

        Excel::import(new PincodeImport, $file);

        return redirect()->route('superadmin.locations.pincodes.import')->with('success', 'Pincode Data imported successfully.');
    }

    public function index()
    {
        $entriesPerPage = request('entries', 10);
        $search = request('search');
        $pincodes = LocationPincode::query();

        if ($search) {
            $pincodes->where(function ($query) use ($search) {
                $query->where('circle_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('region_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('division_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('office_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('pincode', 'LIKE', '%' . $search . '%')
                    ->orWhere('district', 'LIKE', '%' . $search . '%')
                    ->orWhere('state_name', 'LIKE', '%' . $search . '%');
            });
        }

        $pincodes = $pincodes->paginate($entriesPerPage);
        return view('admin.pages.locations.pincodes.index', compact('pincodes', 'search'));
    }
}
