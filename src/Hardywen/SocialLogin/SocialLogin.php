<?php

namespace Hardywen\SocialLogin;

class SocialLogin {

    private $serviceInstance; //当前服务

    //调用服务

    public function consumer($serviceName) {

        $serviceClass = "\\Hardy\\SocialLogin\\Services\\$serviceName";
        $this->serviceInstance = new $serviceClass($serviceName); //实例化服务
        return $this->serviceInstance;
    }

}
