<?php

namespace Vav\Templater\Api\Data;

interface TemplateInterface
{
    const TABLE_NAME = 'vav_templater_template';

    const ID = 'template_id';
    const PATH = 'path';
    const TEMPLATE = 'template';
    const IS_ACTIVE = 'is_active';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    const STATUS_ACTIVE = 1;
    const STATUS_DISABLED = 0;

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getPath();

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setPath($value);

    /**
     * @return string
     */
    public function getTemplate();

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setTemplate($value);

    /**
     * @return bool
     */
    public function getIsActive();

    /**
     * @param bool $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive);

    /**
     * @return string
     */
    public function getCreatedAt();

    /**
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * @return string
     */
    public function getUpdatedAt();

    /**
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt);

    /**
     * Object data getter
     *
     * If $key is not defined will return all the data as an array.
     * Otherwise it will return value of the element specified by $key.
     * It is possible to use keys like a/b/c for access nested array data
     *
     * If $index is specified it will assume that attribute data is an array
     * and retrieve corresponding member. If data is the string - it will be explode
     * by new line character and converted to array.
     *
     * @param string     $key
     * @param string|int $index
     * @return mixed
     */
    public function getData($key = '', $index = null);

    /**
     * If $key is empty, checks whether there's any data in the object
     * Otherwise checks if the specified attribute is set.
     *
     * @param string $key
     * @return bool
     */
    public function hasData($key = '');

    /**
     * Overwrite data in the object.
     *
     * The $key parameter can be string or array.
     * If $key is string, the attribute value will be overwritten by $value
     *
     * If $key is an array, it will overwrite all the data in the object.
     *
     * @param string|array  $key
     * @param mixed         $value
     *
     * @return $this
     */
    public function setData($key, $value = null);

    /**
     * Add data to the object.
     *
     * Retains previous data in the object.
     *
     * @param array $arr
     *
     * @return $this
     */
    public function addData(array $arr);

    /**
     * Save object data
     *
     * @return $this
     * @throws \Exception
     * @deprecated
     */
    public function save();

    /**
     * Load object data
     *
     * @param integer $modelId
     * @param null|string $field
     * @return $this
     * @deprecated
     */
    public function load($modelId, $field = null);

    /**
     * Delete object from database
     *
     * @return $this
     * @throws \Exception
     * @deprecated
     */
    public function delete();

    /**
     * Unset data from the object.
     *
     * @param null|string|array $key
     * @return $this
     */
    public function unsetData($key = null);
}
