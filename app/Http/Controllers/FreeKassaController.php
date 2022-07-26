<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FreeKassa;

class FreeKassaController extends Controller
{

    public function __construct(){

        $this->middleware('auth');

    }

    public function index()
    {
        return view('pay.freekassa');
    }

    public function pay(Request $request, FreeKassa $fk)
    {
    $merchant_id = '19995';
    $secret_word = '=owXU/BPeK@]0=T';
    $order_id = '154';
    $order_amount = '1000';
    $currency = 'RUB';
    $sign = md5($merchant_id.':'.$order_amount.':'.$secret_word.':'.$currency.':'.$order_id);
    echo $sign;
   echo " <form method='get' action='https://pay.freekassa.ru/'>
        <input type='hidden' name='m' value='$merchant_id'>
        <input type='hidden' name='oa' value='$order_amount'>
        <input type='hidden' name='o' value='".$request->post('o')."'>
        <input type='hidden' name='em' value='$order_id'>
        <input type='hidden' name='phone' value='$order_id'>
        <input type='hidden' name='s' value='$sign'>
        <input type='hidden' name='currency' value='$currency'>
        <input type='hidden' name='i' value='1'>
        <input type='hidden' name='lang' value='ru'>
        <input type='hidden' name='us_login' value='aaaa'>
        <input type='submit' name='pay' value='Оплатить'>
      </form>";
//return redirect("https://pay.freekassa.ru/?m=$merchant_id&oa=$order_amount&o=999&em=154&phone=154&s=$sign&currency=RUB&i=1&lang=ru&us_login=aaaa&pay=Отправить");
        /*$merchant_id = env('FREEKASSA_MERCHANT_ID');
        $order_amount = $request->post('oa');
        $secret_word = env('FREEKASSA_SECRET_WORD');
        $currency = $request->post('currency');
        $order_id = "145";
        //echo $secret_word;
        $sign = md5($merchant_id.':'.$order_amount.':'.$secret_word.':'.$currency.':'.$order_id);
        return redirect("https://pay.freekassa.ru/?m=$merchant_id&oa=$order_amount&currency=$currency&o=".$request->post('o')."&s=$sign");
   */
    }

}
