<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class FeedFetch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kc:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches everything on the feed';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $next = 0;
        $lastID = 0;

        while($next != -1) {
            $data = $this->getData($lastID);
            if (!isset($data->entry) || count($data->entry) == 0) {
                $next = -1;
            } else {
                foreach($data->entry as $entry) {
                    foreach($entry->link as $link) {
                        if ($link["rel"] == 'next') {
                            $lastID = explode('=', $link["href"])[1];
                        }
                    }
                }
                Storage::move('\feed\Feed', '\feed\Feed-' . $next . '_' . $lastID);
                $next = $lastID;
            }
        }
    }

    public function getData($id) {
        if ($id === 0) {
            $url = "https://gegevensmagazijn.tweedekamer.nl/SyncFeed/2.0/Feed";
        } else {
            $url = "https://gegevensmagazijn.tweedekamer.nl/SyncFeed/2.0/Feed?skiptoken=" . $id;
        }
        HTTP::sink(storage_path() . '\app\feed\Feed')->get($url);
        return simplexml_load_string(Storage::get('\feed\Feed'));
    }
}
