<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Filiale extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'nomResponsable',
        'photoResponsable',
        'email',
        'telephone',
        'adresse',
        'inauguree',
        'dateInauguration',
        'user_id'
    ];

    /**
     * Get all of the produits for the Filiale
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produits(): HasMany
    {
        return $this->hasMany(Produit::class);
    }

    /**
     * Get the user that owns the Filiale
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
