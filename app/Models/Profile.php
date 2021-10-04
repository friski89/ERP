<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'gender',
        'phone_number',
        'blood_group',
        'no_ktp',
        'no_npwp',
        'address_ktp',
        'address_domisili',
        'status_domisili',
        'user_id',
    ];

    protected $searchableFields = ['*'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
