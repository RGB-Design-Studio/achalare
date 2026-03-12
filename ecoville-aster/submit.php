<?php

$firstName = $_POST['firstName'];
$emailId = $_POST['emailId'];
$phoneNo = $_POST['phoneNo']; 
$projectName = $_POST['projectName'];
$location = $_POST['location'];
$comments = $_POST['comments'];
exit;
 /*
$html='<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:transparent;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:transparent;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
<thead>
  <tr>
    <th class="tg-0lax" colspan="2"><img src="logo.png"/></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0lax" colspan="2">
		Dear Administrator,</br>
		You have received the following mail from ecoville-aster landing page,
	</td>
  </tr>
  <tr>
    <td class="tg-0lax">Name : '.$firstName.' </td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Phone : '.$phoneNo.' </td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Email : '.$emailId.' </td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Location : '.$location.' </td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Project : '.$projectName.' </td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Message: '.$comments.' </td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax" colspan="2">
	Thanks & Regards,</br>
	Team Achalare
	</td>
  </tr>
</tbody>
</table>';
mail("rahulvijayan046@gmail.com","My subject",$html);
$to      = 'rahulvijayan046@gmail.com';
$subject = 'Achalare Enquiry';
$headers = 'From: noreply@achalare.com' . "\r\n" .
    'Reply-To: noreply@achalare.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $html, $headers);

ob_start();

// do your logic here

// right before outputting the JSON, clear the buffer.
ob_end_clean();

// now print
echo json_encode(array("id" => 12, "un" => 434343, "date" => 322424));*/
