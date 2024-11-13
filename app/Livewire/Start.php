<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Jobs\SendDataViaAPIJob;
use App\Models\Problem;

class Start extends Component
{
    use WithFileUploads;

    public $file;

    public $room;
    public $problem_place;
    public $problem_type;
    public $type_of_leak;
    public $description;

    public function selectRoom($room)
    {
        $this->room = $room;
    }

    public function render()
    {
        return view('livewire.start');
    }


    public function save()
    {
        // Handle file upload if a file is provided
        if ($this->file) {
            // Define the file path and save the file
            $filePath = $this->file->store('uploads'); // This saves in storage/app/uploads
        } else {
            $filePath = null; // No file uploaded
        }

        // Save the problem details and file path in the database
        $problem = Problem::create([
            'room' => $this->room,
            'problem_place' => $this->problem_place,
            'problem_type' => $this->problem_type,
            'type_of_leak' => $this->type_of_leak,
            'description' => $this->description,
            'file_path' => $filePath, // Save the file path in the database
        ]);

    
        SendDataViaAPIJob::dispatch($problem, $this->room, $this->problem_place, $this->problem_type, $this->type_of_leak, $this->description);
    }
}
