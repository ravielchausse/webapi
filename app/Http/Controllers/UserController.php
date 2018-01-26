<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
	public function __construct (User $model) 
	{
		$this->model = $model;
	}

    public function index (Request $request) 
    {
    	return $this->model->listAll($request->all());
    }

    public function show (Request $request, $id) 
    {
    	return $this->model->getById($id);
    }

    public function destroy (Request $request, $id)
    {
        return $this->model->deleteById($id);
    }
}
