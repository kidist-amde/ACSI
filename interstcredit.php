<?php
//first the date must be update every work days of bank or...........other wise..........not working
//next the date must be in europian...........


$year= date('y');//select only year from the system
$month=date('m');//select only month from the system
$date=date('d');//select only date from the system

$sql="select * from credit;";
$sq=mysql_query($sql);
	while($row=mysql_fetch_array($sq))
	{
		$acc=$row['AccNumber'];
		$Amount=$row['Amount'];
		$date1=$row['interest_update'];//get date from data base
		$percent=$row['percent'];
		$yr=date('y',strtotime($date1));//simplofy into year only
		$mon=date('m',strtotime($date1));//simplofy into month only
		$da=date('d',strtotime($date1));//simplofy into date only
		if($yr==$year)
		{
			$valM=$month-$mon;
			$valD=$date-$da;
			if($valM==1)
			{
				if($valD>=0)
				{
					$inter=$Amount*$percent;//interset per month
					$Amount=$Amount+$inter;//add the interest into main balance
					$sql="update credit set Amount=$Amount where AccNumber='$acc'";//update balance;
					$sqlk="update credit set Interst=$inter where AccNumber='$acc'";//update balance;
					
					$sql1="update credit set interest_update='$year-$month-$date' where AccNumber=$acc";//b/c beye kenu endayechemer new eshi......
					mysql_query($sql,$conn);
				
					mysql_query($sql1,$conn);
				}
			}
			else if($valM>1)//ke ande wer belay interst yaltesralet
			{
				if($valD>=0)
				{
					$inter=$Amount*$percent;//interset per month
					$inter1=$inter*$valM;//multiply by no of month.............when if u forget using this site........for many months....or years
					$Amount=$Amount+$inter1;//add the interest into main balance
					$sql="update credit set Amount=$Amount where AccNumber=$acc";//update balance;
					$sqli="update credit set Interst=$inter where AccNumber='$acc'";//update balance;
					$sql1="update credit set interest_update='$year-$month-$date' where AccNumber=$acc";
					mysql_query($sql,$conn);
					mysql_query($sql1,$conn);
				}
				else if($valD<0)
				{
					$inter=$Amount*$percent;//interset per month
					$valM1=$valM-1;//in this case one month has not full date/ godolo yehonche ken tekensalech
					$inter1=$inter*$valM1;//multiply by no of month.............when if u forget using this site........for many months....or years
					$Amount=$Amount+$inter1;//add the interest into main balance
					$sql="update credit set Amount=$Amount where AccNumber=$acc";//update balance;
					$sqli="update credit set Interst=$inter where AccNumber='$acc'";//update balance;
					$sql1="update credit set interest_update='$year-$month-$date' where AccNumber=$acc";
					mysql_query($sql,$conn);
					mysql_query($sql1,$conn);
				}
			}
		}
		echo'<br>';
	}
?>