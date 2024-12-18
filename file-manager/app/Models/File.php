<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_generate',
        'type',
        'size',
        'folder_id'
    ];

    public function folders(){
        return $this->BelongsTo(Folder::class);
    }
}
