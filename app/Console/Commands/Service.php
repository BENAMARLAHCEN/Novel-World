<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Service extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service class';

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
        $this->createService($name);
        $this->info('Service created successfully');
    }

    private function createService($name)
    {
        $service = app_path("Services/{$name}Service.php");
        if (file_exists($service)) {
            $this->error('Service already exists!');
            return;
        }

        $this->createDirIfNotExists(app_path('Services'));

        file_put_contents($service, $this->getServiceTemplate($name));
    }

    private function createDirIfNotExists($path)
    {
        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }
    }

    private function getServiceTemplate($name)
    {
        return "<?php \n\nnamespace App\Services;\n\nuse App\Repositories\Interfaces\I{$name}Repository;\nuse Illuminate\Support\Facades\DB;\n\nclass {$name}Service\n{\n\n    protected \${$name}Repository;\n\n    public function __construct(I{$name}Repository \${$name}Repository)\n    {\n        \$this->{$name}Repository = \${$name}Repository;\n    }\n\n}";
    }
}
