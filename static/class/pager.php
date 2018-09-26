<?php
/**
 * 类名：pager
 * 功能：实现分页
 * 以每页显示数量和数据库对象初始化此对象
 * 外部调用createPager($now,$field,$table)产生分页信息
 * 参数：
 * 	$now当前页数
 * 	$field需要返回的字段
 * 	$table从哪一个表中查询
 * 
 * by lancelot
 */
class pager
{
	private $db;		//数据库对象
	private $sql;		//构造SQL语句
	private $now;		//当前页面
	private $pageSize;	//每一页大小
	private $pages;		//总共页数
	private $totalCount;//总条数
	private $returnPager;//最终返回分页信息
	
	public function __construct($pageSize = 10,& $db){
		$this->db = $db;
		$this->pageSize = $pageSize;
	}
	
	public function createPager($now = 1,$table,$field = '*'){
		$this->now = $now;
		$this->initSql($table,$field);
		$this->setPages();
		
		$frontPage = $now <= 1 ? 1 : $now - 1;
		$nextPage = $now >= $this->pages ? $this->pages : $now + 1;
		
		/*对分页进行分页，只显示从本页开始的5页页码*/
		$midPage = array();
		for ( $count = 0,$i = 0; $count < 5; ++$count){
			$judge = $now + $count;
			if ( $judge > 0 && $judge <= $this->pages ){
				$midPage[$i] = $judge;
				++$i;
			}
		}
		
		$this->returnPager = array(
			'total_count' => $this->totalCount,
			'page_size' => $this->pageSize,
			'total_page' => $this->pages,
			'first_page' => 1,
			'prev_page' => $frontPage,
			'mid_page' => $midPage,
			'next_page' => $nextPage,
			'last_page' => $this->pages,
			'current_page' => $this->now
		);
		
		return $this->returnPager;
	}
	
	public function getSql(){
		return $this->sql;
	}
	
	/*初始化SQL语句*/
	private function initSql($table,$field){
		$start = ( $this->now - 1 ) * $this->pageSize;
		$this->sql = 'SELECT ';
		$this->sql .= $field == '*' ? '* ' : "`$field` ";
		$this->sql .= "FROM `$table` LIMIT $start,$this->pageSize";
	}
	
	/*获取总页数*/
	private function setPages(){
		$sql = "SELECT `info_book_id` FROM `info_book` WHERE 1";
		$rs = $this->db->query($sql);
		$this->totalCount = $this->db->num_rows($rs);
		$this->pages = (int)ceil($this->totalCount / $this->pageSize);
	}
	
	
	
}
?>