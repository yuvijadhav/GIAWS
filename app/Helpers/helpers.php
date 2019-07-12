<?php

use App\Helpers\uuid;
use Carbon\Carbon as Carbon;

/**
 * Henerate UUID.
 *
 * @return uuid
 */
function generateUuid() {
    return uuid::uuid4();
}

if (!function_exists('checkDatabaseConnection')) {

    /**
     * @return bool
     */
    function checkDatabaseConnection() {
        try {
            DB::connection()->reconnect();

            return true;
        } catch (Exception $ex) {
            return false;
        }
    }

}
