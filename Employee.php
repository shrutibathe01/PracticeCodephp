<?php
class emp 
{
	public $code=0;
	public $name=' ';
	public $des=' ';
	function __construct($code,$name,$des)
	{
		$this->code=$code;
		$this->name=$name;
		$this->des=$des;
	}
}
class emp_account extends emp
{
	public $acct_no=0;
	public $joining_date=' ';
	function __construct($code,$name,$des,$acct_no,$joining_date)
	{
		parent::__construct($code,$name,$des);
		$this->acct_no=$acct_no;
		$this->joining_date=$joining_date;
	}
}
class emp_sal extends emp_account
{
	public $basic_pay=0;
	public $earnings=0;
	public $deduction=0;
	function __construct($code,$name,$des,$acct_no,$joining_date,$basic_pay,$earnings,$deduction)
	{
		parent::__construct($code,$name,$des,$acct_no,$joining_date);
		$this->basic_pay=$basic_pay;
		$this->earnings=$earnings;
		$this->deduction=$deduction;
	}
	function display()
	{
		echo "<br>";
		echo "Emp Code: ".$this->code ."<br>";
		echo "Emp Name: ".$this->name ."<br>";
		echo "Emp Designation: ".$this->des ."<br>";
		echo "Emp Account No.: ".$this->acct_no ."<br>";
		echo "Emp Joining Date: ".$this->joining_date ."<br>";
		echo "Emp Basic Pay: ".$this->basic_pay ."<br>";
		echo "Emp Total Earning: ".$this->earnings ."<br>";
		echo "Emp Total Deduction: ".$this->deduction."<br>";
	}
}
$emp=Array();
$emp[0]=new emp_sal(1209,"Joon","CTO.",9108,"12/9/2011",7000,70000,2000);
$emp[1]=new emp_sal(2130,"JISO","Team Manager.",1010,"20/1/2000",4500,47000,2500);

echo "Employee Table: ";
echo "<br>";
echo "Code Name Designation Account_no Joining Date Basic Pay Earnings Deduction";
echo "<br>";
for($i=0;$i<sizeof($emp);$i++)
{
	echo "".$emp[$i]->code." ".$emp[$i]->name." ".$emp[$i]->des." "
	.$emp[$i]->acct_no." ".$emp[$i]->joining_date." ".$emp[$i]->basic_pay." "
	.$emp[$i]->earnings." ".$emp[$i]->deduction ."<br>";
}
echo "<br>";
function comparator($object1, $object2) 
{
  return ($object1->code < $object2->code)?-1:1;
}
usort($emp, 'comparator');
echo "Data of Employees after sorting: <br>";
for($i=0;$i<sizeof($emp);$i++)
{
  $emp[$i]->display();
}
echo "<br>";
echo "Enter The ID for which you want to Search:<br>";
$key=readline();
$temp=0;
for($i=0;$i<sizeof($emp);$i++)
{
	if($key==$emp[$i]->code)
	{
		echo "Emp Exist<br>";
		$temp++;
		break;
	}
}
if($emp==0)
{
  echo "Emp not Found";
}

echo "Displaying The Salaries of Emp.<br>";
echo "Emp-ID Salary<br>";
for($i=0;$i<sizeof($emp);$i++)
{
  echo "\n".$emp[$i]->code." ".($emp[$i]->earnings)-($emp[$i]->deduction);
}
?>
