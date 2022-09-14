<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use Filament\Resources\Pages\ListRecords;

class ListBlogs extends ListRecords
{
    use ListRecords\Concerns\CanViewRecords;
    protected static string $resource = BlogResource::class;


}
