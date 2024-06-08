<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboarAdmindController extends Controller
{
    //index
    public function index()
    {
        $data = [
            'title'     => 'Dashboard',
            'content'   => 'admin/layouts/content'
        ];
        return view('admin.dashboard', $data);
    }
}
