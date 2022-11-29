<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseExportController extends Controller
{
    public function export()
    {
        $tables = DB::select('SHOW TABLES');
        
        echo "<pre>";
        print_r($tables);
        
    }

}
