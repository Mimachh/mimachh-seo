<?php
namespace Mimachh\Seo\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeSchema extends Command
{
    protected $signature = 'schema:make {name}';
    protected $description = 'Create a new Schema.org type';
    protected Filesystem $files;

    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    public function handle()
    {
        $name = $this->argument('name');
        $stub = file_get_contents(__DIR__ . '/stubs/schema.stub');

        $stub = str_replace('DummyClass', $name, $stub);
        // $path = app_path("Schemas/{$name}.php");
        $path = __DIR__ . "/../Schemas/{$name}.php";
        if ($this->files->exists($path)) {
            $this->error("{$name} already exists!");
            return;
        }

        $this->files->put($path, $stub);
        $this->info("{$name} created successfully.");
    }
}
