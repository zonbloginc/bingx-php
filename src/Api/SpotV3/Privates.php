<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Zon\Fork\Api\SpotV3;

use Zon\Fork\Request;

class Privates extends Request
{
    protected $authentication=true;

    /*
     *POST /api/v3/order/test
     * */
    public function postOrderTest(array $data=[]){
        $this->type='POST';
        $this->path='/api/v3/order/test';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /api/v3/order
     * */
    public function postOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v3/order';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *DELETE /api/v3/order
     * */
    public function deleteOrder(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v3/order';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *DELETE /api/v3/openOrders
     * */
    public function deleteOpenOrders(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v3/openOrders';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /api/v3/order
     * */
    public function getOrder(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/order';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /api/v3/openOrders
     * */
    public function getOpenOrders(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/openOrders';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /api/v3/allOrders
     * */
    public function getAllorders(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/allOrders';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /api/v3/account
     * */
    public function getAccount(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/account';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /api/v3/myTrades
     * */
    public function getMyTrades(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/myTrades';
        $this->data=$data;
        return $this->exec();
    }
}
