<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Personal
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Salary[] $salaries
 * @property-read int|null $salaries_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Personal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Personal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Personal query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Personal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Personal whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Personal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Personal whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Personal whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Personal extends Model
{
    protected $fillable = ['first_name', 'lastnames_name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function salaries()
    {
        return $this->belongsToMany(Salary::class);
    }
}
