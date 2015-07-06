
<?php
//enter the birthdate of the person // day,month,year
 /*$day= 22;
$u_year= 1996;
$month1= 06;*/
switch ($month1){
case 0: $month='jan'; break;
case 1: $month='feb'; break;
case 2: $month='mar'; break;
case 3: $month='apr'; break;
case 4: $month='may'; break;
case 5: $month='jun'; break;
case 6: $month='jul'; break;
case 7: $month='aug'; break;
case 8: $month='sept'; break;
case 9: $month='oct'; break;
case 10: $month='nov'; break;
case 11: $month='dec'; break;
}

 
/*$day=22;
$month=  "jun";
$u_year=1996;*/
 
 
// below is the list of years which are leap years/Gregorian years
 	for($i=1800;$i<=2200;$i+=4)
		{
		  $leap_years_list[]=$i;
		   
		} 
//check if the year entered by the user is a leap year or not
//and add a day to the default 365 days in a year by checking the state of the daysincrement variable
	$daysincrement="false"; // set default value for adding the extra day to false
	for ($index=0;$index<sizeof($leap_years_list); $index++)
		{
		  if($leap_years_list[$index]==$u_year)
		   {
			$daysincrement="true";
		   }		  
		}
	 if ($daysincrement=="true")
		{$totaldays=366;}
	 else 
		{ $totaldays=365;}
		//echo $daysincrement. $totaldays ; //this was for testing purposes
//calculate the exact number of days spent in the birth year
// by calculating the number of days not spent that year
	$feb=length_feb();// set the value of feb outside the switch to increase scope
	$days_not_spent= $day-1; //days not spent in the initial month
	switch($month) // days to increment from prev months not spent in that year
		 {
		 case "jan":
		 $days_not_spent+=0 ;
		 break;
		 case "feb":
		 $days_not_spent+=31;
		 break;
		 case "mar":
			$days_not_spent+=31+ $feb;			 
		 break;
		 case "apr":	 
		 $days_not_spent+=(62+ $feb);		 
		 break;
		  case "may":
		 $days_not_spent+=92+$feb;
		 break;
		  case "jun":
		 $days_not_spent+=123+ $feb;
		 break;
		  case "jul":
		 $days_not_spent+=153+$feb;
		 break;
		  case "aug":
		 $days_not_spent+=184+$feb;
		 break;
		  case "sept":
		 $days_not_spent+=215+$feb;
		 break;
		  case "oct":
		 $days_not_spent+=245+$feb;
		 break;
		  case "nov":
		 $days_not_spent+=276+$feb;
		 break;
		  case "dec":
		 $days_not_spent+=306+ $feb;
		 break;
		 default:
		 $days_not_spent= "i dont know";
		 break;
		 }
 function length_feb() //function to determine the length of the month of february
	 {
			Global $daysincrement;
			if($daysincrement=="true")
				 { $feb=29;}
				 else
				 { $feb=28;}
			 return $feb;
	}

$total_i_year_days=$totaldays-$days_not_spent;// actual # days in first year
// calculate the number of days in the full years lived  
// find full years lived
date_default_timezone_set("UTC");
$c_year=date('Y'); // current year
$t_years=$c_year-$u_year; // total years
$f_years=$t_years-1;    // full years

$leap_years=$f_years/4; // leap years occur after periods of 4 years
$leap_years=floor($leap_years);// to round it to the nearest less # e.g 4.7 to 4 years
$no_leap_year_days=$leap_years*366;// days in leap years

$normal_years=$f_years-$leap_years;
$days_in_normal_years=$normal_years*365;

//calculate the number of days lived  in current year
$today= date('d');
$month= date('m');
$current_year= date('Y');
$c_feb=28;
 for ($index=0;$index<sizeof($leap_years_list); $index++)
		{
		  if($leap_years_list[$index]==$current_year)
		   {
			 $c_feb="29";
		   }			   
		}
	$days_spent=$today ;// days spent in the current month
	switch($month) // control structure to add any extra days lived in the current year
	{
	case 1:
	$days_spent+=0;
	break;
	case 2:
	 $days_spent+=31;
	 break;
	 case 3:
		$days_spent+=31+ $c_feb;			 
	 break;
	 case 4:	 
	 $days_spent+=(62+ $c_feb);		 
	 break;
	  case 5:
	  $days_spent+=92+$c_feb;
	 break;
	  case 6:
	 $days_spent+=123+ $c_feb;
	 break;
	  case  7:
	 $days_spent+=153+$c_feb;
	 break;
	  case 8:
	 $days_spent+=184+$c_feb;
	 break;
	  case  9:
	  $days_spent+=215+$c_feb;
	 break;
	  case  10:
	$days_spent+=245+$c_feb;
	 break;
	  case  11:
	 $days_spent+=276+$c_feb;
	 break;
	  case  12:
	 $days_spent+=306+ $c_feb;
	 break;
	 default:
	  $days_spent= "i dont know";
	 break;
	}
 
 /*echo $days_spent ." days spent in current year"."<br>$days_in_normal_years days spent in the normal years"."<br>$no_leap_year_days days spent in leap years".
 "<br>$total_i_year_days days spent in the birth year";*/
//total days on earth is the summation of days lived in first year,leap years,normal years and the current year
   $total_days_on_earth= $days_spent+$days_in_normal_years+$no_leap_year_days+$total_i_year_days ;
 // echo "<br> you have lived ".$total_days_on_earth." days on earth";
	
 ?>