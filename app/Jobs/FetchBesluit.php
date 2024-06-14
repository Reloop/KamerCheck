<?php

namespace App\Jobs;

use App\Models\OpenData\Besluit;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class FetchBesluit implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(private $feed)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        if(!Storage::exists('\besluiten\\'. $this->feed->openData_id)) {
            $data = HTTP::get($this->feed->url);
            Storage::put('\besluiten\\' . $this->feed->openData_id, $data);
        }


//        $xml = simplexml_load_string(Storage::get('\besluiten\\' . $this->openData_id));

//        $besluit = new Besluit();
//        $besluit->bijgewerkt =  $xml->attributes('tk', true)->bijgewerkt;
//        $besluit->verwijderd =  $xml->attributes('tk', true)->verwijderd;
//        $besluit->agendapunt_ref =  $xml->agendapunt['ref'];
//        $besluit->stemmingsSoort =  $xml->stemmingsSoort;
//        $besluit->besluitSoort =  $xml->besluitSoort;
//        $besluit->besluitTekst =  $xml->besluitTekst;
//        $besluit->opmerking =  $xml->opmerking;
//        $besluit->status =  $xml->status;
//        $besluit->agendapuntZaakBesluitVolgorde =  $xml->agendapuntZaakBesluitVolgorde;
//        $besluit->zaak_ref =  $xml->zaak['ref'];
    }
}
