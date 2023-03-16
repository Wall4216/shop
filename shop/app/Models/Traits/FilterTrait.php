<?php
namespace App\Models\Traits;

use App\Http\Filters\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

trait FilterTrait
{
    public function filter(Builder $builder, FilterInterface $filter){
        $filter->apply($builder);
        return $builder;
    }
}
