<?php

class Fakultas extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_fakultas;

    /**
     *
     * @var string
     */
    public $nama_fakultas;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("lppm-suska");
        $this->setSource("fakultas");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'fakultas';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Fakultas[]|Fakultas|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Fakultas|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
