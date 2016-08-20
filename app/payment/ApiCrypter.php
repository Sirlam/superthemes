<?php namespace Payment;

class ApiCrypter
{
    private $iv   = "1234567890123456";
    private $key  = "!123456_#9abcdef";

    public function __construct() {
    }

    public function encrypt($str) { 
	  $str = $this->pkcs5_pad($str);   
	  $iv = $this->iv; 
	  $td = mcrypt_module_open('rijndael-128', '', 'cbc', $iv); 
	  mcrypt_generic_init($td, $this->key, $iv);
	  $encrypted = mcrypt_generic($td, $str); 
	  mcrypt_generic_deinit($td);
	  mcrypt_module_close($td); 
	  return bin2hex($encrypted);
    }
    
    public function encryptnew($str) { 
	  $str = $this->pkcs5_pad($str);   
	  $iv = $this->iv; 
	  $td = mcrypt_module_open('rijndael-256', '', 'cbc', $iv); 
	  mcrypt_generic_init($td, '9178429ee7f1e7847e4e3c901ff12318', $iv);
	  $encrypted = mcrypt_generic($td, $str); 
	  mcrypt_generic_deinit($td);
	  mcrypt_module_close($td); 
	  return bin2hex($encrypted);
    }

    public function decrypt($code) { 
	  $code = $this->hex2bin($code);
	  $iv = $this->iv; 
	  $td = mcrypt_module_open('rijndael-128', '', 'cbc', $iv); 
	  mcrypt_generic_init($td, $this->key, $iv);
	  $decrypted = mdecrypt_generic($td, $code); 
	  mcrypt_generic_deinit($td);
	  mcrypt_module_close($td); 
	  $ut =  utf8_encode(trim($decrypted));
	  return $this->pkcs5_unpad($ut);
    }
    
    function encryptText( $plainText, $key )
    {
        $mcopen = mcrypt_module_open (MCRYPT_TripleDES, "", MCRYPT_MODE_ECB,"");
        $iv = mcrypt_create_iv (mcrypt_enc_get_iv_size ($mcopen), MCRYPT_RAND);
        $td = mcrypt_module_open('tripledes', '', 'ecb', '');
        $cryptedHash = '';

        if (mcrypt_generic_init($td, $key, $iv) != -1)
        {
            $cryptedHash = mcrypt_generic($td, $plainText);
            mcrypt_generic_deinit($td);
            mcrypt_module_close($td);
        }
        return base64_encode($cryptedHash);
     }
    
    public function encryptDes1($input, $key)
    {
        $key = hash("md5", $key, TRUE);   
         for ($x=0;$x<8;$x++) {  
          $key = $key.substr($key, $x, 1);  
         }  
        $encrypted_data = bin2hex(mcrypt_encrypt(MCRYPT_3DES, $key, $input, MCRYPT_MODE_ECB));
        return $encrypted_data;
    }
    
    function encrypt3Des1($data, $key) {
        //$rc4 = new rc4();
        $size = mcrypt_get_block_size('tripledes', 'cbc');
        $data = $this->pkcs5_pad($data, $size);
        //Generate a key from a hash
        $key = md5(utf8_encode($key), true);

        //Take first 8 bytes of $key and append them to the end of $key.
        $key .= substr($key, 0, 8);
        
        $mcrypt_module = mcrypt_module_open('tripledes', '', 'cbc', '12345678');
        $mcrypt_iv     = mcrypt_create_iv(mcrypt_enc_get_iv_size($mcrypt_module), MCRYPT_RAND);
        $key_size      = mcrypt_enc_get_key_size($mcrypt_module);

        mcrypt_generic_init($mcrypt_module,$key,$mcrypt_iv);
        $encrypted = base64_encode(mcrypt_generic($mcrypt_module, $data));
        mcrypt_module_close($mcrypt_module);

        return ($encrypted);
    }
    
