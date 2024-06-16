<?php

namespace App\Jobs;

use App\Models\OpenData\Stemming;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class ImportStemming implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public $openData_id)
    {

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $xml = simplexml_load_string(Storage::get('\stemmingen\\' . $this->openData_id));
        $xml->registerXPathNamespace('tk', 'http://www.tweedekamer.nl/xsd/tkData/v1-0');
        $stemming = new Stemming();
        if($xml->attributes('tk', 'true')->verwijderd == 'false') {
            $stemming->openData_id = $this->openData_id;
            $stemming->besluit_id = $xml->besluit['ref'];
            $stemming->soort = $xml->soort;
            $stemming->fractie = $xml->fractie['ref'];
            $stemming->fractieGrootte = $xml->fractieGrootte;
            $stemming->actorNaam = $xml->actorNaam;
            $stemming->actorFractie = $xml->actorFractie;
            $stemming->persoon = isset($xml->persoon) ?? 0;
            $stemming->vergissing = $xml->vergissing == 'false' ? 0 : 1;
            $stemming->sidActorLid = $xml->sidActorLid;
            $stemming->sidActorFractie = $xml->sidActorFractie;
            if (isset($xml->gewijzigdOp)) {
                $stemming->gewijzigdOp = Carbon::parse($xml->gewijzigdOp)->toDateTime();
            }
            if (isset($xml->apiGewijzigdOp)) {
                $stemming->apiGewijzigdOp = Carbon::parse($xml->apiGewijzigdOp)->toDateTime();
            }
            $stemming->verwijderd = 0;
        } else {
            $stemming->verwijderd = 1;
        }
        $stemming->save();
    }
}
