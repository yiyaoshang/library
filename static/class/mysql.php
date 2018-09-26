<?php

	class mysql	{
		private	$dbhost;	//���ݿ��ַ
		private $dbuser;	//���ݿ��û�
		private $dbpw;		//���ݿ�����
		private $dbname;	//���ݿ�����
		private $dbcoding;	//���ݿ��ַ���
		public $link;		//���ӱ�ʶ��
		public  $rs;		//���ݿ�����

		/********************************************/
		/*	���ݿ��ʼ��								*/
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

		/*	���ݿ�����								*/

		/********************************************/
		public function connect($dbhost="",$dbuser="",$dbpw="") 	{	
			$dbhost=$dbhost?$dbhost:$this->dbhost;
			$dbuser=$dbuser?$dbuser:$this->dbuser;
			$dbpw=$dbpw?$dbpw:$this->dbpw ;
			if(!$this->link=@mysql_connect($dbhost, $dbuser, $dbpw)) {
				$this->halt('���ӷ�����ʧ��.');
			}
			return $this->link;
		}


		/********************************************/
		/*	���ݿ�ѡ��								*/
		/********************************************/ 

		public function select_db($dbname=""){
			$dbname=$dbname?$dbname:$this->dbname;
			return mysql_select_db($dbname);
		}

	
		/********************************************/
		/*	���ݿ�����ѯ							*/
		/********************************************/
		public function query($sql){		
			$query = mysql_query($sql);
			$this->rs=$query;	
			if(!$query) $this->halt('��������ѯ����!');	
			return $query;
		}

		/********************************************/
		/*	���ݿ�����ת���ɶ���						*/
		/********************************************/ 
		public function fetch_object($rs=""){	
			$rs=$rs?$rs:$this->rs;
			return @mysql_fetch_object($rs);
		}

		/********************************************/
		/*	���ݿ�����ת��������						*/
		/********************************************/
		public function fetch_array($rs="",$result_type = MYSQL_ASSOC)	{
			$rs=$rs?$rs:$this->rs;
			return @mysql_fetch_array($rs, $result_type);
		}

		/********************************************/
		/*	���ݿ���������������						*/
		/********************************************/ 
		public function num_rows($rs=""){	
			$rs=$rs?$rs:$this->rs;
			return  mysql_num_rows($rs);	
		}

	
		/********************************************/
		/*	�������ݿ������Ĳ���id					*/
		/********************************************/ 
		public function insert_id(){	
			return  mysql_insert_id();
		}

		
		/********************************************/
		/*	���ݿⷵ�ش������id						*/
		/********************************************/
		public function errno(){
			return mysql_errno();
		}


		/********************************************/
		/*	���ݿⷵ�ش���							*/
		/********************************************/ 
		public function error(){
			return mysql_error();
		}

		/********************************************/
		/*	���ݿ�����Ӱ�����������				*/
		/********************************************/
		public function affected_rows(){
			return @mysql_affected_rows();
		}

	
		/********************************************/
		/*	���ݿ���ʾ����							*/
		/********************************************/
		public function halt($message ="")	{	
			echo mysql_errno ();
			echo $message;
			exit();
		}	

		/********************************************/
		/*	���ݿ��������							*/
		/********************************************/
		public function free_result($rs){
			mysql_free_result($rs);
		}

	
		/********************************************/
		/*	���ݿ����ӹر�							*/
		/********************************************/ 
		public function close($link){
			return mysql_close($link);
		}
		
		/********************************************/
		/*	��������									*/
		/********************************************/
		public function __destruct(){
			if ( $this->link ){
				$this->close($this->link);
			}
		}
		
	}
?>

