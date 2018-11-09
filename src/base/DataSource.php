<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base;


class DataSource extends Component
{
    /**
     * @var DateFormatter A `DateFormatter` to use when parsing dates from string formats.
     *
     * Will inherit and use chart's DateFormatter if not ser.
     */
    public $dateFormatter;

    /**
     * @var boolean If set to `true` it will timestamp all requested URLs to work around browser cache.
     */
    public $disableCache;

    /**
     * @var boolean Should subsequent reloads be treated as incremental?
     *
     * Incremental loads will assume that they contain only new data items since the last load.
     *
     * If `incremental = false` the loader will replace all of the target's data with each load.
     *
     * This setting does not have any effect trhe first time data is loaded.
     *
     * NOTE: this setting works only with element's data property. It won't work with any other externally-loadable
     * data property.
     */
    public $incremental = false;

    /**
     * @var array An array consisting of key/value pairs to apply to an URL when data source is making an incremental
     * request.
     */
    public $incrementalParams;

    /**
     * @var boolean This setting is used only when `incremental = true`. If set to `true`, it will try to retain the
     * same number of data items across each load.
     *
     * E.g. if incremental load yeilded 5 new records, then 5 items from the beginning of data will be removed so that
     * we end up with the same number of data items.
     * Defaults to `false`
     */
    public $keepCount = false;

    /**
     * @var Language Language instance to use.
     *
     * Will inherit and use chart's language, if not set.
     */
    public $language;

    /**
     * @var DataParser A parser to be used to parse data.
     */
    public $parser;

    /**
     * @var integer Data source reload frequency.
     *
     * If set, it will reload the same URL every X milliseconds.
     */
    public $reloadFrequency;

    /**
     * @var array Custom options for HTTP(S) request.
     *
     * At this moment the only option supported is: `requestHeaders`, which holds an array of objects for custom request
     * headers, e.g.:
     * ```php
     * [
     *     'requestHeaders' => [
     *         'key' => 'x-access-token',
     *         'value' => '123456789'
     *     ]
     * ]
     * ```
     *
     * NOTE: setting this options on an-already loaded DataSource will not trigger a reload.
     */
    public $requestOptions;

    /**
     * @var boolean Will show loading indicator when loading files. Defaults to `true`
     */
    public $showPreloader = true;

    /**
     * @var string URL of the data source.
     */
    public $url;
}