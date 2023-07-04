<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
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

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'id_empresa',
        'id_sucursal',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function empresa()
    {
        return $this->hasOne(Empresa::class, 'id', 'id_empresa');
    }

    public function sucursal()
    {
        return $this->hasOne(sucursal::class, 'id', 'id_sucursal');
    }

    public function carrito()
    {
        $carritos = [];
        $ventas = Venta::where('id_sucursal', Auth::user()->id_sucursal)->get();
        foreach ($ventas as $venta) {
            if (Carbon::parse($venta->created_at)->format('Y-m-d') == Carbon::now()->format('Y-m-d')) {
                array_push($carritos, $venta);
            }
        }

        // return Carbon::now()->format('Y-m-d');

        return count($carritos);
    }

    public function carritoItems()
    {
        $carritosItems = [];
        $ventas = Venta::where('id_sucursal', Auth::user()->id_sucursal)->get();
        foreach ($ventas as $venta) {
            if (Carbon::parse($venta->created_at)->format('Y-m-d') == Carbon::now()->format('Y-m-d')) {
                array_push($carritosItems, $venta);
            }
        }

        return $carritosItems;
    }
}
