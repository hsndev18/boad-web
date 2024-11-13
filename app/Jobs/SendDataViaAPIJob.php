<?php

namespace App\Jobs;

use App\Services\APIService;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Session;

class SendDataViaAPIJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $problem;
    public $room;
    public $problem_place;
    public $problem_type; 
    public $type_of_leak; 
    public $description;

    public function __construct($problem, $room, $problem_place, $problem_type, $type_of_leak, $description)
    {
        $this->problem = $problem;
        $this->room = $room;
        $this->problem_place = $problem_place;
        $this->problem_type = $problem_type;
        $this->type_of_leak = $type_of_leak;
        $this->description = $description;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            $response = (new APIService())->fetchDataToModel($this->room, $this->problem_place, $this->problem_type, $this->type_of_leak, $this->description);

            if (isset($response['diagnosis'])) {
                $this->problem->update([
                    'disease' => $response['diagnosis'],
                ]);
            } 
        } catch (\Exception $e) {
            Log::error("Error occurred in SendDataViaAPIJob: " . $e->getMessage());
            $this->fail($e);
        }
    }
}
