<?php

namespace App\Jobs;

use App\Models\OpenData\Zaak;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class ImportZaak implements ShouldQueue
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
        $xml = simplexml_load_string(Storage::get('\zaken\\' . $this->feed->openData_id));
        $xml->registerXPathNamespace('tk', 'http://www.tweedekamer.nl/xsd/tkData/v1-0');
        $zaak = new Zaak();
        if($xml->attributes('tk', 'true')->verwijderd == 'false') {
            $zaak->openData_id = $this->feed->openData_id;
            $zaak->agendapunt_id = $xml->agendapunt['ref'];
            $zaak->nummer = $xml->nummer;
            $zaak->soort = $xml->soort;
            $zaak->onderwerp = $xml->onderwerp;
            $zaak->gestartOp = Carbon::parse($xml->gestartOp)->toDateTime();
            $zaak->organisatie = $xml->organisatie;
            $zaak->titel = $xml->titel;
            $zaak->citeertitel = $xml->citeertitel;
            $zaak->alias = $xml->alias;
            $zaak->grondslagvoorhang = $xml->grondslagvoorhang;
            $zaak->termijn = $xml->termijn;
            $zaak->vergaderjaar = $xml->vergaderjaar;
            $zaak->volgnummer = $xml->volgnummer;
            $zaak->status = $xml->status;
            $zaak->huidigeBehandelstatus = $xml->huidigeBehandelstatus;
            $zaak->afgedaan = $xml->afgedaan;
            $zaak->grootProject = $xml->grootProject;
            $zaak->kabinetsappreciatie = $xml->kabinetsappreciatie;
        } else {
            $zaak->verwijderd = 1;
        }
        $zaak->save();
    }
}
