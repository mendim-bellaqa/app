<?php

// app/Models/Client.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_name',
        'email',
        'phone_number',
    ];

    // Relation to invoices
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
