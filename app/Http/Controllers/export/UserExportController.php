<?php

namespace App\Http\Controllers\export;

use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Http\Controllers\Controller;

class UserExportController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function all_users()
    {
        return $this->excel->download(new UsersExport, 'data-employee.xlsx');
    }
}
