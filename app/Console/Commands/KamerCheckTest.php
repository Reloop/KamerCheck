<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
    public function handle()
    {
//        $xml = simplexml_load_file(storage_path() . '\app\tkData-v1-0-zaal.xsd');
//        $data = $xml->children('http://www.w3.org/2001/XMLSchema');
//
//        echo $data->complexType->complexContent->extension->sequence->element->attributes()->name . "\n";
//        foreach($data->complexType->complexContent->extension->sequence->element as $element){
//            echo str_pad($element->attributes()->name, 40) . str_pad($element->attributes()->nillable, 10) . $element->attributes()->type . "\n";
//        }



    }
}
