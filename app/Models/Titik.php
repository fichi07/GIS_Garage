<?php

namespace App\Models;

use App\Models\Status;
use App\Models\Layanan;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Titik extends Model
{
    use HasFactory;

    protected $table = 'tokos';
    protected $guarded = 'id';

    /**
     * Get the layanan that owns the Titik
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
  /*   public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class);
    } */

    /**
     * Get the status that owns the Titik
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
  /*   public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    } */

    /**
     * Get the transaksi that owns the Titik
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
  /*   public function transaksi(): BelongsTo
    {
        return $this->belongsTo(Transaksi::class);
    } */
}
