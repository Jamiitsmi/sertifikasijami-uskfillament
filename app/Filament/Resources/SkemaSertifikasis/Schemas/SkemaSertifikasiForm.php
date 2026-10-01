<?php

namespace App\Filament\Resources\SkemaSertifikasis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SkemaSertifikasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_skema')
                    ->label('Kode Skema')
                    ->required()
                    ->maxLength(50)
                    ->unique(ignoreRecord: true)
                    ->placeholder('Contoh: SKM-001'),

                TextInput::make('nama_skema')
                    ->label('Nama Skema')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Contoh: Junior Web Developer'),

                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->rows(4)
                    ->columnSpanFull()
                    ->placeholder('Deskripsi singkat skema (opsional)'),
            ]);
    }
}