<?php

namespace App\Jobs;

use App\Models\OpenData\Agendapunt;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class ImportAgendapunt implements ShouldQueue
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
        $xml = simplexml_load_string(Storage::get('\agendapunten\\' . $this->feed->openData_id));
        $xml->registerXPathNamespace('tk', 'http://www.tweedekamer.nl/xsd/tkData/v1-0');
        $agendapunt = new Agendapunt();
        if($xml->attributes('tk', 'true')->verwijderd == 'false') {
            $agendapunt->activiteit_id = $xml->activiteit['ref'];
            $agendapunt->nummer = $xml->nummer;
            $agendapunt->onderwerp = $xml->onderwerp;
            $agendapunt->aanvangstijd = $xml->aanvangstijd;
            $agendapunt->eindtijd = $xml->eindtijd;
            $agendapunt->volgorde = (int) $xml->volgorde;
            $agendapunt->rubriek = $xml->rubriek;
            $agendapunt->noot = $xml->noot;
            $agendapunt->status = $xml->status;
            if (isset($xml->gewijzigdOp)) {
                $agendapunt->gewijzigdOp = Carbon::parse($xml->gewijzigdOp)->toDateTime();
            }
            $agendapunt->apiGewijzigdOp = Carbon::parse($xml?->apiGewijzigdOp)?->toDateTime();
            $agendapunt->verwijderd = 0;
        } else {
            $agendapunt->verwijderd = 1;
        }
        $agendapunt->save();
    }
}
