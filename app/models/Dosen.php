<?php

class Dosen extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_dosen;

    /**
     *
     * @var string
     */
    public $nip_nik;

    /**
     *
     * @var string
     */
    public $nama;

    /**
     *
     * @var string
     */
    public $pangkat;

    /**
     *
     * @var string
     */
    public $fakultas;

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
        $this->setSource("dosen");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dosen';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Dosen[]|Dosen|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Dosen|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
