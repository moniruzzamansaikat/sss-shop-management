<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        // get all table names from database
        $tables = DB::select('SHOW TABLES');
        $items  = [];
        
        foreach($tables as $table){
            $name = $table -> Tables_in_shop_management;
            array_push($items, $name);
        }

        // exclude tables that are not needed
        $items = array_diff($items, ['migrations', 'password_resets', 'failed_jobs','personal_access_tokens', 'shop']);
        
        return view('dashboard.index', compact('items'));
    }
}
