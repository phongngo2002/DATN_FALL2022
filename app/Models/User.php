<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

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
        'phone_number',
        'avatar',
        'money',
        'address',
        'role_id',
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

    public function getAll(){
        $query = DB::table($this->table)->select($this->fillable);
        $users = $query->get();
        return $users;
    }
    public function getOne($id){
        $query = DB::table($this->table)->where('id',$id)->select($this->fillable);
        $user = $query->first();
        return $user;
    }
    public function saveNew($params){
        $data = array_merge($params['cols']);
        $request = DB::table($this->table)->insertGetId($data);
        return $request;
    }
}
