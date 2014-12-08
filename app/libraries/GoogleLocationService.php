<?php
namespace App\Libraries;

class GoogleLocationService
{
    const GOOGLE_APIS_URL = "http://maps.googleapis.com/maps/api/geocode/json?&sensor=false";

    public function getLatLngForZipCode($zipCode)
    {
        $data = json_decode(file_get_contents(self::GOOGLE_APIS_URL . "&address=" . $zipCode));

        return ($data->status == "OK") ? $data->results[0]->geometry->location : [];
    }
}
