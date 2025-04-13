<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enrole extends CI_Controller {

    private $moodle_url = 'https://your-moodle-site.com/webservice/rest/server.php'; // Ganti dengan URL Moodle kamu
    private $token = 'abcdef1234567890'; // Token dari Moodle

    public function enrol_user() {
        $userid = 221113968;
        $courseid = 20;
        $roleid = 5; // Biasanya 5 = student. Tapi bisa kamu cek di tabel `mdl_role`

        $params = [
            'wstoken' => $this->token,
            'wsfunction' => 'enrol_manual_enrol_users',
            'moodlewsrestformat' => 'json',
            'enrolments' => [
                [
                    'roleid' => $roleid,
                    'userid' => $userid,
                    'courseid' => $courseid,
                ]
            ]
        ];

        $url = $this->moodle_url . '?' . http_build_query([
            'wstoken' => $params['wstoken'],
            'wsfunction' => $params['wsfunction'],
            'moodlewsrestformat' => $params['moodlewsrestformat'],
        ]);

        // Kirim request dengan CURL
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['enrolments' => $params['enrolments']]));
        $response = curl_exec($ch);
        curl_close($ch);

        echo "Response dari Moodle:<br>";
        echo "<pre>" . print_r(json_decode($response, true), true) . "</pre>";
    }
}
