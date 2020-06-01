<?php

class Mhs extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_mhs;

    /**
     *
     * @var string
     */
    public $nim;

    /**
     *
     * @var string
     */
    public $nama;

    /**
     *
     * @var string
     */
    public $jenis_kelamin;

    /**
     *
     * @var string
     */
    public $tgl_lahir;

    /**
     *
     * @var string
     */
    public $fakultas;

    /**
     *
     * @var string
     */
    public $program_studi;

    /**
     *
     * @var string
     */
    public $alamat;

    /**
     *
     * @var string
     */
    public $telp;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("lppm-suska");
        $this->setSource("mhs");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'mhs';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Mhs[]|Mhs|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Mhs|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
