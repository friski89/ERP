<?php

namespace App\Http\Controllers\export;

use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use Illuminate\Http\Request;

class UserImportController extends Controller
{
    public function store(Request $request)
    {
        $file = $request->file('file');
        $import = new UsersImport();
        $import->import($file);

        return redirect()->route('users.index')->withSuccess('Import Data Has Been Successfully');
    }
}