    function encryptText_3des($plainText, $key) 
    {  
         $key = hash("md5", $key, TRUE);   
         for ($x=0;$x<8;$x++) {  
          $key = $key.substr($key, $x, 1);  
         }  
         $padded = $this->pkcs5_pad($plainText, mcrypt_get_block_size(MCRYPT_3DES, MCRYPT_MODE_ECB));  
         
        //dd($key);
         $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_3DES, $key, $padded, MCRYPT_MODE_ECB));  
            return $encrypted;  
    }
    
    function pkcs5_pad1 ($text, $blocksize) 
    { 
        $pad = $blocksize - (strlen($text) % $blocksize); 
        return $text . str_repeat(chr($pad), $pad); 
    } 
    
    protected function hex2bin($hexdata) {
	  $bindata = ''; 
	  for ($i = 0; $i < strlen($hexdata); $i += 2) {
	      $bindata .= chr(hexdec(substr($hexdata, $i, 2)));
	  } 
	  return $bindata;
    } 

    protected function pkcs5_pad ($text) {
	  $blocksize = 16;
	  $pad = $blocksize - (strlen($text) % $blocksize);
	  return $text . str_repeat(chr($pad), $pad);
    }

    protected function pkcs5_unpad($text) {
	  $pad = ord($text{strlen($text)-1});
	  if ($pad > strlen($text)) {
	      return false;	
	  }
	  if (strspn($text, chr($pad), strlen($text) - $pad) != $pad) {
	      return false;
	  }
	  return substr($text, 0, -1 * $pad);
    }
    
    function strToHex($string){
        $hex = '';
        for ($i=0; $i<strlen($string); $i++){
            $ord = ord($string[$i]);
            $hexCode = dechex($ord);
            $hex .= substr('0'.$hexCode, -2);
        }
        return strToUpper($hex);
    }
    
    public function encrypt3Des($data, $key)
    {
        //Generate a key from a hash
        $key = md5(utf8_encode($key), true);

        //Take first 8 bytes of $key and append them to the end of $key.
        $key .= substr($key, 0, 8);

        //Pad for PKCS7
        $blockSize = mcrypt_get_block_size('tripledes', 'ecb');
        $len = strlen($data);
        $pad = $blockSize - ($len % $blockSize);
        $data = $data.str_repeat(chr($pad), $pad);

        //Encrypt data
        $encData = mcrypt_encrypt('tripledes', $key, $data, 'ecb');
        
        //return $this->strToHex($encData);

        return base64_encode($encData);
    }

    public function decrypt3Des($data, $secret)
    {
        //Generate a key from a hash
        $key = md5(utf8_encode($secret), true);

        //Take first 8 bytes of $key and append them to the end of $key.
        $key .= substr($key, 0, 8);

        $data = base64_decode($data);

        $data = mcrypt_decrypt('tripledes', $key, $data, 'ecb');

        $block = mcrypt_get_block_size('tripledes', 'ecb');
        $len = strlen($data);
        $pad = ord($data[$len-1]);

        return substr($data, 0, strlen($data) - $pad);
    }
    
    public function encrypt3Des2($str, $key) { 
	  
      //Generate a key from a hash
      $key = md5(utf8_encode($key), true);

      //Take first 8 bytes of $key and append them to the end of $key.
      $key .= substr($key, 0, 8);
        
      $blockSize = mcrypt_get_block_size('tripledes', 'cbc');
      $len = strlen($str);
      $pad = $blockSize - ($len % $blockSize);
      $str = $str.str_repeat(chr($pad), $pad); 
	  $iv = '12345678'; 
	  $td = mcrypt_module_open('tripledes', '', 'cbc', $iv); 
	  mcrypt_generic_init($td, $key, $iv);
	  $encrypted = mcrypt_generic($td, $str); 
	  mcrypt_generic_deinit($td);
	  mcrypt_module_close($td); 
	  return base64_encode($encrypted);
    }
}
?>