<?php

mysql_select_db("acsik",$conn);//to select from the db

$year= date('y');
$month=date('m');
$date=date('d');//select only date from the system
$acc_no=$_POST['acc'];
$sql="select * from credit where AccNumber=$acc_no";
$sq11=mysql_query($sql);
	while($row=mysql_fetch_array($sq11))
	{  
	  
		$Amount=$row['Amount'];
	
			$date1=$row['DueDate'];//get date from data base
			$pena=$row['penality'];
	
	$yr=date('y',strtotime($date1));//simplofy into year only
	$mon=date('m',strtotime($date1));//simplofy into month only
	$da=date('d',strtotime($date1));//pares english textual datetime into unix timestamp
	
	$valY=$year-$yr;
	$valM=$month-$mon;
	$valD=$date-$da;
	
	$pen=0;
	$penality=20;
	if($valY==0)
	{
		if($valM==0)
		{
			if($valD>0)//take care not equal to zero.....other wise.........the value all equals zero
			{
				$penality=$penality*$valD;
				$pen=$penality;
				
				$sql="update credit set penality=$pen where AccNumber=$acc_no";
				mysql_query($sql);
				
			}
		}
		else if($valM>0)
		{
			if($valD>=0)//wer ke menamn ken sihon
			{
				$date_in_month=$valM*30;
				$all_date=$date_in_month+$valD;// 2 wer ke hone ken
				$penality=$penality*$all_date;
				$pen=$penality;
				
				$sql="update credit set penality=$pen where AccNumber=$acc_no";
				mysql_query($sql);
			}
			else if($valD<0)
			{
				$a_month=valM-1;//get actual month b/c on month is not full
				$date_in_month==$a_month*30;
				
				$all_date=$date_in_month+$valD;
				$penality=$penality*$all_date;
				$pen=$penality;
				
				$sql="update credit set penality=$pen where AccNumber=$acc_no";
				mysql_query($sql);
			}
		}
	}
	else if($valY>0)
	{
		if($valM>=0)
		{
			if($valD>=0)
			{
				$total_date=$valY*365;
				$date_in_m=$valM*30;
				$total_date=$total_date+$valD+$date_in_m;// amet kemnamn wer kemnamn ken
				$penality=$penality*$total_date;
				$pen=$penality;
				$sql="update credit set penality=$pen where AccNumber=$acc_no";
				mysql_query($sql);
			}
			else if($valD<0)
			{
				$date_in_m=valM*30;
				$total_date=$valY*365;
				$total_date=$total_date+$valD+$date_in_m;//-ve value new yalat date so
				$penality=$penality*$total_date;
				$pen=$penality;
				$sql="update credit set penality=$pen where AccNumber=$acc_no";
				mysql_query($sql);
			}
		}
		else if($valM<0)
		{
			if($valD>=0)
			{
				$total_date=($valY-1)*365;
				$valM1=12+$valM;
				$date_in_m=$valM1*30;
				$total_date=$total_date+$valD+$date_in_m;
				$penality=$penality*$total_date;
				$pen=$penality;
				$sql="update credit set penality=$pen where AccNumber=$acc_no";
				mysql_query($sql);
			}
			else if($valD<0)
			{
				$date_in_m=$valM*30;
				$valM1=12+$valM;
				$total_date=($valY-1)*365;//month yansal yansew yalmolaw yekerew month
				$total_date=$total_date+$valD+$date_in_m;//day -ve selhonche andun wer mulu yalhonewn ken yeknsawal
				$penality=$penality*$total_date;
				$pen=$penality;
				$sql="update credit set penality=$pen where AccNumber=$acc_no";
				mysql_query($sql);
			}
		}
	}
	}
?>