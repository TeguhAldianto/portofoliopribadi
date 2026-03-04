<?php

namespace App\Filament\Resources\Publications\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;

class PublicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                Select::make('type')
                    ->required()
                    ->options([
                        'publication' => 'Publication',
                        'certification' => 'Certification',
                    ])
                    ->default('publication'),

                TextInput::make('issuer')
                    ->required()
                    ->maxLength(255)
                    ->label('Issuer/Publisher'),

                DatePicker::make('date')
                    ->required()
                    ->native(false)
                    ->label('Publication/Issue Date'),

                TextInput::make('url')
                    ->url()
                    ->maxLength(255)
                    ->label('URL')
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->rows(3)
                    ->columnSpanFull(),

                Toggle::make('is_featured')
                    ->label('Sorot Publikasi Ini (Featured)')
                    ->helperText('Publikasi akan ditampilkan di posisi paling atas secara khusus.')
                    ->default(false),
            ]);
    }
}
