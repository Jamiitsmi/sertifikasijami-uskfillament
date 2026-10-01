<?php

namespace App\Filament\Resources\Pesertas\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class PesertasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->searchable(),

                TextColumn::make('telepon')
                    ->searchable(), 
                    
                TextColumn::make('nik')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('alamat')
                    ->searchable()
                    ->limit(50),

                TextColumn::make('skema.nama_skema') 
                    ->label('Skema')
                    ->badge()
                    ->searchable(),
            ]);
    }
}
