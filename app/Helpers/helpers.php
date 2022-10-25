<?php

use App\Models\StaticOptions;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// Gets ENUM values Data from DB in array format
if (!function_exists('getEnum')) {
    function getEnum($table_name, $colum_name)
    {
        $values = DB::select(DB::raw('SHOW COLUMNS FROM ' . $table_name . ' WHERE Field = "' . $colum_name . '"'));

        preg_match('/^enum\((.*)\)$/', $values[0]->Type, $matches);
        foreach (explode(',', $matches[1]) as $value) {
            $enum[trim($value, "'")] = trim($value, "'");
        }

        return $enum;
    }
}

if (!function_exists('getKeyValuesWithMap')) {
    function getKeyValuesWithMap($model, $value, $key, $where_column = null, $where_id = null)
    {
        $model = "\\App\\Models\\" . $model;
        if ($where_column != null && $where_id != null) {
            $data1 = $model::where($where_column, $where_id)->pluck($value, $key);

            $data = collect($data1)->map(function ($data1, $key) {
                return ['name' => $data1, 'id' => $key];
            })->toArray();
        } else {
            $data = $model::all()->map->only($value, $key)->toArray();
        }

        return $data;
    }
}

// Gets array of custom key & values from Model
if (!function_exists('getKeyValues')) {
    function getKeyValues($model, $value, $key, $where_column = null, $where_id = null)
    {
        $model = "\\App\\Models\\" . $model;
        if ($where_column != null && $where_id != null) {
            $data = $model::where($where_column, $where_id)->pluck($value, $key);
        } else {
            $data = $model::all()->pluck($value, $key)->toArray();
        }

        return $data;
    }
}

// Gets array of custom key & values from Model Based of Grouped Colum
if (!function_exists('getGroupedKeyValues')) {
    function getGroupedKeyValues($model, $group_by, $value, $key)
    {
        $model = "\\App\\Models\\" . $model;

        $data = $model::get()->groupBy($group_by)->map(fn ($type) => $type->pluck($value, $key));

        return $data;
    }
}

// Create or Update Static option value in DB
if (!function_exists('set_static_option')) {
    function set_static_option($key, $value)
    {
        if (!StaticOptions::where('key', $key)->first()) {
            StaticOptions::create([
                'key' => $key,
                'value' => $value
            ]);
            return true;
        } else {
            StaticOptions::where('key', $key)->update([
                'key' => $key,
                'value' => $value
            ]);
            Cache::forget($key);
            return true;
        }
        return false;
    }
}

// Get Static Value from DB
if (!function_exists('get_static_option')) {
    function get_static_option($key)
    {
        global $key;
        $key = $key;
        $value = StaticOptions::where('key', $key)->first();
        Cache::remember($key, 86400, function () {
            global $key;
            return StaticOptions::where('key', $key)->first();
        });

        return !empty($value) ? $value->value : null;
    }
}

// Delete Static Option with Value
if (!function_exists('delete_static_option')) {
    function delete_static_option($key)
    {
        StaticOptions::where('key', $key)->delete();
        return true;
    }
}

// Time Slots
if (!function_exists('getTimeSlots')) {
    function getTimeSlots($start, $end, $gap)
    {
        // $period = new CarbonPeriod($start, $gap . ' minutes', $end); // for create use 24 hours format later change format
        if ($gap == 0 || $gap == null) {
            $gap = 10;
        }
        $period = Carbon::parse($start)->toPeriod($end, $gap . ' minutes');
        $slots = [];
        foreach ($period as $item) {
            array_push($slots, $item->format("h:i A"));
        }

        return $slots;
    }
}

// Route Action
if (!function_exists('getRouteAction')) {
    function getRouteAction()
    {
        return substr(strstr(Route::currentRouteAction(), '@'), 1);
    }
}
