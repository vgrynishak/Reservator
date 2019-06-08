<?php


class Reservator
{
    const MIN = 99;
    const MAX = 3000;
    const TYPE_EVENT = '[local] | ';

    protected $ticketId;
    protected $orderId;
    protected $eventId;

    public function __construct($eventId)
    {
        $this->eventId = $eventId;
        echo static::TYPE_EVENT."creating object for event #".$eventId.PHP_EOL;
    }

    /**
     * Метод який викликається в контролері
     */
    public function reserveRandomTicket()
    {
        $this->reserve();
        $this->createOrder();
        $this->sendNotification();
    }


    public function reserve(){
        $this->ticketId = $this->getRandomNumber();
        echo static::TYPE_EVENT."reserving ticket #".$this->ticketId.PHP_EOL;
    }

    public function createOrder(){
        $this->orderId = $this->getRandomNumber();
        echo static::TYPE_EVENT."orderId #".$this->orderId.' created'.PHP_EOL;
    }

    public function sendNotification()
    {
        echo static::TYPE_EVENT."Sending admin notification: Order #".$this->orderId." created for event #".$this->eventId.PHP_EOL;
    }

    public function getRandomNumber(){
        return rand(static::MIN, static::MAX);
    }
}