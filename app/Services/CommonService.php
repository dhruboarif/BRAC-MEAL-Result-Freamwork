<?php


namespace App\Services;


class CommonService
{
    public function deteTimeFormate($dateTime)
    {
        return date('d F Y, h:i:s A', strtotime($dateTime));

    }

}
