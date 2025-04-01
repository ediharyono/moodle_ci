<?php
//option:

$db_host = 'localhost';
$db_passwd = '';
$user = 'root';
$induk_aplikasi = 'MOODLE'; //nama aplikasi induknya untuk landing pages
$name_application = 'Mdl_user'; //nama aplikasi induknya untuk landing pages
$name_database = 'simakuwm_moodle';
$name_table = 'Mdl_user';
$name_table1 = ucwords($name_table); //huruf besar di web

//============================================================================================//
//
$column0 = 'id'; 
$column1 = 'auth'; 
$column2 = 'confirmed'; 
$column3 = 'policyagreed'; 
$column4 = 'deleted'; 
$column5 = 'suspended'; 
$column6 = 'mnethostid'; 
$column7 = 'username';
$column8 = 'password';
$column9 = 'idnumber';  
$column10 = 'firstname'; 
$column11 = 'lastname'; 
$column12 = 'email';
$column13 = 'emailstop'; 
$column14 = 'phone1'; 






//


//============================================================================================//

$columnid = $column0;
$group_for_chart = $column13;
$group_for_chart1 = $column5;

//dont replace:
//special_character
$strs = '"';
$dot  = ".";
//

?>

<?php

$content_controllers_datatable = 
"<?php 
//File in controller $name_table1 and save highchart in assets folder 
defined('BASEPATH') OR exit('No direct script access allowed');
class $name_table1"." extends CI_Controller {

public function __construct()
	{
	parent::__construct();
	$"."this->load->model('$name_table"."/$name_table"."_model_datatable','sk');
	
		$"."this->load->library('session');
		$"."this->load->helper('url');
		$"."this->load->model('token/token_model','tkn');
	}

public function index()
	{
		$"."this->session->set_userdata('judul_aplikasi','$name_application');
	$"."this->load->helper('url');
	$"."this->load->model('$name_table"."/$name_table"."_model_datatable','sk');	
	$"."data['center']='$name_table"."/$name_table"."_view_datatable';
	$"."this->load->view('dashboard/v_dashboard_uii',$"."data);
	}

public function ajax_list()
	{
	$"."this->load->model('$name_table"."/$name_table"."_model_datatable','sk');		
	$"."list = $"."this->sk->get_datatables();
	$"."data = array();
	$"."no = $"."_POST['start'];
	foreach ($"."list as $"."sk) {
	$"."no++;
	$"."row = array();
	$"."row[] = $"."no;

	$"."row[] = $"."sk->$column0".";
	$"."row[] = $"."sk->$column1".";
	$"."row[] = $"."sk->$column2".";
	$"."row[] = $"."sk->$column3".";
	$"."row[] = $"."sk->$column4".";	
	$"."row[] = $"."sk->$column5".";
	$"."row[] = $"."sk->$column6".";	
	$"."row[] = $"."sk->$column7".";	
	
	$"."row[] = '<center><a class=$strs"."btn btn-sm btn-primary$strs"." href=$strs"."javascript:void(0)$strs"." title=$strs"."Edit$strs"." onclick=$strs"."edit_$name_table"."('.$strs"."'$strs".".$"."sk->$columnid".".$strs"."'$strs".".')$strs"."><i class=$strs"."glyphicon glyphicon-pencil$strs"."></i>  </a>
	  <a class=$strs"."btn btn-sm btn-warning$strs"." href=$strs"."javascript:void(0)$strs"." title=$strs"."PDF$strs"." onclick=$strs"."preview_sdm('.$strs"."'$strs".".$"."sk->$columnid".".$strs"."'$strs".".')$strs"."><i class=$strs"."glyphicon glyphicon-file$strs"."></i>  </a> 
	  <a class=$strs"."btn btn-sm btn-warning$strs"." href=$strs"."javascript:void(0)$strs"." title=$strs"."CETAK$strs"." onclick=$strs"."cetak_sk('.$strs"."'$strs".".$"."sk->$columnid".".$strs"."'$strs".".')$strs"."><i class=$strs"."glyphicon glyphicon-print$strs"."></i>  </a> 
	  
	  <a class=$strs"."btn btn-sm btn-danger$strs"." href=$strs"."javascript:void(0)$strs"." title=$strs"."Hapus$strs"." onclick=$strs"."delete_$name_table"."('.$strs"."'$strs".".$"."sk->$columnid".".$strs"."'$strs".".')$strs"."><i class=$strs"."glyphicon glyphicon-trash$strs"."></i> </a>
	  <a class=$strs"."btn btn-sm btn-danger$strs"." href=$strs"."javascript:void(0)$strs"." title=$strs"."Hapus$strs"." onclick=$strs"."delete_$name_table"."_1"."('.$strs"."'$strs".".$"."sk->$columnid".".$strs"."'$strs".".')$strs"."><i class=$strs"."glyphicon glyphicon-trash$strs"."></i> </a>
	  </center>';
	  
	
	  
	$"."data[] = $"."row;
	}

	$"."output = array(
	$strs"."draw$strs"." => $"."_POST['draw'],
	$strs"."recordsTotal$strs"." => $"."this->sk->count_all(),
	$strs"."recordsFiltered$strs"." => $"."this->sk->count_filtered(),
	$strs"."data$strs"." => $"."data,
	);
	//output to json format
	echo json_encode($"."output);
	}

public function ajax_edit($"."$columnid".")
	{
	$"."this->load->model('$name_table"."/$name_table"."_model_datatable','sk');
	$"."data = $"."this->sk->get_by_id($"."$columnid".");
	echo json_encode($"."data);
	}

public function ajax_preview($"."$columnid".")
	{
	$"."this->load->model('$name_table"."/$name_table"."_model_datatable','sk');		
	$"."data = $"."this->sk->get_by_id($"."$columnid".");
	echo json_encode($"."data);
	}
public function ajax_add()
	{
		
	$"."this->load->library('Uuid');	
	$"."this->load->model('$name_table"."/$name_table"."_model_datatable','sk');	
	$"."data = array(

//============================================================================================//	
	
	//'$columnid"."' => $"."this->uuid->v4(),
	'$column0"."' => $"."this->session->userdata('thsms'),
	'$column1"."' => $"."this->input->post('$column1"."'),
	'$column2"."' => $"."this->input->post('$column2"."'),
	'$column3"."' => $"."this->input->post('$column3"."'),
	'$column4"."' => $"."this->input->post('$column4"."'),
	'$column5"."' => $"."this->input->post('$column5"."'),
	'$column6"."' => $"."this->input->post('$column6"."'),
	'$column7"."' => $"."this->input->post('$column7"."'),
	'$column8"."' => $"."this->input->post('$column8"."'),
	'$column9"."' => $"."this->input->post('$column9"."'),
	'$column10"."' => $"."this->input->post('$column10"."'),
	'$column11"."' => $"."this->input->post('$column11"."'),
	'$column12"."' => $"."this->input->post('$column12"."'),
	'$column13"."' => $"."this->input->post('$column13"."'),
	'$column14"."' => $"."this->input->post('$column14"."'),
 	'$column15"."' => $"."this->input->post('$column15"."'),
	'$column16"."' => $"."this->input->post('$column16"."'),
	'$column17"."' => $"."this->input->post('$column17"."'),
	'$column18"."' => $"."this->input->post('$column18"."'),
	'$column19"."' => $"."this->input->post('$column19"."'),

//============================================================================================//	
 
	);
	$"."insert = $"."this->sk->save($"."data);
	echo json_encode(array($strs"."status$strs"." => TRUE));
	}

public function ajax_update()
	{
	$"."this->load->model('$name_table"."/$name_table"."_model_datatable','sk');	
	$"."data = array(
	
//============================================================================================//	
	'$columnid"."' => $"."this->input->post('$columnid"."'),
	'$column1"."' => $"."this->input->post('$column1"."'),
	'$column2"."' => $"."this->input->post('$column2"."'),
	'$column3"."' => $"."this->input->post('$column3"."'),
	'$column4"."' => $"."this->input->post('$column4"."'),
	'$column5"."' => $"."this->input->post('$column5"."'),
	'$column6"."' => $"."this->input->post('$column6"."'),
	'$column7"."' => $"."this->input->post('$column7"."'),
	'$column8"."' => $"."this->input->post('$column8"."'),
	'$column9"."' => $"."this->input->post('$column9"."'),
	'$column10"."' => $"."this->input->post('$column10"."'),
	'$column11"."' => $"."this->input->post('$column11"."'),
	'$column12"."' => $"."this->input->post('$column12"."'),
	'$column13"."' => $"."this->input->post('$column13"."'),
	'$column14"."' => $"."this->input->post('$column14"."'),
 	'$column15"."' => $"."this->input->post('$column15"."'),
	'$column16"."' => $"."this->input->post('$column16"."'),
	'$column17"."' => $"."this->input->post('$column17"."'),
	'$column18"."' => $"."this->input->post('$column18"."'),
	'$column19"."' => $"."this->input->post('$column19"."'), 


 //============================================================================================//

	);
	$"."this->sk->update(array('$columnid"."' => $"."this->input->post('$columnid"."')), $"."data);
	echo json_encode(array($strs"."status$strs"." => TRUE));
	}

public function ajax_delete($"."$columnid".")
	{
	$"."this->load->model('$name_table"."/$name_table"."_model_datatable','sk');		
	$"."this->sk->delete_by_id($"."$columnid".");
	echo json_encode(array($strs"."status$strs"." => TRUE));
	}

//chart =========================================
public function chart()
	{
	$"."this->load->helper('url');
	$"."this->load->model('$name_table"."/$name_table"."_model');
	$"."data['departments']=$"."this->$name_table"."_model->get_chart_$name_table();
	$"."data['center']='$name_table/$name_table"."_chart_view';
	$"."this->load->view('dashboard/v_dashboard_uii',$"."data);
	} 


//csv
public function csv()
	{		
	$"."this->load->helper('url');
	$"."data['center']='$name_table"."/$name_table"."_csv_view';
	$"."this->load->view('dashboard/v_dashboard_uii',$"."data);
	}

public function uploadData()
	{
	$"."this->load->helper('url');
	$"."this->load->model('$name_table"."/$name_table"."_model');
	$"."data['departments']=$"."this->$name_table"."_model->uploadData_$name_table();
	redirect('$name_table"."');
    }	

//export ke dalam format excel

public function view_excel() 
	{
	$"."this->load->helper('url');
	$"."this->load->model('$name_table"."/$name_table"."_model');
	$"."data = array( 'title' => 'Data lulusan',
	'departments' => $"."this->$name_table"."_model->get_$name_table());
	$"."this->load->view('$name_table"."/$name_table"."_excel_view',$"."data);
    }

public function export_excel(){
	$"."this->load->helper('url');
	$"."this->load->model('$name_table"."/$name_table"."_model');
			   $"."data = array( 'title' => 'Laporan Data Siswa',
	'departments' => $"."this->$name_table"."_model->get_$name_table());
	$"."this->load->view('$name_table"."/$name_table"."_export_excel_view',$"."data);
	}

//print
public function cetak_fpdf()
	{
	$"."this->load->helper('url');
	$"."this->load->model('$name_table"."/$name_table"."_model');
	$"."data['departments']=$"."this->$name_table"."_model->get_$name_table();
	$"."this->load->view('$name_table"."/$name_table"."_fpdf_view',$"."data);
	}

public function cetak_fpdf_1($"."id)
	{
	$"."this->load->helper('url');
	$"."this->load->model('$name_table"."/$name_table"."_model');
	$"."data['departments']=$"."this->$name_table"."_model->get_by_id($"."id);
	$"."this->load->view('$name_table"."/$name_table"."_fpdf_view',$"."data);
	}

public function cetak_mpdf()
	{	
		$"."this->load->library('M_pdf');
		$"."this->load->helper('url');
		$"."this->load->view('$name_table"."/$name_table"."_mpdf_view');
	}

public function cetak_mpdf_1()
	{	
		$"."this->load->library('M_pdf');
		$"."this->load->helper('url');
			$"."this->load->model('$name_table"."/$name_table"."_model');
			$"."data['departments']=$"."this->$name_table"."_model->get_$name_table"."();		
		$"."this->load->view('$name_table"."/$name_table"."_mpdf_view',$"."data);
	}



public function detail(string $"."id = ''):void
	{
	
	if ('' !== $"."id) {

		$"."this->session->set_userdata('induk_aplikasi','$induk_aplikasi');			
		$"."this->session->set_userdata('judul_aplikasi','$name_application');
		$"."this->session->set_userdata('id_sk',$"."id);		
		
		$"."this->load->helper('url');
	
		$"."this->load->model('$name_table/$name_table"."_model');
			$"."data = array( 
				'title' => '$name_application',
				'departments' => $"."this->$name_table"."_model->get_by_id($"."id),				
				'department' => $"."this->$name_table"."_model->get_by_id($"."id)
			);
	
		$"."data['center']='$name_table/$name_table"."_view_detail';
		$"."this->load->view('dashboard/v_dashboard_uii',$"."data);										
			} else {
				redirect('$name_table');
			}
	}	
	
function import_excel()
	{
			$"."this->load->helper('url');
			$"."this->load->library('Excel');
			$"."data['center']='$name_table/$name_table"."_excel_import';
			$"."this->load->view('dashboard/v_dashboard_uii',$"."data);
	}
	
public function import()
	{
		$"."this->load->helper('url');
		$"."this->load->model('$name_table/$name_table"."_model');
		$"."this->load->library('Uuid');
		$"."this->load->library('Excel');		
		
		if(isset($"."_FILES[$strs"."file$strs"."][$strs"."name$strs"."]))
		{
			$"."path = $"."_FILES[$strs"."file$strs"."][$strs"."tmp_name$strs"."];
			$"."object = PHPExcel_IOFactory::load($"."path);
			foreach($"."object->getWorksheetIterator() as $"."worksheet)
			{
				$"."highestRow = $"."worksheet->getHighestRow();
				$"."highestColumn = $"."worksheet->getHighestColumn();
		 
				for($"."row=2; $"."row<=$"."highestRow; $"."row++)
				{
					$"."excel1 = $"."worksheet->getCellByColumnAndRow(0, $"."row)->getValue();
					$"."excel2 = $"."worksheet->getCellByColumnAndRow(1, $"."row)->getValue();
					$"."excel3 = $"."worksheet->getCellByColumnAndRow(2, $"."row)->getValue();
					$"."excel4 = $"."worksheet->getCellByColumnAndRow(3, $"."row)->getValue();
					$"."excel5 = $"."worksheet->getCellByColumnAndRow(4, $"."row)->getValue();
					$"."excel6 = $"."worksheet->getCellByColumnAndRow(5, $"."row)->getValue();
					$"."excel7 = $"."worksheet->getCellByColumnAndRow(6, $"."row)->getValue();
					$"."excel8 = $"."worksheet->getCellByColumnAndRow(7, $"."row)->getValue();
					$"."excel9 = $"."worksheet->getCellByColumnAndRow(8, $"."row)->getValue();
					$"."excel10 = $"."worksheet->getCellByColumnAndRow(9, $"."row)->getValue();	 
					$"."excel11 = $"."worksheet->getCellByColumnAndRow(10, $"."row)->getValue();	 
					$"."excel12 = $"."worksheet->getCellByColumnAndRow(11, $"."row)->getValue();	
					$"."excel13 = $"."worksheet->getCellByColumnAndRow(12, $"."row)->getValue();	
					$"."excel14 = $"."worksheet->getCellByColumnAndRow(13, $"."row)->getValue();	
					$"."excel15 = $"."worksheet->getCellByColumnAndRow(14, $"."row)->getValue();	 
					$"."excel16 = $"."worksheet->getCellByColumnAndRow(15, $"."row)->getValue();	
					$"."excel17 = $"."worksheet->getCellByColumnAndRow(16, $"."row)->getValue();	
					$"."excel18 = $"."worksheet->getCellByColumnAndRow(17, $"."row)->getValue();
					$"."excel18 = $"."worksheet->getCellByColumnAndRow(18, $"."row)->getValue();
					
					$"."data[] = array(
 				
					 	'$column0' 		=> $"."this->uuid->v4(),				
						'$column1'          =>$"."excel1, 
						'$column2'          =>$"."excel2,
						'$column3'         =>$"."excel3, 
						'$column4'        =>$"."excel4, 
						'$column5'      =>$"."excel5, 
						'$column6'       =>$"."excel6, 
						'$column7'       =>$"."excel7, 
						'$column8'        =>$"."excel8, 
						'$column9'          =>$"."excel9, 
						'$column10'          =>$"."excel10, 					 
						'$column11'          =>$"."excel11,
 						'$column12'          =>$"."excel12,	
						'$column13'          =>$"."excel13,	
						'$column14'          =>$"."excel14,	
						'$column15'          =>$"."excel15, 					 
						'$column16'          =>$"."excel16,
 						'$column17'          =>$"."excel17,	
						'$column18'          =>$"."excel18,	
						'$column19'          =>$"."excel19,							
					);
				}
			}
			$"."this->$name_table"."_model->insert($"."data);
		}	
	}
//

//
public function feeder()
	{
	$"."token = $"."this->tkn->token_feeder();
		$"."koneksi = mysqli_connect($strs"."localhost$strs".", $strs"."root$strs".", $strs"."$strs".", $strs"."pduii$strs".");
		$"."result = mysqli_query($"."koneksi, $strs"."SELECT * FROM $name_table"."$strs".");
		$"."manual = array();
			while ($"."rows = mysqli_fetch_array($"."result))				
			{			
					$"."$column1= $"."rows['$column1'];
					$"."$column2= $"."rows['$column2'];
					$"."$column3= $"."rows['$column3'];
					$"."$column4= $"."rows['$column4'];
					$"."$column5= $"."rows['$column5'];
					$"."$column6= $"."rows['$column6'];
					$"."$column7= $"."rows['$column7'];
					$"."$column8= $"."rows['$column8'];					
					$"."$column9= $"."rows['$column9'];
					$"."$column10= $"."rows['$column10'];
					$"."$column11= $"."rows['$column11'];
					$"."$column12= $"."rows['$column12'];
					$"."$column13= $"."rows['$column13'];
					$"."$column14= $"."rows['$column14'];
					$"."$column15= $"."rows['$column15'];	
					$"."$column16= $"."rows['$column16'];	
			
			$"."manual = array('act'=>'Insert"."$name_table"."', 'token'=>$"."token,
					'record' => array(
					'$column1' => $"."$column1, 
					'$column2' => $"."$column2,
					'$column3' => $"."$column3,
					'$column4' => $"."$column4,
					'$column5' => $"."$column5,
					'$column6' => $"."$column6,
					'$column7' => $"."$column7,
					'$column8' => $"."$column8,
					'$column9' => $"."$column9,
					'$column10' => $"."$column10,
					'$column11' => $"."$column11,
					'$column12' => $"."$column12,
					'$column13' => $"."$column13,
					'$column14' => $"."$column14,
					'$column15' => $"."$column15,
					'$column16' => $"."$column16
					));

					//echo json_encode($"."manual,true);
					$"."data_manual = json_encode($"."manual,true);
					$"."ch = curl_init('http://192.168.1.103:8082/ws/live2.php');
						curl_setopt($"."ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($"."ch, CURLINFO_HEADER_OUT, true);
						curl_setopt($"."ch, CURLOPT_POST, true);
						curl_setopt($"."ch, CURLOPT_POSTFIELDS, $"."data_manual);   
						curl_setopt($"."ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($"."data_manual)));
						$"."result_profil = curl_exec($"."ch);
						echo $"."result_profil;
					curl_close($"."ch);
				} 	
 } 
//
		
}
?>";




