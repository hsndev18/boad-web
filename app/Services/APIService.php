<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Exception\ClientException;

class APIService
{
    public function fetchDataToModel($room, $problemPlace, $problemType, $typeLeak, $description)
    {
        try {
            $client = new Client();
    
            // Map problemType to issue_type expected by the API
            $issue_type = $problemType === 'Electricity' ? 'electric' : 'leak';
    
            // Map room to location
            $location = $room;
    
            // Map typeLeak to leak_type if applicable
            $leak_type = in_array($problemType, ['Minor Crack With Water Leak', 'Major Crack With Water Leak']) ? $typeLeak : null;
    
            // Construct data array for JSON payload
            $data = [
                'issue_type' => $issue_type,
                'location' => $location,
                'leak_type' => $leak_type,
                'description' => $description,
            ];
    
            // Send a POST request with JSON payload containing structured parameters
            $response = $client->post("http://localhost:5000/analyze", [
                'json' => $data,
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'verify' => false,
            ]);
    
            // Decode and return the JSON response
            return json_decode($response->getBody(), true);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            // Log the error message for debugging purposes
            Log::error("Error occurred in fetchDataToModel: " . $response->getBody());
            throw new Exception("Error occurred in fetchDataToModel: " . $response->getBody());
        }
    }
    
}
