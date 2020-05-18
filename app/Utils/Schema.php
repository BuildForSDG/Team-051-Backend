<?php

namespace App\Utils;

use Closure;
use Illuminate\Database\Schema\Builder;
class Schema extends \Illuminate\Support\Facades\Schema
{
    /**
     * This will fix Codacy Avoid using static access to class
     * '\Illuminate\Support\Facades\Schema' in method 'up'.
     * @param $table
     * @param Closure $callable
     */
    public static function create($table, Closure $callable) : void
    {
        $builder = app(Builder::class);
        $builder->create($table, $callable);
    }

    /**
     * This will fix Codacy Avoid using static access to class
     * '\Illuminate\Support\Facades\Schema' in method 'down'.
     * @param $table
     */
    public static function dropIfExists($table) : void
    {
        $builder = app(Builder::class);
        $builder->dropIfExists($table);
    }
}
