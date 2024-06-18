<?php

namespace App\Console\Commands;

use App\Jobs\FetchBesluit;
use App\Jobs\FetchStemming;
use App\Jobs\ImportBesluit;
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
        DB::table('feeds')->where('term', 'besluit')->orderBy('id')->chunk(1000, function ($feeds) {
            $this->chunk += 1000;
            foreach($feeds as $feed) {
//                $xml = simplexml_load_string(Storage::get('\besluiten\\' . $feed->openData_id));
//                $xml->registerXPathNamespace('tk', 'http://www.tweedekamer.nl/xsd/tkData/v1-0');
//                $besluit = new Besluit();
//                if($xml->attributes('tk', 'true')->verwijderd == 'false') {
//                    $besluit->openData_id = $feed->openData_id;
//                    $besluit->agendapunt_id = $xml->agendapunt['ref'];
//                    $besluit->zaak_id = $xml->zaak['ref'];
//                    $besluit->stemmingsSoort = $xml->stemmingsSoort;
//                    $besluit->besluitSoort = $xml->besluitSoort;
//                    $besluit->besluitTekst = $xml->besluitTekst;
//                    $besluit->opmerking = $xml->opmerking;
//                    $besluit->status = $xml->status;
//                    $besluit->agendapuntZaakBesluitVolgorde = $xml->agendapuntZaakBesluitVolgorde;
//                    if (isset($xml->gewijzigdOp)) {
//                        $besluit->gewijzigdOp = Carbon::parse($xml->gewijzigdOp)->toDateTime();
//                    }
//                    $besluit->apiGewijzigdOp = Carbon::parse($xml?->apiGewijzigdOp)?->toDateTime();
//                    $besluit->verwijderd = 0;
//                    $besluit->save();
//                } else {
//                    $besluit->openData_id = $feed->openData_id;
//                    $besluit->verwijderd = 1;
//                    $besluit->save();
//                }




                ImportBesluit::dispatch($feed)->onQueue('parse');
//                if(!Storage::exists('\agendapunten\\'. $feed->openData_id)) {
//                    $data = HTTP::get($feed->url);
//                    Storage::put('\agendapunten\\' . $feed->openData_id, $data);
//                }
//                if(Storage::exists('\agendapunten\\' . $feed->openData_id)) {
//                    $xml = simplexml_load_string(Storage::get('\agendapunten\\' . $feed->openData_id));
//                    $xml->registerXPathNamespace('tk', 'http://www.tweedekamer.nl/xsd/tkData/v1-0');
//                    if($xml->attributes('tk', 'true')->verwijderd == 'false') {
//                        dd($feed->openData_id);
//                    }
//                }
            }
            if ($this->chunk % 10000 == 0) {
                echo "@ " . $this->chunk . "\n";
            }
        });
    }
}
