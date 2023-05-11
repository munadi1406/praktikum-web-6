<?php 


class Lingkaran_model extends CI_Model{
    public function hitungLuas($luas){
        return 3.14 *  $luas * $luas ;
    }
}