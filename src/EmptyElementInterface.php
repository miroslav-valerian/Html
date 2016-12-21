<?php

namespace Valerian\Html;

interface EmptyElementInterface extends HtmlInterface
{
    /**
     * @return $this
     */
    function attribute($name, $value);

    /**
     * @return string
     */
    function getElementName();

}