<?php

namespace App\Filament\Resources\DaftarMitraIKRResource\Pages;

use App\Filament\Resources\DaftarMitraIKRResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDaftarMitraIKRS extends ListRecords
{
    protected static string $resource = DaftarMitraIKRResource::class;

    public function getTitle(): string
    {
        return 'Daftar Mitra IKR';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Mitra IKR'),
        ];
    }
}
