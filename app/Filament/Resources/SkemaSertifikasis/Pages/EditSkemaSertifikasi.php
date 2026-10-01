<?php

namespace App\Filament\Resources\SkemaSertifikasis\Pages;

use App\Filament\Resources\SkemaSertifikasis\SkemaSertifikasiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSkemaSertifikasi extends EditRecord
{
    protected static string $resource = SkemaSertifikasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
