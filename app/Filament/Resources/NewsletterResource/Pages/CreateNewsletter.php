<?php

namespace App\Filament\Resources\NewsletterResource\Pages;

use App\Filament\Resources\NewsletterResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsletter extends CreateRecord
{
    protected static string $resource = NewsletterResource::class;

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string 
    {
        return $this->getResource()::getUrl('index');
    }
}
