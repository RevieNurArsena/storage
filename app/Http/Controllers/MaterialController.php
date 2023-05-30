<?php

namespace App\Http\Controllers;
use App\Models\MaterialModel;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    protected $MaterialModel;

    public function __construct()
    {
        $MaterialModel = new MaterialModel();
    }
    
    public function index()
    {
        return view('admin.materialreq', [
            'title' => 'material request',
            'active' => 'material request',
            'data' => MaterialModel::all()
        ]);
    }

    public function store(Request $req){
        $validateData = $req->validate([
            "request" => "required",
            "destination" => "required",
            "product" => "required",
            "qty" => "required",
            "schedule" => "required",
            "expired" => "required",
            "description" => "required"
        ]);

        $validateData['status'] = false;
        MaterialModel::create($validateData);
        return redirect('/materialreq');
    }
}

