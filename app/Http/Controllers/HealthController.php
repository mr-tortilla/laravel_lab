<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function index()
    {
        $result = [];
        exec("top -b -n 1 | grep 'Cpu(s):' > /some/file.cpu", $result['cpu']);
        //ram usage
        exec("top -b -n 1 | grep 'Mem:' > /some/file.ram", $result['mem']);

        $result['sys'] = sys_getloadavg();

        return $result;
    }
}
