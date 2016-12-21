<?php

namespace Valerian\Html;

interface ElementInterface extends EmptyElementInterface
{
    /**
     * @param HtmlInterface $child
     * @return $this
     */
    function addChild(HtmlInterface $child);
}