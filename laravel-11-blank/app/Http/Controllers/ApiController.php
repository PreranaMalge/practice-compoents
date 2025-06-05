<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Get the IP information from the MaxMind database.
     *
     * @param string $ip
     * @return array
     */
    public function getIpInfo(Request $request)
    {
        $ip = $request->ip();
        // $ip = "114.154.146.154";

        try {
            // Read the MaxMind database.
            $cityDbReader = new \GeoIp2\Database\Reader(
                config('services.maxmind_database.database')
            );

            // Retrieve the IP information from the database.
            return $cityDbReader->city($ip);
        } catch (\Throwable $th) {
            // Silently fail if there is an issue with the database or the IP.
        }

        // Return an empty array if there is an error.
        return [];
    }
}
