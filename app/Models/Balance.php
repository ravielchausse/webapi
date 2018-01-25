<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BalanceModel;

class Balance extends Model
{
	protected $table = 'bal_balance_sheets';
	protected $primaryKey = 'bal_id';

    public function __construct () 
    {
        parent::__construct();
    }

    public function getById ($id) 
    {
    	return $this->find($id);
    }
}
