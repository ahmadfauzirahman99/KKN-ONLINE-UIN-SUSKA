<?php

class ApiMahasiswaController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function ambilAction()
    {
        $columns = array(
            [0, "id_mhs"],
            [1, "id_mhs", function ($d, $row) {
                return "<a onclick='remove(this)' href='#' data-value='{$d}'>
                            <i class='fa fa-trash' title='Hapus'></i>
                        </a> &nbsp;|&nbsp; 
                        <a onclick='edit(this)' href='#' data-value='{$d}'>
                            <i class='fa fa-pencil-alt' title='Edit'></i>
                        </a>";
            }],
            [2, "nama"],
            [3, "nim"],
            [4, "jenis_kelamin"],
            [5, "program_studi"],
            [6, "alamat"],
            [7, "telp"],
            [8, "fakultas"],
        );
        return $this->writeDataTables("mhs", 'id_mhs', $columns);
    }

    public function kelompokAction()
    {
        $columns = array(
            [0, "id_kelompok"],
            /*[1, "id_kelompok", function ($d, $row) {
                return "<a onclick='remove(this)' href='#' data-value='{$d}'>
                            <i class='fa fa-trash' title='Hapus'></i>
                        </a> &nbsp;|&nbsp; 
                        <a onclick='edit(this)' href='#' data-value='{$d}'>
                            <i class='fa fa-pencil-alt' title='Edit'></i>
                        </a>";
            }],*/
            [1, "nim"],
            [2, "kelompok"],
            [3, "id_kelompok", function ($d, $row) {
                $data = ControllerBase::getMahasiswa($d);
                return $data->nama;
            }],
        );
        return $this->writeDataTables("kelompok", 'id_kelompok', $columns);
    }


}

