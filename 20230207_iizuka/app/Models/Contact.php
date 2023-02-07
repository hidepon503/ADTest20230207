<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
/*
    public static function doSearch($fullname,$gender,$from,$until,$email)
    {
        $query = self::query();
        if(!empty($fullname)){
            $query->where('fullname', 'like binary', "%{$fullname}%");
        }
        $query = self::query();
        if(!empty($gender)){
            $query->where('gender', '=', "%{$gender}%");
        }
        $query = self::query();
        if(!empty($from)){
            $query->where('created_at', '=', "%{$from}%");
        }
        $query = self::query();
        if(!empty($until)){
            $query->where('created_at', '=', "%{$until}%");
        }
        $query = self::query();
        if(!empty($email)){
            $query->where('email', 'like binary', "%{$email}%");
        }
        $results = $query->get();
        return $results;
    }
*/

    public static function getDate($from, $until)
    {
        //created_atが20xx/xx/xx ~ 20xx/xx/xxのデータを取得
        $date = Contact::whereBetween("created_at", [$from, $until])->get();

        return $date;
    }

}