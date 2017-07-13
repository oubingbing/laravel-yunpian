<?php
/**
 * Created by PhpStorm.
 * User: bingbing
 * Date: 2017/7/9
 * Time: 17:53
 */

namespace Bing\LaravelYunPian;




class SendMessage
{

    protected $singleUrl = 'https://sms.yunpian.com/v2/sms/single_send.json';
    protected $multiUrl = 'https://sms.yunpian.com/V2/sms/multi_send.json';
    protected $apikey = '2f6b2eb5362ccad5d260e7e130f0c880';

    /**
     * 发送单条短信
     * @author yezi
     * @param $mobile
     * @param $content
     * @return array
     */
    public function sendSingle($mobile,$content)
    {

        if (empty($mobile))
            return ['success'=>false, 'statusCode'=>500, 'responseData'=>['msg'=>'手机号码不能为空']];

        if (empty($content))
            return ['success'=>false, 'statusCode'=>500, 'responseData'=>['msg'=>'内容不能为空']];

        $data = ['mobile'=>$mobile,'text'=>$content,'apikey'=>$this->apikey];
        $result = Curl::PostCURL($this->singleUrl,$data);

        return $result;
    }


}