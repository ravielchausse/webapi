<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BalanceModel
{
    public function __construct (array $attributes = []) 
    {
        $this->bal_id = $attributes['bal_id'] ?? null;
        $this->bal_id_skills = $attributes['ski_id'];
    }

    public function __toString () 
    {
    	return json_encode($this);
    }
}
