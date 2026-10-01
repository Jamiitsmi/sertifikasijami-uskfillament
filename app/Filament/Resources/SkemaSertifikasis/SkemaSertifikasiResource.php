<?php

namespace App\Filament\Resources\SkemaSertifikasis;

use App\Filament\Resources\SkemaSertifikasis\Pages\CreateSkemaSertifikasi;
use App\Filament\Resources\SkemaSertifikasis\Pages\EditSkemaSertifikasi;
use App\Filament\Resources\SkemaSertifikasis\Pages\ListSkemaSertifikasis;
use App\Filament\Resources\SkemaSertifikasis\Schemas\SkemaSertifikasiForm;
use App\Filament\Resources\SkemaSertifikasis\Tables\SkemaSertifikasisTable;
use App\Models\SkemaSertifikasi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SkemaSertifikasiResource extends Resource
{
    protected static ?string $model = SkemaSertifikasi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Skema';

    protected static ?string $navigationLabel = 'Skema Sertifikasi';
    protected static ?string $pluralModelLabel = 'Skema Sertifikasi';
    protected static ?string $modelLabel = 'Skema Sertifikasi';

    public static function form(Schema $schema): Schema
    {
        return SkemaSertifikasiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SkemaSertifikasisTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSkemaSertifikasis::route('/'),
            'create' => CreateSkemaSertifikasi::route('/create'),
            'edit' => EditSkemaSertifikasi::route('/{record}/edit'),
        ];
    }
}
