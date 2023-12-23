<?php

namespace App\Filament\Resources\MitraCareHubResource\Pages;

use App\Filament\Resources\MitraCareHubResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMitraCareHub extends EditRecord
{
    protected static string $resource = MitraCareHubResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
