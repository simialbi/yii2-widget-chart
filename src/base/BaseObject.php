<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base;


use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;
use yii\helpers\Json;
use yii\helpers\StringHelper;
use yii\web\JsExpression;

/**
 * Class BaseObject
 * @package simialbi\yii2\chart\base
 *
 * @property-read string $id Element's user-defined ID.
 */
class BaseObject extends JsExpression
{
    /**
     * @var string the prefix to the automatically generated object IDs.
     * @see getId()
     */
    public static $autoIdPrefix = 'sa-co-';

    /**
     * @var int a counter used to generate [[id]] for objects.
     * @internal
     */
    public static $counter = 0;

    /**
     * @var string Internal id property
     */
    private $_id;

    /**
     * {@inheritdoc}
     */
    public function __construct(array $config = [])
    {
        parent::__construct(null, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        $className = StringHelper::basename(static::class);
        $variable = Inflector::variablize($className . $this->id);
        $properties = ArrayHelper::toArray($this);

        $js = "var $variable = new am4charts.$className();";

        foreach ($properties as $key => $value) {
            $js .= "$variable.$key = " . Json::htmlEncode($value);
        }

        return $js;
    }

    /**
     * Returns the ID of the object.
     * @param bool $autoGenerate whether to generate an ID if it is not set previously
     * @return string ID of the object.
     */
    public function getId($autoGenerate = true)
    {
        if ($autoGenerate && $this->_id === null) {
            $this->_id = static::$autoIdPrefix . static::$counter++;
        }

        return $this->_id;
    }
}