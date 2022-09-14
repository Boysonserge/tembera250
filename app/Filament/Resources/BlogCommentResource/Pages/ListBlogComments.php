<?php

namespace App\Filament\Resources\BlogCommentResource\Pages;

use App\Filament\Resources\BlogCommentResource;
use Filament\Resources\Pages\ListRecords;


class ListBlogComments extends ListRecords
{
    use ListRecords\Concerns\CanViewRecords;



    protected static string $resource = BlogCommentResource::class;



}
