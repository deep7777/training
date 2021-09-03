<?php
echo "parsecsv";
include "config.php";
if (($open = fopen("data/fake_job_postings.csv", "r")) !== FALSE) 
  {
  
    while (($data = fgetcsv($open, 500, ",")) !== FALSE) 
    {        
      $array[] = $data; 
    }
    fclose($open);
  }else {
  	echo "File is missing.";
  }

  foreach ($array as $key => $value) {
  	if($key!=0) {

  		if($key) {
  			$sql = "INSERT INTO job_postings (job_id,title,location,department,salary_range,company_profile,
	  		description,requirements,benefits,telecommuting,has_company_logo,has_questions,employment_type,required_experience,
	  		required_education,industry,function,fraudulent)
	        VALUES ('".$array[$key][0]."','".$array[$key][1]."','".$array[$key][2]."','".$array[$key][3]."',
	        '".$array[$key][4]."','".$array[$key][5]."','".$array[$key][6]."','".$array[$key][7]."',
	        '".$array[$key][8]."','".$array[$key][9]."','".$array[$key][10]."','".$array[$key][11]."',
	        '".$array[$key][12]."','".$array[$key][13]."','".$array[$key][14]."','".$array[$key][15]."',
	        '".$array[$key][16]."','".$array[$key][17]."'
	    	)";

	  		if ($conn->query($sql) === TRUE) {
	  			echo $sql."<br>";
	            echo "New record created successfully <br>";
	        } else {
	            echo "Error: " . $sql . "<br>" . $conn->error;
	        }
	  		echo "<br><br>";
  		}
  		
  	}
  	
  }
  // echo "<pre>";
  // //To display array data
  // var_dump($array);
  // echo "</pre>";
?>