<?php

class Jurusan extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_jurusan;

    /**
     *
     * @var integer
     */
    public $id_fakultas;

    /**
     *
     * @var string
     */
    public $nama_jurusan;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("lppm-suska");
        $this->setSource("jurusan");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'jurusan';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Jurusan[]|Jurusan|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Jurusan|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
