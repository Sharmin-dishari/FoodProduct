<?php
class cls_func{
	
	public function con(){
		$connect = new dbconfig();
		return $connect->connection();
	}
	//reader
	public function view_product(){
		$result = $this->con()->query("Select * from reader");
		return $result;
	}
	public function inspro($rid,$name,$pass,$contact,$bid,$rdate,$sdate,$ontime,$pay){
		 
		$result = $this->con()->query("INSERT INTO reader(rid,name,pass,contact,bid,rdate,sdate,ontime,pay) VALUES('$rid','$name','$pass','$contact','$bid','$rdate','$sdate','$ontime','$pay')");
		return $result;
	}
	public function updatepro($rid,$name,$pass,$contact,$bid,$rdate,$sdate,$ontime,$pay){
		
		
		$result = $this->con()->query("UPDATE reader
SET  name='$name',pass='$pass',contact='$contact',bid='$bid',rdate='$rdate',sdate='$sdate',ontime='$ontime',pay='$pay'
WHERE rid='$rid'");
		return $result;
	}
	public function deletepro($rid){
		$result = $this->con()->query("DELETE FROM reader WHERE rid='$rid'");

		return $result;
	}

public function cou_emp(){
		$result = $this->con()->query("Select COUNT(rid) AS TOTAL_employee from reader");
		//echo 'TOTAL present'.$result;
		return $result;
	}
	
	public function edit_est_info($rid){
		$result = $this->con()->query("Select * from reader where rid='$rid'");
		return $result;
	}
	

public function search($query){
		$result = $this->con()->query("SELECT * FROM reader WHERE (
							`name` LIKE '%".$query."%'
								OR `pass` LIKE '%".$query."%'
									OR `rdate` LIKE '%".$query."%'
									OR `sdate` LIKE '%".$query."%'
									OR `pay` LIKE '%".$query."%'
									OR `ontime` LIKE '%".$query."%'
									OR `bid` LIKE '%".$query."%'
									) order by rid");
		return $result;
	}

public function search1($query){
		$result = $this->con()->query("SELECT * FROM reader WHERE (rid LIKE '%".$query."%'
							
									) order by rid");
		return $result;
	}

//book

public function view_productb(){
		$result = $this->con()->query("Select * from book");
		return $result;
	}
	public function insprob($bid,$bname,$how,$writer,$fileName,$yes){
		 if ($fileName == '') {
               $fileName = "no_image.png";
            }
		$result = $this->con()->query("INSERT INTO book(bid, bname, how,writer,pic,yes) VALUES('$bid','$bname','$how','$writer','$fileName','$yes')");
		return $result;
	}
	public function updateprob($bid,$bname,$how,$writer,$fileName,$yes){
		
		if ($fileName == '') {
               $fileName = "no_image.png";
            }
		$result = $this->con()->query("UPDATE book
SET bname='$bname',how='$how',writer='$writer',pic='$fileName',yes='$yes'
WHERE bid='$bid'");
		return $result;
	}
	public function deleteprob($bid){
		$result = $this->con()->query("DELETE FROM book WHERE bid='$bid'");

		return $result;
	}

public function cou_empb(){
		$result = $this->con()->query("Select COUNT(bid) AS TOTAL_employee from book");
		//echo 'TOTAL present'.$result;
		return $result;
	}
	
	public function edit_est_infob($bid){
		
		
		$result = $this->con()->query("Select * from book where bid='$bid'");
		return $result;
	}
	

public function searchb($query){
		$result = $this->con()->query("SELECT * FROM book WHERE (bid LIKE '%".$query."%'
							OR `bname` LIKE '%".$query."%'
								OR `how` LIKE '%".$query."%'
									OR `writer` LIKE '%".$query."%') order by bid");
		return $result;
	}	

//admin

	public function view_producta(){
		$result = $this->con()->query("Select * from admin");
		return $result;
	}
	
	
	public function insproa($ID,$name,$password,$contact,$address){
		 
	
   
		$result = $this->con()->query("INSERT INTO admin(ID,name,password,contact,address) VALUES('$ID','$name','$password','$contact','$address')");
		return $result;
	
}
	
		
	public function updateproa($ID,$name,$password,$contact,$address){
		
		
		$result = $this->con()->query("UPDATE admin
SET name='$name',password='$password',contact='$contact',address='$address'
WHERE ID='$ID'");
		return $result;
	}
	public function deleteproa($ID){
		$result = $this->con()->query("DELETE FROM admin WHERE ID='$ID'");

		return $result;
	}
	public function edit_est_infoa($ID){
		$result = $this->con()->query("Select * from admin where ID='$ID'");
		return $result;
	}
	
	//join
	
	public function view_productj(){
		$result = $this->con()->query("SELECT book.*, reader.* FROM reader INNER JOIN book ON reader.bid=book.bid");
		return $result;
	}
	
	public function searchj($query){
		$result = $this->con()->query("SELECT book.*,reader.rid,reader.sdate,reader.ontime from book,reader WHERE  reader.bid=book.bid AND (book.bid LIKE '%".$query."%'
		
		
		) order by reader.rid ");
		return $result;
	}
	
	public function cou_empj($query){
		$result = $this->con()->query("Select SUM(ontime) AS TOTAL_employee from reader INNER JOIN book ON reader.bid=book.bid AND (book.bid LIKE '%".$query."%')");
		//echo 'TOTAL present'.$result;
		return $result;
	}
	//request  means req table
	
	public function view_reader(){
		$result = $this->con()->query("Select * from req ORDER BY tdate DESC");
		return $result;
	}
	public function insreader($bname,$text,$wdate,$email){
		 
		$result = $this->con()->query("INSERT INTO req(tdate,bname,text,wdate,email) VALUES(NOW(),'$bname','$text','$wdate','$email')");
		return $result;
	}
	public function deleterequest($email){
		$result = $this->con()->query("DELETE FROM req WHERE email='$email'");

		return $result;
	}
	public function requestsearch($query){
		$result = $this->con()->query("SELECT * FROM req WHERE (
							`tdate` LIKE '%".$query."%'
								OR `bname` LIKE '%".$query."%'
									OR `text` LIKE '%".$query."%'
									OR `wdate` LIKE '%".$query."%'
									OR `email` LIKE '%".$query."%'
									
									) order by bname");
		return $result;
	}
	
	public function edit_est_infoadmin($bid){
		
		
		$result = $this->con()->query("Select bname from book where bid='$bid'");
		return $result;
	}
	
	//login
	public function login_fun($ID){
		$result = $this->con()->query("SELECT * from admin  WHERE ID='$ID' ");
		return $result;
}

}
?>
	