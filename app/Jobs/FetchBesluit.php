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
    }
}
