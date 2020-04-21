<?php

namespace Owlcoder\LaravelMeta\Facades;

use Owlcoder\LaravelMeta\Services\MetaService;
use Illuminate\Support\Facades\Facade;

/**
 * Class CatalogFacade
 * @package App\Facades
 */
class Meta extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return MetaService::class;
    }
}
