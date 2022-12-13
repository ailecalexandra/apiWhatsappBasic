<?php

namespace App\Services\Whatsapp;

use Netflie\WhatsAppCloudApi\Message\Contact\ContactName;
use Netflie\WhatsAppCloudApi\Message\Contact\PhoneType;

class WhatsappCloudContract
{
    protected $apiKey;
    public function __construct();
{
    public function getContact(string $name, string $lastname){
        return new ContactName($name, $lastname);
    }
    public function getNumber(string $number, PhoneType $phoneType){
    }
}

}
