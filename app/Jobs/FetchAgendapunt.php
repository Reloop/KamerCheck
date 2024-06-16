<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class FetchAgendapunt implements ShouldQueue
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
        if(!Storage::exists('\agendapunten\\'. $this->feed->openData_id)) {
            $data = HTTP::get($this->feed->url);
            Storage::put('\agendapunten\\' . $this->feed->openData_id, $data);
        }
    }
}
