<?php

namespace App\Console\Commands;

use App\Models\Feed;
use App\Models\OpenData\Stemming;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
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
    public function handle(): void
    {
//        DB::table('feeds')->where('term', 'stemming')->orderBy('id')->chunk(1000, function ($feeds) {
//            foreach($feeds as $feed) {
//                $data = HTTP::get($feed->url);
//                Storage::put('\stemmingen\\' . $feed->openData_id, $data);
//            }
//        });

        $files = Storage::files('stemmingen');
        foreach ($files as $file) {
            $xml = simplexml_load_string(Storage::get('stemmingen/' . explode('/', $file)[1]));
            $stemming = new Stemming();
            $stemming->openData_id = $xml->stemming['id'];
            $stemming->besluit_id = $xml->besluit['ref'];
            $stemming->soort = $xml->soort;
            $stemming->fractie = $xml->fractie['ref'];
            $stemming->fractieGrootte = $xml->fractieGrootte;
            $stemming->actorNaam = $xml->actorNaam;
            $stemming->actorFractie = $xml->actorFractie;
            $stemming->persoon = isset($xml->persoon) ? $xml->persoon : 0;
            $stemming->vergissing = $xml->vergissing;
            $stemming->sidActorLid = $xml->sidActorLid;
            $stemming->sidActorFractie = $xml->sidActorFractie;
            $stemming->gewijzigdOp = isset($xml->gewijzigdOp) ? $xml->gewijzigdOp : 0;
            $stemming->apiGewijzigdOp = isset($xml->apiGewijzigdOp) ? $xml->apiGewijzigdOp : 0;
            $stemming->verwijderd = isset($xml->verwijderd) ? $xml->verwijderd : 0;
            $stemming->save();

        }
    }
}
