<?php

/*
 * This file is part of the simplesamlphp-module-oidc.
 *
 * Copyright (C) 2018 by the Spanish Research and Academic Network.
 *
 * This code was developed by Universidad de Córdoba (UCO https://www.uco.es)
 * for the RedIRIS SIR service (SIR: http://www.rediris.es/sir)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SimpleSAML\Modules\OpenIDConnect\Form\Controls;

use Nette\Forms\Controls\CsrfProtection as BaseCsrfProtection;
use SimpleSAML\Session;
use SimpleSAML\Utils\Random;

class CsrfProtection extends BaseCsrfProtection
{
    /**
     * @param string $errorMessage
     *
    public function __construct($errorMessage)
    {
        parent::__construct($errorMessage);

        $this->session = Session::getSession();
    }


    /**
     * @return string
     */
    public function getToken(): string
    {
        $token = $this->session->getData('token', 'form');

        if (!isset($token)) {
            $token = Random::generateID();

            $this->session->setData('token', 'form', $token);
        }

        return $token;
    }
}
