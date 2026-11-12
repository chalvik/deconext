<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Product\Pages;

use App\MoonShine\Resources\Product\ProductResource;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Pages\Crud\DetailPage;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Table\TableBuilder;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use Throwable;

/**
 * @extends DetailPage<ProductResource>
 */
class ProductDetailPage extends DetailPage
{
    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            ID::make(),
            ID::make(),
            Text::make('slug')->nullable(),
            Text::make('name')->required(),
            Text::make('title'),
            Text::make('category_id'),
            Image::make('image_url')->nullable(),
            Text::make('series_id'),
            Text::make('embossing_id'),
            Text::make('protect_layer_id'),
            Textarea::make('description')->required(),
            Switcher::make('published')
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    /**
     * @param  TableBuilder  $component
     * @return TableBuilder
     */
    protected function modifyDetailComponent(ComponentContract $component): ComponentContract
    {
        return $component;
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer(),
        ];
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer(),
        ];
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer(),
        ];
    }
}
