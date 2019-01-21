<?php
  /////////////////////////////////////////////////
 //                Database Queries             //
/////////////////////////////////////////////////

class db {
	
	public function __construct($host,$dbusername,$dbpassword,$dbname) {
	$this->host = $host;
	$this->dbuser = $dbusername;
	$this->dbpass = $dbpassword;
	$this->dbname= $dbname;
	}
	
	public function connect(){	
		$this->connect=mysqli_connect($this->host,$this->dbuser,$this->dbpass,$this->dbname);
		if($this->connect)
			return $this->connect;
		else
			return false;
		}
	
	public function selectdb($dbname){
			
			$this->dbname=$dbname;
			$this->selectdb=mysqli_select_db($this->connect,$this->dbname);
			if ($this->selectdb)
				return $this->selectdb;
			else
				return false;
			}
	
	public function dbsafe($value)
	{
		$this->value=$value;
		return '"'.mysqli_real_escape_string($this->connect,$this->value).'"';
	}
	
			
	public function disconnect(){
			
			if(mysqli_close($this->connect))
				return true;
			else
				return false;
			}
			
	public function select($table,$where)
	{
		$this->table=$table;
		$this->where=$where;

		
		$this->query=mysqli_query($this->connect, "SELECT * FROM ".$this->table.($this->where == "" ? "":(" WHERE ".$this->where)));
		return $this->query;
	}	
	
	
	public function select2($table,$where,$orderby,$type,$limit)
	{
		$this->table=$table;
		$this->where=$where;
		$this->orderby=$orderby;
		$this->type=$type;
		$this->limit=$limit;
		
		$this->query=mysqli_query($this->connect, "SELECT * FROM ".$this->table.($this->where == "" ? "":(" WHERE ".$this->where)).($this->orderby=="" ? "":(" ORDER BY ".$this->orderby." ".$this->type)).($this->limit == "" ? "":(" LIMIT ".$this->limit)));
		return $this->query;
	}
	
	public function select3($table,$where,$orderby,$limit)
	{
		$this->table=$table;
		$this->where=$where;
		$this->orderby=$orderby;
		
		$this->limit=$limit;
		
		$this->query=mysqli_query($this->connect, "SELECT * FROM ".$this->table.($this->where == "" ? "":(" WHERE ".$this->where)).($this->orderby=="" ? "":(" ORDER BY ".$this->orderby)).($this->limit == "" ? "":(" LIMIT ".$this->limit)));
		return $this->query;
	}
	
	
	public function select4($table,$where,$orderby,$type)
	{
		$this->table=$table;
		$this->where=$where;
		$this->orderby=$orderby;
		$this->type=$type;
		
		$this->query=mysqli_query($this->connect, "SELECT * FROM ".$this->table.($this->where == "" ? "":(" WHERE ".$this->where)).($this->orderby=="" ? "":(" ORDER BY ".$this->orderby." ".$this->type)));
		return $this->query;
	}
	
	
		public function update($table,$set,$where)
	{
		$this->table=$table;
		$this->set=$set;
		$this->where=$where;
		$this->query=mysqli_query($this->connect, " UPDATE ".$this->table." SET ".$this->set." WHERE ".$this->where);
		return $this->query;
	}
	
	
	public function delete($table,$where)
	{
		$this->table=$table;
		$this->where=$where;
		
		$this->query=mysqli_query($this->connect, " DELETE FROM ".$this->table." WHERE ".$this->where);
		return $this->query;
	}
	
	
	public function insert($table,$values)
	{
		$this->table=$table;
		$this->values=$values;
		
		$this->query=mysqli_query($this->connect, " INSERT INTO ".$table." () VALUES "."( ".$this->values." )");
		return $this->query;
	}
	
}

  ///////////////////////////////////////////////
 //               ImageClass                  //
///////////////////////////////////////////////


class image 
{
		
	public function __construct($directory)
	{
		$this->directory=$directory;
	}
		
