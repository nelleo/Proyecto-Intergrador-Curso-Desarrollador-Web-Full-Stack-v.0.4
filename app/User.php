<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  
  const PAIS_ARGENTINA ="Ar";
  const PAIS_BRASIL ="Br";
  const PAIS_COLOMBIA="Co";
  const PAIS_FRANCIA="Fr";
  const PAIS_BOLIVIA="Bo";
  const PAIS_CHILE="Ch";
  const PAIS_PARAGUAY="Par";
  const PAIS_VENEZUELA="Ve";
  const PAIS_PERU="Pe";
  const PAIS_URUGUAY="Ur";
  const PAIS_ECUADOR="Ec";

  public static function getPaises(){ 
    return [
      self::PAIS_ARGENTINA=> "ARGENTINA",
      self::PAIS_BRASIL=> "BRASIL",
      self::PAIS_COLOMBIA=> "COLOMBIA",
      self::PAIS_FRANCIA=> "FRANCIA",
      self::PAIS_BOLIVIA=> "BOLIVIA",
      self::PAIS_CHILE=> "CHILE",
      self::PAIS_PARAGUAY=> "PARAGUAY",
      self::PAIS_VENEZUELA=> "VENEZUELA",
      self::PAIS_PERU=> "PERU",
      self::PAIS_URUGUAY=> "URUGUAY",
      self::PAIS_ECUADOR=> "ECUADOR"
    ];
  }
  
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','password','pais', 'telefono','fechanac'];

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

    public function posteos(){
      return $this->hasMany('App\Posteo');//,'posteos','user_id','id');
  }

  public function guardarImg(Request $request,$destino){
    $request->file('img')->store('public/'.$destino);
  }

}
