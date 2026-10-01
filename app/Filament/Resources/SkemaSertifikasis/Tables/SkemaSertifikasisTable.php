<?php

namespace App\Filament\Resources\SkemaSertifikasis\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SkemaSertifikasisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_skema')
                    ->label('Kode')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('nama_skema')
                    ->label('Nama Skema')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('pesertas_count')
                    ->label('Jumlah Peserta')
                    ->counts('pesertas')
                    ->badge()
                    ->color('success'),
            ])
            ->defaultSort('nama_skema', 'asc');
    }
}