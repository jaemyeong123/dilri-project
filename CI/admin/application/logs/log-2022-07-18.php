<html>

ERROR - 2022-07-18 10:04:19 --> query :  '<pre>admin.dilri.com/login/login_action 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
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
ERROR - 2022-07-18 10:04:23 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
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
ERROR - 2022-07-18 10:04:23 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
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
ERROR - 2022-07-18 10:04:27 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 10:04:27 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 10:04:29 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=5 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 12:15:25 --> query :  '<pre>admin.dilri.com/login/login_action 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
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
ERROR - 2022-07-18 12:15:26 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
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
ERROR - 2022-07-18 12:15:26 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
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
ERROR - 2022-07-18 12:15:29 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 12:15:29 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 12:15:30 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=9 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 12:15:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=9 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 12:16:43 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=9 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 12:17:28 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=9 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 12:17:40 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=9 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 14:16:05 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=9 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:32:18 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=9 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:32:21 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=9 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:33:45 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=9 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:33:55 --> Severity: Notice --> Undefined variable: title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 137
ERROR - 2022-07-18 15:33:55 --> Severity: Notice --> Undefined variable: title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 138
ERROR - 2022-07-18 15:33:55 --> Severity: Notice --> Undefined variable: title_bd /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 139
ERROR - 2022-07-18 15:33:55 --> Severity: Notice --> Undefined variable: contents_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 141
ERROR - 2022-07-18 15:33:55 --> Severity: Notice --> Undefined variable: contents_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 142
ERROR - 2022-07-18 15:33:55 --> Severity: Notice --> Undefined variable: contents_bd /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 143
ERROR - 2022-07-18 15:33:55 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(2) "11"
  ["title"]=>
  string(1) "3"
  ["contents"]=>
  string(1) "3"
  ["title_us"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["title_bd"]=>
  NULL
  ["contents_us"]=>
  NULL
  ["contents_kr"]=>
  NULL
  ["contents_bd"]=>
  NULL
  ["faq_type"]=>
  string(2) "11"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '3',
							title_us = NULL,
							title_kr = NULL,
							title_bd = NULL,
							contents = '3',
							contents_us = NULL,
							contents_kr = NULL,
							contents_bd = NULL,
							faq_type = '11',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '11'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:34:02 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=9 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:34:03 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=9 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:34:55 --> Severity: Notice --> Undefined index: title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/models/Model_faq.php 17
ERROR - 2022-07-18 15:34:55 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							title_kr,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:34:55 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:35:48 --> Severity: Notice --> Undefined index: title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/models/Model_faq.php 17
ERROR - 2022-07-18 15:35:48 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							title_kr,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:35:48 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:35:49 --> Severity: Notice --> Undefined index: title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/models/Model_faq.php 17
ERROR - 2022-07-18 15:35:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							title_kr,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:35:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:36:19 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:36:19 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:36:25 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=12 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:36:27 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:36:27 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:36:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:36:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:36:58 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=13 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:37:07 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(5) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							notice_idx,
							title,
							notice_state,
							view_cnt,
							del_yn,
							ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') as  upd_date
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:37:07 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:37:09 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:37:09 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:37:15 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=16 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:37:41 --> Severity: Notice --> Undefined variable: title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 137
ERROR - 2022-07-18 15:37:41 --> Severity: Notice --> Undefined variable: title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 138
ERROR - 2022-07-18 15:37:41 --> Severity: Notice --> Undefined variable: title_bd /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 139
ERROR - 2022-07-18 15:37:41 --> Severity: Notice --> Undefined variable: contents_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 141
ERROR - 2022-07-18 15:37:41 --> Severity: Notice --> Undefined variable: contents_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 142
ERROR - 2022-07-18 15:37:41 --> Severity: Notice --> Undefined variable: contents_bd /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 143
ERROR - 2022-07-18 15:37:41 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(2) "11"
  ["title"]=>
  string(22) "커뮤니티 뱅골어"
  ["contents"]=>
  string(1) "3"
  ["title_us"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["title_bd"]=>
  NULL
  ["contents_us"]=>
  NULL
  ["contents_kr"]=>
  NULL
  ["contents_bd"]=>
  NULL
  ["faq_type"]=>
  string(2) "11"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '커뮤니티 뱅골어',
							title_us = NULL,
							title_kr = NULL,
							title_bd = NULL,
							contents = '3',
							contents_us = NULL,
							contents_kr = NULL,
							contents_bd = NULL,
							faq_type = '11',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '11'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:37:59 --> Severity: Notice --> Undefined variable: title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 137
ERROR - 2022-07-18 15:37:59 --> Severity: Notice --> Undefined variable: title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 138
ERROR - 2022-07-18 15:37:59 --> Severity: Notice --> Undefined variable: title_bd /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 139
ERROR - 2022-07-18 15:37:59 --> Severity: Notice --> Undefined variable: contents_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 141
ERROR - 2022-07-18 15:37:59 --> Severity: Notice --> Undefined variable: contents_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 142
ERROR - 2022-07-18 15:37:59 --> Severity: Notice --> Undefined variable: contents_bd /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 143
ERROR - 2022-07-18 15:37:59 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(2) "11"
  ["title"]=>
  string(22) "커뮤니티 뱅골어"
  ["contents"]=>
  string(1) "3"
  ["title_us"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["title_bd"]=>
  NULL
  ["contents_us"]=>
  NULL
  ["contents_kr"]=>
  NULL
  ["contents_bd"]=>
  NULL
  ["faq_type"]=>
  string(2) "11"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '커뮤니티 뱅골어',
							title_us = NULL,
							title_kr = NULL,
							title_bd = NULL,
							contents = '3',
							contents_us = NULL,
							contents_kr = NULL,
							contents_bd = NULL,
							faq_type = '11',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '11'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:38:00 --> Severity: Notice --> Undefined variable: title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 137
ERROR - 2022-07-18 15:38:00 --> Severity: Notice --> Undefined variable: title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 138
ERROR - 2022-07-18 15:38:00 --> Severity: Notice --> Undefined variable: title_bd /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 139
ERROR - 2022-07-18 15:38:00 --> Severity: Notice --> Undefined variable: contents_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 141
ERROR - 2022-07-18 15:38:00 --> Severity: Notice --> Undefined variable: contents_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 142
ERROR - 2022-07-18 15:38:00 --> Severity: Notice --> Undefined variable: contents_bd /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 143
ERROR - 2022-07-18 15:38:00 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(2) "11"
  ["title"]=>
  string(22) "커뮤니티 뱅골어"
  ["contents"]=>
  string(1) "3"
  ["title_us"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["title_bd"]=>
  NULL
  ["contents_us"]=>
  NULL
  ["contents_kr"]=>
  NULL
  ["contents_bd"]=>
  NULL
  ["faq_type"]=>
  string(2) "11"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '커뮤니티 뱅골어',
							title_us = NULL,
							title_kr = NULL,
							title_bd = NULL,
							contents = '3',
							contents_us = NULL,
							contents_kr = NULL,
							contents_bd = NULL,
							faq_type = '11',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '11'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:38:00 --> Severity: Notice --> Undefined variable: title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 137
ERROR - 2022-07-18 15:38:00 --> Severity: Notice --> Undefined variable: title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 138
ERROR - 2022-07-18 15:38:00 --> Severity: Notice --> Undefined variable: title_bd /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 139
ERROR - 2022-07-18 15:38:00 --> Severity: Notice --> Undefined variable: contents_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 141
ERROR - 2022-07-18 15:38:00 --> Severity: Notice --> Undefined variable: contents_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 142
ERROR - 2022-07-18 15:38:00 --> Severity: Notice --> Undefined variable: contents_bd /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 143
ERROR - 2022-07-18 15:38:00 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(2) "11"
  ["title"]=>
  string(22) "커뮤니티 뱅골어"
  ["contents"]=>
  string(1) "3"
  ["title_us"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["title_bd"]=>
  NULL
  ["contents_us"]=>
  NULL
  ["contents_kr"]=>
  NULL
  ["contents_bd"]=>
  NULL
  ["faq_type"]=>
  string(2) "11"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '커뮤니티 뱅골어',
							title_us = NULL,
							title_kr = NULL,
							title_bd = NULL,
							contents = '3',
							contents_us = NULL,
							contents_kr = NULL,
							contents_bd = NULL,
							faq_type = '11',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '11'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:38:12 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=16 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:42:42 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=16 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:42:48 --> Severity: Notice --> Undefined variable: title /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 134
ERROR - 2022-07-18 15:42:48 --> Severity: Notice --> Undefined variable: contents /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 135
ERROR - 2022-07-18 15:42:48 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(2) "11"
  ["title"]=>
  NULL
  ["contents"]=>
  NULL
  ["title_us"]=>
  string(1) "1"
  ["title_kr"]=>
  string(1) "2"
  ["title_bd"]=>
  string(1) "3"
  ["contents_us"]=>
  string(1) "1"
  ["contents_kr"]=>
  string(1) "2"
  ["contents_bd"]=>
  string(1) "3"
  ["faq_type"]=>
  string(2) "11"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = NULL,
							title_us = '1',
							title_kr = '2',
							title_bd = '3',
							contents = NULL,
							contents_us = '1',
							contents_kr = '2',
							contents_bd = '3',
							faq_type = '11',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '11'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:43:09 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:43:09 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:43:21 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:43:21 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:43:21 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=19 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:43:30 --> Severity: Notice --> Undefined variable: title /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 134
ERROR - 2022-07-18 15:43:30 --> Severity: Notice --> Undefined variable: contents /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/controllers/Faq_v_1_0_0.php 135
ERROR - 2022-07-18 15:43:30 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(2) "11"
  ["title"]=>
  NULL
  ["contents"]=>
  NULL
  ["title_us"]=>
  string(1) "1"
  ["title_kr"]=>
  string(1) "2"
  ["title_bd"]=>
  string(1) "3"
  ["contents_us"]=>
  string(1) "1"
  ["contents_kr"]=>
  string(1) "3"
  ["contents_bd"]=>
  string(1) "3"
  ["faq_type"]=>
  string(2) "11"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = NULL,
							title_us = '1',
							title_kr = '2',
							title_bd = '3',
							contents = NULL,
							contents_us = '1',
							contents_kr = '3',
							contents_bd = '3',
							faq_type = '11',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '11'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:44:09 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:44:09 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:44:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:44:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:47:34 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:47:34 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:48:36 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=22 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:49:23 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:49:23 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:49:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:49:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:49:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:49:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:49:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:49:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:49:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:49:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:49:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:49:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:49:38 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:49:38 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:49:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:49:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:50:05 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:50:05 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:50:05 --> Severity: Notice --> Undefined property: stdClass::$title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:05 --> Severity: Notice --> Undefined property: stdClass::$title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:05 --> Severity: Notice --> Undefined property: stdClass::$title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:05 --> Severity: Notice --> Undefined property: stdClass::$title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:05 --> Severity: Notice --> Undefined property: stdClass::$title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:05 --> Severity: Notice --> Undefined property: stdClass::$title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:05 --> Severity: Notice --> Undefined property: stdClass::$title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:05 --> Severity: Notice --> Undefined property: stdClass::$title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:05 --> Severity: Notice --> Undefined property: stdClass::$title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:05 --> Severity: Notice --> Undefined property: stdClass::$title_us /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:23 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:50:23 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:50:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:24 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:50:24 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:50:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:50:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:51:17 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=22 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:51:22 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:51:22 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:52:22 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(7) {
  ["title"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:52:22 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(7) {
  ["title"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:52:22 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:22 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:22 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:22 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:22 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:22 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:22 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:22 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:22 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:22 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:23 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(7) {
  ["title"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:52:23 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(7) {
  ["title"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:52:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:52:23 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:24 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(7) {
  ["title"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:53:24 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(7) {
  ["title"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:53:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:24 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:39 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(7) {
  ["title"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:53:39 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(7) {
  ["title"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:53:39 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:39 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:39 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:39 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:39 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:39 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:39 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:39 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:39 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:39 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:40 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(7) {
  ["title"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:53:40 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(7) {
  ["title"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:53:40 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:40 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:40 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:40 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:40 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:40 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:40 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:40 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:40 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:53:40 --> Severity: Notice --> Undefined property: stdClass::$title_kr /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/views/view_faq_list_get.php 29
ERROR - 2022-07-18 15:55:46 --> Severity: Notice --> Undefined variable: title /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/models/Model_faq.php 38
ERROR - 2022-07-18 15:55:46 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title_kr,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:55:46 --> Severity: Notice --> Undefined variable: title /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/models/Model_faq.php 78
ERROR - 2022-07-18 15:55:46 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:55:49 --> Severity: Notice --> Undefined variable: title /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/models/Model_faq.php 38
ERROR - 2022-07-18 15:55:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title_kr,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:55:49 --> Severity: Notice --> Undefined variable: title /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/models/Model_faq.php 78
ERROR - 2022-07-18 15:55:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:55:51 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=23 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:55:53 --> Severity: Notice --> Undefined variable: title /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/models/Model_faq.php 38
ERROR - 2022-07-18 15:55:53 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title_kr,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:55:53 --> Severity: Notice --> Undefined variable: title /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/models/Model_faq.php 78
ERROR - 2022-07-18 15:55:53 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:56:17 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title_kr,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:56:17 --> Severity: Notice --> Undefined variable: title /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/models/Model_faq.php 78
ERROR - 2022-07-18 15:56:17 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:56:30 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title_kr,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:56:30 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:56:37 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title_kr,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:56:37 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:56:50 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=23 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:57:05 --> Severity: Notice --> Undefined index: title /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/models/Model_faq.php 135
ERROR - 2022-07-18 15:57:05 --> Severity: Notice --> Undefined index: contents /home/sususoftuser/html/CI/admin/application/modules/faq/faq_v_1_0_0/models/Model_faq.php 139
ERROR - 2022-07-18 15:57:05 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(9) {
  ["faq_idx"]=>
  string(2) "11"
  ["title_us"]=>
  string(6) "영어"
  ["title_kr"]=>
  string(9) "한국어"
  ["title_bd"]=>
  string(9) "뱅골어"
  ["contents_us"]=>
  string(1) "5"
  ["contents_kr"]=>
  string(1) "3"
  ["contents_bd"]=>
  string(1) "3"
  ["faq_type"]=>
  string(2) "11"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = NULL,
							title_us = '영어',
							title_kr = '한국어',
							title_bd = '뱅골어',
							contents = NULL,
							contents_us = '5',
							contents_kr = '3',
							contents_bd = '3',
							faq_type = '11',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '11'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:57:08 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=23 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:57:09 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=23 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
							faq_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							contents,
							contents_us,
							contents_kr,
							contents_bd,
							faq_type,
							state,
							ins_date,
							upd_date,
							del_yn
						FROM
							tbl_faq a
						WHERE
							faq_idx = '11'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:57:11 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title_kr,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:57:11 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 15:59:08 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title_kr,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 15:59:08 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(6) {
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 16:01:35 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(7) {
  ["title"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title_kr,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 16:01:35 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(7) {
  ["title"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-07-18 16:01:39 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(7) {
  ["title"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							faq_idx,
							title_kr,
							faq_type,
							del_yn,
							ins_date
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						 ORDER BY ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-07-18 16:01:39 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36^ 
array(7) {
  ["title"]=>
  NULL
  ["title_kr"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["faq_type"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_faq
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
