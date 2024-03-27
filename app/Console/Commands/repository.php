<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class repository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate a repository and its interface';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $this->createRepository($name);
        $this->createRepositoryInterface($name);    
        $this->info('Repository created successfully');
    }

    private function createRepository($name)
    {
        $repository = app_path("Repositories/{$name}Repository.php");
        if (file_exists($repository)) {
            $this->error('Repository already exists!');
            return;
        }

        $this->createDirIfNotExists(app_path('Repositories'));

        file_put_contents($repository, $this->getRepositoryTemplate($name));
    }

    private function createRepositoryInterface($name)
    {
        $interface = app_path("Repositories/Interfaces/I{$name}Repository.php");
        if (file_exists($interface)) {
            $this->error('Repository interface already exists!');
            return;
        }

        $this->createDirIfNotExists(app_path('Repositories/Interfaces'));

        file_put_contents($interface, $this->getRepositoryInterfaceTemplate($name));
    }

    private function createDirIfNotExists($path)
    {
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
    }

    private function getRepositoryTemplate($name)
    {
        return "<?php \n\nnamespace App\Repositories; \n\nuse App\Models\\{$name}; \n\nuse App\Repositories\Interfaces\I{$name}Repository; \n\nclass {$name}Repository extends I{$name}Repository \n{ \n}";
    }

    private function getRepositoryInterfaceTemplate($name)
    {
        return "<?php \n\nnamespace App\Repositories\Interfaces; \n\ninterface I{$name}Repository \n{ \n}";
    }
}
