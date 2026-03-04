<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                TextInput::make('slug')
                    ->maxLength(255)
                    ->disabled()
                    ->dehydrated(false),

                TextInput::make('role')
                    ->maxLength(255),

                MarkdownEditor::make('description')
                    ->required()
                    ->columnSpanFull(),

                TagsInput::make('technologies')
                    ->required()
                    ->placeholder('Add technology (e.g., Laravel, MySQL)')
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->image()
                    ->directory('projects')
                    ->columnSpanFull(),

                TextInput::make('github_url')
                    ->url()
                    ->maxLength(255)
                    ->label('GitHub URL'),

                TextInput::make('demo_url')
                    ->url()
                    ->maxLength(255)
                    ->label('Demo URL'),

                Checkbox::make('is_featured')
                    ->label('Featured Project'),

                TextInput::make('order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
