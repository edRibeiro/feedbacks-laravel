<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'feedbacks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'recipient_id',
        'owner_id',
        'finalfeedback',
        'improvementpoints',
        'maintainpoints',
        'suggestions',
    ];


    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function recipient(): BelongsTo
    {
        return $this->belongsTo(User::class, 'recipient_id', 'id');
    }
}
