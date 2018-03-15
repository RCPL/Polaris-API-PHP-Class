<?php

namespace RCPL\Polaris\Utility;

use Zend\Stdlib\ArrayUtils;
use Zend\Stdlib\Parameters as ZendParameters;

class Parameters extends ZendParameters {

    /**
     * @param Parameters|array $parameters
     *
     * @return Parameters;
     */
    public function merge($parameters) {
        $params = is_a($parameters, 'Parameters') ? $parameters->toArray() : $parameters;
        $this->exchangeArray(ArrayUtils::merge($this->toArray(), $parameters));
        return $this;
    }
}