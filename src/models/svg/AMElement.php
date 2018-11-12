<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\svg;


use simialbi\yii2\chart\models\BaseObject;

class AMElement extends BaseObject
{
    const NAME_SPACE = 'am4core';

    /**
     * @var string Element's SVG contents.
     *
     * Returns element's contents as SVG markup.
     */
    public $content;

    /**
     * @var mixed An SVG node of the element.
     */
    public $node;

    /**
     * @var integer Element's rotation in degrees.
     */
    public $rotation;

    /**
     * @var float Element's scale where 1 is original size.
     *
     * Setting to 0.5 will reduce element's size by 50%, 2 will make element twice as large, etc.
     */
    public $scale;

    /**
     * @var string Text contents of the SVG element.
     */
    public $textContent;

    /**
     * @var integer Element's X position in pixels.
     */
    public $x;

    /**
     * @var integer Element's Y position in pixels.
     */
    public $y;
}