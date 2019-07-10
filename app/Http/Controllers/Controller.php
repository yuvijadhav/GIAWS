<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Traits\SendMail;

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests,
        SendMail;

    public function __construct() {
//        DB::disconnect();
        try {
            DB::connection()->reconnect();
//                dd(__LINE__);
//                return true;
        } catch (Exception $ex) {
//                dd(__LINE__);
//                return false;
        }
    }

}
