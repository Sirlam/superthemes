<?php namespace Payment;

use GuzzleHttp\Client;
use GuzzleHttp\Stream\Stream;

class Pwc
{
    protected $secure_url_token = 'http://flutterwaveprod.com:8080/FlutterVerve/services/flwiswservice/TokenizeCard';
    protected $insecure_url_token = 'http://flutterwaveprod.com:8080/FlutterVerve/services/flwiswservice/TokenizeCard';
    protected $secure_url_submit = 'http://flutterwaveprod.com:8080/FlutterVerve/services/flwiswservice/CreateCardOrder';
    protected $insecure_url_submit = 'http://flutterwaveprod.com:8080/FlutterVerve/services/flwiswservice/CreateCardOrder';
    protected $secret = 'tk_OWrFv5j3aRtoUpqkeXxf';
    protected $merchant = 'tk_tInFsNgkZX';

    protected $authorizer = 
        'http://flutterwaveprod.com:8080/FlutterVerve/services/flwiswservice/AuthorizeTransaction';

    public function TokenizeCard($data)
    {   
        $encrypter = new ApiCrypter;
        $data['verifyMethod'] = "";
        $pay_data = [
            'merchantid'  => $this->merchant,
            'cardno'      => $encrypter->encrypt3Des($data['cardno'], $this->secret),
            'expyear'     => $encrypter->encrypt3Des($data['expyear'], $this->secret),
            'expmth'      => $encrypter->encrypt3Des($data['expmth'], $this->secret),
            'cvv'         => $encrypter->encrypt3Des($data['cvv'], $this->secret),
            'pin'         => $encrypter->encrypt3Des($data['pin'], $this->secret),
            'narration'         => $encrypter->encrypt3Des($data['narration'], $this->secret),
            'token'       => hash('sha512', $this->secret),
        ];
        //\Log::info('PayLoad', ['data' => $pay_data]);

        //dd(http_build_query($pay_data));
        $url = ($data['verifyMethod'] == 'secure') ? $this->secure_url_token : $this->insecure_url_token;

        try
        {
            $client = new Client(['defaults' => ['headers' => ['content-type' => 'application/x-www-form-urlencoded']]]);
            $client->setDefaultOption('verify', false);
            $req = $client->post($url, array('body' => $pay_data));
            //dd($req->getHeader('content-type'));
            $resp = $req->json();
            //\Log::info($resp);
            return $resp;

        }
        catch(Exception $ex)
        {
            $errors = $ex->getMessage();
            \Log::error('tokenize error', ['data' => $errors]);
            return $errors;
        }
    }

    public function Otp($data)
    {
        $token = hash('sha512', $this->secret . $data['otp'] . $data['otpTransactionIdentifier']);        
        $encrypter = new ApiCrypter;

        $pay_data = [
            'otp'          => $data['otp'],
            'otpTransactionIdentifier'  => $data['otpTransactionIdentifier'],
            'token'        => $token,
            'merchantid'   => $this->merchant,
        ];
        \Log::info($pay_data);
        $url = $this->authorizer;

        try
        {
            $client = new Client(['defaults' => ['headers' => ['content-type' => 'application/x-www-form-urlencoded']]]);
            $client->setDefaultOption('verify', false);
            $req = $client->post($url, array('body' => $pay_data));
            $resp = $req->json();
            \Log::info($resp);
            return $resp;
        }
        catch(Exception $ex)
        {
            $errors = $ex->getMessage();
            \Log::error('CardCreate error', ['data' => $errors]);
            return 'false';
        }
    }    

    public function SubmitCard($data)
    {   
        $data['verifyMethod'] = "";
        $data['trxcurr'] = "NGN";
        $encrypter = new ApiCrypter;
        //\Log::info('Secret:'.$this->secret);
        //\Log::info('Amount:'.$data['trxamount']);
        //\Log::info('Token: '.$data['token']);
        $hash = hash('sha512', $this->secret.$data['trxamount'].$data['trxcurr'].$data['token']);
        $pay_data = [
            'trxamount'    => $data['trxamount'],
            'trxdescr'     => $data['trxdescr'],
            'trxcurr'      => $data['trxcurr'],
            'cardtoken'    => $data['token'],
            'token'        => $hash,
            'merchantid'   => $this->merchant,
            'customerId'   => 'Opata',
            'responseurl'  => ($data['verifyMethod'] == 'secure') ? urlencode($data['responseurl']) : ''
        ];
        \Log::info($pay_data);
        $url = ($data['verifyMethod'] == 'secure') ? $this->secure_url_submit : $this->insecure_url_submit;

        try
        {
            $client = new Client(['defaults' => ['headers' => ['content-type' => 'application/x-www-form-urlencoded']]]);
            $client->setDefaultOption('verify', false);
            $req = $client->post($url, array('body' => $pay_data));
            $resp = $req->json();
            \Log::info($resp);
            return $resp;
        }
        catch(Exception $ex)
        {
            $errors = $ex->getMessage();
            \Log::error('CardCreate error', ['data' => $errors]);
            return 'false';
        }
    }



}