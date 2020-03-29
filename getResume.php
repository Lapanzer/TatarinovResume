<?php
require_once("variable.php");
$fileName = "Resume.txt";

$date =  date_create(date("F j, Y, g:i a"));  
date_modify($date, "2 hour"); // на 1 час назад
$date_new = date_format($date, "d.m.Y H:i");

$file = fopen($fileName, 'w');
fwrite($file, "Time creation:".$date_new."\n\r");
fwrite($file, "\n\r"."Personal information"."\n\r");
fwrite($file, "\n\r"."Name: ".$resumedata["name"]."\n\r");
fwrite($file, "\n\r"."Address: ".$resumedata["address"]."\n\r");
fwrite($file, "\n\r"."Phone: ".$resumedata["phone"]."\n\r");
fwrite($file, "\n\r"."E-mail: ".$resumedata["e-mail"]."\n\r");
fwrite($file, "\n\r"."Date of birth: ".$resumedata["dataOfbirth"]."\n\r");
fwrite($file, "\n\r"."Marital status: ".$resumedata["maritalStatus"]."\n\r");
fwrite($file, "\n\r"."Nationality: ".$resumedata["nationality"]."\n\r");
fwrite($file, "\n\r"."Education:"."\n\r");
fwrite($file, "\n\r".$resumedata["educ1"]."\n\r");
fwrite($file, "\n\r".$resumedata["educ2"]."\n\r");
fwrite($file, "\n\r"."Skills"."\n\r");
fwrite($file, "\n\r"."Computer skills: ".$resumedata["computerSkills"]."\n\r");
fwrite($file, "\n\r"."Languages:\n\r");
fwrite($file, "\n\r".$resumedata["lang1"]."\n\r");
fwrite($file, "\n\r".$resumedata["lang2"]."\n\r");
fwrite($file, "\n\r".$resumedata["lang3"]."\n\r");
fclose($file);

if (file_exists($fileName)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($fileName).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($fileName));
    readfile($fileName);
    exit;
}
?>
