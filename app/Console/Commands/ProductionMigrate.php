<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Migrations\Migrator;

class ProductionMigrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:production';

    /**
     * The migrator instance.
     *
     * @var \Illuminate\Database\Migrations\Migrator
     */
    protected $migrator;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Overrides confirmable trait version of migrate command for production.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        // $this->migrator = $migrator;
        $this->migrator = app('migrator');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $this->prepareDatabase();

      // Next, we will check to see if a path option has been defined. If it has
      // we will use the path relative to the root of this installation folder
      // so that migrations may be run for any path within the applications.
      $this->migrator->setOutput($this->output)
              ->run($this->getMigrationPaths(), [
                  'pretend' => $this->option('pretend'),
                  'step' => $this->option('step'),
              ]);

      // Finally, if the "seed" option has been given, we will re-run the database
      // seed task to re-populate the database, which is convenient when adding
      // a migration and a seed at the same time, as it is only this command.
      if ($this->option('seed') && ! $this->option('pretend')) {
          $this->call('db:seed', ['--force' => true]);
      }
    }

    /**
     * Prepare the migration database for running.
     * *** TAKEN FROM MigrateCommand ***
     *
     * @return void
     */
    protected function prepareDatabase()
    {
        $this->migrator->setConnection($this->option('database'));

        if (! $this->migrator->repositoryExists()) {
            $this->call('migrate:install', array_filter([
                '--database' => $this->option('database'),
            ]));
        }
    }
}
