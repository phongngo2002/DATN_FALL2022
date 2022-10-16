<?php

namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\Contracts\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'role_id',
        'confirmation_code',
        'token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function checkAndRetunUser($email)
    {
        $user = DB::table('users')
            ->where('email', $email)
            ->first();

        if ($user) {
            return $user;
        }

        return 0;
    }

    public function updateUser($params = [], $id)
    {
        if ($id) {
            DB::table('users')
                ->where('id', $id)
                ->update($params);

            return DB::table('users')
                ->where('id', $id)
                ->first();
        }
        return 0;
    }

    public function getUserByEmail($email)
    {
        return DB::table($this->table)->where('email', $email)->first();
    }
}