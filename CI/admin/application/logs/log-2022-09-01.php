<html>

ERROR - 2022-09-01 09:26:15 --> query :  '<pre>admin.dilri.com/login/login_action 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:26:21 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:26:21 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:26:23 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["member_name"]=>
  NULL
  ["contents"]=>
  NULL
  ["title"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["best_yn"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["hash_tag"]=>
  NULL
  ["orderby"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.board_idx,
							b.member_name,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.contents,
							a.recommend_cnt,
							a.view_cnt,
							a.scrap_cnt,
						  a.report_cnt,
						  a.reply_cnt,
							a.display_yn,
							a.best_yn,
							a.ins_date,
							a.upd_date,
							a.del_yn
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
		 ORDER BY a.board_idx DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:26:23 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["member_name"]=>
  NULL
  ["contents"]=>
  NULL
  ["title"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["best_yn"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["hash_tag"]=>
  NULL
  ["orderby"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:26:26 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["member_name"]=>
  NULL
  ["contents"]=>
  NULL
  ["title"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["best_yn"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["hash_tag"]=>
  NULL
  ["orderby"]=>
  NULL
  ["page_no"]=>
  int(10)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.board_idx,
							b.member_name,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.contents,
							a.recommend_cnt,
							a.view_cnt,
							a.scrap_cnt,
						  a.report_cnt,
						  a.reply_cnt,
							a.display_yn,
							a.best_yn,
							a.ins_date,
							a.upd_date,
							a.del_yn
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
		 ORDER BY a.board_idx DESC LIMIT 10, 10</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:26:26 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["member_name"]=>
  NULL
  ["contents"]=>
  NULL
  ["title"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["best_yn"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["hash_tag"]=>
  NULL
  ["orderby"]=>
  NULL
  ["page_no"]=>
  int(10)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:26:27 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["member_name"]=>
  NULL
  ["contents"]=>
  NULL
  ["title"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["best_yn"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["hash_tag"]=>
  NULL
  ["orderby"]=>
  NULL
  ["page_no"]=>
  int(20)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.board_idx,
							b.member_name,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.contents,
							a.recommend_cnt,
							a.view_cnt,
							a.scrap_cnt,
						  a.report_cnt,
						  a.reply_cnt,
							a.display_yn,
							a.best_yn,
							a.ins_date,
							a.upd_date,
							a.del_yn
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
		 ORDER BY a.board_idx DESC LIMIT 20, 10</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:26:27 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["member_name"]=>
  NULL
  ["contents"]=>
  NULL
  ["title"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["best_yn"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["hash_tag"]=>
  NULL
  ["orderby"]=>
  NULL
  ["page_no"]=>
  int(20)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:26:28 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["member_name"]=>
  NULL
  ["contents"]=>
  NULL
  ["title"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["best_yn"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["hash_tag"]=>
  NULL
  ["orderby"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.board_idx,
							b.member_name,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.contents,
							a.recommend_cnt,
							a.view_cnt,
							a.scrap_cnt,
						  a.report_cnt,
						  a.reply_cnt,
							a.display_yn,
							a.best_yn,
							a.ins_date,
							a.upd_date,
							a.del_yn
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
		 ORDER BY a.board_idx DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:26:28 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["member_name"]=>
  NULL
  ["contents"]=>
  NULL
  ["title"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["best_yn"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["hash_tag"]=>
  NULL
  ["orderby"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:27:07 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["member_name"]=>
  NULL
  ["contents"]=>
  NULL
  ["title"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["best_yn"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["hash_tag"]=>
  NULL
  ["orderby"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.board_idx,
							b.member_name,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.contents,
							a.recommend_cnt,
							a.view_cnt,
							a.scrap_cnt,
						  a.report_cnt,
						  a.reply_cnt,
							a.display_yn,
							a.best_yn,
							a.ins_date,
							a.upd_date,
							a.del_yn
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
		 ORDER BY a.board_idx DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:27:07 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["member_name"]=>
  NULL
  ["contents"]=>
  NULL
  ["title"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["best_yn"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["hash_tag"]=>
  NULL
  ["orderby"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:27:10 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(13) {
  ["member_id"]=>
  NULL
  ["member_name"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["title"]=>
  NULL
  ["category_name"]=>
  NULL
  ["tags"]=>
  NULL
  ["product_state"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["free_product_yn"]=>
  NULL
  ["famous_product_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.product_idx,
							FN_AES_DECRYPT(b.member_id) AS member_id,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							FN_AES_DECRYPT(c.member_id) AS partner_member_id,
							FN_AES_DECRYPT(c.member_name) AS partner_member_name,
							d.category_name,
						  a.img_path,
						  a.title,
							a.tags,
							a.report_cnt,
							a.product_state,
							a.product_price,
							a.display_yn,
							a.free_product_yn,
							a.famous_product_yn,
							a.ins_date,
							a.upd_date,
							a.del_yn
						FROM
							tbl_product a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn != 'Y'
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx
							JOIN tbl_category_management d ON d.category_management_idx = a.category_management_idx AND d.del_yn = 'N'
							
						WHERE
							a.del_yn = 'N'
		 ORDER BY a.product_idx DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:27:10 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(13) {
  ["member_id"]=>
  NULL
  ["member_name"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["title"]=>
  NULL
  ["category_name"]=>
  NULL
  ["tags"]=>
  NULL
  ["product_state"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["free_product_yn"]=>
  NULL
  ["famous_product_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn != 'Y'
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx
							JOIN tbl_category_management d ON d.category_management_idx = a.category_management_idx AND d.del_yn = 'N'
							
						WHERE
							a.del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 00:27:10 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-01 00:27:10 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-01 00:27:10 --> 404 Page Not Found: /index
ERROR - 2022-09-01 00:27:10 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-01 00:27:10 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-01 00:27:10 --> 404 Page Not Found: /index
ERROR - 2022-09-01 09:54:08 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(13) {
  ["member_id"]=>
  NULL
  ["member_name"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["title"]=>
  NULL
  ["category_name"]=>
  NULL
  ["tags"]=>
  NULL
  ["product_state"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["free_product_yn"]=>
  NULL
  ["famous_product_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.product_idx,
							FN_AES_DECRYPT(b.member_id) AS member_id,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							FN_AES_DECRYPT(c.member_id) AS partner_member_id,
							FN_AES_DECRYPT(c.member_name) AS partner_member_name,
							d.category_name,
						  a.img_path,
						  a.title,
							a.tags,
							a.report_cnt,
							a.product_state,
							a.product_price,
							a.display_yn,
							a.free_product_yn,
							a.famous_product_yn,
							a.ins_date,
							a.upd_date,
							a.del_yn
						FROM
							tbl_product a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn != 'Y'
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx
							JOIN tbl_category_management d ON d.category_management_idx = a.category_management_idx AND d.del_yn = 'N'
							
						WHERE
							a.del_yn = 'N'
		 ORDER BY a.product_idx DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:08 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(13) {
  ["member_id"]=>
  NULL
  ["member_name"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["title"]=>
  NULL
  ["category_name"]=>
  NULL
  ["tags"]=>
  NULL
  ["product_state"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["free_product_yn"]=>
  NULL
  ["famous_product_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn != 'Y'
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx
							JOIN tbl_category_management d ON d.category_management_idx = a.category_management_idx AND d.del_yn = 'N'
							
						WHERE
							a.del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:10 --> query :  '<pre>admin.dilri.com/member_point_v_1_0_0/member_point_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(7) {
  ["member_id"]=>
  NULL
  ["member_name"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["point_type"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							FN_AES_DECRYPT(b.member_id) AS member_id,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.point_type,
							a.point,
							a.memo,
							a.ins_date
						FROM
							tbl_member_point AS a LEFT JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE 1=1
		 ORDER BY a.ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:10 --> query :  '<pre>admin.dilri.com/member_point_v_1_0_0/member_point_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_member_point AS a LEFT JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE 1=1
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:12 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["state"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							banner_idx,
							banner_type,
							title,
							contents,
							state,
							ins_date,
							hits_cnt
						FROM
							tbl_banner
						WHERE
							del_yn = 'N'
							 ORDER BY ins_date DESC limit 0, 10</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:12 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["state"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
					    count(*) as cnt
						FROM
							tbl_banner
						WHERE
							del_yn = 'N'
							</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:12 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:54:19 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:54:19 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET state= IF(state = 0,'1','0')
					WHERE
						category_management_idx = '2'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:19 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:54:21 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["category_management_idx"]=>
  string(1) "7"
  ["category_depth"]=>
  string(1) "1"
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product a
						WHERE
							a.del_yn = 'N'
							AND a.category_management_idx = '7'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:21 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET state= IF(state = 0,'1','0')
					WHERE
						category_management_idx = '7'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:21 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_7' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:22 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["category_management_idx"]=>
  string(2) "13"
  ["category_depth"]=>
  string(1) "1"
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product a
						WHERE
							a.del_yn = 'N'
							AND a.category_management_idx = '13'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:22 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET state= IF(state = 0,'1','0')
					WHERE
						category_management_idx = '13'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:23 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_13' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:24 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["category_management_idx"]=>
  string(2) "14"
  ["category_depth"]=>
  string(1) "1"
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product a
						WHERE
							a.del_yn = 'N'
							AND a.category_management_idx = '14'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:24 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET state= IF(state = 0,'1','0')
					WHERE
						category_management_idx = '14'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:24 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
		 AND category_depth = '2'  AND parent_category_management_idx = 'category_name_us_14' ORDER BY order_no ASC</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:27 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:54:27 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET state= IF(state = 0,'1','0')
					WHERE
						category_management_idx = '16'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:54:27 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:54:33 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:54:33 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:54:48 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:54:51 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:54:52 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:54:52 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:54:53 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:01 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:01 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:02 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:02 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:04 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:04 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:12 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:13 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:19 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:24 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:35 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:35 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:40 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:53 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:53 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:53 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:57 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:55:57 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:00 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:01 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:01 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:05 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:06 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:06 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:07 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:14 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:14 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:18 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:19 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:19 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:23 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:23 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Electronics',
						category_name_kr = '전자제품',
						category_name_bd = 'fdfds',
						url = NULL
					WHERE
						category_management_idx = '1'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:56:24 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:24 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Men’s Fashion',
						category_name_kr = '남성 패션',
						category_name_bd = '뱅골어4',
						url = NULL
					WHERE
						category_management_idx = '4'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:56:26 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:29 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:29 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Women’s Fashion',
						category_name_kr = '여성 패션',
						category_name_bd = '뱅골어6',
						url = NULL
					WHERE
						category_management_idx = '6'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:56:30 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:30 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Household',
						category_name_kr = '가정 용품',
						category_name_bd = '뱅골어3',
						url = NULL
					WHERE
						category_management_idx = '3'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:56:32 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Others',
						category_name_kr = '기타',
						category_name_bd = '뱅골어5',
						url = NULL
					WHERE
						category_management_idx = '5'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:56:32 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:36 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:37 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:37 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:38 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:39 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:39 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:45 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:45 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:48 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=11 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:56:52 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 09:56:52 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:56:56 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_state_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["notice_idx"]=>
  string(2) "15"
  ["notice_state"]=>
  string(1) "N"
}

 <br> ^UPDATE
							tbl_notice
						SET
							notice_state = 'N',
							upd_date = NOW()
						WHERE
							notice_idx = '15'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:56:58 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 09:56:58 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:56:59 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_state_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["notice_idx"]=>
  string(2) "14"
  ["notice_state"]=>
  string(1) "N"
}

 <br> ^UPDATE
							tbl_notice
						SET
							notice_state = 'N',
							upd_date = NOW()
						WHERE
							notice_idx = '14'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:57:00 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 09:57:00 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:57:05 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=1&history_data=15 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(1) "1"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '1'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 00:57:05 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-01 00:57:05 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-01 00:57:05 --> 404 Page Not Found: /index
ERROR - 2022-09-01 09:57:08 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 09:57:08 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:57:09 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:57:09 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:57:11 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_qa
						WHERE
							del_yn ='N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:57:11 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(8) {
  ["member_id"]=>
  NULL
  ["qa_type"]=>
  NULL
  ["member_name"]=>
  NULL
  ["reply_yn"]=>
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
							a.qa_idx,
							FN_AES_DECRYPT(b.member_id) AS member_id,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.qa_type,
							a.qa_title,
							a.ins_date,
							a.reply_yn,
							a.check_yn,
							a.del_yn
						FROM
							tbl_qa a
							JOIN tbl_member b ON b.member_idx = a.member_idx
						WHERE
							a.del_yn ='N'
						 ORDER BY a.ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-01 09:57:11 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(8) {
  ["member_id"]=>
  NULL
  ["qa_type"]=>
  NULL
  ["member_name"]=>
  NULL
  ["reply_yn"]=>
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
							COUNT(*) AS cnt
						FROM
							tbl_qa a
							JOIN tbl_member b ON b.member_idx = a.member_idx
						WHERE
							a.del_yn ='N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:57:14 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:57:14 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:57:17 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=20 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:58:13 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(2) "11"
  ["title"]=>
  string(19) "커뮤니티 문의"
  ["contents"]=>
  string(1) "3"
  ["title_us"]=>
  string(19) "Community Inquiries"
  ["title_kr"]=>
  string(19) "커뮤니티 문의"
  ["title_bd"]=>
  string(58) "সম্প্রদায় অনুসন্ধান"
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
							title = '커뮤니티 문의',
							title_us = 'Community Inquiries',
							title_kr = '커뮤니티 문의',
							title_bd = 'সম্প্রদায় অনুসন্ধান',
							contents = '3',
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
ERROR - 2022-09-01 09:58:14 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:58:14 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:58:16 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=10&history_data=21 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "10"
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
							faq_idx = '10'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:58:45 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 09:58:45 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:58:46 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:58:46 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:58:48 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 09:58:48 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:58:49 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=15&history_data=24 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(2) "15"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '15'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:58:51 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 09:58:51 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:58:53 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:58:53 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:58:59 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=6&history_data=27 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(1) "6"
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
							faq_idx = '6'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:01 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_qa
						WHERE
							del_yn ='N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:01 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(8) {
  ["member_id"]=>
  NULL
  ["qa_type"]=>
  NULL
  ["member_name"]=>
  NULL
  ["reply_yn"]=>
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
							a.qa_idx,
							FN_AES_DECRYPT(b.member_id) AS member_id,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.qa_type,
							a.qa_title,
							a.ins_date,
							a.reply_yn,
							a.check_yn,
							a.del_yn
						FROM
							tbl_qa a
							JOIN tbl_member b ON b.member_idx = a.member_idx
						WHERE
							a.del_yn ='N'
						 ORDER BY a.ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:01 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(8) {
  ["member_id"]=>
  NULL
  ["qa_type"]=>
  NULL
  ["member_name"]=>
  NULL
  ["reply_yn"]=>
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
							COUNT(*) AS cnt
						FROM
							tbl_qa a
							JOIN tbl_member b ON b.member_idx = a.member_idx
						WHERE
							a.del_yn ='N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:01 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:59:01 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:59:02 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 09:59:02 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:03 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_qa
						WHERE
							del_yn ='N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:04 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(8) {
  ["member_id"]=>
  NULL
  ["qa_type"]=>
  NULL
  ["member_name"]=>
  NULL
  ["reply_yn"]=>
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
							a.qa_idx,
							FN_AES_DECRYPT(b.member_id) AS member_id,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.qa_type,
							a.qa_title,
							a.ins_date,
							a.reply_yn,
							a.check_yn,
							a.del_yn
						FROM
							tbl_qa a
							JOIN tbl_member b ON b.member_idx = a.member_idx
						WHERE
							a.del_yn ='N'
						 ORDER BY a.ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:04 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(8) {
  ["member_id"]=>
  NULL
  ["qa_type"]=>
  NULL
  ["member_name"]=>
  NULL
  ["reply_yn"]=>
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
							COUNT(*) AS cnt
						FROM
							tbl_qa a
							JOIN tbl_member b ON b.member_idx = a.member_idx
						WHERE
							a.del_yn ='N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:05 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:59:05 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:59:06 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=1&history_data=33 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(1) "1"
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
							faq_idx = '1'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:08 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:59:09 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["state"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							banner_idx,
							banner_type,
							title,
							contents,
							state,
							ins_date,
							hits_cnt
						FROM
							tbl_banner
						WHERE
							del_yn = 'N'
							 ORDER BY ins_date DESC limit 0, 10</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:09 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["state"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
					    count(*) as cnt
						FROM
							tbl_banner
						WHERE
							del_yn = 'N'
							</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:12 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							forbidden_search_idx,
							title,
							del_yn,
							DATE_FORMAT(upd_date,'%Y-%m-%d') as  upd_date
						FROM
							tbl_forbidden_search
						WHERE
							del_yn = 'N'
		 ORDER BY forbidden_search_idx DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:12 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_forbidden_search
						WHERE
							del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:13 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							forbidden_search_idx,
							title,
							del_yn,
							DATE_FORMAT(upd_date,'%Y-%m-%d') as  upd_date
						FROM
							tbl_forbidden_search
						WHERE
							del_yn = 'N'
		 ORDER BY forbidden_search_idx DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:13 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_forbidden_search
						WHERE
							del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:13 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							recommend_search_idx,
							title,
							type,
							display_yn,
							order_no
						FROM
							tbl_recommend_search
						where
							type = '0'
						order by recommend_search_idx
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:13 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							recommend_search_idx,
							title,
							type,
							display_yn,
							order_no
						FROM
							tbl_recommend_search
						where
							type = '1'
						order by recommend_search_idx
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:15 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["member_name"]=>
  NULL
  ["contents"]=>
  NULL
  ["title"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["best_yn"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["hash_tag"]=>
  NULL
  ["orderby"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.board_idx,
							b.member_name,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.contents,
							a.recommend_cnt,
							a.view_cnt,
							a.scrap_cnt,
						  a.report_cnt,
						  a.reply_cnt,
							a.display_yn,
							a.best_yn,
							a.ins_date,
							a.upd_date,
							a.del_yn
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
		 ORDER BY a.board_idx DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:15 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["member_name"]=>
  NULL
  ["contents"]=>
  NULL
  ["title"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["best_yn"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["hash_tag"]=>
  NULL
  ["orderby"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:15 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(13) {
  ["member_id"]=>
  NULL
  ["member_name"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["title"]=>
  NULL
  ["category_name"]=>
  NULL
  ["tags"]=>
  NULL
  ["product_state"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["free_product_yn"]=>
  NULL
  ["famous_product_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.product_idx,
							FN_AES_DECRYPT(b.member_id) AS member_id,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							FN_AES_DECRYPT(c.member_id) AS partner_member_id,
							FN_AES_DECRYPT(c.member_name) AS partner_member_name,
							d.category_name,
						  a.img_path,
						  a.title,
							a.tags,
							a.report_cnt,
							a.product_state,
							a.product_price,
							a.display_yn,
							a.free_product_yn,
							a.famous_product_yn,
							a.ins_date,
							a.upd_date,
							a.del_yn
						FROM
							tbl_product a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn != 'Y'
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx
							JOIN tbl_category_management d ON d.category_management_idx = a.category_management_idx AND d.del_yn = 'N'
							
						WHERE
							a.del_yn = 'N'
		 ORDER BY a.product_idx DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:15 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(13) {
  ["member_id"]=>
  NULL
  ["member_name"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["title"]=>
  NULL
  ["category_name"]=>
  NULL
  ["tags"]=>
  NULL
  ["product_state"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["free_product_yn"]=>
  NULL
  ["famous_product_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn != 'Y'
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx
							JOIN tbl_category_management d ON d.category_management_idx = a.category_management_idx AND d.del_yn = 'N'
							
						WHERE
							a.del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:16 --> query :  '<pre>admin.dilri.com/member_point_v_1_0_0/member_point_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(7) {
  ["member_id"]=>
  NULL
  ["member_name"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["point_type"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							FN_AES_DECRYPT(b.member_id) AS member_id,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.point_type,
							a.point,
							a.memo,
							a.ins_date
						FROM
							tbl_member_point AS a LEFT JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE 1=1
		 ORDER BY a.ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:16 --> query :  '<pre>admin.dilri.com/member_point_v_1_0_0/member_point_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_member_point AS a LEFT JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE 1=1
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:17 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:59:17 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:59:17 --> query :  '<pre>admin.dilri.com/member_point_v_1_0_0/member_point_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(7) {
  ["member_id"]=>
  NULL
  ["member_name"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["point_type"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							FN_AES_DECRYPT(b.member_id) AS member_id,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.point_type,
							a.point,
							a.memo,
							a.ins_date
						FROM
							tbl_member_point AS a LEFT JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE 1=1
		 ORDER BY a.ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:17 --> query :  '<pre>admin.dilri.com/member_point_v_1_0_0/member_point_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_member_point AS a LEFT JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE 1=1
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:19 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:59:19 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:59:28 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 09:59:28 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:29 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:59:29 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 09:59:30 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_qa
						WHERE
							del_yn ='N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:30 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(8) {
  ["member_id"]=>
  NULL
  ["qa_type"]=>
  NULL
  ["member_name"]=>
  NULL
  ["reply_yn"]=>
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
							a.qa_idx,
							FN_AES_DECRYPT(b.member_id) AS member_id,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.qa_type,
							a.qa_title,
							a.ins_date,
							a.reply_yn,
							a.check_yn,
							a.del_yn
						FROM
							tbl_qa a
							JOIN tbl_member b ON b.member_idx = a.member_idx
						WHERE
							a.del_yn ='N'
						 ORDER BY a.ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:30 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(8) {
  ["member_id"]=>
  NULL
  ["qa_type"]=>
  NULL
  ["member_name"]=>
  NULL
  ["reply_yn"]=>
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
							COUNT(*) AS cnt
						FROM
							tbl_qa a
							JOIN tbl_member b ON b.member_idx = a.member_idx
						WHERE
							a.del_yn ='N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:31 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
          	</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:33 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0/terms_mod?terms_management_idx=3 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["terms_management_idx"]=>
  string(1) "3"
}

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
						WHERE
							terms_management_idx = '3'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:45 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
          	</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:50 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
          	</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:50 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_qa
						WHERE
							del_yn ='N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:50 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
          	</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:50 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
          	</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:51 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(8) {
  ["member_id"]=>
  NULL
  ["qa_type"]=>
  NULL
  ["member_name"]=>
  NULL
  ["reply_yn"]=>
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
							a.qa_idx,
							FN_AES_DECRYPT(b.member_id) AS member_id,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.qa_type,
							a.qa_title,
							a.ins_date,
							a.reply_yn,
							a.check_yn,
							a.del_yn
						FROM
							tbl_qa a
							JOIN tbl_member b ON b.member_idx = a.member_idx
						WHERE
							a.del_yn ='N'
						 ORDER BY a.ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:51 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(8) {
  ["member_id"]=>
  NULL
  ["qa_type"]=>
  NULL
  ["member_name"]=>
  NULL
  ["reply_yn"]=>
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
							COUNT(*) AS cnt
						FROM
							tbl_qa a
							JOIN tbl_member b ON b.member_idx = a.member_idx
						WHERE
							a.del_yn ='N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:53 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
          	</pre> 
 <br /> ' 
ERROR - 2022-09-01 09:59:55 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0/terms_mod?terms_management_idx=1 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["terms_management_idx"]=>
  string(1) "1"
}

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
						WHERE
							terms_management_idx = '1'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:00:07 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
          	</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:00:09 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0/terms_mod?terms_management_idx=2 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["terms_management_idx"]=>
  string(1) "2"
}

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
						WHERE
							terms_management_idx = '2'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:00:15 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
          	</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:12:21 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0/terms_mod?terms_management_idx=2 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["terms_management_idx"]=>
  string(1) "2"
}

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
						WHERE
							terms_management_idx = '2'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:12:23 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:12:23 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:12:24 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:12:24 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:12:26 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=49 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:12:30 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:12:30 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:12:32 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=1&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(1) "1"
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
							faq_idx = '1'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:13:09 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "1"
  ["title"]=>
  string(19) "운영정책 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(16) "Operation Policy"
  ["title_kr"]=>
  string(19) "운영정책 관련"
  ["title_bd"]=>
  string(34) "অপারেশন নীতি"
  ["contents_us"]=>
  string(1) "-"
  ["contents_kr"]=>
  string(1) "-"
  ["contents_bd"]=>
  string(1) "-"
  ["faq_type"]=>
  string(1) "1"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '운영정책 관련',
							title_us = 'Operation Policy',
							title_kr = '운영정책 관련',
							title_bd = 'অপারেশন নীতি',
							contents = '-',
							contents_us = '-',
							contents_kr = '-',
							contents_bd = '-',
							faq_type = '1',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '1'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:13:11 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:13:11 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:13:13 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=2&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(1) "2"
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
							faq_idx = '2'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:13:44 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "2"
  ["title"]=>
  string(19) "계정인증 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(20) "Account Verification"
  ["title_kr"]=>
  string(19) "계정인증 관련"
  ["title_bd"]=>
  string(52) "অ্যাকাউন্ট পরীক্ষা"
  ["contents_us"]=>
  string(1) "-"
  ["contents_kr"]=>
  string(1) "-"
  ["contents_bd"]=>
  string(1) "-"
  ["faq_type"]=>
  string(1) "2"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '계정인증 관련',
							title_us = 'Account Verification',
							title_kr = '계정인증 관련',
							title_bd = 'অ্যাকাউন্ট পরীক্ষা',
							contents = '-',
							contents_us = '-',
							contents_kr = '-',
							contents_bd = '-',
							faq_type = '2',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '2'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:13:45 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:13:45 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:13:54 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=3&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(1) "3"
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
							faq_idx = '3'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:14:14 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "3"
  ["title"]=>
  string(20) "구매 판매 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(19) "related to purchase"
  ["title_kr"]=>
  string(20) "구매 판매 관련"
  ["title_bd"]=>
  string(43) "ক্রয় সম্পর্কিত"
  ["contents_us"]=>
  string(1) "-"
  ["contents_kr"]=>
  string(1) "-"
  ["contents_bd"]=>
  string(1) "-"
  ["faq_type"]=>
  string(1) "3"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '구매 판매 관련',
							title_us = 'related to purchase',
							title_kr = '구매 판매 관련',
							title_bd = 'ক্রয় সম্পর্কিত',
							contents = '-',
							contents_us = '-',
							contents_kr = '-',
							contents_bd = '-',
							faq_type = '3',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '3'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:14:16 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:14:16 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:14:17 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=4&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(1) "4"
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
							faq_idx = '4'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:14:39 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "4"
  ["title"]=>
  string(20) "거래 품목 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(24) "related to trading items"
  ["title_kr"]=>
  string(20) "거래 품목 관련"
  ["title_bd"]=>
  string(65) "ট্রেডিং আইটেম সম্পর্কিত"
  ["contents_us"]=>
  string(1) "-"
  ["contents_kr"]=>
  string(1) "-"
  ["contents_bd"]=>
  string(1) "-"
  ["faq_type"]=>
  string(1) "4"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '거래 품목 관련',
							title_us = 'related to trading items',
							title_kr = '거래 품목 관련',
							title_bd = 'ট্রেডিং আইটেম সম্পর্কিত',
							contents = '-',
							contents_us = '-',
							contents_kr = '-',
							contents_bd = '-',
							faq_type = '4',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '4'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:14:41 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:14:41 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:14:43 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=5&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(1) "5"
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
							faq_idx = '5'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:15:00 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "5"
  ["title"]=>
  string(26) "신뢰도 포인트 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(17) "Confidence points"
  ["title_kr"]=>
  string(26) "신뢰도 포인트 관련"
  ["title_bd"]=>
  string(55) "আত্মবিশ্বাস পয়েন্ট"
  ["contents_us"]=>
  string(1) "-"
  ["contents_kr"]=>
  string(1) "-"
  ["contents_bd"]=>
  string(1) "-"
  ["faq_type"]=>
  string(1) "5"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '신뢰도 포인트 관련',
							title_us = 'Confidence points',
							title_kr = '신뢰도 포인트 관련',
							title_bd = 'আত্মবিশ্বাস পয়েন্ট',
							contents = '-',
							contents_us = '-',
							contents_kr = '-',
							contents_bd = '-',
							faq_type = '5',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '5'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:15:01 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:15:01 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:15:03 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=5&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(1) "5"
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
							faq_idx = '5'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:15:04 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "5"
  ["title"]=>
  string(26) "신뢰도 포인트 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(17) "Confidence points"
  ["title_kr"]=>
  string(26) "신뢰도 포인트 관련"
  ["title_bd"]=>
  string(55) "আত্মবিশ্বাস পয়েন্ট"
  ["contents_us"]=>
  string(1) "-"
  ["contents_kr"]=>
  string(1) "-"
  ["contents_bd"]=>
  string(1) "-"
  ["faq_type"]=>
  string(1) "5"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '신뢰도 포인트 관련',
							title_us = 'Confidence points',
							title_kr = '신뢰도 포인트 관련',
							title_bd = 'আত্মবিশ্বাস পয়েন্ট',
							contents = '-',
							contents_us = '-',
							contents_kr = '-',
							contents_bd = '-',
							faq_type = '5',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '5'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:15:06 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:15:06 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:15:08 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=6&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(1) "6"
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
							faq_idx = '6'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:15:25 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "6"
  ["title"]=>
  string(19) "이용제재 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(23) "Regarding use sanctions"
  ["title_kr"]=>
  string(19) "이용제재 관련"
  ["title_bd"]=>
  string(80) "ব্যবহার নিষেধাজ্ঞা সংক্রান্ত"
  ["contents_us"]=>
  string(1) "-"
  ["contents_kr"]=>
  string(1) "-"
  ["contents_bd"]=>
  string(1) "-"
  ["faq_type"]=>
  string(1) "6"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '이용제재 관련',
							title_us = 'Regarding use sanctions',
							title_kr = '이용제재 관련',
							title_bd = 'ব্যবহার নিষেধাজ্ঞা সংক্রান্ত',
							contents = '-',
							contents_us = '-',
							contents_kr = '-',
							contents_bd = '-',
							faq_type = '6',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '6'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:15:27 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:15:27 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:15:29 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=7&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(1) "7"
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
							faq_idx = '7'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:15:47 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "7"
  ["title"]=>
  string(13) "기타 관련"
  ["contents"]=>
  string(1) "*"
  ["title_us"]=>
  string(13) "other related"
  ["title_kr"]=>
  string(13) "기타 관련"
  ["title_bd"]=>
  string(52) "অন্যান্য সম্পর্কিত"
  ["contents_us"]=>
  string(1) "*"
  ["contents_kr"]=>
  string(1) "*"
  ["contents_bd"]=>
  string(1) "*"
  ["faq_type"]=>
  string(1) "7"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '기타 관련',
							title_us = 'other related',
							title_kr = '기타 관련',
							title_bd = 'অন্যান্য সম্পর্কিত',
							contents = '*',
							contents_us = '*',
							contents_kr = '*',
							contents_bd = '*',
							faq_type = '7',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '7'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:15:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:15:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:15:52 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=9&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(1) "9"
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
							faq_idx = '9'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:16:07 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "9"
  ["title"]=>
  string(13) "검색 문의"
  ["contents"]=>
  string(1) "*"
  ["title_us"]=>
  string(14) "Search inquiry"
  ["title_kr"]=>
  string(13) "검색 문의"
  ["title_bd"]=>
  string(55) "অনুসন্ধান অনুসন্ধান"
  ["contents_us"]=>
  string(1) "*"
  ["contents_kr"]=>
  string(1) "*"
  ["contents_bd"]=>
  string(1) "*"
  ["faq_type"]=>
  string(1) "8"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '검색 문의',
							title_us = 'Search inquiry',
							title_kr = '검색 문의',
							title_bd = 'অনুসন্ধান অনুসন্ধান',
							contents = '*',
							contents_us = '*',
							contents_kr = '*',
							contents_bd = '*',
							faq_type = '8',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '9'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:16:08 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:16:08 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:16:09 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=10&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(2) "10"
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
							faq_idx = '10'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:16:30 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(2) "10"
  ["title"]=>
  string(13) "오류 제보"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(12) "error report"
  ["title_kr"]=>
  string(13) "오류 제보"
  ["title_bd"]=>
  string(28) "ভুলের তথ্য"
  ["contents_us"]=>
  string(1) "-"
  ["contents_kr"]=>
  string(1) "-"
  ["contents_bd"]=>
  string(1) "-"
  ["faq_type"]=>
  string(2) "10"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '오류 제보',
							title_us = 'error report',
							title_kr = '오류 제보',
							title_bd = 'ভুলের তথ্য',
							contents = '-',
							contents_us = '-',
							contents_kr = '-',
							contents_bd = '-',
							faq_type = '10',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '10'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:16:31 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:16:31 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:16:33 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:16:42 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(2) "11"
  ["title"]=>
  string(19) "커뮤니티 문의"
  ["contents"]=>
  string(1) "3"
  ["title_us"]=>
  string(19) "Community Inquiries"
  ["title_kr"]=>
  string(19) "커뮤니티 문의"
  ["title_bd"]=>
  string(58) "সম্প্রদায় অনুসন্ধান"
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
							title = '커뮤니티 문의',
							title_us = 'Community Inquiries',
							title_kr = '커뮤니티 문의',
							title_bd = 'সম্প্রদায় অনুসন্ধান',
							contents = '3',
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
ERROR - 2022-09-01 10:16:43 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:16:43 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:16:45 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=1&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["faq_idx"]=>
  string(1) "1"
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
							faq_idx = '1'
							AND del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:16:47 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "1"
  ["title"]=>
  string(19) "운영정책 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(16) "Operation Policy"
  ["title_kr"]=>
  string(19) "운영정책 관련"
  ["title_bd"]=>
  string(34) "অপারেশন নীতি"
  ["contents_us"]=>
  string(1) "-"
  ["contents_kr"]=>
  string(1) "-"
  ["contents_bd"]=>
  string(1) "-"
  ["faq_type"]=>
  string(1) "1"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '운영정책 관련',
							title_us = 'Operation Policy',
							title_kr = '운영정책 관련',
							title_bd = 'অপারেশন নীতি',
							contents = '-',
							contents_us = '-',
							contents_kr = '-',
							contents_bd = '-',
							faq_type = '1',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '1'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:16:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:16:49 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:16:50 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:16:50 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:16:51 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:16:51 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 10:16:52 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:16:52 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:16:54 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=15&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(2) "15"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '15'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:16:57 --> Severity: Notice --> Undefined index: title /home/sususoftuser/html/CI/admin/application/modules/notice/notice_v_1_0_0/models/Model_notice.php 206
ERROR - 2022-09-01 10:16:57 --> Severity: Notice --> Undefined index: contents /home/sususoftuser/html/CI/admin/application/modules/notice/notice_v_1_0_0/models/Model_notice.php 211
ERROR - 2022-09-01 10:16:57 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(9) {
  ["notice_idx"]=>
  string(2) "15"
  ["title_us"]=>
  string(16) "테스트 영어"
  ["title_kr"]=>
  string(34) "테스트 한국어어어어어어"
  ["title_bd"]=>
  string(19) "테스트 뱅골어"
  ["contents_us"]=>
  string(15) "여여여영어"
  ["contents_kr"]=>
  string(18) "하하하한국어"
  ["contents_bd"]=>
  string(18) "배배배뱅골어"
  ["img_path"]=>
  NULL
  ["notice_state"]=>
  string(1) "N"
}

 <br> ^UPDATE
							tbl_notice
						SET
							title = NULL,
								title_kr = '테스트 한국어어어어어어',
									title_us = '테스트 영어',
										title_bd = '테스트 뱅골어',
							contents = NULL,
							contents_kr = '하하하한국어',
							contents_us = '여여여영어',
							contents_bd = '배배배뱅골어',
							img = NULL,
							notice_state = 'N',
							upd_date = NOW()
						WHERE
							notice_idx = '15'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:00 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:17:00 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:03 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=1&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(1) "1"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '1'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 01:17:03 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-01 01:17:03 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-01 01:17:03 --> 404 Page Not Found: /index
ERROR - 2022-09-01 10:17:05 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:17:05 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:07 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=1&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(1) "1"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '1'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 01:17:07 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-01 01:17:07 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-01 01:17:07 --> 404 Page Not Found: /index
ERROR - 2022-09-01 10:17:13 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_del 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(1) "1"
}

 <br> ^UPDATE
							tbl_notice
						SET
							del_yn = 'Y',
							upd_date = NOW()
						WHERE
							notice_idx IN (1)
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:14 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:17:14 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:15 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=2&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(1) "2"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '2'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 01:17:15 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-01 01:17:15 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-01 01:17:15 --> 404 Page Not Found: /index
ERROR - 2022-09-01 10:17:17 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_del 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(1) "2"
}

 <br> ^UPDATE
							tbl_notice
						SET
							del_yn = 'Y',
							upd_date = NOW()
						WHERE
							notice_idx IN (2)
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:18 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:17:18 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:19 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=6&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(1) "6"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '6'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:22 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_del 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(1) "6"
}

 <br> ^UPDATE
							tbl_notice
						SET
							del_yn = 'Y',
							upd_date = NOW()
						WHERE
							notice_idx IN (6)
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:23 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:17:23 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:25 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=7&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(1) "7"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '7'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 01:17:25 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-01 01:17:25 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-01 01:17:25 --> 404 Page Not Found: /index
ERROR - 2022-09-01 10:17:27 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_del 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(1) "7"
}

 <br> ^UPDATE
							tbl_notice
						SET
							del_yn = 'Y',
							upd_date = NOW()
						WHERE
							notice_idx IN (7)
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:28 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:17:28 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:29 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=8&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(1) "8"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '8'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 01:17:29 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-01 01:17:29 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-01 01:17:29 --> 404 Page Not Found: /index
ERROR - 2022-09-01 10:17:32 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_del 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(1) "8"
}

 <br> ^UPDATE
							tbl_notice
						SET
							del_yn = 'Y',
							upd_date = NOW()
						WHERE
							notice_idx IN (8)
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:33 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:17:33 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:34 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=11&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(2) "11"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '11'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:36 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_del 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(2) "11"
}

 <br> ^UPDATE
							tbl_notice
						SET
							del_yn = 'Y',
							upd_date = NOW()
						WHERE
							notice_idx IN (11)
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:37 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:17:37 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:38 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=12&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(2) "12"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '12'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 01:17:38 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-01 01:17:38 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-01 01:17:38 --> 404 Page Not Found: /index
ERROR - 2022-09-01 10:17:42 --> Severity: Notice --> Undefined index: title /home/sususoftuser/html/CI/admin/application/modules/notice/notice_v_1_0_0/models/Model_notice.php 206
ERROR - 2022-09-01 10:17:42 --> Severity: Notice --> Undefined index: contents /home/sususoftuser/html/CI/admin/application/modules/notice/notice_v_1_0_0/models/Model_notice.php 211
ERROR - 2022-09-01 10:17:42 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(9) {
  ["notice_idx"]=>
  string(2) "12"
  ["title_us"]=>
  string(6) "영어"
  ["title_kr"]=>
  string(9) "한국어"
  ["title_bd"]=>
  string(9) "뱅골어"
  ["contents_us"]=>
  string(6) "영어"
  ["contents_kr"]=>
  string(9) "한국어"
  ["contents_bd"]=>
  string(9) "뱅골어"
  ["img_path"]=>
  array(1) {
    [0]=>
    string(64) "/media/commonfile/202112/22/22c39127486b4998ba8bdf5200b216d2.png"
  }
  ["notice_state"]=>
  string(1) "N"
}

 <br> ^UPDATE
							tbl_notice
						SET
							title = NULL,
								title_kr = '한국어',
									title_us = '영어',
										title_bd = '뱅골어',
							contents = NULL,
							contents_kr = '한국어',
							contents_us = '영어',
							contents_bd = '뱅골어',
							img = ('/media/commonfile/202112/22/22c39127486b4998ba8bdf5200b216d2.png'),
							notice_state = 'N',
							upd_date = NOW()
						WHERE
							notice_idx = '12'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:43 --> Severity: Notice --> Undefined index: title /home/sususoftuser/html/CI/admin/application/modules/notice/notice_v_1_0_0/models/Model_notice.php 206
ERROR - 2022-09-01 10:17:43 --> Severity: Notice --> Undefined index: contents /home/sususoftuser/html/CI/admin/application/modules/notice/notice_v_1_0_0/models/Model_notice.php 211
ERROR - 2022-09-01 10:17:43 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(9) {
  ["notice_idx"]=>
  string(2) "12"
  ["title_us"]=>
  string(6) "영어"
  ["title_kr"]=>
  string(9) "한국어"
  ["title_bd"]=>
  string(9) "뱅골어"
  ["contents_us"]=>
  string(6) "영어"
  ["contents_kr"]=>
  string(9) "한국어"
  ["contents_bd"]=>
  string(9) "뱅골어"
  ["img_path"]=>
  array(1) {
    [0]=>
    string(64) "/media/commonfile/202112/22/22c39127486b4998ba8bdf5200b216d2.png"
  }
  ["notice_state"]=>
  string(1) "N"
}

 <br> ^UPDATE
							tbl_notice
						SET
							title = NULL,
								title_kr = '한국어',
									title_us = '영어',
										title_bd = '뱅골어',
							contents = NULL,
							contents_kr = '한국어',
							contents_us = '영어',
							contents_bd = '뱅골어',
							img = ('/media/commonfile/202112/22/22c39127486b4998ba8bdf5200b216d2.png'),
							notice_state = 'N',
							upd_date = NOW()
						WHERE
							notice_idx = '12'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:44 --> Severity: Notice --> Undefined index: title /home/sususoftuser/html/CI/admin/application/modules/notice/notice_v_1_0_0/models/Model_notice.php 206
ERROR - 2022-09-01 10:17:44 --> Severity: Notice --> Undefined index: contents /home/sususoftuser/html/CI/admin/application/modules/notice/notice_v_1_0_0/models/Model_notice.php 211
ERROR - 2022-09-01 10:17:44 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(9) {
  ["notice_idx"]=>
  string(2) "12"
  ["title_us"]=>
  string(6) "영어"
  ["title_kr"]=>
  string(9) "한국어"
  ["title_bd"]=>
  string(9) "뱅골어"
  ["contents_us"]=>
  string(6) "영어"
  ["contents_kr"]=>
  string(9) "한국어"
  ["contents_bd"]=>
  string(9) "뱅골어"
  ["img_path"]=>
  array(1) {
    [0]=>
    string(64) "/media/commonfile/202112/22/22c39127486b4998ba8bdf5200b216d2.png"
  }
  ["notice_state"]=>
  string(1) "N"
}

 <br> ^UPDATE
							tbl_notice
						SET
							title = NULL,
								title_kr = '한국어',
									title_us = '영어',
										title_bd = '뱅골어',
							contents = NULL,
							contents_kr = '한국어',
							contents_us = '영어',
							contents_bd = '뱅골어',
							img = ('/media/commonfile/202112/22/22c39127486b4998ba8bdf5200b216d2.png'),
							notice_state = 'N',
							upd_date = NOW()
						WHERE
							notice_idx = '12'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:45 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:17:45 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:47 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=15&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(2) "15"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '15'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:49 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_del 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(2) "15"
}

 <br> ^UPDATE
							tbl_notice
						SET
							del_yn = 'Y',
							upd_date = NOW()
						WHERE
							notice_idx IN (15)
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:50 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:17:50 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:51 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=14&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(2) "14"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '14'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:53 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_del 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(2) "14"
}

 <br> ^UPDATE
							tbl_notice
						SET
							del_yn = 'Y',
							upd_date = NOW()
						WHERE
							notice_idx IN (14)
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:54 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:17:54 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:17:55 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=13&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(2) "13"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '13'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 01:17:55 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-01 01:17:55 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-01 01:17:55 --> 404 Page Not Found: /index
ERROR - 2022-09-01 10:17:59 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_del 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(2) "13"
}

 <br> ^UPDATE
							tbl_notice
						SET
							del_yn = 'Y',
							upd_date = NOW()
						WHERE
							notice_idx IN (13)
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:18:00 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:18:00 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:18:01 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=12&history_data=50 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["notice_idx"]=>
  string(2) "12"
}

 <br> ^SELECT
	          	notice_idx,
							title,
							title_kr,
							title_us,
							title_bd,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							img,
							DATE_FORMAT(ins_date,'%Y-%m-%d') AS ins_date,
							DATE_FORMAT(upd_date,'%Y-%m-%d') AS upd_date,
							notice_state,
							del_yn
	        	FROM
	          	tbl_notice
	        	WHERE
	           	notice_idx = '12'
							AND del_yn = 'N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 01:18:01 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-01 01:18:01 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-01 01:18:01 --> 404 Page Not Found: /index
ERROR - 2022-09-01 10:18:05 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["title_kr"]=>
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
							title_kr,
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
ERROR - 2022-09-01 10:18:05 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:18:06 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_qa
						WHERE
							del_yn ='N'
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:18:06 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(8) {
  ["member_id"]=>
  NULL
  ["qa_type"]=>
  NULL
  ["member_name"]=>
  NULL
  ["reply_yn"]=>
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
							a.qa_idx,
							FN_AES_DECRYPT(b.member_id) AS member_id,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.qa_type,
							a.qa_title,
							a.ins_date,
							a.reply_yn,
							a.check_yn,
							a.del_yn
						FROM
							tbl_qa a
							JOIN tbl_member b ON b.member_idx = a.member_idx
						WHERE
							a.del_yn ='N'
						 ORDER BY a.ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-01 10:18:06 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(8) {
  ["member_id"]=>
  NULL
  ["qa_type"]=>
  NULL
  ["member_name"]=>
  NULL
  ["reply_yn"]=>
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
							COUNT(*) AS cnt
						FROM
							tbl_qa a
							JOIN tbl_member b ON b.member_idx = a.member_idx
						WHERE
							a.del_yn ='N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:18:11 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
          	</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:18:13 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0/terms_mod?terms_management_idx=1 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(1) {
  ["terms_management_idx"]=>
  string(1) "1"
}

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
						WHERE
							terms_management_idx = '1'
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:18:54 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							upd_date
						FROM
							tbl_terms_management
          	</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:18:58 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["state"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							banner_idx,
							banner_type,
							title,
							contents,
							state,
							ins_date,
							hits_cnt
						FROM
							tbl_banner
						WHERE
							del_yn = 'N'
							 ORDER BY ins_date DESC limit 0, 10</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:18:58 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["state"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
					    count(*) as cnt
						FROM
							tbl_banner
						WHERE
							del_yn = 'N'
							</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:19:00 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["state"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							banner_idx,
							banner_type,
							title,
							contents,
							state,
							ins_date,
							hits_cnt
						FROM
							tbl_banner
						WHERE
							del_yn = 'N'
							 ORDER BY ins_date DESC limit 0, 10</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:19:00 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  NULL
  ["s_date"]=>
  NULL
  ["e_date"]=>
  NULL
  ["state"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
					    count(*) as cnt
						FROM
							tbl_banner
						WHERE
							del_yn = 'N'
							</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:19:01 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							forbidden_search_idx,
							title,
							del_yn,
							DATE_FORMAT(upd_date,'%Y-%m-%d') as  upd_date
						FROM
							tbl_forbidden_search
						WHERE
							del_yn = 'N'
		 ORDER BY forbidden_search_idx DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-01 10:19:01 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_forbidden_search
						WHERE
							del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:19:02 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							recommend_search_idx,
							title,
							type,
							display_yn,
							order_no
						FROM
							tbl_recommend_search
						where
							type = '0'
						order by recommend_search_idx
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:19:02 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							recommend_search_idx,
							title,
							type,
							display_yn,
							order_no
						FROM
							tbl_recommend_search
						where
							type = '1'
						order by recommend_search_idx
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:19:03 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							forbidden_search_idx,
							title,
							del_yn,
							DATE_FORMAT(upd_date,'%Y-%m-%d') as  upd_date
						FROM
							tbl_forbidden_search
						WHERE
							del_yn = 'N'
		 ORDER BY forbidden_search_idx DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-01 10:19:03 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_forbidden_search
						WHERE
							del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:19:04 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							recommend_search_idx,
							title,
							type,
							display_yn,
							order_no
						FROM
							tbl_recommend_search
						where
							type = '0'
						order by recommend_search_idx
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 10:19:04 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							recommend_search_idx,
							title,
							type,
							display_yn,
							order_no
						FROM
							tbl_recommend_search
						where
							type = '1'
						order by recommend_search_idx
						</pre> 
 <br /> ' 
ERROR - 2022-09-01 03:26:25 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-01 03:26:25 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-01 03:26:25 --> 404 Page Not Found: /index
ERROR - 2022-09-01 03:26:27 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-01 03:26:27 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-01 03:26:27 --> 404 Page Not Found: /index
ERROR - 2022-09-01 03:26:29 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-01 03:26:29 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-01 03:26:29 --> 404 Page Not Found: /index
ERROR - 2022-09-01 12:26:39 --> query :  '<pre>admin.dilri.com/login/login_action 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["admin_id"]=>
  string(12) "sususoft0514"
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
							FN_AES_DECRYPT(admin_id) = 'sususoft0514'
							AND admin_pw = SHA2('sususoft0514',512)
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 12:26:42 --> query :  '<pre>admin.dilri.com/login/login_action 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["admin_id"]=>
  string(8) "sususoft"
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
							FN_AES_DECRYPT(admin_id) = 'sususoft'
							AND admin_pw = SHA2('sususoft0514',512)
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 12:27:43 --> query :  '<pre>admin.dilri.com/login/login_action 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["admin_id"]=>
  string(8) "sususoft"
  ["admin_pw"]=>
  string(14) "SuSu@Soft!0514"
}

 <br> ^SELECT
							admin_idx,
							FN_AES_DECRYPT(admin_id) AS admin_id,
							admin_name,
							admin_right
						FROM
							tbl_admin
						WHERE
							FN_AES_DECRYPT(admin_id) = 'sususoft'
							AND admin_pw = SHA2('SuSu@Soft!0514',512)
					</pre> 
 <br /> ' 
ERROR - 2022-09-01 12:27:45 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-01 12:27:45 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
