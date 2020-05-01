<?php

namespace LaravelFrontendPresets\TablerPreset;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;
use Laravel\Ui\AuthCommand;

class TablerPresetServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
      UiCommand::macro('tabler', function ($command) {
          TablerPreset::install();

          $command->info('Tabler UI scaffolding installed successfully.');

          if ($command->option('auth')) {
              TablerPreset::installAuth();

              $command->info('Tabler UI auth scaffolding installed successfully.');
          }

          $command->comment('Please run "npm install && npm run dev" to compile your scaffolding.');
      });

      Paginator::defaultView('pagination::default');

      Paginator::defaultSimpleView('pagination::simple-default');
  }
}
