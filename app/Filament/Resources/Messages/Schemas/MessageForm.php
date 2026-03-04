<?php

namespace App\Filament\Resources\Messages\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->disabled(),

                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->disabled(),

                Textarea::make('message')
                    ->required()
                    ->rows(5)
                    ->disabled()
                    ->columnSpanFull(),

                TextInput::make('created_at')
                    ->label('Received At')
                    ->disabled(),
            ]);
    }
}
