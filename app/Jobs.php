<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use jDateTime;
use DateTime;

class Jobs extends Model
{
    //
    protected $table = 'jobs';

    public function getCreatedAtAttribute($value)
    {
//        $date1 = new DateTime($this->created_at);
        $date1 = new DateTime($value);
        $year = $date1->format('Y');
        $day = $date1->format('j');
        $month = $date1->format('n');
        $date = new jDateTime(true, true, 'Asia/Tehran');
        $time = $date->mktime(0, 0, 0, $month, $day, $year, false, 'America/New_York');
//            echo $date->date("Y/m/d", $time, false, true, 'Asia/Tehran');
        $value = $date->date("Y/m/d", $time, false, true, 'Asia/Tehran');
        return $value;
    }
}
