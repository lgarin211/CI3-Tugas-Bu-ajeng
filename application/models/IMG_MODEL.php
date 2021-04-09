<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IMG_MODEL extends CI_Model {

public function Alldata($value='')
	{
		$all=$this->db->get('Img_galeri')->result();
		return $all;
	}	

public function CreadData($data)
{
	$this->db->insert('Img_galeri', $data);
}

public function UpdateData($data)
{
$this->db->set($data);
$this->db->where('id', $data['id']);
$this->db->update('Img_galeri');
}

public function DeleteData($id)
{
$this->db->where('id', $id);
$this->db->delete('Img_galeri');
}
}
