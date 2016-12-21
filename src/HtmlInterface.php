<?php

namespace Valerian\Html;

interface HtmlInterface
{

    /**
     * @return string in HTML format
     */
    function __toString();

    /**
     * @return string in HTML format
     */
    function render();

}