<?php

namespace App\Console\Commands;

use App\Models\Feed;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ImportFeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kc:if';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data from feed files into the database.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $fileCount = 0;
        $files = Storage::files('/feed/');
        foreach($files as $file) {
            if($fileCount == -1) {
                break;
            }
            $fileCount++;
            $file = explode('/', $file)[1];
            $xml = simplexml_load_string(Storage::get('\feed\\' . $file));
            foreach($xml->entry as $entry) {
                $feed = new Feed();
                $feed->openData_id = $entry->title;
                $feed->url = $entry->id;
                $feed->authorName = $entry->author->name;
                $feed->updated = Carbon::parse($entry->updated)->toDateTime();
                $feed->term = $entry->category["term"];
                $feed->save();
            }
        }
    }
}
