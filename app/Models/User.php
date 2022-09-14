<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser,HasName,HasAvatar
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded=[];
    public bool $val=true;
    public function blogs(){
        return $this->hasMany(Blog::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];


    public function canAccessFilament(): bool
    {
        return true;
    }

    public function canManageUsers():bool
    {

        if ($this->role=='admin'){
            $this->val=true;
        }else{
            $this->val=false;
        }
        return $this->val;
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return $this->profofile_photo_path;
    }

    public function getFilamentName(): string
    {
        return $this->name;
    }


}
