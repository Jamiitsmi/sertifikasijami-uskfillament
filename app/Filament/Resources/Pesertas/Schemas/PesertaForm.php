<?php

namespace App\Filament\Resources\Pesertas\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PesertaForm
{
    public static function configure(Schema $schema): Schema
    {
         return $schema
            ->components([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('nik')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(20),

                TextInput::make('telepon')
                    ->tel()
                    ->maxLength(20),

                Textarea::make('alamat')
                    ->rows(3)
                    ->columnSpanFull(),

                Select::make('skema_id')
                    ->relationship('skema', 'nama_skema') // Menampilkan nama_skema dari relasi
                    ->required()
                    ->searchable()
                    ->preload(),   
            ]);
    }
}
