<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ProfileHistory;

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

    public function profileHistories()
    {
        return $this->hasMany(ProfileHistory::class);
    }

    public function assignProfileHistories(ProfileHistory $profileHistory)
    {
        return $this->profiles()->attach($profileHistory);
    }

    public function removeProfileHistories(ProfileHistory $profileHistory)
    {
        return $this->profiles()->detach($profileHistory);
    }
}
