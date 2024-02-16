<?php

namespace App\Http\Controllers\Admin\Imports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TempleImport;
use App\Models\TemplesData;

class TempleImportController extends Controller
{
    public function showUploadForm()
    {
        return view('admin.pages.locations.temples.upload');
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

        Excel::import(new TempleImport, $file);

        return redirect()->route('superadmin.locations.temples.import')->with('success', 'Temple Data imported successfully.');
    }

    public function index()
    {
        $entriesPerPage = request('entries', 10);
        $search = request('search');
        $temples = TemplesData::query();

        if ($search) {
            $temples->where(function ($query) use ($search) {
                $query->where('temple_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('type', 'LIKE', '%' . $search . '%')
                    ->orWhere('full_address_code', 'LIKE', '%' . $search . '%')
                    ->orWhere('open_status', 'LIKE', '%' . $search . '%');
            });
        }

        $temples = $temples->paginate($entriesPerPage);
        return view('admin.pages.locations.temples.index', compact('temples', 'search'));
    }
}
