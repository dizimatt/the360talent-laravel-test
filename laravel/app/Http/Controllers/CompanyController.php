<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyController extends Controller
{
    public function getEmployeesOfCompany(int $companyId): View{
        $company_name = "not found";
        $company = DB::table('companies')->where('id', $companyId)->first();
        if ($company){
            $company_name = $company->name;
        }
        $employees = DB::table('employees')->where('company_id', $companyId)->paginate(10);
        return view('company.employees',['company_name' => $company_name, 'employees' => $employees]);
    }
    //
}
