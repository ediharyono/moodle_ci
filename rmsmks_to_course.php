<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_sync extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // load DB
    }

    public function sync_courses() {
        // Step 1: Get all records from rmsmks
        $query = $this->db->get('rmsmks');
        $rmsmks_data = $query->result();

        foreach ($rmsmks_data as $row) {
            // Step 2: Prepare data for mdl_course
            $data = array(
                'id'         => $row->thsmsmsmks,
                'category'   => $row->thsmsmsmks . $row->kdpstmsmks,
                'sortorder'  => 0, // You can change this logic
                'fullname'   => $row->nmmkmsmks,
                'shortname'  => $row->nmmkmsmks . $row->thsmsmsmks . $row->kdpstmsmks . $row->kdkmkmsmks . $row->kelasmsmks,
                'idnumber'   => $row->thsmsmsmks . $row->kdpstmsmks . $row->kdkmkmsmks . $row->kelasmsmks
            );

            // Step 3: Insert or update (REPLACE INTO)
            $this->db->replace('mdl_course', $data);
        }

        echo "Course sync completed.";
    }
}
