<?php

namespace App\Queries\Contracts;

use Illuminate\Database\Eloquent\Builder;

interface QueryBuilder
{
    public function getBuilder(): Builder;
}
