<?php
import(APP_PATH.'/controller/controller_base.php');
define('book_manage_tpl','./tpl/book_manage/');
class book_manage extends controller_base{
	
	public function books_info(){
		$m_type = spClass("m_type");
		$types = $m_type->getType();
		$all_type = $m_type->findAll();
		$this->types = $types;
		$m_book = spClass("m_book");
		if($this->spArgs('type_id') == 0)
			$books = $m_book->findAll();
		else
			$books = $m_book->search_book(array('info_book_type' => $this->spArgs('type_id')));
		$this->books = $books;
		$this->showTpl(book_manage_tpl.'/books_info.html','所有书籍');
	}
	
	public function add_books(){//添加书籍的模板
		$m_type = spClass("m_type");
		$types = $m_type->getType();
		$this->types = $types;
		$this->showTpl(book_manage_tpl.'/add_book.html','书籍添加');
	}
	
	function add_book(){
		$m_book = spClass("m_book");
		$book_info = array( 'info_book_name' => $this->spArgs("bookName"),
				'info_book_owner_name' => $this->spArgs("ownerName"),
				'info_book_owner_phone' => $this->spArgs("ownerPhone"),
				'info_book_owner_addr' => $this->spArgs("ownerAddr"),
				'info_book_type' => $this->spArgs("parenttype"),
				'info_book_autor' => $this->spArgs("autor"),
				'info_book_price' => $this->spArgs("price"),
				'info_book_ISBN' => $this->spArgs("ISBN"),
				'info_book_page' => $this->spArgs("page"),
				'info_book_publish' => $this->spArgs("publish"),
				'info_book_detail' => $this->spArgs("detail"),
				'info_book_add_time' => time());
		if($m_book->search_book(array('info_book_ISBN' =>$book_info['info_book_ISBN']),3) != -1){
			$this->showmessage("书籍已存在");
		}else{
			$m_book->create($book_info);
			$this->showmessage("添加书籍成功",spUrl("book_manage","add_books"));
		}
	}
	
	public function search_book(){
		$m_type = spClass("m_type");
		$types = $m_type->getType();
		$all_type = $m_type->findAll();
		$this->types = $types;
		$m_book = spClass("m_book");
		switch ($this->spArgs('search_type')){
			case 1:
				$condition = array('info_book_name' => $this->spArgs('condition'));
				break;
			case 2:
				$condition = array('info_book_autor' => $this->spArgs('condition'));
				break;
			case 3:
				$condition = array('info_book_ISBN' => $this->spArgs('condition'));
				break;
		}
		$books = $m_book->search_book($condition,$this->spArgs('search_type'));
		if($books != -1){
			$this->books = $books;
			foreach ($books as $book){
				foreach ($all_type as $type){
					if($type['book_type_id'] == $book['info_book_type'])
					$this->book_type = $type['book_type_name'];
				}
			}
			$this->showTpl(book_manage_tpl.'books_info.html','搜索结果');
		}else{
			$this->showmessage('找不到满足条件的书籍');
		}
	}
	public function del_book(){
		$book = array('info_book_id' => $this->spArgs('book_id'));
		$m_book = spClass("m_book");
		$result = $m_book->delete($book);
		if($result == 1)
			$this->showmessage('书籍删除成功',spUrl('book_manage','books_info'));
		else
			$$this->showmessage('书籍删除失败');
	}
	public function edit_book_info(){
		$m_type = spClass("m_type");
		$types = $m_type->getType();
		$this->types = $types;
		$book = array('info_book_id' => $this->spArgs('book_id'));
		$m_book = spClass("m_book");
		$edit_book = $m_book->find($book);
		if(!empty($edit_book)){
			$this->book = $edit_book;
			$this->showTpl(book_manage_tpl.'edit_book.html','编辑书籍信息');
		}else{
			$this->showmessage(null,spUrl("book_manage","books_info"),0);
		}
	}
	public function book_edit(){
		$book_id = $this->spArgs('book_id');
		$book_info = array( 'info_book_name' => $this->spArgs("bookName"),
							'info_book_owner_name' => $this->spArgs("ownerName"),
							'info_book_owner_phone' => $this->spArgs("ownerPhone"),
							'info_book_owner_addr' => $this->spArgs("ownerAddr"),
							'info_book_type' => $this->spArgs("parenttype"),
							'info_book_autor' => $this->spArgs("autor"),
							'info_book_price' => $this->spArgs("price"),
							'info_book_ISBN' => $this->spArgs("ISBN"),
							'info_book_page' => $this->spArgs("page"),
							'info_book_publish' => $this->spArgs("publish"),
							'info_book_detail' => $this->spArgs("detail"));
		$m_book = spClass("m_book");
		$result = $m_book->update(array('info_book_id' => $book_id),$book_info);
		if($result == 1)
			$this->showmessage("修改书籍成功",spUrl("book_manage","books_info"));
		else
			$this->showmessage("修改信息失败");
	}
	public function borrow_book(){
		$book_id = $this->spArgs('book_id');
		if($book_id !=0){
			$m_book = spClass("m_book");
			$result = $m_book->borrow($book_id);
			$this->showmessage($result);
		}else{
			$this->showTpl(book_manage_tpl."book_search.html","书籍搜索");
		}
	}
}