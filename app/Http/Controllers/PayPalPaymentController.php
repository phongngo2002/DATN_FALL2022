<?php


namespace App\Http\Controllers;

use App\Models\Recharge;
use App\Models\User;
use Carbon\Carbon;
use Faker\Provider\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => route('success.payment'),
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

    public function success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();

            if ($response->isSuccessful()) {
                $arr = $response->getData();
                $time = Carbon::now();
                $payment = new Recharge();

                $payment->user_id = Auth::id();
                $payment->date = $time;
                $payment->recharge_code = $arr['id'];
                $payment->payment_type = 1;
                $payment->note = 'Nap tien ' . $time->format('H:i d/m/Y');
                $payment->value = $arr['transactions'][0]['amount']['total'];
                $payment->save();

                $money = 24.855 * $arr['transactions'][0]['amount']['total'];

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
