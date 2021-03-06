<?php

/**
 * This file is part of the Ingram Micro Cloud Blue Connect SDK.
 *
 * @copyright (c) 2018-2020. Ingram Micro. All Rights Reserved.
 */

namespace Connect;

/**
 * Class ActivationTemplateResponse
 * @package Connect
 */
class ActivationTemplateResponse
{
    /**
     * @var string
     */
    public $templateid;


    /**
     * ActivationTemplateResponse constructor.
     * @param string $templateid
     */
    public function __construct($templateid)
    {
        $this->templateid = $templateid;
    }
}
