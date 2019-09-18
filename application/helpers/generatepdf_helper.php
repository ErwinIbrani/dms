<?php

if ( ! function_exists('generate')) {

    function generateSurvey($params)
    {
        $api_endpoint = "https://selectpdf.com/api2/convert/";
        $key          = 'b53a60b8-7af2-4a9f-bf0c-c03fbde4911a';
        $raw_html     = $params['name'];
        $local_file   = './uploads/surveysitac/test.pdf';

        $parameters = array('key' => $key, 'html' => $raw_html);
        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($parameters),
            ),
        );

        $context = stream_context_create($options);
        $result = @file_get_contents($api_endpoint, false, $context);

        if (!$result) {
            echo "HTTP Response: " . $http_response_header[0] . "<br/>";
            $error = error_get_last();
            echo "Error Message: " . $error['message'];
        } else {
            file_put_contents($local_file, $result);
            //echo "HTTP Response: " . $http_response_header[0] . "<br/>";
            //echo($result);
        }
    }
}

