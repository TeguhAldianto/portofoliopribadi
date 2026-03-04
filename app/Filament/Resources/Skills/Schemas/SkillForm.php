<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Skill Name'),

                Select::make('category')
                    ->required()
                    ->options([
                        'Backend' => 'Backend',
                        'Frontend' => 'Frontend',
                        'Mobile' => 'Mobile',
                        'Database' => 'Database',
                        'DevOps' => 'DevOps',
                        'Tools' => 'Tools',
                    ])
                    ->default('Backend'),

                TextInput::make('proficiency_level')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->default(50)
                    ->suffix('%')
                    ->label('Proficiency Level (0-100%)'),

                TextInput::make('order')
                    ->numeric()
                    ->default(0)
                    ->label('Display Order'),
            ]);
    }
}
