<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Salary
 *
 * @property int $id
 * @property int $amount
 * @property string $date_of_issue
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Personal $personal
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Salary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Salary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Salary query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Salary whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Salary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Salary whereDateOfIssue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Salary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Salary whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Salary extends Model
{
    protected $fillable = ['amount', 'date_of_issue'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
}
