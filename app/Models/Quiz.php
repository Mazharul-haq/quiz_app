<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable=['name','description','minutes'];



    public function storeQuiz($data)
    {
      return Quiz::create($data);
    }
    public function allQuiz()
    {
        return Quiz::all();
    }
}
