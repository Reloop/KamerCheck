<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class FetchStemming implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $feed;
    /**
     * Create a new job instance.
     */
    public function __construct($feed)
    {
        $this->feed = $feed;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if(!Storage::exists('\stemmingen\\'. $this->feed->openData_id)) {
            $data = HTTP::get($this->feed->url);
            Storage::put('\stemmingen\\' . $this->feed->openData_id, $data);
        }

    }
}
