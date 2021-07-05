<?php
	/**
	 * 
	 */
	class Reg_Model extends CI_Model
	{
		
		public function saverecords($name,$email,$mobile)
		{
			$query="insert into customer values('','$name','$email','$mobile')";
			$this->db->query($query);
			# code...
		}
		public function display_users(){
			$query=$this->db->query('select * from customer');
				return $query->result();
		}
		public function delete_users($id){
			$this->db->query("delete from customer where id='".$id."'");
		}
		public function update_users($id,$name,$email,$mobile){
			$query=$this->db->query("update customer SET name='$name', email='$email', mobile='$mobile' where id='".$id."'");
		}
		public function displayusersbyid($id){
			$query=$this->db->query("select * from customer where id='".$id."'");
            return $query->result();
        }
		public function fetchUserDetails(){
			$query=$this->db->query('select * from customer');

			$output='
            <table style="width:100%;border: 1px solid black">
               <thead>
                <tr>
                   <th style="border: 1px solid black">ID</th>
                   <th style="border: 1px solid black">Name</th>
                   <th style="border: 1px solid black">Email</th>
                  <th style="border: 1px solid black">Mobile</th>
                </tr>
               </thead>
               <tbody>';
            foreach($query->result() as $row){
                $output.='
                <tr style "border: 1px solid black">
                <td style="border: 1px solid black">'.$row->id.'</td>
                <td style="border: 1px solid black">'.$row->name.'</td>
                <td style="border: 1px solid black">'.$row->email.'</td>
               <td style="border: 1px solid black">'.$row->mobile.'</td>
                </tr>';
            }
            $output.='
                </tbody>
            </table>';
            return $output;
	}	
	}
?>