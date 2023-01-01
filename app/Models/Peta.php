<?php

namespace App\Models;

use App\Models\Titik;
use App\Models\Status;
use App\Models\Layanan;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

class Peta extends Model
{
    use HasFactory;

    protected $table = 'tokos';
    protected $guarded = 'id';

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'image',
        'token',
        'x',
        'y',
        'jam_buka',
        'jam_tutup'
    ];

    
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama','like', '%' . $search . '%')
            ->orWhere('pemilik','like', '%' . $search . '%')
            ->orWhere('alamat','like', '%' . $search . '%')
            ->orWhere('no_hp','like', '%' . $search . '%');
        });
    }
}
