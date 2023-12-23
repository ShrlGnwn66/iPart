<?php

namespace App\Filament\Resources\MitraCareHubResource\Pages;

use App\Filament\Resources\MitraCareHubResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMitraCareHubs extends ListRecords
{
    protected static string $resource = MitraCareHubResource::class;

    public function getTitle(): string
    {
        return 'Daftar Keluhan';
    }

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];


    }
}
