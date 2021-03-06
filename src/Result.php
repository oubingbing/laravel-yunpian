<?php
/**
 * Created by PhpStorm.
 * User: bingbing
 * Date: 2017/7/9
 * Time: 22:45
 */

namespace Bing\LaravelYunPian;


class Result
{
    public $success;
    public $statusCode;
    public $requestData;
    public $responseData;
    public $error;
    public function __construct($statusCode=null,$requestData = null, $responseData = null,$error=null )
    {
        $this->success = false;
        if ($statusCode == 200)
            $this->success = true;
        $this->statusCode = $statusCode;
        $this->requestData = $requestData;
        $this->responseData = $responseData;
        $this->error = $error;
    }

    public function getData()
    {
        return $this->responseData;
    }
    public function isSuccess(){
        return $this->success;
    }
}