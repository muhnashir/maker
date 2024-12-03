<?php

namespace Muhnashir\Maker\Base;


use Muhnashir\Maker\Responses\ServiceResponse;

abstract class ServiceBase implements \Muhnashir\Maker\Contracts\ServiceContract
{
    /**
     * To return success response of the service
     *
     * @param $data
     * @param string $message
     * @param string|null $customCode
     * @return ServiceResponse
     */
    protected static function success($data, string $message = "success", string $customCode = null): ServiceResponse {
        return new ServiceResponse($data, $message, 200, $customCode);
    }

    /**
     * To return error response of the service
     *
     * @param $data
     * @param string $message
     * @param int $status
     * @param string|null $customCode
     * @return ServiceResponse
     */
    protected static function error($data, string $message = "error", int $status = 300, string $customCode = null): ServiceResponse {
        return new ServiceResponse($data, $message, $status, $customCode);
    }

}
