<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelClient extends Model
{
    protected $table = 'client';
    protected $fillable = ['name', 'date', 'salesman', 'description', 'price'];

    /**
     * Filter Clients
     */

    public function search($pesquisar = null){

        $results = $this->where(function($query) use($pesquisar) {
            if ($pesquisar){
                $query->where('name', 'LIKE', "%{$pesquisar}%");
            }
            
        })->paginate(5);

        return $results;
    }
}
