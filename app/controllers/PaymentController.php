<?php
use Payment\Pwc;
class PaymentController extends BaseController
{
    public function getPayment(){
        return View::make('users.payment');
    }
    public function postCardAuth()
    {
       $p = new Pwc;
        $data = Input::all();
        //dd($data);
        $exp = explode('-', $data['month']);
        //$exp   = preg_split('/\s+/', $data['month']);
        $data['expyear'] = $exp[0];
        $data['expmth'] = $exp[1];
        //dd($data);
        $test = $p->tokenizeCard($data);
        $check = $test['data']['responsecode'];
        //dd($test['data']['responsecode']);
        if ($check == "02")
        {
            return View::make('users.otp')->with('success', 'payment awaiting validation enter the otp sent to your number or email');
        }
        elseif ($check == "00")
        {
            $secure = $test['data']["transactionreference"];
                Session::put('secure', $secure);
            return View::make('users.bought')->with('success', 'theme\'s succesfully bought');
        }
        else
        {
            return Redirect::back()->with('fail', 'an Error occured transaction cannot be completed please check your card details and try again');
        }
            // $client = new Client();
            /*$r = $client->post('https://pwcstaging.herokuapp.com/oauth/token',[
                'form_params' => [
                    'client_id' => '5702393ed86fbf0300a603a4',
                    'client_secret' => 'A4ZV5tsVEPFWF27LhLXSHYRnP4sQ6QUijz0dmfYJq5O70xraQKy1rQhC0tSHpDb8Mxm3Gc8PmpXPDuP4LxwXEoRulQbisb6dLTjP',
                    'grant_type' => 'client_credentials',
                ]]);
            $code = $response->getStatusCode();

            $result = $r->getBody();
            dd($result);
            dd($code);*/
            /*$response = $client->get('http://api.github.com/users/antonioribeiro');

            dd($response->getBody());*/
            /* $request = $client->post('https://pwcstaging.herokuapp.com/oauth/token', array(
                 'client_id' => '5702393ed86fbf0300a603a4',
                 'client_secret' => 'A4ZV5tsVEPFWF27LhLXSHYRnP4sQ6QUijz0dmfYJq5O70xraQKy1rQhC0tSHpDb8Mxm3Gc8PmpXPDuP4LxwXEoRulQbisb6dLTjP',
                 'grant_type' => 'client_credentials',
             ));
             $response = $request->send();
             $code = $response->getStatusCode();
             $result = $response->getBody();
             dd($result);
             dd($code);*/
            /*$url = 'https://pwcstaging.herokuapp.com/oauth/token';
            $token = array(
                'client_id' => '5702393ed86fbf0300a603a4',
                'client_secret' => 'A4ZV5tsVEPFWF27LhLXSHYRnP4sQ6QUijz0dmfYJq5O70xraQKy1rQhC0tSHpDb8Mxm3Gc8PmpXPDuP4LxwXEoRulQbisb6dLTjP',
                'grant_type' => 'client_credentials'
            );
            $client = new Client(
                ['defaults' => ['headers' => ['content-type' => 'application/x-www-form-urlencoded']]]
            );
            $client->setDefaultOption('verify', false);
            $req = $client->post($url, array('body' => $token));
            $resp = $req->json();
            dd($resp);*/
            /*$location = '296 herbert Macauley Way Lagos';
            // $url = https://maps.googleapis.com/maps/api/geocode/outputFormat?parameters
            $client = new Client;
            //(
            //     ['default'=>['headers' => ['content-type' => 'application/x-www-form-urlencoder']]]
            //     );
            // $client->setDefaultOption('verify', false);
            // $req = $client

            $response = $client->get('https://maps.googleapis.com/maps/api/geocode/json?address=' . $location . '&key=AIzaSyA7xIVJpv5OyFJog8QQ8sAt4fvpnID6qS0');
            //dd($response->getBody());
            $code = $response->json();
            dd($code['results'][0]['geometry']['location']['lat']);*/
    }
    public function postCardPayment()
    {
        /*$client = new Client();
        $r = $client->post('https://pwcstaging.herokuapp.com/orders/oneOffPayment',[
            'json' => [
                'type' => 'card',
                'amount' => 10,
                'description' => 'an order for some stuff',
                'card' => '5399831654431747',
                'expmth' => '08',
                'expyear' => '2016',
                'cvv' => '550',
                '_csrf' => 'Yfln1fWR-z9aUZQxO1DgEqkRJJCKB7SOG-b'
            ]]);
        $code = $r->getStatusCode();

        $result = $r->getBody();
        dd($result);
        dd($code);*/
    }
}