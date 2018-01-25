<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\BalanceModel;

use App\Models\Balance;

class BalanceController extends Controller
{
	public function __construct (Balance $model) 
	{
		$this->model = $model;
	}

    public function index (Request $request) 
    {
    	return $request->all();
    }

    public function show (Request $request, $id) 
    {
    	return $this->model->getById($id);
    }
}
