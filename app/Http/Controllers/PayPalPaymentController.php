<?php


namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Omnipay\Omnipay;
use PHPUnit\Exception;
use App\Models\Recharge;
use Faker\Provider\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PayPalPaymentController extends Controller

{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request)
    {
        try {
            $payment = Recharge::insertGetId([
                'value' => $request->input('amount')
            ]);
            $response = $this->gateway->purchase(array(
                'amount' => $request->input('amount'),
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => route('success.payment', ['id' => $payment]),
                'cancelUrl' => route('cancel.payment')
            ))->send();
            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                return $response->getMessage();
            }
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
    }

    public function success(Request $request, $id)
    {
        $payment = Recharge::find($id);
        if ($request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'amount' => Recharge::find($id)->value
            ));
            $response = $transaction->send();

            if ($response->isSuccessful()) {
                $arr = $response->getData();
                $time = Carbon::now();

                $payment->user_id = Auth::id();
                $payment->date = $time;
                $payment->recharge_code = $request->input('PayerID') . '-' . Random::generate(5);
                $payment->payment_type = 1;
                $payment->status = 1;
                $payment->note = 'Nap tien ' . $time->format('H:i d/m/Y');
                $payment->save();

                $money = 24.855 * $payment->value;

                $user = User::find(Auth::id());

                $user->money += $money;

                $user->save();

                if (Auth::user()->role_id !== 3) {
                    return redirect()->route('backend_get_form_recharge')->with('recharge_success', 'Nạp tiền thành công');
                } else {
                    return redirect()->route('getRecharge')->with('recharge_success', 'Nạp tiền thành công');
                }
            } else {
                if (Auth::user()->role_id !== 3) {
                    return redirect()->route('backend_get_form_recharge')->with('recharge_error', 'Nạp tiền thất bại');
                } else {
                    return redirect()->route('getRecharge')->with('recharge_error', 'Nạp tiền thất bại');
                }
            }
        } else {
            if (Auth::user()->role_id !== 3) {
                return redirect()->route('backend_get_form_recharge')->with('recharge_error', 'Nạp tiền thất bại');
            } else {
                return redirect()->route('getRecharge')->with('recharge_error', 'Nạp tiền thất bại');
            }
        }
    }

    public function error()
    {
        return redirect()->route('backend_get_form_recharge')->with('recharge_error', 'Nạp tiền thất bại');
    }
}