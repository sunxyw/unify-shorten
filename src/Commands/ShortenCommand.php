<?php

namespace Sunxyw\Shorten\Commands;

use Illuminate\Console\Command;

class ShortenCommand extends Command
{
    public $signature = 'unify-shorten';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
