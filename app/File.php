<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
      protected $fillable = [
        'name', 'path', 'size','uploader_id','gat_id','DIR'
    ];
}
