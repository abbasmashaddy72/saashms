<?php

namespace App\Http\Controllers\Api\Backend;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class AreaSearchController extends Controller
{
    public function __invoke(Request $request): Collection
    {
        return Area::query()->select('id', 'name')->orderBy('name')->when(
            $request->search,
            fn (Builder $query) => $query->where('name', 'like', "%{$request->search}%")
        )->when(
            $request->exists('selected'),
            fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
            fn (Builder $query) => $query->limit(10)
        )->get()->map(function (Area $area) {
            return $area;
        });
    }
}
