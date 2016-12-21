<?php

namespace Valerian\Html;

abstract class Element extends EmptyElement
{
    /**
     * @var HtmlInterface[]
     */
    protected $children = [];

    /**
     * @param HtmlInterface $child
     * @return $this
     */
    public function addChild(HtmlInterface $child)
    {
        $this->children[] = $child;
        return $this;
    }

    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @return string
     */
    public function render()
    {
        $response = $this->renderStartTag();
        $response .= $this->renderChildren();
        $response .= $this->renderEndTag();
        return $response;
    }

    /**
     * @return string
     */
    protected function renderStartTag()
    {
        return parent::render();
    }

    /**
     * @return string
     */
    protected function renderEndTag()
    {
        return "</".$this->getElementName().">";
    }

    /**
     * @return null|string
     */
    protected function renderChildren()
    {
        $response = null;
        foreach ($this->children as $child) {
            $response .= $child->render();
        }
        return $response;
    }
}
