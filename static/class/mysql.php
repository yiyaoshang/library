<?php

	class mysql	{
		private	$dbhost;	//数据库地址
		private $dbuser;	//数据库用户
		private $dbpw;		//数据库密码
		private $dbname;	//数据库名称
		private $dbcoding;	//数据库字符集
		public $link;		//连接标识符
		public  $rs;		//数据库结果集

		/********************************************/
		/*	数据库初始化								*/
		/********************************************/	
		public function __construct($dbhost="", $dbuser="", $dbpw="",$dbname="",$dbcoding = "UTF8"){
	 		$this->dbhost = $dbhost ? $dbhost : $this->dbhost;
	 		$this->dbuser = $dbuser ? $dbuser : $this->dbuser;
	 		$this->dbpw   = $dbpw   ? $dbpw : 	$this->dbpw ;
	 		$this->dbname = $dbname ? $dbname:	$this->dbname;
	 		$this->dbcoding = $dbcoding;
	 		$this->rs = NULL; 
	 		$this->connect();
	 		$this->select_db();
	 		$this->query("SET NAMES $this->dbcoding");
	 	}


		/********************************************/

		/*	数据库连接								*/

		/********************************************/
		public function connect($dbhost="",$dbuser="",$dbpw="") 	{	
			$dbhost=$dbhost?$dbhost:$this->dbhost;
			$dbuser=$dbuser?$dbuser:$this->dbuser;
			$dbpw=$dbpw?$dbpw:$this->dbpw ;
			if(!$this->link=@mysql_connect($dbhost, $dbuser, $dbpw)) {
				$this->halt('连接服务器失败.');
			}
			return $this->link;
		}


		/********************************************/
		/*	数据库选择								*/
		/********************************************/ 

		public function select_db($dbname=""){
			$dbname=$dbname?$dbname:$this->dbname;
			return mysql_select_db($dbname);
		}

	
		/********************************************/
		/*	数据库语句查询							*/
		/********************************************/
		public function query($sql){		
			$query = mysql_query($sql);
			$this->rs=$query;	
			if(!$query) $this->halt('服务器查询出错!');	
			return $query;
		}

		/********************************************/
		/*	数据库结果集转化成对象						*/
		/********************************************/ 
		public function fetch_object($rs=""){	
			$rs=$rs?$rs:$this->rs;
			return @mysql_fetch_object($rs);
		}

		/********************************************/
		/*	数据库结果集转化成数组						*/
		/********************************************/
		public function fetch_array($rs="",$result_type = MYSQL_ASSOC)	{
			$rs=$rs?$rs:$this->rs;
			return @mysql_fetch_array($rs, $result_type);
		}

		/********************************************/
		/*	数据库结果集的数据条数						*/
		/********************************************/ 
		public function num_rows($rs=""){	
			$rs=$rs?$rs:$this->rs;
			return  mysql_num_rows($rs);	
		}

	
		/********************************************/
		/*	返回数据库结果集的插入id					*/
		/********************************************/ 
		public function insert_id(){	
			return  mysql_insert_id();
		}

		
		/********************************************/
		/*	数据库返回错误代码id						*/
		/********************************************/
		public function errno(){
			return mysql_errno();
		}


		/********************************************/
		/*	数据库返回错误							*/
		/********************************************/ 
		public function error(){
			return mysql_error();
		}

		/********************************************/
		/*	数据库结果集影响的数据条数				*/
		/********************************************/
		public function affected_rows(){
			return @mysql_affected_rows();
		}

	
		/********************************************/
		/*	数据库显示错误							*/
		/********************************************/
		public function halt($message ="")	{	
			echo mysql_errno ();
			echo $message;
			exit();
		}	

		/********************************************/
		/*	数据库结果集清空							*/
		/********************************************/
		public function free_result($rs){
			mysql_free_result($rs);
		}

	
		/********************************************/
		/*	数据库连接关闭							*/
		/********************************************/ 
		public function close($link){
			return mysql_close($link);
		}
		
		/********************************************/
		/*	析构函数									*/
		/********************************************/
		public function __destruct(){
			if ( $this->link ){
				$this->close($this->link);
			}
		}
		
	}
?>

