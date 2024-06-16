<?php

namespace App\Jobs;

use App\Models\OpenData\Besluit;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class ImportBesluit implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public $feed)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $xml = simplexml_load_string(Storage::get('\besluiten\\' . $this->feed->openData_id));
        $xml->registerXPathNamespace('tk', 'http://www.tweedekamer.nl/xsd/tkData/v1-0');
        $besluit = new Besluit();
        if($xml->attributes('tk', 'true')->verwijderd == 'false') {
            $besluit->openData_id = $this->feed->openData_id;
            $besluit->agendapunt_id = $xml->agendapunt['ref'];
            $besluit->zaak_id = $xml->zaak['ref'];
            $besluit->stemmingsSoort = $xml->stemmingsSoort;
            $besluit->besluitSoort = $xml->besluitSoort;
            $besluit->besluitTekst = $xml->besluitTekst;
            $besluit->opmerking = $xml->opmerking;
            $besluit->status = $xml->status;
            $besluit->agendapuntZaakBesluitVolgorde = $xml->agendapuntZaakBesluitVolgorde;
            if (isset($xml->gewijzigdOp)) {
                $besluit->gewijzigdOp = Carbon::parse($xml->gewijzigdOp)->toDateTime();
            }
            $besluit->apiGewijzigdOp = Carbon::parse($xml?->apiGewijzigdOp)?->toDateTime();
            $besluit->verwijderd = 0;
            $besluit->save();
        } else {
            $besluit->verwijderd = 1;
            $besluit->save();
        }
    }
}
