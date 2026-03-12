<?php
//Print_r($_POST); die();

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
// if any of these variables don't exist, add an error to our $errors array

if (empty($_POST['firstName']))
    $errors['firstName'] = 'Name is required.';

if (empty($_POST['emailId']))
    $errors['emailId'] = 'Email is required.';

if (empty($_POST['phoneNo']))
    $errors['phoneNo'] = 'Phone is required.';

// return a response ===========================================================

// if there are any errors in our errors array, return a success boolean of false
if ( ! empty($errors)) {

    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors']  = $errors;
} else {
    // header('location: thank-you.html');
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
	$emailId = $_POST['emailId'];
    $phoneNo = $_POST['phoneNo']; 
    $projectName = $_POST['projectName'];
    $comments = $_POST['comments']; 
 
    function executeCurl($arrOptions) {

        $mixCH = curl_init();

        foreach ($arrOptions as $strCurlOpt => $mixCurlOptValue) {
          curl_setopt($mixCH, $strCurlOpt, $mixCurlOptValue);
        }

        $mixResponse = curl_exec($mixCH);
        curl_close($mixCH);
        return $mixResponse;
    }

    // If any HTTP authentication is needed.
    //$username = 'http-auth-username';
    //$password = 'http-auth-password';

    $requestType = 'POST'; // This can be PUT or POST

    // This is a sample array. You can use $arrPostData = $_POST
    $arrPostData = array(
        'title'  => "Mr/Mrs.",
        'firstName'  => $firstName,
        'lastName'  => $lastName,
        'emailId'  => $emailId,
        'phoneNo'  => $phoneNo,
        'projectName' => $projectName,
        'comments' => $comments,
        'interestedIn'  => "2BHK",
        'enquirySourceId'  => "1041",
        'address' => "NA",
        'webSiteURL' => 'https://achalare.com/spring-gardens/'
    ); 
    //$data_string =  'firstName='. $firstName .'&' .'emailId='. $emailId .'&' .'phoneNo='. $phoneNo; 
    // You can set your post data
    $postData = http_build_query($arrPostData); // Raw PHP array
    $postData = json_encode($arrPostData); // Only USE this when request JSON data.
    //Print_r($postData);
    //die();
    //http://116.75.150.37/IN4WebLeadService/WebLeadService.asmx/CreateWebLeadsInIN4SuiteRE   //Old API
    $mixResponse = executeCurl(array(
        CURLOPT_URL => 'http://103.53.235.142/IN4WebLeadService/WebLeadService.asmx/CreateWebLeadsInIN4SuiteRE',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPGET => true,
        CURLOPT_VERBOSE => true,
        CURLOPT_AUTOREFERER => true,
        CURLOPT_CUSTOMREQUEST => $requestType,
        CURLOPT_POSTFIELDS  => $postData,
        CURLOPT_HTTPHEADER  => array(
            "X-HTTP-Method-Override: " . $requestType,
            'Content-Type: application/json', // Only USE this when requesting JSON data
        ),
        // If HTTP authentication is required, use the below lines.
        //CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
        //CURLOPT_USERPWD  => $username. ':' . $password
    )); 
    $data['success'] = true;
    $data['message'] = 'Success!';
    Print_r($mixResponse);
   
	die();
}
 exit();
// return all our data to an AJAX call
echo json_encode($data);
?>