<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Zon\Fork;


use Zon\Fork\Api\Spot\Accounts;
use Zon\Fork\Api\Spot\Market;
use Zon\Fork\Api\Spot\Orders;
use Zon\Fork\Api\Spot\Common;

class MxcSpot
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;

    protected $options=[];

    function __construct(string $key='',string $secret='',string $host='https://open-api.bingx.com'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
    }

    /**
     *
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'passphrase'=>$this->passphrase,
            'host'=>$this->host,
            'options'=>$this->options,

            'platform'=>'spot',
            'version'=>'v1',
        ];
    }

    /**
     *
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }

    /**
     *
     * */
    public function account(){
        return  new Accounts($this->init());
    }

    /**
     *
     * */
    public function common(){
        return  new Common($this->init());
    }

    /**
     *
     * */
    public function market(){
        return  new Market($this->init());
    }

    /**
     *
     * */
    public function order(){
        return  new Orders($this->init());
    }
}
