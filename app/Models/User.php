<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    public $timestamps = false;

    public $updated_at = null;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
    //     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
    private static $user, $image, $imageUrl;

    public static function newUser($request)
    {
        $user = new User();
        $user->custom_created_at = Carbon::now('Asia/Dhaka');
        self::saveBasicInfo($user, $request, getFileUrl($request->file('image'), 'upload/user-images/'));
        $user->save();
    }

    public static function updateUser($request, $id)
    {
        self::$user     = User::find($id);
        if (self::$image    = $request->file('image'))
        {
            deleteFile(self::$user->profile_photo_path);
            self::$imageUrl = getFileUrl(self::$image, 'upload/user-images/');
        }
        else
        {
            self::$imageUrl = self::$user->profile_photo_path;
        }
        self::$user->custom_updated_at = Carbon::now('Asia/Dhaka');
        self::$user->name                 = $request->name;
        self::$user->email                = $request->email;
        self::$user->password             = $request->password;
        self::$user->role                = $request->role;
        self::$user->profile_photo_path   = self::$imageUrl;
        self::$user->save();
//        self::saveBasicInfo(self::$user, $request, self::$imageUrl);
    }

    public static function deleteUser($id)
    {
        self::$user = User::find($id);
        deleteFile(self::$user->image);
        self::$user->delete();
    }

    private static function saveBasicInfo($user, $request, $imageUrl)
    {
        $user->name                 = $request->name;
        $user->email                = $request->email;
        $user->password             = bcrypt($request->password);
        $user->role                = $request->role;
        $user->profile_photo_path   = $imageUrl;
        return $user;
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }



}
