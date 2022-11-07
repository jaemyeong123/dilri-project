<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|------------------------------------------------------------------------
| Author :	심정민
| Create-Date : 2021-10-25
| Memo : 메인
|------------------------------------------------------------------------
*/

class Model_main extends MY_Model{

	// 카테고리
	public function category_management_list() {

				$sql = "SELECT
									category_management_idx,
									category_name,
									category_name_us,
									category_name_kr,
									category_name_bd,
									img_path,
									order_no
								FROM
									tbl_category_management
								where
									state = '1'
								order by order_no ASC
				";

				return $this->query_result($sql, array());
	}

} // 클래스의 끝
?>
