<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                TextInput::make('company')
                    ->required()
                    ->maxLength(255),

                TextInput::make('location')
                    ->maxLength(255),

                Select::make('type')
                    ->required()
                    ->options([
                        'work' => 'Work Experience',
                        'internship' => 'Internship',
                        'education' => 'Education',
                    ])
                    ->default('work'),

                DatePicker::make('start_date')
                    ->required()
                    ->native(false),

                DatePicker::make('end_date')
                    ->native(false)
                    ->label('End Date (Leave empty if current)'),

                MarkdownEditor::make('description')
                    ->required()
                    ->columnSpanFull(),

                TagsInput::make('achievements')
                    ->placeholder('Add achievement')
                    ->columnSpanFull(),

                TextInput::make('order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
