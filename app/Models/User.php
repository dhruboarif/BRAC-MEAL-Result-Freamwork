<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'parent_id', 'status','created_at', 'image', 'program_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tasks()
    {
    	return $this->hasMany(Task::class);
    }

    public function children(){
        return $this->hasMany( User::class, 'parent_id', 'id' );
    }

    public function parent(){
        return $this->hasOne( User::class, 'id', 'parent_id' );
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function thematics()
    {
        return $this->hasMany(Thematic::class);
    }

    public function donors()
    {
        return $this->hasMany(Donor::class);
    }

    public function studyArchiveBy()
    {
        return $this->hasMany(StudyArchive::class, 'id', 'user_id');
    }

    public function studyArchiveApprovedBy()
    {
        return $this->hasMany(StudyArchive::class, 'id', 'approved_user_id');
    }

    public function documentArchiveBy()
    {
        return $this->hasMany(StudyArchive::class, 'id', 'user_id');
    }

    public function learningActionArchiveBy()
    {
        return $this->hasMany(LearningActionArchive::class, 'id', 'user_id');
    }
}
