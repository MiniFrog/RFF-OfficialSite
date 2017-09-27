<?php
namespace Exceptions;

class AuthorizeException extends \RuntimeException
{

    protected $messageEcho;

    public function __construct($code = null, $previous = null)
    {
        $log_list = include '../resources/lang/zh/QQOauthLogError.php';
        $echo_list = include '../resources/lang/zh/QQOauthEchoError.php';
        $message_log = array_get($log_list, $code, null);
        $message_log = $message_log == null ? '未知的错误' : $message_log;
        $this->messageEcho = array_get($echo_list, $code, null);
        $this->messageEcho = $this->messageEcho == null ? $echo_list['usual'] : $this->messageEcho;
        parent::__construct($message_log, $code, $previous);
    }

    public function errorMessageForResponse()
    {
        return $this->messageEcho;
    }

    public function errorMessageForWritingLog()
    {
        return $this->getMessage();
    }
}

