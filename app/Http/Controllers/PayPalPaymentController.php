<?php


namespace App\Http\Controllers;

use App\Models\Recharge;
use App\Models\User;
use Carbon\Carbon;
use Faker\Provider\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Random;
use Omnipay\Omnipay;
use PHPUnit\Exception;


class PayPalPaymentController extends Controller

{
    private $gateway;

    public function __construct()
    {
        $gateway1 = Omnipay::create('PayPal_Express');
//        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
//        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
//        $this->gateway->setTestMode(true);

        $gateway1->setUsername('sb-vpcms21975520_api1.business.example.com');
        $gateway1->setPassword('YSJASYLTR44CMXST');
        $gateway1->setSignature('AIsNObN1SyNNjqJjWf1oEu4qD6WYAAFzyPYHt.2lRLj4X8fj6L4UgBhX');
        $gateway1->setTestMode(true);

        $this->gateway = $gateway1;
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
                $payment->note = 'Nap tien ' . $time->format('H:i d/m/Y');
                $payment->save();

                $money = 24.855 * $payment->value;

                $user = User::find(Auth::id());

                $user->money += $money;

                $user->save();

                return redirect()->route('backend_get_form_recharge')->with('recharge_success', 'Nạp tiền thành công');
            } else {
                return redirect()->route('backend_get_form_recharge')->with('recharge_error', 'Nạp tiền thất bại');
            }
        } else {
            return redirect()->route('backend_get_form_recharge')->with('recharge_error', 'Nạp tiền thất bại');
        }
    }

    public function error()
    {
        return redirect()->route('backend_get_form_recharge')->with('recharge_error', 'Nạp tiền thất bại');
    }
}
