<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserOrder;
use App\Models\TarifService;
use App\Models\GroupService;
use phpDocumentor\Reflection\Types\Self_;


class UserOrderController extends Controller
{

    public function index()
    {
        return view('billing.my_order');
    }

    public function new()
    {
       $data = $this->getGroupServices();
       dd($data);
    }

    private function getGroupServices()
    {
        $data = GroupService::all();
        return $data;
    }

    private function getTarifsServices($groip_id)
    {
        $data = TarifService::where('group_id', $groip_id)->get();
        return $data;
    }

}
