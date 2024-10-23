<?php


namespace iAmirNet\BehPardakht\Methods;


trait Calls
{
    /**
     * @return mixed
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $terminalId
     */
    public function setTerminalId($terminalId): void
    {
        $this->terminalId = $terminalId;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @param string $lang
     */
    public function setLang(string $lang): void
    {
        $this->lang = $lang;
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }


    /**
     * @return integer
     */
    public static function generateOrderId($id) {
        return date("YmdHis") . str_pad($id, 6, '0', STR_PAD_LEFT);
    }
}