$content_models = 
"<?php 
//File in controller $name_table1"."_model.php and save highchart in assets folder 

defined('BASEPATH') OR exit('No direct script access allowed');

class $name_table1"."_model extends CI_Model {
public function __construct()
	{
	parent::__construct();
	$"."this->load->database();
	$"."this->db = $"."this->load->database('$name_database', TRUE);
	}
//import excel

function insert($"."data)
    {
		$"."this->load->database('$name_database', TRUE)->insert_batch('$name_table', $"."data);
    }
	
//get All
public function get_$name_table()
	{
    $"."sql = $"."this->db->query($strs"."SELECT * FROM $name_table$strs);
    return $"."sql->result();
	}
//get one record

public function get_by_id($"."id)
	{
	$"."this->db->from('$name_table');
	$"."this->db->where('$columnid',$"."id);
	$"."sql = $"."this->db->get();
	return $"."sql->result();
	}

//get chart
public function get_chart_$name_table()
	{
    $"."sql = $"."this->db->query($strs"."	
	SELECT *, COUNT($columnid".") as jumlah 
	FROM $name_table
	GROUP BY $group_for_chart
	$strs);
    return $"."sql->result();
	}

//csv_model_sdm

public function uploadData_$name_table()
    {
        $"."count=0;
        $"."fp = fopen($"."_FILES['userfile']['tmp_name'],'r') or die($strs"."can't open file$strs".");
        while($"."csv_line = fgetcsv($"."fp, 10000, $strs".";$strs"."))
        {
            $"."count++;
            if($"."count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($"."i = 0, $"."j = count($"."csv_line); $"."i < $"."j; $"."i++)
            {
				$"."insert_csv = array();

					$"."insert_csv['$column1"."'] = $"."csv_line[0];
					$"."insert_csv['$column2"."'] = $"."csv_line[1];
					$"."insert_csv['$column3"."'] = $"."csv_line[2];
					$"."insert_csv['$column4"."'] = $"."csv_line[3];
					$"."insert_csv['$column5"."'] = $"."csv_line[4];
					$"."insert_csv['$column6"."'] = $"."csv_line[5];
					$"."insert_csv['$column7"."'] = $"."csv_line[6];	
					$"."insert_csv['$column8"."'] = $"."csv_line[7];
					$"."insert_csv['$column9"."'] = $"."csv_line[8];
 


					
			}
				$"."i++;
				$"."data = array(
				
				 
					
					'$columnid"."'=>$"."this->uuid->v4(),
					
					'$column1"."'=> $"."insert_csv['$column1"."'],
					'$column2"."'=> $"."insert_csv['$column2"."'],
					'$column3"."'=> $"."insert_csv['$column3"."'],
					'$column4"."'=> $"."insert_csv['$column4"."'],
					'$column5"."'=> $"."insert_csv['$column5"."'],
					'$column6"."'=> $"."insert_csv['$column6"."'],
					'$column7"."'=> $"."insert_csv['$column7"."'],
					'$column8"."'=> $"."insert_csv['$column8"."'],
					'$column9"."'=> $"."insert_csv['$column9"."'],
			
 				
					
				);

		$"."data['simpeg']=$"."this->db->replace('$name_table"."', $"."data);
        }
			fclose($"."fp) or die($strs"."can't close file$strs".");
			$"."data['success']=$strs"."success$strs".";
			return $"."data;
		}

}
?>";

//=========================
$content_model_datatable =
"
<?php
//Fuile ada di model/sdm/sdm_model.php
defined('BASEPATH') OR exit('No direct script access allowed');
class $name_table1"."_model_datatable extends CI_Model {
	var $"."table = '$name_table"."';
	var $"."column_order = array(
		'$columnid"."',
		'$column1"."',
		'$column2"."',
		'$column3"."',
		'$column4"."',
		null);
	var $"."column_search = array(
		'$column1"."',
		'$column2"."',
		'$column3"."',
		); 
	var $"."order = array('$column3"."' => 'desc'); 

public function __construct()
	{
	parent::__construct();
	$"."this->load->database();
	$"."this->db = $"."this->load->database('$name_database', TRUE);
	}

private function _get_datatables_query()
{
	$"."this->db->from($"."this->table);
	$"."i = 0;
	foreach ($"."this->column_search as $"."item) // loop column 
	{
	if($"."_POST['search']['value']) // if datatable send POST for search
	{

	if($"."i===0) // first loop
	{
	$"."this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
	$"."this->db->like($"."item, $"."_POST['search']['value']);
	}
	else
	{
	$"."this->db->or_like($"."item, $"."_POST['search']['value']);
	}
	if(count($"."this->column_search) - 1 == $"."i) //last loop
	$"."this->db->group_end(); //close bracket
	}
	$"."i++;
	}

if(isset($"."_POST['order'])) // here order processing
	{
	$"."this->db->order_by($"."this->column_order[$"."_POST['order']['0']['column']], $"."_POST['order']['0']['dir']);
	} 
	else if(isset($"."this->order))
	{
	$"."order = $"."this->order;
		$"."this->db->order_by(key($"."order), $"."order[key($"."order)]);
		}
	}

function get_datatables()
	{
	$"."this->_get_datatables_query();
	if($"."_POST['length'] != -1)
	$"."this->db->limit($"."_POST['length'], $"."_POST['start']);
	$"."query = $"."this->db->get();
	return $"."query->result();
	}

function count_filtered()
{
	$"."this->_get_datatables_query();
	$"."query = $"."this->db->get();
	return $"."query->num_rows();
	}

public function count_all()
	{
	$"."this->db->from($"."this->table);
	return $"."this->db->count_all_results();
	}

public function get_by_id($"."id)
	{
	$"."this->db->from($"."this->table);
	$"."this->db->where('$columnid"."',$"."id);
	$"."query = $"."this->db->get();

	return $"."query->row();
	}

public function save($"."data)
	{
	$"."this->db->insert($"."this->table, $"."data);
	return $"."this->db->insert_id();
	}

public function update($"."where, $"."data)
	{
	$"."this->db->update($"."this->table, $"."data, $"."where);
	return $"."this->db->affected_rows();
	}

public function delete_by_id($"."id)
	{
	$"."this->db->where('$columnid"."',$"."id);
	$"."this->db->delete($"."this->table);
	}
}

?>
";


//=========================


$content_views = 
"<?php 
			echo '<table>';
			foreach($"."departments as $"."store)
				{

					echo '<tr>';
										echo '<td>';
					echo  $"."store->$column1;
					echo '</td>';
					echo '</tr>';
			}
					echo '</table>';					
?>";

$content_views_chart = 
" 

<section id=$strs"."content$strs"."><router-outlet></router-outlet>
  <app-skpi><router-outlet></router-outlet><app-skpi class=$strs"."ng-star-inserted$strs"."><router-outlet></router-outlet><uii-skpi-data class=$strs"."ng-star-inserted$strs"."><uii-skpi-data-print>
  
<script src=$strs"."<?=base_url($strs"."assets/js/jquery-3.1.1.min.js$strs".")?>$strs"."></script>
<script src=$strs"."<?=base_url($strs"."assets/Highcharts-4.0.4/js/highcharts.js$strs".")?>$strs"."></script>
<script src=$strs"."<?=base_url($strs"."assets/Highcharts-4.0.4/js/data.js$strs".")?>$strs"."></script>
<script src=$strs"."<?=base_url($strs"."assets/Highcharts-4.0.4/js/modules/series-label.js$strs".")?>$strs"."></script>
<script src=$strs"."<?=base_url($strs"."assets/Highcharts-4.0.4/js/modules/exporting.js$strs".")?>$strs"."></script>
<script src=$strs"."<?=base_url($strs"."assets/Highcharts-4.0.4/js/modules/export-data.js$strs".")?>$strs"."></script>

<div class=$strs"."panel$strs".">
<div class=$strs"."panel-body$strs".">

<a href=$strs"."../$name_table"."$strs class=$strs"."btn btn-default$strs".">DATA</a>

</div>
</div>

<h4 class=$strs"."content-header-title$strs"."> DATA SURAT</h4>
<div class=$strs"."content-body$strs".">
<div id=$strs"."container$strs"." style=$strs"."min-width: 310px; height: 400px; margin: 0 auto$strs"."></div>

<script type=$strs"."text/javascript$strs>
$(function () {
//chart=new Highcharts.Chart({}); //this is problem!
var dayactivity = [

<?php

			foreach($"."departments as $"."store)
				{
					
					echo  $strs"."['" . "$strs"."$dot".  "$"."store->$group_for_chart"."$dot"."$strs"."',$strs".";
					echo  $"."store->jumlah . $strs"."],$strs".";
					
			
			}
	?>


];

var options = {
		title: {
		text: '<?php echo 'Judul $name_table"."'; ?>'},
				
chart: {
renderTo: 'container',
type: 'bar'
},

xAxis: {
type: 'text'

},
yAxis: {
title: {
text: ' $name_table"."'
}

},
series: [{
data: dayactivity,
name: $strs"."$name_table"."$strs
}]

};
var chart = new Highcharts.Chart(options);

});

</script>					
";

$content_views_csv = 
"

<div class=$strs"."panel$strs".">
<div class=$strs"."content-body$strs".">  
<div class=$strs"."row$strs".">
<div class=$strs"."col-sm-12$strs".">
<div class=$strs"."dynamic-form-group$strs"." id=$strs"."ket_umum$strs".">
<div class=$strs"."panel card panel-primary$strs".">
<div class=$strs"."panel-heading card-header$strs"." role=$strs"."tab$strs".">
<div class=$strs"."panel-title$strs".">
<div class=$strs"."accordion-toggle$strs"." role=$strs"."button$strs"." aria-expanded=$strs"."true$strs"."><!---->
<div class=$strs"."accordion-heading$strs"."><span>Upload CSV File</span><!----></div></div></div></div>
<div class=$strs"."panel-collapse collapse in show$strs"." role=$strs"."tabpanel$strs"." aria-expanded=$strs"."true$strs"." aria-hidden=$strs"."false$strs"." style=$strs"."overflow: visible; height: auto; display: block;$strs"."><div class=$strs"."panel-body card-block card-body$strs".">

  
<form action=$strs"."<?php echo site_url();?>/$name_table/uploadData$strs"." method=$strs"."post$strs"." enctype=$strs"."multipart/form-data$strs"." name=$strs"."form1$strs"." id=$strs"."form1$strs"."> 

<div class=$strs"."content-body$strs".">

<div class=$strs"."form-group$strs".">
<label class=$strs"."control-label col-md-3$strs".">File csv $name_table</label>
	<div class=$strs"."col-md-9$strs".">
		<input type=$strs"."file$strs"." class=$strs"."form-control$strs"." name=$strs"."userfile$strs"." id=$strs"."userfile$strs"." align=$strs"."top$strs"."/><br />
				<span class=$strs"."help-block$strs".">Isi data dalam file ini akan menambah data yang belum ada dan mengupdate data yang sudah ada.</span>
		<button type=$strs"."submit$strs"." name=$strs"."submit$strs"." class=$strs"."btn btn-info$strs".">Import</button>
	</div>
</div>


<div class=$strs"."form-group$strs".">
<label class=$strs"."control-label col-md-3$strs".">Progress</label>
	<div class=$strs"."col-md-9$strs".">
		  <div id=$strs"."progress$strs"."></div>
		  <div id=$strs"."message$strs"."></div>
	</div>
</div>


	
</form>

</div></div></div></div></div></div></div></div> 
";

$content_view_datatable =

 "<section id=$strs"."content$strs"."><router-outlet></router-outlet>
  <app-skpi><router-outlet></router-outlet><app-skpi class=$strs"."ng-star-inserted$strs"."><router-outlet></router-outlet><uii-skpi-data class=$strs"."ng-star-inserted$strs"."><uii-skpi-data-print>
<!---link href=$strs"."<--?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>$strs"." rel=$strs"."stylesheet$strs"." --->
<link href=$strs"."<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>$strs"." rel=$strs"."stylesheet$strs".">
<link href=$strs"."<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>$strs"."rel=$strs"."stylesheet$strs".">


<div class=$strs"."panel$strs".">
<div class=$strs"."panel-body$strs".">

	<button class=$strs"."btn btn-success$strs"." onclick=$strs"."add_$name_table"."()$strs"."><i class=$strs"."glyphicon glyphicon-plus$strs"."></i>TAMBAH $name_database"."</button>

	<a href=$strs"."$name_table"."/csv"."$strs class=$strs"."btn btn-default$strs"."><i class=$strs"."glyphicon glyphicon-upload$strs"."></i>CSV</a>

	<a href=$strs"."$name_table"."/chart"."$strs class=$strs"."btn btn-default$strs"."><i class=$strs"."glyphicon glyphicon-bar-chart$strs"."></i>Statistik</a>

	<a href=$strs"."$name_table"."/view_excel"."$strs class=$strs"."btn btn-default$strs"."><i class=$strs"."glyphicon glyphicon-download$strs"."></i>Excel</a>
	<a href=$strs"."$name_table"."/import_excel"."$strs class=$strs"."btn btn-default$strs"."><i class=$strs"."glyphicon glyphicon-upload$strs"."></i>Excel</a>
	
	<a href=$strs"."$name_table"."/cetak_fpdf"."$strs class=$strs"."btn btn-default$strs"."><i class=$strs"."glyphicon glyphicon-download$strs"."></i>PDF</a>
	
	<button class=$strs"."btn btn-default$strs"." onclick=$strs"."document.location.reload()$strs"."><i class=$strs"."glyphicon glyphicon-refresh$strs"."></i> REFRESH</button>
</div>
</div>


<h4 class=$strs"."content-header-title$strs".">DATA $name_table"."</h4>

<div class=$strs"."content-body$strs".">
<div  class=$strs"."table-wrapper$strs".">

<div class=$strs"."datatable$strs".">
<div class=$strs"."datatable-data server-mode$strs"."><ngx-datatable class=$strs"."bootstrap ngx-datatable fixed-header virtualized selectable checkbox-selection$strs"."><div visibilityobserver=$strs"."$strs"." class=$strs"."visible$strs"."><!---->

<table id=$strs"."table$strs"." class=$strs"."table table-striped datatable-header-cell-template-wrap$strs"." cellspacing=$strs"."0$strs"." width=$strs"."100%$strs".">
<thead>
<tr width=$strs"."1$strs".">
	<th><span class=$strs"."ng-star-inserted$strs>No</span></th>
	<th><span class=$strs"."ng-star-inserted$strs>$column0"."</span></th>
	<th><span class=$strs"."ng-star-inserted$strs>$column1"."</span></th>
	<th><span class=$strs"."ng-star-inserted$strs>$column2"."</span></th>
	<th><span class=$strs"."ng-star-inserted$strs>$column3"."</span></th>
	<th><span class=$strs"."ng-star-inserted$strs>$column4"."</span></th>
	<th><span class=$strs"."ng-star-inserted$strs>$column5"."</span></th>
	<th><span class=$strs"."ng-star-inserted$strs>$column6"."</span></th>
	<th><span class=$strs"."ng-star-inserted$strs>$column7"."</span></th>


	
<th style=$strs"."width:125px;$strs"."><span class=$strs"."ng-star-inserted$strs> aksi</span></th>
</tr>
</thead>
<tbody>
</tbody>
</table>

</div></div><!----></div>


	<!----script src=$strs"."<---?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>$strs"."></script--->
	<!---script src=$strs"."<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>$strs"."></script--->
	<script src=$strs"."<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>$strs"."></script>
	<script src=$strs"."<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>$strs"."></script>
	<script src=$strs"."<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>$strs"."></script>

<script type=$strs"."text/javascript$strs".">
var save_method;
var table;
$(document).ready(function() {
table = $('#table').DataTable({
$strs"."processing$strs".": true,
$strs"."serverSide$strs".": true,
$strs"."order$strs".": [],

// Load data for the table's content from an Ajax source
$strs"."ajax$strs".": {
$strs"."url$strs".": $strs"."<?php echo site_url('$name_table"."/ajax_list')?>$strs".",
$strs"."type$strs".": $strs"."POST$strs"."
},

//Set column definition initialisation properties.
$strs"."columnDefs$strs".": [
{
$strs"."targets$strs".": [ -1 ], //last column
$strs"."orderable$strs".": false, //set not orderable
},
],

});

//datepicker
$('.datepicker').datepicker({
autoclose: true,
format: $strs"."yyyy-mm-dd$strs".",
todayHighlight: true,
orientation: $strs"."top auto$strs".",
todayBtn: true,
todayHighlight: true,
});

});

function add_$name_table"."()
{
save_method = 'add';
$('#form')[0].reset();
$('.form-group').removeClass('has-error');
$('.help-block').empty();
$('#modal_form').modal('show');
$('.modal-title').text('Add $name_table"."');
}

function edit_$name_table"."(no)
{
save_method = 'update';
$('#form')[0].reset();
$('.form-group').removeClass('has-error');
$('.help-block').empty();

//Ajax Load data from ajax
$.ajax({
url : $strs"."<?php echo site_url('$name_table"."/ajax_edit/')?>/$strs"." + no,
type: $strs"."GET$strs".",
dataType: $strs"."JSON$strs".",
success: function(data)
{
$('[name=$strs"."$columnid"."$strs"."]').val(data.$columnid".");
$('[name=$strs"."$column1"."$strs"."]').val(data.$column1"."); 
$('[name=$strs"."$column2"."$strs"."]').val(data.$column2"."); 
$('[name=$strs"."$column3"."$strs"."]').val(data.$column3"."); 
$('[name=$strs"."$column4"."$strs"."]').val(data.$column4"."); 
$('[name=$strs"."$column5"."$strs"."]').val(data.$column5"."); 
$('[name=$strs"."$column6"."$strs"."]').val(data.$column6"."); 
$('[name=$strs"."$column7"."$strs"."]').val(data.$column7"."); 
$('[name=$strs"."$column8"."$strs"."]').val(data.$column8"."); 
$('[name=$strs"."$column9"."$strs"."]').val(data.$column9"."); 
$('[name=$strs"."$column10"."$strs"."]').val(data.$column10"."); 
$('[name=$strs"."$column11"."$strs"."]').val(data.$column11"."); 
$('[name=$strs"."$column12"."$strs"."]').val(data.$column12"."); 
$('[name=$strs"."$column13"."$strs"."]').val(data.$column13"."); 
$('[name=$strs"."$column14"."$strs"."]').val(data.$column14"."); 
$('[name=$strs"."$column15"."$strs"."]').val(data.$column15"."); 
$('[name=$strs"."$column16"."$strs"."]').val(data.$column16"."); 
$('[name=$strs"."$column17"."$strs"."]').val(data.$column17"."); 
$('[name=$strs"."$column18"."$strs"."]').val(data.$column18"."); 
$('[name=$strs"."$column19"."$strs"."]').val(data.$column19"."); 


$('#modal_form').modal('show');
$('.modal-title').text('$name_table"."_edit');
},
error: function (jqXHR, textStatus, errorThrown)
{
alert('Error get data from ajax');
}
});
}

function reload_table()
{
table.ajax.reload(null,false);
}

function save()
{
$('#btnSave').text('saving...');
$('#btnSave').attr('disabled',true);
var url;

if(save_method == 'add') {
url = $strs"."<?php echo site_url('$name_table"."/ajax_add')?>$strs".";
} else {
url = $strs"."<?php echo site_url('$name_table"."/ajax_update')?>$strs".";
}


$.ajax({
url : url,
type: $strs"."POST$strs".",
data: $('#form').serialize(),
dataType: $strs"."JSON$strs".",
success: function(data)
{

if(data.status) //if success close modal and reload ajax table
{
$('#modal_form').modal('hide');
reload_table();
}

$('#btnSave').text('Simpan'); //change button text
$('#btnSave').attr('disabled',false); //set button enable
			$('#ditambahkan').modal('show').modal('hide');
			reload_table();

},
error: function (jqXHR, textStatus, errorThrown)
{
alert('Error adding / update data');
$('#btnSave').text('Update');
$('#btnSave').attr('disabled',false);

}
});
}

//==============================================================================
function preview_sdm(no)
{
$('#form')[0].reset();
$('.form-group').removeClass('has-error');
$('.help-block').empty();

$.ajax({
url : $strs"."<?php echo site_url('$name_table"."/ajax_preview/')?>/$strs"." + no,
type: $strs"."GET$strs".",
dataType: $strs"."JSON$strs".",
success: function(data)
{
$('[name=$strs"."$columnid"."$strs"."]').val(data.$columnid".");
$('[name=$strs"."$column1"."$strs"."]').val(data.$column1"."); 
$('[name=$strs"."$column2"."$strs"."]').val(data.$column2"."); 
$('[name=$strs"."$column3"."$strs"."]').val(data.$column3"."); 
$('[name=$strs"."$column4"."$strs"."]').val(data.$column4"."); 
$('[name=$strs"."$column5"."$strs"."]').val(data.$column5"."); 
$('[name=$strs"."$column6"."$strs"."]').val(data.$column6"."); 
$('[name=$strs"."$column7"."$strs"."]').val(data.$column7"."); 
$('[name=$strs"."$column8"."$strs"."]').val(data.$column8"."); 
$('[name=$strs"."$column9"."$strs"."]').val(data.$column9"."); 
$('[name=$strs"."$column10"."$strs"."]').val(data.$column10"."); 
$('[name=$strs"."$column11"."$strs"."]').val(data.$column11"."); 
$('[name=$strs"."$column12"."$strs"."]').val(data.$column12"."); 
$('[name=$strs"."$column13"."$strs"."]').val(data.$column13"."); 
$('[name=$strs"."$column14"."$strs"."]').val(data.$column14"."); 
$('[name=$strs"."$column15"."$strs"."]').val(data.$column15"."); 
$('[name=$strs"."$column16"."$strs"."]').val(data.$column16"."); 
$('[name=$strs"."$column17"."$strs"."]').val(data.$column17"."); 
$('[name=$strs"."$column18"."$strs"."]').val(data.$column18"."); 
$('[name=$strs"."$column19"."$strs"."]').val(data.$column19"."); 

$('[name=$strs"."pdf$strs"."]').val($strs"."<?php echo base_url();?>/document/sm/pdf/$strs"."+data.$columnid"."+$strs"."-SK-$strs"."+data.$columnid"."+$strs".".pdf$strs".");

var link_base = $strs"."<?php echo base_url();?>/document/sm/pdf/$strs"."+data.$columnid"."+$strs"."-SK-$strs"."+data.$columnid"."+$strs".".pdf$strs".";
$('#pdf_view').attr('src', link_base);
$('#modal_form_1').modal('show');
$('.modal-title').text('$name_table"."_preview');
},
error: function (jqXHR, textStatus, errorThrown)
{
alert('Error get data from ajax');
}
});
}


//==============================================================================
function reload_table()
{
table.ajax.reload(null,false);
}


function delete_$name_table"."(no)
{
	$('#konfirmasi_hapus').modal('show');
	document.getElementById('btnDelteYes').onclick = function() 
{

$.ajax({
url : $strs"."<?php echo site_url('$name_table"."/ajax_delete')?>/$strs"." + no,
type: $strs"."POST$strs".",
dataType: $strs"."JSON$strs".",
success: function(data)
{

$('#konfirmasi_hapus').modal('toggle');
reload_table();
},
error: function (jqXHR, textStatus, errorThrown)
{
alert('Error deleting data');
//$('#terhapus').modal('show').delay(3000).fadeOut().modal('hide');
}
});
}

}

function delete_$name_table"."_1(no)
{

	{

	if(save_method = 'delete')
		{	
		$.ajax({
			url : $strs"."<?php echo site_url('$name_table/ajax_delete')?>/$strs"." + no,
			type: $strs"."POST$strs".",
			dataType: $strs"."JSON$strs".",
			success: function(data)
			{
				$('#terhapus').modal('show').delay(3000).fadeOut().modal('hide');	
				//$($strs"."#modal_form_delete_berhasil$strs".").show(0).delay(1000).fadeOut().modal('hide');
				reload_table();
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error deleting data');
			}
		});
		}

	}



}

function cetak_sk(no)
{
$('#form')[0].reset();
$('.form-group').removeClass('has-error');
$('.help-block').empty();

$.ajax({
url : $strs"."<?php echo site_url('$name_table"."/ajax_preview/')?>/$strs"." + no,
type: $strs"."GET$strs".",
dataType: $strs"."JSON$strs".",
success: function(data)
{

$('[name=$strs"."pdf$strs"."]').val($strs"."<?php echo base_url();?>/$name_table/cetak_fpdf_1/$strs"." + no);

var link_base = $strs"."<?php echo base_url();?>/$name_table/cetak_fpdf_1/$strs"." + no;

$('#pdf_view').attr('src', link_base);
$('#modal_form_1').modal('show');
$('.modal-title').text('$name_table"."_preview');
},
error: function (jqXHR, textStatus, errorThrown)
{
alert('Error get data from ajax');
}
});
}


</script>

<!-- Bootstrap modal -->
<div class=$strs"."modal fade$strs"." id=$strs"."konfirmasi_hapus$strs"." role=$strs"."dialog$strs".">
<div role=$strs"."document$strs"." class=$strs"."modal-dialog modal-alert modal-danger$strs".">
<div class=$strs"."modal-content$strs".">
<div class=$strs"."modal-header$strs"."></div>
<div class=$strs"."modal-body$strs".">
<div class=$strs"."modal-icon$strs".">
<span class=$strs"."icon icon-trash$strs"."></span>
<h3 class=$strs"."modal-title$strs".">Apakah Anda yakin akan menghapus data?</h3><div class=$strs"."modal-message$strs".">
<p>Data yang telah dihapus tidak bisa diubah kembali</p></div></div>
<div class=$strs"."modal-footer$strs".">
<button class=$strs"."btn btn-default$strs"." type=$strs"."button$strs"." data-dismiss=$strs"."modal$strs".">Tidak, batalkan</button>
<button class=$strs"."btn btn-danger$strs"." type=$strs"."button$strs"." id=$strs"."btnDelteYes$strs".">Ya, hapus</button>
</div></div></div></div></div>

<!-- Bootstrap modal -->
<div class=$strs"."modal fade$strs"." id=$strs"."ditambahkan$strs"." role=$strs"."dialog$strs".">
<div class=$strs"."overlay-container$strs".">
<div id=$strs"."toast-container$strs"." class=$strs"."toast-top-right toast-container$strs".">
<div toast-component=$strs"."$strs"." class=$strs"."toast-success toast ng-trigger ng-trigger-flyInOut$strs"." style=$strs"."$strs".">
<div aria-live=$strs"."polite$strs"." role=$strs"."alertdialog$strs"." class=$strs"."toast-message ng-star-inserted$strs"." aria-label=$strs"."Sukses$strs"." style=$strs"."$strs"."> 
Menghapus</div><!----></div>
</div>
</div>
</div>
<!-- /.modal-dialog -->

<!-- Bootstrap modal -->
<div class=$strs"."modal fade$strs"." id=$strs"."terhapus$strs"." role=$strs"."dialog$strs".">
<div class=$strs"."overlay-container$strs".">
<div id=$strs"."toast-container$strs"." class=$strs"."toast-top-right toast-container$strs".">
<div toast-component=$strs"."$strs"." class=$strs"."toast-error toast ng-trigger ng-trigger-flyInOut$strs"." style=$strs"."$strs".">
<div aria-live=$strs"."polite$strs"." role=$strs"."alertdialog$strs"." class=$strs"."toast-message ng-star-inserted$strs"." aria-label=$strs"."Hapus$strs"." style=$strs"."$strs"."> 
Menghapus</div><!----></div>
</div>
</div>
</div>
<!-- /.modal-dialog -->


<!-- Bootstrap modal -->
<div class=$strs"."modal fade$strs"." id=$strs"."modal_form_1$strs"." role=$strs"."dialog$strs".">
<div class=$strs"."modal-dialog$strs".">
<div class=$strs"."modal-content$strs".">
<div class=$strs"."modal-header$strs".">
<button type=$strs"."button$strs"." class=$strs"."close$strs"." data-dismiss=$strs"."modal$strs"." aria-label=$strs"."Close$strs"."><span aria-hidden=$strs"."true$strs".">&times;</span></button>
<h3 class=$strs"."modal-title$strs"."></h3>
</div>

<div class=$strs"."form-group$strs".">
<label class=$strs"."control-label col-md-3$strs".">Nama File</label>
<div class=$strs"."col-md-9$strs".">
<input name=$strs"."pdf$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs".">
<span class=$strs"."help-block$strs"."></span>
</div>
<div style=$strs"."text-align: center;$strs".">
<iframe  class=$strs"."form-control$strs"." src=$strs"."$strs"." id=$strs"."pdf_view$strs"." style=$strs"."width:100%; height:500px;$strs"." frameborder=$strs"."0$strs"."></iframe>
</div>
</div>
</div>
<div class=$strs"."modal-footer$strs".">
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Bootstrap modal -->
<div class=$strs"."modal fade$strs"." id=$strs"."modal_form$strs"." role=$strs"."dialog$strs".">
<div class=$strs"."modal-dialog$strs".">
<div class=$strs"."modal-content$strs".">
<div class=$strs"."modal-header$strs".">
<button type=$strs"."button$strs"." class=$strs"."close$strs"." data-dismiss=$strs"."modal$strs"." aria-label=$strs"."Close$strs"."><span aria-hidden=$strs"."true$strs".">&times;</span></button>
<h3 class=$strs"."modal-title$strs".">FORM</h3>
</div>

<div class=$strs"."modal-body form$strs".">
<form action=$strs"."#$strs"." id=$strs"."form$strs"." class=$strs"."form-horizontal$strs".">
<div class=$strs"."form-body$strs".">

<div class=$strs"."form-group$strs".">
<label class=$strs"."control-label col-md-3$strs".">$columnid"."</label>
<div class=$strs"."col-md-9$strs".">
<input name=$strs"."$columnid"."$strs"." placeholder=$strs"."$columnid"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs".">
<span class=$strs"."help-block$strs"."></span>
</div>
</div>

<div class=$strs"."form-group$strs".">
<label class=$strs"."control-label col-md-3$strs".">$column1"."</label>
<div class=$strs"."col-md-9$strs".">
<input name=$strs"."$column1"."$strs"." placeholder=$strs"."$column1"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs".">
<span class=$strs"."help-block$strs"."></span>
</div>
</div>

<div class=$strs"."form-group$strs".">
<label class=$strs"."control-label col-md-3$strs".">$column2"."</label>
<div class=$strs"."col-md-9$strs".">
<input name=$strs"."$column2"."$strs"." placeholder=$strs"."$column2"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs".">
<span class=$strs"."help-block$strs"."></span>
</div>
</div>

<div class=$strs"."form-group$strs".">
<label class=$strs"."control-label col-md-3$strs".">$column3"."</label>
<div class=$strs"."col-md-9$strs".">
<input name=$strs"."$column3"."$strs"." placeholder=$strs"."$column3"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs".">
<span class=$strs"."help-block$strs"."></span>
</div>
</div>

<div class=$strs"."form-group$strs".">
<label class=$strs"."control-label col-md-3$strs".">$column4"."</label>
<div class=$strs"."col-md-9$strs".">
<input name=$strs"."$column4"."$strs"." placeholder=$strs"."$column4"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs".">
<span class=$strs"."help-block$strs"."></span>
</div>
</div>

<div class=$strs"."form-group$strs".">
<label class=$strs"."control-label col-md-3$strs".">$column5"."</label>
<div class=$strs"."col-md-9$strs".">
<input name=$strs"."$column5"."$strs"." placeholder=$strs"."$column5"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs".">
<span class=$strs"."help-block$strs"."></span>
</div>
</div>

<div class=$strs"."form-group$strs".">
<label class=$strs"."control-label col-md-3$strs".">$column6"."</label>
<div class=$strs"."col-md-9$strs".">
<input name=$strs"."$column6"."$strs"." placeholder=$strs"."$column6"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs".">
<span class=$strs"."help-block$strs"."></span>
</div>
</div>

<div class=$strs"."form-group$strs".">
<label class=$strs"."control-label col-md-3$strs".">$column7"."</label>
<div class=$strs"."col-md-9$strs".">
<input name=$strs"."$column7"."$strs"." placeholder=$strs"."$column7"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs".">
<span class=$strs"."help-block$strs"."></span>
</div>
</div>

<div class=$strs"."form-group$strs".">
<label class=$strs"."control-label col-md-3$strs".">$column8"."</label>
<div class=$strs"."col-md-9$strs".">
<input name=$strs"."$column8"."$strs"." placeholder=$strs"."$column8"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs".">
<span class=$strs"."help-block$strs"."></span>
</div>
</div>

<div class=$strs"."form-group$strs"."> 
<label class=$strs"."control-label col-md-3$strs".">$column9".""."</label> 
<div class=$strs"."col-md-9$strs"."> 
<input name=$strs"."$column9"."$strs"." placeholder=$strs"."$column9"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs"."> 
<span class=$strs"."help-block$strs"."></span> 
</div> 
</div> 
<div class=$strs"."form-group$strs"."> 
<label class=$strs"."control-label col-md-3$strs".">$column10".""."</label> 
<div class=$strs"."col-md-9$strs"."> 
<input name=$strs"."$column10"."$strs"." placeholder=$strs"."$column10"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs"."> 
<span class=$strs"."help-block$strs"."></span> 
</div> 
</div> 
<div class=$strs"."form-group$strs"."> 
<label class=$strs"."control-label col-md-3$strs".">$column11".""."</label> 
<div class=$strs"."col-md-9$strs"."> 
<input name=$strs"."$column11"."$strs"." placeholder=$strs"."$column11"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs"."> 
<span class=$strs"."help-block$strs"."></span> 
</div> 
</div> 
<div class=$strs"."form-group$strs"."> 
<label class=$strs"."control-label col-md-3$strs".">$column12".""."</label> 
<div class=$strs"."col-md-9$strs"."> 
<input name=$strs"."$column12"."$strs"." placeholder=$strs"."$column12"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs"."> 
<span class=$strs"."help-block$strs"."></span> 
</div> 
</div> 
<div class=$strs"."form-group$strs"."> 
<label class=$strs"."control-label col-md-3$strs".">$column13".""."</label> 
<div class=$strs"."col-md-9$strs"."> 
<input name=$strs"."$column13"."$strs"." placeholder=$strs"."$column13"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs"."> 
<span class=$strs"."help-block$strs"."></span> 
</div> 
</div> 
<div class=$strs"."form-group$strs"."> 
<label class=$strs"."control-label col-md-3$strs".">$column14".""."</label> 
<div class=$strs"."col-md-9$strs"."> 
<input name=$strs"."$column14"."$strs"." placeholder=$strs"."$column14"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs"."> 
<span class=$strs"."help-block$strs"."></span> 
</div> 
</div> 

<div class=$strs"."form-group$strs"."> 
<label class=$strs"."control-label col-md-3$strs".">$column15".""."</label> 
<div class=$strs"."col-md-9$strs"."> 
<input name=$strs"."$column15"."$strs"." placeholder=$strs"."$column15"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs"."> 
<span class=$strs"."help-block$strs"."></span> 
</div> 
</div> 

<div class=$strs"."form-group$strs"."> 
<label class=$strs"."control-label col-md-3$strs".">$column16".""."</label> 
<div class=$strs"."col-md-9$strs"."> 
<input name=$strs"."$column16"."$strs"." placeholder=$strs"."$column16"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs"."> 
<span class=$strs"."help-block$strs"."></span> 
</div> 
</div> 

<div class=$strs"."form-group$strs"."> 
<label class=$strs"."control-label col-md-3$strs".">$column17".""."</label> 
<div class=$strs"."col-md-9$strs"."> 
<input name=$strs"."$column17"."$strs"." placeholder=$strs"."$column17"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs"."> 
<span class=$strs"."help-block$strs"."></span> 
</div> 
</div> 

<div class=$strs"."form-group$strs"."> 
<label class=$strs"."control-label col-md-3$strs".">$column18".""."</label> 
<div class=$strs"."col-md-9$strs"."> 
<input name=$strs"."$column18"."$strs"." placeholder=$strs"."$column18"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs"."> 
<span class=$strs"."help-block$strs"."></span> 
</div> 
</div>


<div class=$strs"."form-group$strs"."> 
<label class=$strs"."control-label col-md-3$strs".">$column19".""."</label> 
<div class=$strs"."col-md-9$strs"."> 
<input name=$strs"."$column19"."$strs"." placeholder=$strs"."$column19"."$strs"." class=$strs"."form-control$strs"." type=$strs"."text$strs"."> 
<span class=$strs"."help-block$strs"."></span> 
</div> 
</div>  

</form>
</div>
<div class=$strs"."modal-footer$strs".">
<button type=$strs"."button$strs"." id=$strs"."btnSave$strs"." onclick=$strs"."save()$strs"." class=$strs"."btn btn-primary$strs".">Simpan</button>
<button type=$strs"."button$strs"." class=$strs"."btn btn-danger$strs"." data-dismiss=$strs"."modal$strs".">Cancel</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--- <input name=$strs"."sk_tanggal$strs"." placeholder=$strs"."yyyy-mm-dd$strs"." class=$strs"."form-control datepicker$strs"." type=$strs"."text$strs"."> 

<script>
  $( function() {
    $( $strs"."#datepicker$strs"." ).datepicker();
  } );
</script>
({ dateFormat: 'yy-mm-dd' })

--->

";

$tabel_content =
"
<table border=$strs"."1$strs"." width=$strs"."100%$strs".">
<thead>
<tr>
<!---th>No</th--->
<!---th>$--column0"."</th---->
<th>$column1"."</th>
<th>$column2"."</th>
<th>$column3"."</th>
<th>$column4"."</th>
<th>$column5"."</th>
<th>$column6"."</th>
<th>$column7"."</th>
<th>$column8"."</th>
<th>$column9"."</th>
<th>$column10"."</th> 
<th>$column11"."</th>
<th>$column12"."</th>
<th>$column13"."</th>
<th>$column14"."</th>
<th>$column15"."</th>
<th>$column16"."</th>
<th>$column17"."</th>
<th>$column18"."</th>
<th>$column19"."</th>

</tr>
</thead>
<tbody>

<?php $"."i=1; foreach($"."departments as $"."store) { ?>
           <tr>
<!---td><---?php echo $--"."i; ?></td!--->
<!----td><---?php echo $"."store->$---column0"."; ?></td--->
<td><?php echo $"."store->$column1"."; ?></td>
<td><?php echo $"."store->$column2"." ?></td>
<td><?php echo $"."store->$column3"."; ?></td>
<td><?php echo $"."store->$column4"."; ?></td>
<td><?php echo $"."store->$column5"." ?></td>
<td><?php echo $"."store->$column6"."; ?></td>
<td><?php echo $"."store->$column7"."; ?></td>
<td><?php echo $"."store->$column8"."; ?></td>
<td><?php echo $"."store->$column9"." ?></td>
<td><?php echo $"."store->$column10"." ?></td>
<td><?php echo $"."store->$column11"."; ?></td>
<td><?php echo $"."store->$column12"." ?></td>
<td><?php echo $"."store->$column13"."; ?></td>
<td><?php echo $"."store->$column14"."; ?></td>
<td><?php echo $"."store->$column15"." ?></td>
<td><?php echo $"."store->$column16"."; ?></td>
<td><?php echo $"."store->$column17"."; ?></td>
<td><?php echo $"."store->$column18"."; ?></td>
<td><?php echo $"."store->$column19"."; ?></td>
           <?php $"."i++; } ?>
      </tbody>
 </table>

";

$content_views_excel =
"
 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!DOCTYPE html>
<html lang=$strs"."en$strs".">
<head>
<meta charset=$strs"."utf-8$strs".">
<title><?php echo $name_table"." ?></title>
<style>
          ::selection { background-color: #E13300; color: white; }
           ::-moz-selection { background-color: #E13300; color: white; }
 
           body {
                background-color: #fff;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
           }
 
           main {
                width: 100%;
                padding: 20px;
                background-color: white;
                min-height: 300px;
                border-radius: 5px;
                margin: 30px auto;
                box-shadow: 0 0 8px #D0D0D0;
           }
           table {
                border-top: solid thin #000;
                border-collapse: collapse;
           }
           th, td {
                border-top: border-top: solid thin #000;
                padding: 6px 12px;
           }
 
           a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
           }

  </style>
 </head>

<body> <main>
<h1>Laporan Excel</h1>
<p><a href=$strs"."<?php echo base_url('index.php/$name_table/export_excel') ?>$strs".">Export ke Excel</a></p>

$tabel_content
";

$content_views_export_excel =
" 
<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 header($strs"."Content-type: application/vnd-ms-excel$strs".");
 header($strs"."Content-Disposition: attachment; filename=$name_table".".xls$strs".");
 header($strs"."Pragma: no-cache$strs".");
 header($strs"."Expires: 0$strs".");
 
?>

$tabel_content
 
";

$content_views_excel_import =
" 
<div class=$strs"."container$strs".">
   	 <h3 align=$strs"."center$strs".">Import dari Excel FIle</h3>
   	 <form method=$strs"."post$strs"." id=$strs"."import_form$strs"." enctype=$strs"."multipart/form-data$strs".">
   		 <p><label>Impor Excel</label>
   		 <input type=$strs"."file$strs"." name=$strs"."file$strs"." id=$strs"."file$strs"." required accept=$strs".".xls, .xlsx$strs"." /></p>
   		 <br />
   		 <input type=$strs"."submit$strs"." name=$strs"."import$strs"." value=$strs"."Import$strs"." class=$strs"."btn btn-info$strs"." />
   	 </form>
    </div>


<script>
$(document).ready(function(){
    $('#import_form').on('submit', function(event){
   	 event.preventDefault();
   	 $.ajax({
   		 url:$strs"."<?php echo base_url(); ?>$name_table"."/import$strs".",
   		 method:$strs"."POST$strs".",
   		 data:new FormData(this),
   		 contentType:false,
   		 cache:false,
   		 processData:false,
   		 success:function(data){
   			 $('#file').val('');
   		 }
   	 })
    });
});

</script>
 
";


$content_view_landing_page =
"
  <section id=$strs"."content$strs".">
  
  <div class=$strs"."content-body$strs"." style=$strs"."width: 100%;$strs".">
	  <router-outlet>
	  </router-outlet>
  <app-skpi>
	  <router-outlet>
	  </router-outlet>
	  <app-landing-page>
		<uii-landing-page>
		  <div class=$strs"."content-body$strs".">
		  <div class=$strs"."landing-page$strs".">
		  <div class=$strs"."landing-desc$strs".">
		  <h1 class=$strs"."landing-title$strs".">Selamat datang di <strong ><span class=$strs"."highlight$strs".">UII</span>Surat</strong>!</h1>
		  <p class=$strs"."landing-desc$strs".">Surat Menyurat</p></div><!---->
		  
		  <div class=$strs"."landing-image apps-image $strs".">
		  <img alt=$strs"."icon$strs"." class=$strs"."img-responsive$strs"." src=$strs"."<?=base_url('assets/uii/')?>images/favicon/apple-icon-57x57.png$strs"."></div></div></div></uii-landing-page>
	  </app-landing-page>
  </app-skpi>
  </div>
  
  </section>";
  
$content_library =
"<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Fpdf_gen {
public function __construct() { 
	require_once dirname(__file__).'/fpdf/fpdf-1.8.php';
	define('FPDF_FONTPATH', dirname(__file__).'/fpdf/font/');
	$"."pdf = new FPDF();
	$"."pdf->AddPage();
	$"."CI =& get_instance();
	$"."CI->fpdf = $"."pdf;
}

public function Footer()
{
	$"."this->fpdf->SetY(-15);
	$"."this->fpdf->SetFont('Arial','I',8);
	$"."this->fpdf->SetTextColor(128);
	$"."this->fpdf->Cell(0,10,'Page ',0,0,'C');
	}
}
";

$content_fpdf_view=
"
<?php
//jarak_dan_ukuran
$"."jarak_atas = '0.5'; $"."jarak_kiri = '4'; $"."panjang_gambar = '0.7'; $"."tinggi_gambar = '1'; $"."jarak_titik_dua_dari_pinggir = '1.2'; $"."jarak_isi_dari_titik_dua = '0.1'; $"."lebar_isi = '7'; $"."lebar_isi_dalam = '5.4'; $"."lebar_isi_dalam_nomor = '5.2'; $"."jarak_tembusan = '2';
//

//STANDART
$"."this->load->library('fpdf_gen');
$"."this -> fpdf=new FPDF('P','in',array(8.5,10.7));  


// FONT
$"."jenis_font_reguler= 'BOOKOS';
$"."jenis_font_italic= 'BOOKOSI';
$"."jenis_font_bold= 'BOOKOSB';

$"."this -> fpdf->AddFont($"."jenis_font_reguler,'','BOOKOS.php'); 
$"."this -> fpdf->AddFont($"."jenis_font_italic,'','BOOKOSI.php'); 
$"."this -> fpdf->AddFont($"."jenis_font_bold,'','BOOKOSB.php'); 
$"."this -> fpdf->SetFillColor(255,0,0); $"."ukuran_font='12';

$"."this->fpdf->SetFont($"."jenis_font_bold,'',$"."ukuran_font);
$"."this->fpdf->SetFillColor(255,0,0);

//ISI
$"."i=1;
foreach($"."departments as $"."data1)
	{		

$"."this -> fpdf->AddPage();
//LogoUII

/* $"."files = glob(APPPATH . '*.*', GLOB_BRACE); */
$"."files = glob('./assets/images/*.png', GLOB_BRACE);

if (count($"."files) > 0)
{  
	$"."this->fpdf->ln(0.3); // jarak dari atas
	$"."this->fpdf->Cell(0.5); //jarak dari pinggir
	
	$"."this->fpdf->Image(base_url('/assets/images/uii.png'),$"."jarak_kiri,$"."jarak_atas,$"."panjang_gambar,$"."tinggi_gambar);

}else
{
$"."this->fpdf->ln(1.3);
$"."this->fpdf->Cell(0.5); //jarak dari pinggir
$"."this->fpdf->Cell($"."lebar_isi,0.2,'Gambar Tidak Ada',0,0,'C',0,'');


}

//JUDUL
$"."this->fpdf->ln(1);
$"."this->fpdf->Cell(0.5); //jarak dari pinggir
$"."this->fpdf->Cell($"."lebar_isi,0.2,'SURAT KEPUTUSAN REKTOR UNIVERSITAS ISLAM INDONESIA',0,0,'C',0,'');
$"."this->fpdf->ln(0.2);
$"."this->fpdf->Cell(0.5);
$"."this->fpdf->Cell($"."lebar_isi,0.2,'NOMOR:/SK-REK/VII/2017',0,0,'C',0,'');
$"."this->fpdf->ln(0.2);
$"."this->fpdf->Cell(0.5);
$"."this->fpdf->Cell($"."lebar_isi,0.2,'TENTANG',0,0,'C',0,'');



$"."this->fpdf->ln(1.3);
$"."this->fpdf->Cell(0.5); //jarak dari pinggir
$"."this->fpdf->Cell($"."lebar_isi,0.2,$"."data1->$column0,0,0,'C',0,'');
 } 

echo $"."this->fpdf->Output('$name_table".".pdf','I'); 
 /* echo $"."this->fpdf->Output('I');*/

?>";


$content_view_detail =
"<section id=$strs"."content$strs".">
<router-outlet></router-outlet>
<uii-ras><router-outlet></router-outlet>
<uii-officer _nghost-c12=$strs"."$strs"." class=$strs"."ng-star-inserted$strs".">
<tabset _ngcontent-c12=$strs"."$strs"." class=$strs"."tab tab-container$strs".">

<!-- ///////////////////////////Nav tabs -->

<ul class=$strs"."nav nav-justified nav-tabs$strs"." id=$strs"."myTab$strs"." role=$strs"."tablist$strs".">



  <li class=$strs"."nav-item ng-star-inserted$strs".">
    <a class=$strs"."nav-link active$strs"." id=$strs"."home-tab$strs"." data-toggle=$strs"."tab$strs"." href=$strs"."#judul$strs"." role=$strs"."tab$strs"." aria-controls=$strs"."home$strs"." aria-selected=$strs"."true$strs"."><span>$name_application</span></a>
  </li>
  <li class=$strs"."nav-item ng-star-inserted$strs".">
    <a class=$strs"."nav-link$strs"." id=$strs"."profile-tab$strs"." data-toggle=$strs"."tab$strs"." href=$strs"."#pengendalian$strs"." role=$strs"."tab$strs"." aria-controls=$strs"."profile$strs"." aria-selected=$strs"."false$strs"."><span>Pengendalian Dokumen</span></a>
  </li>

  <li class=$strs"."nav-item ng-star-inserted$strs".">
    <a class=$strs"."nav-link$strs"." id=$strs"."profile-tab$strs"." data-toggle=$strs"."tab$strs"." href=$strs"."#tandaterima$strs"." role=$strs"."tab$strs"." aria-controls=$strs"."profile$strs"." aria-selected=$strs"."false$strs"."><span>Tanda Terima</span></a>
  </li>
  
  <!----li class=$strs"."nav-item ng-star-inserted$strs".">
    <a class=$strs"."nav-link$strs"." id=$strs"."settings-tab$strs"." data-toggle=$strs"."tab$strs"." href=$strs"."javascript:void(0);$strs"."  onclick=$strs"."$$strs".".$strs"."callFunction()$strs"." role=$strs"."tab$strs"." aria-controls=$strs"."settings$strs"." aria-selected=$strs"."false$strs"."><span>Tanda Terima</span></a>
  </li--->
  
</ul>

<!-- Tab panes <a class=$strs"."nav-link$strs"." id=$strs"."settings-tab$strs"." data-toggle=$strs"."tab$strs"." href=$strs"."javascript:void(0);$strs"."  onclick=$strs"."$$strs".".$strs"."('#settings').trigger('click')$strs"." role=$strs"."tab$strs"." aria-controls=$strs"."settings$strs"." aria-selected=$strs"."false$strs"."><span>Tanda Terima</span></a> -->
<div class=$strs"."tab-content$strs".">

  <div class=$strs"."tab-pane active$strs"." id=$strs"."judul$strs"." role=$strs"."tabpanel$strs"." aria-labelledby=$strs"."home-tab$strs".">
	<div class=$strs"."content-body$strs"." style=$strs"."padding: 15px 20px 5px 20px;$strs".">
	<div class=$strs"."row$strs".">

		<div class=$strs"."col-md-5$strs"." style=$strs"."padding-left: 20px;$strs".">
			<div class=$strs"."table-responsive$strs".">
			<?php 
			
			foreach($"."departments as $"."store) {  
			
			?>
				<table class=$strs"."table table-unbordered table-40-60$strs"."><tbody>
				<tr><td>Judul</td><td>:</td>
				<td>
		<?php
						echo $"."store->$columnid. ' '; 		
						echo $"."store->$column1. ' '; 
						echo $"."store->$column2. ' '; 
						echo $"."store->$column3. ' '; 
						echo $"."store->$column4. ' '; 
						echo $"."store->$column5. ' '; 
					?>		
				</td>
				</tr>
				</tbody>
				</table>
			<?php } ?>	

			</div>
		</div>
		

		<div class=$strs"."col-md-5$strs"." style=$strs"."padding-left: 20px;$strs".">
			<div class=$strs"."table-responsive$strs".">
			<?php foreach($"."departments as $"."store) {  ?>
				<table class=$strs"."table table-unbordered table-40-60$strs"."><tbody>
				<tr><td>Tanggal</td><td>:</td>
				<td>
			<?php
						echo $"."store->$column1. ' '; 
					?>		
				</td>
				</tr>
				</tbody>
				</table>
			<?php } ?>	

			</div>
		</div>
		
		
	</div>
	</div>
  </div>
  
  <div class=$strs"."tab-pane$strs"." id=$strs"."pengendalian$strs"." role=$strs"."tabpanel$strs"." aria-labelledby=$strs"."profile-tab$strs".">
	
	<div class=$strs"."content-body$strs"." style=$strs"."padding: 15px 20px 5px 20px;$strs".">
	<div class=$strs"."row$strs".">
		<div class=$strs"."col-md-5$strs"." style=$strs"."padding-left: 20px;$strs".">
			<div class=$strs"."table-responsive$strs".">
				<table class=$strs"."table table-unbordered table-40-60$strs"."><tbody>
				<tr><td>Detail <?=$"."store->$column0"."?></td><td>:</td>
				<td></td>
				</tr>
				</tbody>
				</table>

			</div>
		</div>
		
		<div class=$strs"."col-md-5$strs"." style=$strs"."padding-left: 20px;$strs".">
			<div class=$strs"."table-responsive$strs".">
				<table class=$strs"."table table-unbordered table-40-60$strs"."><tbody>
				<tr><td>Tanggal</td><td>:</td>
				<td></td>
				</tr>
				</tbody>
				</table>

			</div>
		</div>
		
	</div>
	</div>
	
  </div>

  <div class=$strs"."tab-pane$strs"." id=$strs"."tandaterima$strs"." role=$strs"."tabpanel$strs"." aria-labelledby=$strs"."settings-tab$strs".">
  
	<div class=$strs"."content-body$strs"." style=$strs"."padding: 15px 20px 5px 20px;$strs".">
	<div class=$strs"."row$strs".">
		<div class=$strs"."col-md-5$strs"." style=$strs"."padding-left: 20px;$strs".">
			<div class=$strs"."table-responsive$strs".">
				<table class=$strs"."table table-unbordered table-40-60$strs"."><tbody>
				<tr><td>seting</td><td>:</td>
				<td></td>
				</tr>
				</tbody>
				</table>

			</div>
		</div>
	</div>
	</div>
	
  </div>
</div>

<script>
//function callFunction() {
//	$$strs".".$strs"."('#settings').tab('show')
//}
</script>

<script>
//$$strs".".$strs"."($strs".".nav-item$strs".").on($strs"."click$strs".", function() {
//  $$strs".".$strs"."($strs".".nav-item$strs".").removeClass($strs"."nav-link$strs".");
//  $$strs".".$strs"."(this).addClass($strs"."nav-link$strs".");
//});
</script>

<script>

// Add active class to the current button (highlight it)
var header = document.getElementById($strs"."myTab$strs".");
var navlink = header.getElementsByClassName($strs"."nav-link$strs".");
for (var i = 0; i < navlink.length; i++) {
  navlink[i].addEventListener($strs"."click$strs".", function() {
  var current = document.getElementsByClassName($strs"."active$strs".");
  current[0].className = current[0].className.replace($strs"." active$strs".", $strs"."$strs".");
  this.className += $strs"." active$strs".";
  });
}

</script>

<!-- ///////////////////////////Nav tabs -->




<div class=$strs"."tab-content$strs".">
<tab _ngcontent-c12=$strs"."$strs"." heading=$strs"."Mandiri Petugas$strs"." class=$strs"."active tab-pane$strs".">
<uii-header-find-student _ngcontent-c12=$strs"."$strs"." _nghost-c13=$strs"."$strs".">
<div class=$strs"."content-body$strs"." style=$strs"."padding: 15px 20px 5px 20px;$strs".">
<div class=$strs"."row$strs".">

<div class=$strs"."content-border$strs"."></div></div><div style=$strs"."text-align: center;$strs"."><p class=$strs"."header-periodic-margin$strs"."></p></div></div>

</uii-header-find-student>
<uii-officer-keyin-ras _ngcontent-c12=$strs"."$strs"." _nghost-c14=$strs"."$strs".">

<div  class=$strs"."row wells-margin-left$strs"." style=$strs"."padding-left: 15px;$strs"."><div  class=$strs"."col-md-6 margin-top-5$strs".">
<div  class=$strs"."well well-default$strs"." style=$strs"."min-height: 535px; padding: 0 0 0 1px;$strs".">

<tabset  class=$strs"."tab tab-container$strs".">
<ul class=$strs"."nav nav-justified nav-tabs$strs"."><!---->

<li class=$strs"."nav-item active ng-star-inserted$strs"."><a class=$strs"."nav-link active$strs"." href=$strs"."javascript:void(0);$strs"." id=$strs"."$strs".">
<span>Menimbang</span><!----></a></li>

<li class=$strs"."nav-item ng-star-inserted$strs"."><a class=$strs"."nav-link$strs"." href=$strs"."javascript:void(0);$strs"." id=$strs"."$strs".">
<span>Mengingat</span><!----></a></li>

<li class=$strs"."nav-item ng-star-inserted$strs"."><a class=$strs"."nav-link$strs"." href=$strs"."javascript:void(0);$strs"." id=$strs"."$strs".">
<span>Memperhatikan</span><!----></a></li>
</ul>

<div class=$strs"."tab-content$strs".">
<tab heading=$strs"."Rekomendasi matakuliah$strs"." class=$strs"."active tab-pane$strs"."><!----><!---->
<template  class=$strs"."ng-star-inserted$strs".">
          <!---->
		  <p  class=$strs"."button-action-center margin-top-20 ng-star-inserted$strs".">Tidak ada rekomendasi mata kuliah</p>
          <div  class=$strs"."subject-container padding-10$strs"." style=$strs"."height: 475px;$strs".">
          </div>
 </template>
 
<div  class=$strs"."row cart-keyin$strs".">
		<div  class=$strs"."col-sm-8$strs"." style=$strs"."padding-left: 15px;$strs".">		
		<div  class=$strs"."table-responsive$strs"." style=$strs"."border: 0px;$strs".">
		<table  class=$strs"."table table-unbordered$strs".">
		<tbody >
		  <?php foreach($"."departement as $"."storet) {  ?>

		  <?php
						echo '<tr><td style=$strs"."padding-left: 15px;$strs".">'.$"."storet->$column0. ' </td><td><button  class=$strs"."btn btn-success$strs"." >Cetak Semua</button></td></tr>'; 
						echo '<tr><td style=$strs"."padding-left: 15px;$strs".">'.$"."storet->$column1. ' </td></tr>'; 
						echo '<tr><td style=$strs"."padding-left: 15px;$strs".">'.$"."storet->$column2. ' </td></tr>'; 
						echo '<tr><td style=$strs"."padding-left: 15px;$strs".">'.$"."storet->$column3. ' </td></tr>'; 
						echo '<tr><td style=$strs"."padding-left: 15px;$strs".">'.$"."storet->$column4. ' </td></tr>'; 
						echo '<tr><td style=$strs"."padding-left: 15px;$strs".">'.$"."storet->$column5. ' </td></tr>'; 
						echo '<tr><td style=$strs"."padding-left: 15px;$strs".">'.$"."storet->$column6. ' </td></tr>'; 
						echo '<tr><td style=$strs"."padding-left: 15px;$strs".">'.$"."storet->$column7. ' </td></tr>'; 						
					?>		
     
		  <?php } ?>	
		</tbody></table>
		</div>		
		</div>
</div>
</tab>
</div>
</tabset>
</div>
</div>

<div  class=$strs"."col-md-6 margin-top-5 wells-margin-right$strs".">

	<div  class=$strs"."well well-default$strs"." style=$strs"."min-height: 535px; padding: 5px 5px 5px 10px;$strs".">
	
	<h5  style=$strs"."text-align: center;$strs".">Lampiran</h5>
	<div  class=$strs"."subject-container padding-right-5$strs"." style=$strs"."height: 100%;$strs"."><!----><!---->
	<template  class=$strs"."ng-star-inserted$strs".">
        <!----><p  class=$strs"."button-action-center margin-top-20 ng-star-inserted$strs".">Masih kosong</p>
        <!---->
     </template>
		
		<div  class=$strs"."row cart-keyin-total$strs".">
		<div  class=$strs"."col-sm-8$strs"." style=$strs"."padding-left: 15px;$strs".">
		
		<div  class=$strs"."table-responsive$strs"." style=$strs"."border: 0px;$strs".">
		<table  class=$strs"."table table-unbordered$strs".">
		<tbody >

		<tr>
		<td style=$strs"."padding: 0;$strs"."><strong >Total Lampiran</strong></td>
		<td style=$strs"."padding: 0;$strs".">:</td><td style=$strs"."padding: 0;$strs".">1</td></tr>
		</tr>
		
		<tr>
		<td style=$strs"."padding: 0;$strs"."><strong >Total Lampiran</strong></td>
		<td style=$strs"."padding: 0;$strs".">:</td><td style=$strs"."padding: 0;$strs".">1</td></tr>
		</tr>
		
		</tbody></table></div>
		</div>
		
		<div  class=$strs"."col-sm-4$strs"." style=$strs"."padding-left: 0px;$strs".">
		<button  class=$strs"."btn btn-success$strs"." >Cetak Semua</button></div>
		
		</div>
		
		</div></div>
		
</div>



</uii-officer-keyin-ras>
</tab>
</div>  
</tabset>
</uii-officer>
</uii-ras>
  
  </section>";
  
//================

$content_mpdf_view =

"<"."?"."php". 
"  $"."html=	'		
<html>
<head>
<style>
body {font-family: sans-serif; font-size: 9pt; background: transparent url(\'bgbarcode.png\') repeat-y scroll left top;} h5, p {	margin: 0pt;}
table.items {font-size: 9pt; border-collapse: collapse; border: 3px solid #880000; } td { vertical-align: top; } table thead td { background-color: #EEEEEE;
text-align: center; } table tfoot td { background-color: #AAFFEE; text-align: center; } .barcode { padding: 1.5mm; margin: 0; vertical-align: top; color: #000000; } .barcodecell { text-align: center; vertical-align: middle; padding: 0; }
</style>
</head>

<body>

<htmlpagefooter name=".$strs."myfooter".$strs.">
<div style=".$strs."border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ".$strs."> Halaman {PAGENO} dari {nb} </div>
</htmlpagefooter>

<sethtmlpagefooter name=".$strs."myfooter".$strs." value=".$strs."on".$strs." />
<h1>Rekapitulasi</h1>
<h2>Pengajuan Surat Keterangan Pengganti Ijazah</h2>

<h3>Fakultas Ilmu Agama Islam</h3>

<table class=".$strs."items".$strs." width=".$strs."100%".$strs." cellpadding=".$strs."8".$strs." border=".$strs."1".$strs.">
<thead>
<tr>
<td width=".$strs."10%".$strs.">NO</td> <td>NOMOR MAHASISWA</td> <td>NAMA</td>
</tr>
</thead>
<tbody>';

$"."i = 1;
foreach($"."departments as $"."store)
	{
$"."html.= '
<!-- ITEMS HERE -->
<tr>
<td align=".$strs."center".$strs.">'.$"."i.'</td>
<td>'.$"."store->$column1.'</td>
<td>'.$"."store->$column2.'</td>
</tr>
'; 
$"."i++;
}

$"."html.= '
</tbody>
</table>

</body>
</html>';

///////////////////////////
		$"."this->m_pdf->pdf->WriteHTML($"."html);
		$"."this->m_pdf->pdf->Output();

////////////////////////
?>";
  
//==========================================================================
//folder controller
if (!is_dir('application/controllers')) {
    mkdir('application/controllers', 0777, true);
}

//controller
 $fp = fopen("application/controllers/".$name_table1.".php","wb");
if( $fp == false ){
    //do debugging or logging here
}else{
    fwrite($fp,$content_controllers_datatable);
    fclose($fp);
}  

//model folder
if (!is_dir('application/models/'.$name_table)) {
    mkdir('application/models/'.$name_table, 0777, true);
}

//model basic
	$fp = fopen("application/models/".$name_table."/".$name_table1."_model.php","wb");
	if( $fp == false ){
		//do debugging or logging here
	}else{
		fwrite($fp,$content_models);
		fclose($fp);
	}
//model_datatable
 	$fp = fopen("application/models/".$name_table."/".$name_table1."_model_datatable.php","wb");
	if( $fp == false ){
		//do debugging or logging here
	}else{
		fwrite($fp,$content_model_datatable);
		fclose($fp);
	} 


//view
//
if (!is_dir('application/views/'.$name_application)) {
    mkdir('application/views/'.$name_application, 0777, true);
}
if (!is_dir('application/views/'.$name_table)) {
    mkdir('application/views/'.$name_table, 0777, true);
}
	//data
	$fp = fopen("application/views/".$name_table."/".$name_table."_view.php","wb");
	if( $fp == false ){
		//do debugging or logging here
	}else{
		fwrite($fp,$content_views);
		fclose($fp);
	}
	
	//data
	$fp = fopen("application/views/".$name_table."/".$name_table."_view_datatable.php","wb");
	if( $fp == false ){
		//do debugging or logging here
	}else{
		fwrite($fp,$content_view_datatable);
		fclose($fp);
	}  
	
	//chart
	$fp = fopen("application/views/".$name_table."/".$name_table."_chart_view.php","wb");
	if( $fp == false ){
		//do debugging or logging here
	}else{
		fwrite($fp,$content_views_chart);
		fclose($fp);
	}

	//csv
	$fp = fopen("application/views/".$name_table."/".$name_table."_csv_view.php","wb");
	if( $fp == false ){
		//do debugging or logging here
	}else{
		fwrite($fp,$content_views_csv);
		fclose($fp);
	}

	//cetak
	$fp = fopen("application/views/".$name_table."/".$name_table."_excel_view.php","wb");
	if( $fp == false ){
		//do debugging or logging here
	}else{
		fwrite($fp,$content_views_excel);
		fclose($fp);
	}

	//export_excel
	$fp = fopen("application/views/".$name_table."/".$name_table."_export_excel_view.php","wb");
	if( $fp == false ){
		//do debugging or logging here
	}else{
		fwrite($fp,$content_views_export_excel);
		fclose($fp);
	}

	//export_excel
	$fp = fopen("application/views/".$name_table."/".$name_table."_excel_import.php","wb");
	if( $fp == false ){
		//do debugging or logging here
	}else{
		fwrite($fp,$content_views_excel_import);
		fclose($fp);
	}


	//export_excel
	$fp = fopen("application/views/".$name_table."/".$name_table."_fpdf_view.php","wb");
	if( $fp == false ){
		//do debugging or logging here
	}else{
		fwrite($fp,$content_fpdf_view);
		fclose($fp);
	}

	//export_excel
	$fp = fopen("application/views/".$name_table."/".$name_table."_mpdf_view.php","wb");
	if( $fp == false ){
		//do debugging or logging here
	}else{
		fwrite($fp,$content_mpdf_view);
		fclose($fp);
	}
	
	//landing_page_application induk
	$fp = fopen("application/views/".$name_application."/".$name_application."_landing_view.php","wb");
	if( $fp == false ){
		//do debugging or logging here
	}else{
		fwrite($fp,$content_view_landing_page);
		fclose($fp);
		
	//detail
	$fp = fopen("application/views/".$name_table."/".$name_table."_view_detail.php","wb");
	if( $fp == false ){
		//do debugging or logging here
	}else{
		fwrite($fp,$content_view_detail);
		fclose($fp);
	}	
}


//LIRARIES
//model
if (!is_dir('application/libraries/')) {
    mkdir('application/libraries/', 0777, true);
}
//fpdf_gen
$fp = fopen("application/libraries/fpdf_gen.php","wb");
if( $fp == false ){
    //do debugging or logging here
}else{
    fwrite($fp,$content_library);
    fclose($fp);
}

?>
