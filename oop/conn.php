<?php
class mysql_connect{
	// link normal 初始化连接
	public function __construct() {
		$this->host = 'localhost';
		$this->user = 'root';
		$this->pass = '123456';
		$this->dbname = 'vote';
		$this->charset = 'utf8';

		$db = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
		if(!$db) {
			$this->error = mysqli_connect_error();
			$this->errno = mysqli_connect_errno();
			return false;
		}

		mysqli_set_charset($db, $this->charset);
		$this->db = $db;
	}

	public function connect() {
		return $this->db;
	}

	private function save_error($dbconnect) {  
    $this->errno = mysqli_errno($dbconnect);  
    $this->error = mysqli_error($dbconnect);  
  }
/**
 * getDate 获得数据
 */
	public function getDate($sql) {
		$data = array();
		$dbconnect = $this->connect();
		if(dbconnect === false) {
			return false;
		}

		$result = mysqli_query($dbconnect, $sql);
		$this->save_error($dbconnect);
		if(is_bool($result)) {
			return $result;
		} else {
			while($array = mysqli_fetch_array($result, MYSQL_ASSOC)) {
				$data[] = $array;
			}
		}
		mysqli_free_result($result);

		if(count($data) > 0) {
			return $data;
		} else {
			return NULL;
		}
	}

	/** 
   * 运行Sql语句,不返回结果集 
   * @param string $sql  
   * @return mysqli_result | bool 
   */  
  public function excute_sql($sql)  
  {  
      $dbconnect = $this->connect();  
      if ($dbconnect === false) {  
          return FALSE;  
      }  
      // 成功:TRUE 失败:FALSE  
      $res = mysqli_query($dbconnect,$sql);  
        
      // 保存错误  
      $this->save_error($dbconnect);  
        
      return $res;  
  } 

  

	/**
	 * db_insert 插入新数据
	 * @ $db 数据库名
	 * @ $table_name 数据表名
	 * @ params  array( '列名' => 'value')
	 * @ params bool $boo 默认false返回操作是否成功 true返回新增ID
	 * @ return $boo = true 返回新增ID $boo = false 返回新增是否成功
	 */
	public function db_insert($db, $table_name, $params, $boo = false) {
		// 列名
		$fileds = array();
		// 值
		$values = array();

		foreach($params as $key => $value) {
			$fileds = "`".$key."`";
			$values[] = "'".$value."'";
		}

		$str_fileds = implode(',', $fileds);
		$str_values = implode(',', $values);

		$sql = "insert into `".$table_name."` (".$str_fileds.") values(".$str_values.")";  

		$result = $db -> excute_sql($sql);

		if($boo){  
        // 获取新增后的ID  
        $result = $db->lastId();  
    }  
  
    return $result;  
	}

}

?>