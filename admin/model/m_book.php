<?php
class m_book extends spModel{
	var $table = "book_info";
	var $pk = "info_book_id";
	
	function getBookInfo(){
		$borrowed = $booksBorrowed = $booksSum = 0;
		$all_book = $this->findAll();
		foreach ($all_book as $each_book){
			$booksSum = $booksSum + $each_book['info_book_storage'];
			$booksBorrowed = $booksBorrowed + $each_book['info_book_borrow'];
			if($each_book['info_book_borrow'] == $each_book['info_book_storage'])
				$borrowed++;
		}
		$Info = array("booksum" => $this->findCount(),//行数
				"borrowed" => $borrowed,//已借出书目种数sum()
				"booksSum" => $booksSum,//书籍总数
				"typeCount" => 0,
				"booksBorrowed" => $booksBorrowed);//已借出书籍数目
		return $Info;
	}
	
	function search_book($book_info){
		
		$books = $this->findAll($book_info);
		if(empty($books))
			return -1;
		else 
			return $books;
	}
}