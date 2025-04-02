<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Moodle_user extends CI_Controller {

    private $webservice_url = 'https://mysite/webservice/rest/server.php';
    private $token = 'mytoken';

    public function __construct() {
        parent::__construct();
        $this->load->library('MoodleRest', ['url' => $this->webservice_url, 'token' => $this->token]);
    }

    public function index() {
        $username = 'vvvfilippov';
        
        $query_user['criteria'][0] = array('key' => 'username', 'value' => $username);
        $result_query = $this->moodlerest->request('core_user_get_users', $query_user);

        if (!empty($result_query['exception'])) {
            log_message('error', 'Error querying user: ' . json_encode($result_query));
            show_error('Error querying user', 500);
        }

        if (empty($result_query['users'][0]['id'])) {
            $people['users'][0] = array(
                'username' => $username,
                'password' => '123456',
                'firstname' => 'Vladimir',
                'lastname' => 'Filippovv',
                'email' => $username . '@email.fake'
            );
            
            $result_insert = $this->moodlerest->request('core_user_create_users', $people, MoodleRest::METHOD_POST);
            
            if (!empty($result_insert['exception'])) {
                log_message('error', 'Error creating user: ' . json_encode($result_insert));
                show_error('Error creating user', 500);
            }
            
            echo json_encode(['Created user' => $result_insert]);
        } else {
            echo json_encode(['Returned user' => $result_query]);
        }
    }
}
