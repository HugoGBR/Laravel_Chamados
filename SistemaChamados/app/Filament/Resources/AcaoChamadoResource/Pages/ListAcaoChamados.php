<?php

namespace App\Filament\Resources\AcaoChamadoResource\Pages;

use App\Filament\Resources\AcaoChamadoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAcaoChamados extends ListRecords
{
    protected static string $resource = AcaoChamadoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
