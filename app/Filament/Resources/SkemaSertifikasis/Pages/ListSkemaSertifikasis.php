<?php

namespace App\Filament\Resources\SkemaSertifikasis\Pages;

use App\Filament\Resources\SkemaSertifikasis\SkemaSertifikasiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSkemaSertifikasis extends ListRecords
{
    protected static string $resource = SkemaSertifikasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
