<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DaftarMitraIKRResource\Pages;
use App\Filament\Resources\DaftarMitraIKRResource\RelationManagers;
use App\Models\DaftarMitraIKR;
use App\Models\MitraCareHub;
use App\Models\MitraIkr;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Forms\Components\Component;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;

class DaftarMitraIKRResource extends Resource
{
    protected static ?string $model = MitraIkr::class;

    protected static ?string $navigationGroup = 'Mitra IKR';

    protected static ?string $navigationLabel = 'Daftar Mitra IKR';

    protected static ?string $navigationIcon = 'heroicon-s-list-bullet';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kode_mitra'),
                TextInput::make('nama')->label('Nama Mitra IKR'),
                Select::make('kantor_perwakilan')
                    ->options([
                        'SEMARANG' => 'SEMARANG',
                        'YOGYAKARTA' => 'YOGYAKARTA',
                        'PURWOKERTO' => 'PURWOKERTO',
                ])->native(false)
                // TextInput::make('kantor_perwakilan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_mitra')->sortable()->searchable(),
                TextColumn::make('nama')->sortable()->searchable(),
                TextColumn::make('kantor_perwakilan')->sortable()->searchable(),
            ])
            ->filters([
                SelectFilter::make('kantor_perwakilan')
                ->multiple()
                ->options([
                        'SEMARANG' => 'SEMARANG',
                        'YOGYAKARTA' => 'YOGYAKARTA',
                        'PURWOKERTO' => 'PURWOKERTO',

                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListDaftarMitraIKRS::route('/'),
            // 'create' => Pages\CreateDaftarMitraIKR::route('/create'),
            // 'edit' => Pages\EditDaftarMitraIKR::route('/{record}/edit'),
        ];
    }
}
