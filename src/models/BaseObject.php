<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models;

use yii\helpers\Inflector;
use yii\helpers\Json;
use yii\helpers\StringHelper;
use yii\web\JsExpression;

/**
 * Class BaseObject
 * @package simialbi\yii2\chart\models
 *
 * @property-read string $id Element's user-defined ID.
 * @property-read string $varName Variable name
 * @property-read mixed $expression the JavaScript expression represented by this object
 *
 * @property string|JsExpression $appendix append custom java script
 */
class BaseObject extends \yii\base\BaseObject implements \JsonSerializable
{
    const NAME_SPACE = 'am4charts';

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
     * @var string|JsExpression Custom javascript to append
     */
    private $_appendix;

    /**
     * The PHP magic function converting an object into a string.
     * @return string the JavaScript expression.
     */
    public function __toString()
    {
        return $this->expression;
    }

    /**
     * Expression property getter
     * @throws \ReflectionException
     */
    public function getExpression()
    {
        $className = StringHelper::basename(static::class);
        $r = new \ReflectionClass($this);
        $properties = $r->getProperties(\ReflectionProperty::IS_PUBLIC);

        $js = "var {$this->varName} = new " . static::NAME_SPACE . ".$className();\n";

        foreach ($properties as $property) {
            if ($property->isStatic()) {
                continue;
            }

            $key = $property->getName();
            $value = $property->getValue($this);

            if (isset($value)) {
                $js .= "{$this->varName}.$key = " . Json::htmlEncode($value) . ";\n";
            }
        }

        if (isset($this->appendix)) {
            $js .= (string)$this->appendix . "\n";
        }

        return "(function () { $js return {$this->varName}; })() ";
    }

    /**
     * Return the variable name of the object
     * @return string
     */
    public function getVarName()
    {
        $className = StringHelper::basename(static::class);
        return Inflector::variablize($className . '_' . $this->id);
    }

    /**
     * Appendix property getter
     * @return string|JsExpression
     */
    public function getAppendix()
    {
        return $this->_appendix;
    }

    /**
     * Appendix property setter
     * @param string|JsExpression $appendix
     */
    public function setAppendix($appendix)
    {
        $this->_appendix = $appendix;
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

    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return new JsExpression($this->expression);
    }
}