<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function example()
    {
        // $api_url = 'http://127.0.0.1:8000/api/barang';
        $api_url = 'http://dummy.restapiexample.com/api/v1/employees';

        // Read JSON file
        $json_data = file_get_contents($api_url);

        // Decode JSON data into PHP array
        $response_data = json_decode($json_data);

        // All user data exists in 'data' object
        $user_data = $response_data->data;

        // Cut long data into small & select only first 10 records
        $user_data = array_slice($user_data, 0, 9);

        // Print data if need to debug
        //print_r($user_data);

        // Traverse array and display user data
        foreach ($user_data as $user) {
            echo "name: ".$user->employee_name;
            echo "<br />";
            echo "name: ".$user->employee_age;
            echo "<br /> <br />";
        }

        // return "lorem ipsum";
    }
    public function test()
    {
        $ch = curl_init();
        // curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_URL, "http://dummy.restapiexample.com/api/v1/employees");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $api_response_json = curl_exec($ch);
        curl_close($ch);
        
        //convert json to PHP array for further process
        $api_response_arr = json_decode($api_response_json, true);


        // $url = 'http://dummy.restapiexample.com/api/v1/employees';
        // $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_HTTPGET, true);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response_json = curl_exec($ch);
        // curl_close($ch);
        // $response=json_decode($response_json, true);

        dd($api_response_arr);
    }
    
    // A function that will make a GET request to the /campaigns endpoint
    public function get_data_from_api() {

        // Run the function that will make a POST request and return the token
        
        // $exoclick_token = get_token_from_api();
                
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.exoclick.com/v2/login",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\n\"api_token\": \"[ADD YOUR TOKEN]\"\n}",
        CURLOPT_HTTPHEADER => array(
            "Accept: */*",
            "Cache-Control: no-cache",
            "Connection: keep-alive",
            "Content-Type: application/json",
        ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        // curl_close($curl);
        
        // Decode the response from the API
        
            $decoded_response_object = json_decode($response);
        
            curl_close($curl);
        
        // Return the decoded response so you can use it to make another request
        $exoclick_token = $decoded_response_object;
        
        $new_token = $exoclick_token->token;
        
        $auth_array = array(
                "Authorization:",
                "Bearer",
                $new_token
        );
        
        $new_token = implode(" ", $auth_array);
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.exoclick.com/v2/campaigns",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => array(
            $new_token,
            "Content-Type: application/json",
            "cache-control: no-cache"
        ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        $data = json_decode($response, true);
        
        // do something with the data
        
        print_r($data);
        
    }
    
    
    public function get_token_from_api() {
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.exoclick.com/v2/login",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\n\"api_token\": \"[ADD YOUR TOKEN]\"\n}",
        CURLOPT_HTTPHEADER => array(
            "Accept: */*",
            "Cache-Control: no-cache",
            "Connection: keep-alive",
            "Content-Type: application/json",
        ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        // Decode the response from the API
        
            $decoded_response_object = json_decode($response);
        
            curl_close($curl);
        
        // Return the decoded response so you can use it to make another request
            return $decoded_response_object;
        
    }


    public function show($id)
    {
        $barang = Barang::whereId($id)->first();
        return "lorem ipsum";

    }
}
