<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'name',
        'file_path',
        'description',
        'status',
        'user_id',
<<<<<<< HEAD
        'jumlah_cek',
        'assignment_id',
        'idFile',
        'object_id',
=======
        // 'jumlah_cek',
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
