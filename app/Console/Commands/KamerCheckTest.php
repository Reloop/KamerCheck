<?php

namespace App\Console\Commands;

use App\Jobs\FetchBesluit;
use App\Jobs\FetchStemming;
use App\Jobs\ImportStemming;
use App\Models\Feed;
use App\Models\OpenData\Besluit;
use App\Models\OpenData\Stemming;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;


class KamerCheckTest extends Command
{
    private $chunk = 0;
    private $TKXML_BASE = 'http://www.tweedekamer.nl/xsd/tkData/v1-0';

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
    public function handle(): void
    {
        DB::table('feeds')->where('term', 'zaak')->orderBy('id')->chunk(1000, function ($feeds) {
            $this->chunk += 1000;
            foreach($feeds as $feed) {
                //ImportStemming::dispatch($feed->openData_id)->onQueue('parse');
//                if(!Storage::exists('\zaken\\'. $feed->openData_id)) {
//                    $data = HTTP::get($feed->url);
//                    Storage::put('\zaken\\' . $feed->openData_id, $data);
//                }
                if(Storage::exists('\zaken\\' . $feed->openData_id)) {
                    $xml = simplexml_load_string(Storage::get('\zaken\\' . $feed->openData_id));
                    $xml->registerXPathNamespace('tk', 'http://www.tweedekamer.nl/xsd/tkData/v1-0');
                    if($xml->attributes('tk', 'true')->verwijderd == 'false') {
                        dd($feed->openData_id);
                    }

                }
            }
            if ($this->chunk % 10000 == 0) {
                echo "@ " . $this->chunk . "\n";
            }
        });


    }
}
