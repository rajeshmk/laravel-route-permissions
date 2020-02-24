<?php

namespace Voco\Http\Controllers\RoutePermissions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoutesController extends Controller
{
    public function index(Request $request)
    {
        return ['initial'];
    }
}
