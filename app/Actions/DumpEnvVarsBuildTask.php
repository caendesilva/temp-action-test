<?php

namespace App\Actions;

use Hyde\Framework\Features\BuildTasks\PreBuildTask;

class DumpEnvVarsBuildTask extends PreBuildTask
{
    public static string $message = 'Dumping all environment variables';

    public function handle(): void
    {
        // Dump all environment variables and halt execution
        dd(file_get_contents('.env'));
    }
}
