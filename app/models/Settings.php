<?php

class Settings extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_setting;

    /**
     *
     * @var string
     */
    public $nm_title;

    /**
     *
     * @var string
     */
    public $footer;

    /**
     *
     * @var string
     */
    public $nm_des;

    /**
     *
     * @var string
     */
    public $nm_aut;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("lppm-suska");
        $this->setSource("settings");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'settings';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Settings[]|Settings|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Settings|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
