<?php
require '../vendor/autoload.php';
/*
A simple library to encode and decode JSON Web Tokens (JWT) in PHP. Should conform to the current spec.
*/

use Firebase\JWT\JWT; // https://packagist.org/packages/firebase/php-jwt

class JwtHandler
{
    protected $jwt_secret;
    protected $token;
    protected $issuedAt;
    protected $expire;
    protected $jwt;

    public function __construct()
    {
        //default time zone setting
        date_default_timezone_set('America/Costa_Rica');
        $this->issuedAt = time();

        //token validity (3600 seconds = 1hr)
        $this->expire = $this->issuedAt + 3600;

        //set your secret for your token or signature 
        $this->jwt_secret = "this_is_my_secret";
    }

    public function jwtEncodeData($iss, $data)
    {
        $this->token = array(
            //adding the identifier to the token (who issue the token)
            'iss' => $iss,
            'aud' => $iss,
            //Adding the current timestamp to the token, for identifying that when the token was issued. 
            'iat' => $this->issuedAt,
            //Token expiration
            'exp' => $this->expire,
            //payload
            'data' => $data
        );

        $this->jwt = JWT::encode($this->token, $this->jwt_secret, 'HS256');
        return $this->jwt;
    }

    public function jwtDecodeData($jwt_token)
    {
        try {
            $decoded = JWT::decode($jwt_token, $this->jwt_secret, array('HS256'));
            return [
                "data" => $decode->data
            ];
        } catch (Exception $e) {
            // errors having to do with environmental setup or malformed JWT Keys
            return [
                "message" => $e->getMessage()
            ];
        }
    }
}
