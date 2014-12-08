<?php
namespace App\Libraries;

use Response;

class ModelJsonEncoder
{
    public function encode($data)
    {
        return Response::json($data)->getContent();
    }
}
