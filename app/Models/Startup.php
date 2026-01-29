<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    protected $table = 'startups';

    protected $fillable = ['nome', 'setor', 'email_contato', 'data_cadastro'];
}
