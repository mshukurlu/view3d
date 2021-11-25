<?php
namespace  App\Service;

use App\Models\BetData;

class TableService{
    public function getAllData(){
        return BetData::all();
    }
}
