<?php

$form_data = $_POST;

$html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">
</head>
<body>
<style>
table {
  border-collapse: collapse;
}
</style>
';

$html .= '<table border="1" style="width:100%">
			<tr>
				<td style="text-align:right">Curriculum vitae 
		Europass  </td>
		<td></td>
		</tr>
		<tr><td style="text-align:right">Informatii personale</td>
		<td></td>
		</tr>
		<tr>
		<td style="text-align:right">Nume/Prenume</td>
		<td>'.$form_data['fname'] . ', ' . $form_data['lname'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">Adresa(e)</td>
		<td>'. $form_data['address'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">Telefon(oane)</td>
		<td>'. $form_data['phone'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">E-mail(uri)</td>
		<td>'. $form_data['email'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">Nationalitate(-tati)</td>
		<td>'. $form_data['nationality'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">Data nasterii</td>
		<td>'. $form_data['birthdate'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">Sex</td>
		<td>'. $form_data['sex'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">Locul de munca vizat / Domeniul ocupational</td>
		<td></td>
		</tr>
		<tr>
		<td style="text-align:right">Experienta profesionala</td>
		<td></td>
		</tr>';
	
	$html .= '<tr>
		<td style="text-align:right">Perioada</td>
		<td>'. $form_data['datebegin']. ' - '. $form_data['dateend'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">Functia sau postul ocupat</td>
		<td>'. $form_data['title'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">Activitati si responsabilitati principale</td>
		<td>'. $form_data['description'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">Numele angajatorului</td>
		<td>'. $form_data['company_name'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">Tipul activitatii sau sectorul de activitate</td>
		<td>'. $form_data['activity'] .'</td>
		</tr>
		';
	
	$html .= '<tr>
		<td style="text-align:right">Educatie si formare</td>
		<td></td>
		</tr>
		';

	$html .= '<tr>
		<td style="text-align:right">Perioada</td>
		<td>'. $form_data['yearstart']. ' - '. $form_data['yearend'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">Calificarea / diploma obtinuta</td>
		<td>'. $form_data['diploma'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">Activitati si responsabilitati principale</td>
		<td>'. $form_data['description'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">Numele angajatorului</td>
		<td>'. $form_data['company_name'] .'</td>
		</tr>
		<tr>
		<td style="text-align:right">Tipul activitatii sau sectorul de activitate</td>
		<td>'. $form_data['activity'] .'</td>
		</tr>
		';

$html .= '</body>
</html>';

header("Content-Type: application/vnd.msword");
  header("Expires: 0");//no-cache
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
 header("content-disposition: attachment;filename=cveuropas.doc"); 

 //store in local file
file_put_contents( "./cveuropas.doc",$html);

echo $html;