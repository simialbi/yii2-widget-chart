<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\series;


use simialbi\yii2\chart\models\map\MapPolygon;
use yii\helpers\Json;
use yii\helpers\StringHelper;

class MapPolygonSeries extends MapSeries
{
    /**
     * @var MapPolygon[] List of polygon elements in the series.
     */
    public $mapPolygons;


    /**
     * {@inheritDoc}
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

            if ($key === 'heatRules' && is_array($value)) {
                foreach ($value as $item) {
                    $js .= "{$this->varName}.$key.push(" . Json::htmlEncode($item) . ");";
                }
                continue;
            }

            if (isset($value)) {
                $js .= "{$this->varName}.$key = " . Json::htmlEncode($value) . ";\n";
            }
        }

        if (isset($this->appendix)) {
            $js .= (string)$this->appendix . "\n";
        }

        return "(function () { $js return {$this->varName}; })() ";
    }
}