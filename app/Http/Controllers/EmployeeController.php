<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Models\EmployeePeriod;
use App\Models\Gender;
use App\Models\Level;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        $divisions = Division::all();
        $genders = Gender::all();
        $levels = Level::all();
        $periods = EmployeePeriod::distinct()->pluck('period');

        // Menampilkan data dengan relasi tabel yang lainnya
        $employees = EmployeePeriod::with(['division', 'company', 'gender', 'level', 'employee'])->get();
        // ->paginate(10);
        $totalEmployees = $employees->count();

        return view('welcome', compact('companies', 'divisions', 'genders', 'levels', 'periods', 'employees', 'totalEmployees'));
    }

    public function filter(Request $request)
    {
        // Mendapatkan data dari form
        $filters = $request->only(['division_id', 'company_id', 'gender_id', 'level_id']);

        $employees = EmployeePeriod::query();

        foreach ($filters as $key => $value) {
            if ($value) {
                $employees->where($key, $value);
            }
        }

        // Grouping karyawan dan menjumlahkan total karyawan
        $employeeCounts = $employees->select('period', DB::raw('count(*) as total'))
            ->groupBy('period')
            ->pluck('total', 'period')
            ->toArray();

        $totalEmployee = [];
        foreach ($employeeCounts as $period => $count) {
            $totalEmployee[] = [
                'name' => $period,
                'value' => $count
            ];
        }

        return response()->json($totalEmployee);
    }
}
