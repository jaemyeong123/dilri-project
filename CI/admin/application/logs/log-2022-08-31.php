<html>

ERROR - 2022-08-31 14:26:03 --> query :  '<pre>admin.dilri.com/login/login_action 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
array(2) {
  ["admin_id"]=>
  string(9) "junho0514"
  ["admin_pw"]=>
  string(12) "sususoft0514"
}

 <br> ^SELECT
							admin_idx,
							FN_AES_DECRYPT(admin_id) AS admin_id,
							admin_name,
							admin_right
						FROM
							tbl_admin
						WHERE
							FN_AES_DECRYPT(admin_id) = 'junho0514'
							AND admin_pw = SHA2('sususoft0514',512)
					</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:26:08 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
array(18) {
  ["member_id"]=>
  NULL
  ["member_name"]=>
  NULL
  ["del_yn"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["s_member_point"]=>
  NULL
  ["e_member_point"]=>
  NULL
  ["s_product_cnt"]=>
  NULL
  ["e_product_cnt"]=>
  NULL
  ["s_free_product_cnt"]=>
  NULL
  ["e_free_product_cnt"]=>
  NULL
  ["s_good_product_cnt"]=>
  NULL
  ["e_good_product_cnt"]=>
  NULL
  ["s_bad_product_cnt"]=>
  NULL
  ["e_bad_product_cnt"]=>
  NULL
  ["orderby"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							FN_AES_DECRYPT(member_name) AS member_name,
							FN_AES_DECRYPT(member_phone) AS member_phone,
							member_nickname,
							DATE_FORMAT(ins_date, '%Y-%m-%d') as ins_date,
							member_point,
							product_cnt,
							free_product_cnt,
							good_product_cnt,
							bad_product_cnt,
							member_leave_reason,
							DATE_FORMAT(member_leave_date, '%Y-%m-%d') as member_leave_date,
							del_yn
						FROM
							tbl_member
						WHERE 1=1
		 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-08-31 14:26:08 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
array(18) {
  ["member_id"]=>
  NULL
  ["member_name"]=>
  NULL
  ["del_yn"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["s_member_point"]=>
  NULL
  ["e_member_point"]=>
  NULL
  ["s_product_cnt"]=>
  NULL
  ["e_product_cnt"]=>
  NULL
  ["s_free_product_cnt"]=>
  NULL
  ["e_free_product_cnt"]=>
  NULL
  ["s_good_product_cnt"]=>
  NULL
  ["e_good_product_cnt"]=>
  NULL
  ["s_bad_product_cnt"]=>
  NULL
  ["e_bad_product_cnt"]=>
  NULL
  ["orderby"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_member
						WHERE
							1=1
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:26:15 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:26:18 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:26:19 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:26:20 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:26:22 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:26:23 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:26:24 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:26:24 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:26:29 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_4' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:27:35 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_4' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:27:40 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_6' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:27:46 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_6' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:27:46 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_6' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:27:46 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_6' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:27:49 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_6' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:27:50 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_6' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:27:50 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_6' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:27:54 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_3' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:27:55 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_3' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:27:56 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_3' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:27:57 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_3' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:27:57 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_3' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:00 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_3' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:05 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_4' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:08 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:09 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_5' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:10 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_5' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:13 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Electronics',
						category_name_kr = 'fdf',
						category_name_bd = 'fdfds',
						url = NULL
					WHERE
						category_management_idx = '1'
					</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:13 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:15 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_4' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:15 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Men’s Fashion',
						category_name_kr = '마이크로소프트',
						category_name_bd = '뱅골어4',
						url = NULL
					WHERE
						category_management_idx = '4'
					</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:16 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Women’s Fashion',
						category_name_kr = '로지텍',
						category_name_bd = '뱅골어6',
						url = NULL
					WHERE
						category_management_idx = '6'
					</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:16 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_6' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:20 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Household',
						category_name_kr = '애플',
						category_name_bd = '뱅골어3',
						url = NULL
					WHERE
						category_management_idx = '3'
					</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:20 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_3' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:21 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_5' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:21 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Others',
						category_name_kr = '나이키',
						category_name_bd = '뱅골어5',
						url = NULL
					WHERE
						category_management_idx = '5'
					</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:23 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
array(2) {
  ["category_management_idx"]=>
  string(1) "2"
  ["category_depth"]=>
  string(1) "1"
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product a
						WHERE
							a.del_yn = 'N'
							AND a.category_management_idx = '2'
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:28:24 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_2' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:29:27 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
array(2) {
  ["category_management_idx"]=>
  string(2) "16"
  ["category_depth"]=>
  string(1) "1"
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product a
						WHERE
							a.del_yn = 'N'
							AND a.category_management_idx = '16'
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:29:29 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_16' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:38:37 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/img_change?category_management_idx=1 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							img_path,
							category_name
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and category_management_idx='1'
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:38:37 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:38:46 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/img_change_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						img_path = '/media/commonfile/202208/31/34361bb4c8c538bd60851b92f5aae13a.png'
					WHERE
						category_management_idx = '1'
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:38:47 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:27 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_4' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:28 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:28 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/img_change?category_management_idx=1 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							img_path,
							category_name
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and category_management_idx='1'
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:35 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/img_change_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						img_path = '/media/commonfile/202208/31/a848e79fc3d4661d7f9682187e99b83e.png'
					WHERE
						category_management_idx = '1'
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:36 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:37 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_4' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:37 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/img_change?category_management_idx=4 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							img_path,
							category_name
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and category_management_idx='4'
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:44 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/img_change_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						img_path = '/media/commonfile/202208/31/083d5818a5275472723a9e2a226909e4.png'
					WHERE
						category_management_idx = '4'
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:46 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:47 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_6' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:47 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/img_change?category_management_idx=6 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							img_path,
							category_name
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and category_management_idx='6'
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:53 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/img_change_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						img_path = '/media/commonfile/202208/31/8bdaf4400809b3694db3c1b0a035d894.png'
					WHERE
						category_management_idx = '6'
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:54 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:55 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_3' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:40:55 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/img_change?category_management_idx=3 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							img_path,
							category_name
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and category_management_idx='3'
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:41:01 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/img_change_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						img_path = '/media/commonfile/202208/31/2d7b10036200be78b69f3cddeecf904b.png'
					WHERE
						category_management_idx = '3'
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:41:02 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '1' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:41:03 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_5' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:41:03 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/img_change?category_management_idx=5 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							img_path,
							category_name
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and category_management_idx='5'
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:41:08 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/img_change_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						img_path = '/media/commonfile/202208/31/b6a80b3839ab68e27dd20d9b0f594d50.png'
					WHERE
						category_management_idx = '5'
		</pre> 
 <br /> ' 
ERROR - 2022-08-31 14:41:09 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							parent_category_management_idx,
							category_depth,
							state,
							url,
							img_path,
							category_name,
							category_name_us,
							category_name_kr,
							category_name_bd
						FROM
							tbl_category_management
						WHERE	del_yn = 'N'
						and type='1'
		 AND category_depth = '1' ORDER BY order_no ASC</pre> 
 <br /> ' 
