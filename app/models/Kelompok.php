<?php

class Kelompok extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_kelompok;

    /**
     *
     * @var string
     */
    public $nim;

    /**
     *
     * @var string
     */
    public $kelompok;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("lppm-suska");
        $this->setSource("kelompok");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'kelompok';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Kelompok[]|Kelompok|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Kelompok|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
