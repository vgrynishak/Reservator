<?php


class ReservatorApiPartner extends Reservator
{
    const MIN = 80000;
    const MAX = 90000;
    const TYPE_EVENT = '[partnerApi] | ';

    public function callApi(){
        echo self::TYPE_EVENT.'reserving ticket #'.$this->ticketId.' VIA PARTNER API CALL'.PHP_EOL;
    }

    public function createOrder(){
        $this->callApi();
        parent::createOrder();
    }
}