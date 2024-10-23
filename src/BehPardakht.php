<?php
namespace iAmirNet\BehPardakht;

class BehPardakht {

    use Methods\Request,
        Methods\Calls,
        Methods\Redirect,
        Methods\Error,
        Methods\bpPayRequest,
        Methods\bpVerifyRequest,
        Methods\bpInquiryRequest,
        Methods\bpSettleRequest,
        Methods\bpReversalRequest;

    public $terminalId, $userName, $password, $lang = 'fa';

    public function __construct($terminalId, $userName, $password)
    {
        $this->setTerminalId($terminalId);
        $this->setUserName($userName);
        $this->setPassword($password);
    }
}
