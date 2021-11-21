<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'quantite',
        'prixUntaire',
        'filiale_id'
    ];

    public function getDisponibleAttribute() {
        return $this->quantite>25;
    }

    /**
     * Get the filiale that owns the Produit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function filiale(): BelongsTo
    {
        return $this->belongsTo(Filiale::class);
    }
}
