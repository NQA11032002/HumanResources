<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homeModel extends Model
{
    use HasFactory;

    protected $table = "article_company";
    protected $fillable = ['id_fields_career', 'id_company', 'id_level', 'id_city', 'title', 'request', 'address_work', 'status_address', 'salary_from', 'salary_to', 'status_salary', 'date_accept_profile', 'gender', 'agefrom', 'ageto', 'experience', 'description_work', 'description_orther', 'stauts'];
    protected $timespans = true;

}