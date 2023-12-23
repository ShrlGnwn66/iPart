<?php

namespace App\Filament\Resources\DaftarMitraIKRResource\Pages;

use App\Filament\Resources\DaftarMitraIKRResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDaftarMitraIKR extends EditRecord
{
    protected static string $resource = DaftarMitraIKRResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
