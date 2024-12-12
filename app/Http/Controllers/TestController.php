<?php

namespace App\Http\Controllers;

use App\Models\User;
use Bestiony\LaravelApiResponse\Traits\HasApiResponse;
use Illuminate\Http\Request;

class TestController extends Controller
{
    use HasApiResponse;
    public function index(Request $request)
    {

        $users = User::paginate(5);

        return $this->success(
            data: $users,
            paginator: $users
        );
    }
}