		public function uploadimage($ifile,$wwidth,$itype)
		{
			$this->wantedwidth=$wwidth;
			$this->name=$ifile['name'];
			/*echo $this->name;
			echo "<br>";*/
			$this->type=$ifile['type'];
			/*echo $this->type;
			echo "<br>";*/
			$this->size=$ifile['size'];
			/*echo $this->size;
			echo "<br>";*/
			$this->source=$ifile['tmp_name'];
			/*echo $this->source;
			echo "<br>";*/
			$this->ntype=$itype;
			$this->newname=$itype."-".substr(md5($this->name),5,15).substr(md5(time('now')),5,15);
			$this->target=$this->directory."/".$this->newname.".jpg";
			
			if($this->size<=6000000)
			{
				if($this->type == "image/jpeg" || $this->type == "image/jpg" || $this->type == "image/png" || $this->type == "image/gif")
				{
					
					if($this->type == "image/jpeg" || $this->type == "image/jpg")
					{
						$new_img=imagecreatefromjpeg($this->source);
           			}
					elseif($this->type == "image/png")
					{
						$new_img=imagecreatefrompng($this->source);
					}
					elseif($this->type == "image/gif")
					{
						$new_img=imagecreatefromgif($this->source);
					}
					else
					{
						return 4;
					}
				
				
					list($width, $height)=getimagesize($this->source);
					$imgratio=$width/$height;
					if ($imgratio>1)
					{
              			$newwidth=$this->wantedwidth;
						$newheight=$this->wantedwidth/$imgratio;
					}
					else
					{
                 		$newheight=$this->wantedwidth;
                 		$newwidth=$this->wantedwidth*$imgratio;
           			}
				
				$resized_img=imagecreatetruecolor($newwidth,$newheight);
				imagecopyresized($resized_img, $new_img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
				
				$creation=ImageJpeg($resized_img,$this->target,100);
				ImageDestroy($resized_img);
           		ImageDestroy($new_img);
						if($creation)
						{
							$image_name=$this->target;
							$logo_name=$this->directory."logo.png";
							$im_1 = imagecreatefromjpeg($image_name);
							$im_2 = imagecreatefrompng($logo_name);
							$marge_right = 5;
							$marge_bottom = 5;
							$sx = imagesx($im_2);
							$sy = imagesy($im_2);

							imagecopy($im_1, $im_2, imagesx($im_1) - $sx - $marge_right, imagesy($im_1) - $sy - $marge_bottom, 0, 0, imagesx($im_2),imagesy($im_2));

							$second_image_name=$this->target;
							imagepng($im_1, $second_image_name);
							imagedestroy($im_1);
							imagedestroy($im_2);

							return $this->newname;
						}
					
				}
				else
				{
					return 2;
				}

			}
			else
			{
				return 3;
			}
		}
	
	
	public function deleteimage($name)
	{
		$this->name=$name;
		$fname=$this->directory."/".$this->name;
		if(unlink($fname))
		{
			return 1;
		}
		else
		{
			return 2;
		}
	}
}
	

  ///////////////////////////////////////////////
 //               SecurityClass               //
///////////////////////////////////////////////

class security_system
{
	public function __construct($seckey)
	{
		$this->seckey=$seckey;
	}
	
	public function pass_enc($pass,$salt)
	{
		$this->salt=$salt;
		$this->password=$pass;
		$this->fpass=$this->password.$this->salt;
		$this->fpass=sha1($this->fpass);
		return $this->fpass;	
	}
	
	public function enc($text)
	{
		$this->text=$text;
		$this->method="AES-128-CBC";
		$this->pkey=md5($this->seckey);
		$this->iv=substr(md5($this->seckey),16);
		$this->enc=openssl_encrypt ($this->text,$this->method,$this->seckey,0,$this->iv);
		return $this->enc;	
	}
	
		public function dec($dectext)
	{
		$this->dectext=$dectext;
		$this->method="AES-128-CBC";
		$this->pkey=md5($this->seckey);
		$this->iv=substr(md5($this->seckey),16);
		$this->dec=openssl_decrypt ($this->dectext,$this->method,$this->seckey,0,$this->iv);
		return $this->dec;	
	}
	
	
	
}


  ///////////////////////////////////////////////
 //               EmailClass                  //
///////////////////////////////////////////////


class email_system {
	public function __construct($from)
	{
			$this->from = $from;
		echo $from;
		echo "<br>";
	}

	public function send_password_email($to,$new_password)
	{
			$this->to=$to;
			$this->newpass=$new_password;
			$to = "";
			$subject = "";
			$txt = "با سلام این ایمیل از طرف وب سایت ... برای شما ارسال شده، رمز عبور جدید شما بدین شرح است:".$this->newpass;
			$headers = "From: " . "\r\n";

			$s=mail($this->to,$subject,$txt,$headers);

			if($s)
			{
				return 1;
			}
			else
			{
				return 2;
			}
	}
	
	public function randomString($length = 8) {
	$str = "";
	$characters = array_merge(range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}

}


?>
