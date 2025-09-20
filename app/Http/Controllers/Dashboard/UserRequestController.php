<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ChangeStatus;
use App\Http\Requests\Dashboard\UserRequest\StoreUserRequest;
use App\Models\UserRequest;
use Illuminate\Http\Request;

class UserRequestController extends Controller
{

    protected $model ;

    public function __construct(UserRequest $model){
        $this->model = $model;
    }

    public function index()
    {
       $this->setSessionDelete();

        return view('dashboard.user-requests.index' ,[
            'data' => $this->model->all(),
        ]);
    }
}
