<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class KamerCheckTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kc:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $count = 0;
        $terms = [];
        $files = Storage::files('/feed/');
        foreach($files as $file) {
            $file = explode('/', $file)[1];
            $xml = simplexml_load_string(Storage::get('\feed\\' . $file));
            foreach($xml->entry as $entry) {
                $count++;
                if(!in_array($entry->term, $terms)) {
                    $terms[] = $entry->term;
                }
            }
        }

        foreach($terms as $term) {
            echo "$term \n";
        }
        echo "$count \n";
    }
}
