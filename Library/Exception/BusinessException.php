<?php
declare (strict_types=1);

namespace Captainbi\Library\Exception;

use Throwable;

/**
 * HTTP异常
 */
class BusinessException extends \RuntimeException
{
    private $data;
    public function __construct($code = 10001, $message = '', $data=array())
    {
        parent::__construct($message, $code);
        $this->data = $data;
    }

    public function getData(){
        return $this->data;
    }
}
