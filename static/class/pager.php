<?php
/**
 * ������pager
 * ���ܣ�ʵ�ַ�ҳ
 * ��ÿҳ��ʾ���������ݿ�����ʼ���˶���
 * �ⲿ����createPager($now,$field,$table)������ҳ��Ϣ
 * ������
 * 	$now��ǰҳ��
 * 	$field��Ҫ���ص��ֶ�
 * 	$table����һ�����в�ѯ
 * 
 * by lancelot
 */
class pager
{
	private $db;		//���ݿ����
	private $sql;		//����SQL���
	private $now;		//��ǰҳ��
	private $pageSize;	//ÿһҳ��С
	private $pages;		//�ܹ�ҳ��
	private $totalCount;//������
	private $returnPager;//���շ��ط�ҳ��Ϣ
	
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
		
		/*�Է�ҳ���з�ҳ��ֻ��ʾ�ӱ�ҳ��ʼ��5ҳҳ��*/
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
	
	/*��ʼ��SQL���*/
	private function initSql($table,$field){
		$start = ( $this->now - 1 ) * $this->pageSize;
		$this->sql = 'SELECT ';
		$this->sql .= $field == '*' ? '* ' : "`$field` ";
		$this->sql .= "FROM `$table` LIMIT $start,$this->pageSize";
	}
	
	/*��ȡ��ҳ��*/
	private function setPages(){
		$sql = "SELECT `info_book_id` FROM `info_book` WHERE 1";
		$rs = $this->db->query($sql);
		$this->totalCount = $this->db->num_rows($rs);
		$this->pages = (int)ceil($this->totalCount / $this->pageSize);
	}
	
	
	
}
?>