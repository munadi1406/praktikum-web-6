<?php


class Kategori_model extends CI_Model{
    public function get_kategori(){
        return $this->db->get('kategori_prestasi')->result();
    }


    public function get_kategori_byid($id){
        return $this->db->get_where('Kategori_prestasi',['id'=>$id])->row();
    }

    public function tambah_kategori(){
        $data=[
            'nama_kategori'=>$this->input->post('nama_kategori')
        ];
        $this->db->insert('kategori_prestasi',$data);
        if($this->db->affected_rows()>0){
            $this->session->set_flashdata('status','Berhasil');
            $this->session->set_flashdata('pesan','Data Kategori Prestasi Berhasil diTambahkan');
        }else{
            $this->session->set_flashdata('status','Gagal');
            $this->session->set_flashdata('pesan','Data Kategori Prestasi Gagal diTambahkan');
        }
    }
    public function ubah_kategori($id){
        $data=[
            'nama_kategori'=>$this->input->post('nama_kategori')
        ];
        $this->db->update('kategori_prestasi',$data,['id'=>$id]);
        if($this->db->affected_rows()>0){
            $this->session->set_flashdata('status','Berhasil');
            $this->session->set_flashdata('pesan','Data Kategori Prestasi Berhasil diTambahkan');
        }else{
            $this->session->set_flashdata('status','Gagal');
            $this->session->set_flashdata('pesan','Data Kategori Prestasi Gagal diTambahkan');
        }
    }

    public function hapus_kategori($id){
        $this->db->delete('kategori_prestasi',['id'=>$id]);
        if($this->db->affected_rows()>0){
            $this->session->set_flashdata('status','Berhasil');
            $this->session->set_flashdata('pesan','Data Kategori Prestasi Berhasil di hapus');
        }else{
            $this->session->set_flashdata('status','Gagal');
            $this->session->set_flashdata('pesan','Data Kategori Prestasi Gagal di hapus');
        }
    }
}