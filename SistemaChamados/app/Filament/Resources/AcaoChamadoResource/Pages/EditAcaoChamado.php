<?php

namespace App\Filament\Resources\AcaoChamadoResource\Pages;

use App\Filament\Resources\AcaoChamadoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAcaoChamado extends EditRecord
{
    protected static string $resource = AcaoChamadoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
