<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use HasFactory;
    use Searchable;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'nik_telkom',
        'nik_company',
        'date_in',
        'band_position_id',
        'job_grade_id',
        'job_family_id',
        'job_function_id',
        'city_recuite_id',
        'status_employee_id',
        'company_home_id',
        'date_sk',
        'company_host_id',
        'sub_status_id',
        'unit_id',
        'place_of_birth',
        'division_id',
        'date_of_birth',
        'work_location_id',
        'age',
        'job_title_id',
        'edu_id',
    ];

    protected $searchableFields = ['*'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_in' => 'date',
        'date_sk' => 'date',
        'date_of_birth' => 'date',
    ];

    protected $appends = [
        'avatar_url',
    ];

    public function getAvatarUrlAttribute()
    {
        if ($this->avatar && Storage::disk('avatars')->exists($this->avatar)) {
            return Storage::disk('avatars')->url($this->avatar);
        }

        return asset('noimage.png');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function families()
    {
        return $this->hasMany(Family::class);
    }

    public function bandPosition()
    {
        return $this->belongsTo(BandPosition::class);
    }

    public function jobGrade()
    {
        return $this->belongsTo(JobGrade::class);
    }

    public function jobFamily()
    {
        return $this->belongsTo(JobFamily::class);
    }

    public function jobFunction()
    {
        return $this->belongsTo(JobFunction::class);
    }

    public function cityRecuite()
    {
        return $this->belongsTo(CityRecuite::class);
    }

    public function statusEmployee()
    {
        return $this->belongsTo(StatusEmployee::class);
    }

    public function companyHome()
    {
        return $this->belongsTo(CompanyHome::class);
    }

    public function companyHost()
    {
        return $this->belongsTo(CompanyHost::class);
    }

    public function subStatus()
    {
        return $this->belongsTo(SubStatus::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function workLocation()
    {
        return $this->belongsTo(WorkLocation::class);
    }

    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class);
    }

    public function edu()
    {
        return $this->belongsTo(Edu::class);
    }

    public function serviceHistories()
    {
        return $this->hasMany(ServiceHistory::class);
    }

    public function educationalBackgrounds()
    {
        return $this->hasMany(EducationalBackground::class);
    }

    public function assignmentHistories()
    {
        return $this->hasMany(AssignmentHistory::class);
    }

    public function performanceAppraisalHistories()
    {
        return $this->hasMany(PerformanceAppraisalHistory::class);
    }

    public function achievementHistories()
    {
        return $this->hasMany(AchievementHistory::class);
    }

    public function trainingHistories()
    {
        return $this->hasMany(TrainingHistory::class);
    }

    public function skillsAndProfessions()
    {
        return $this->hasMany(SkillsAndProfession::class);
    }

    public function dataThp()
    {
        return $this->hasOne(DataThp::class);
    }

    public function allOfficeFacilities()
    {
        return $this->hasMany(OfficeFacilities::class);
    }

    public function insuranceFacilities()
    {
        return $this->hasMany(InsuranceFacility::class);
    }

    public function cashBenefits()
    {
        return $this->hasMany(CashBenefit::class);
    }

    public function isSuperAdmin()
    {
        return $this->hasRole('super-admin');
    }
}