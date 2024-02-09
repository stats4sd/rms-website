<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsletterResource\Pages;
use App\Filament\Resources\NewsletterResource\RelationManagers;
use App\Models\Newsletter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsletterResource extends Resource
{
    protected static ?string $model = Newsletter::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
                Forms\Components\Split::make([

                    Forms\Components\Section::make([

                        Forms\Components\Section::make('Introduction')
                                        ->icon('heroicon-m-chat-bubble-oval-left-ellipsis')
                                        ->collapsible()
                                        ->persistCollapsed()
                                        ->schema([
                                            Forms\Components\MarkdownEditor::make('intro')
                                                            ->label('')
                                                            ->hintIcon('heroicon-m-question-mark-circle', tooltip: '.....')
                                        ]),

                        Forms\Components\Section::make('What we\'ve been doing')
                                        ->icon('heroicon-m-backward')
                                        ->collapsible()
                                        ->persistCollapsed()
                                        ->schema([

                                        ]),

                        Forms\Components\Section::make('Coming up next')
                                        ->icon('heroicon-m-forward')
                                        ->collapsible()
                                        ->persistCollapsed()
                                        ->schema([
                                        
                                        ]),

                        Forms\Components\Section::make('RM News')
                                        ->icon('heroicon-m-megaphone')
                                        ->collapsible()
                                        ->persistCollapsed()
                                        ->schema([
                                            
                                        ]),

                        Forms\Components\Section::make('Resources Spotlight')
                                        ->icon('heroicon-m-sparkles')
                                        ->collapsible()
                                        ->persistCollapsed()
                                        ->schema([
                                            
                                        ]),

                    ]),

                    Forms\Components\Section::make([

                        Forms\Components\Section::make('Edition')
                                        ->icon('heroicon-m-calendar-days')
                                        ->schema([
                                            Forms\Components\Select::make('year')
                                                            ->options([
                                                                2024 => '2024',
                                                                2025 => '2025',
                                                                2026 => '2026'
                                                            ]),
                                            Forms\Components\Select::make('month')
                                                            ->options([
                                                                1 => 'January',
                                                                2 => 'February',
                                                                3 => 'March',
                                                                4 => 'April',
                                                                5 => 'May',
                                                                6 => 'June',
                                                                7 => 'July',
                                                                8 => 'August',
                                                                9 => 'September',
                                                                10 => 'October',
                                                                11 => 'November',
                                                                12 => 'December',
                                                            ])
                                        ])

                    ])
                    ->grow(false),

                ])->from('md')       
        ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('year')->sortable(),
                Tables\Columns\TextColumn::make('month')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNewsletters::route('/'),
            'create' => Pages\CreateNewsletter::route('/create'),
            'edit' => Pages\EditNewsletter::route('/{record}/edit'),
        ];
    }
}
