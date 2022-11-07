<html>

ERROR - 2022-10-04 08:52:18 --> query :  '<pre>admin.dilri.com/login/login_action 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:18 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:18 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:23 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:23 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:24 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:24 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:25 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:25 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:32 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:32 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:35 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:35 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:36 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:36 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:37 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:37 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:40 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:52:40 --> 404 Page Not Found: /index
ERROR - 2022-10-04 08:52:40 --> 404 Page Not Found: /index
ERROR - 2022-10-04 08:52:40 --> 404 Page Not Found: /index
ERROR - 2022-10-04 08:52:40 --> 404 Page Not Found: /index
ERROR - 2022-10-04 08:52:40 --> 404 Page Not Found: /index
ERROR - 2022-10-04 08:52:40 --> 404 Page Not Found: /index
ERROR - 2022-10-04 08:52:40 --> 404 Page Not Found: /index
ERROR - 2022-10-04 08:52:40 --> 404 Page Not Found: /index
ERROR - 2022-10-04 08:52:40 --> 404 Page Not Found: /index
ERROR - 2022-10-04 08:52:40 --> 404 Page Not Found: /index
ERROR - 2022-10-04 08:52:40 --> 404 Page Not Found: /index
ERROR - 2022-10-04 08:53:25 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET state= IF(state = 0,'1','0')
					WHERE
						category_management_idx = '1'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:53:25 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:53:29 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:53:29 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET state= IF(state = 0,'1','0')
					WHERE
						category_management_idx = '14'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:53:29 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:53:31 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:53:31 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET state= IF(state = 0,'1','0')
					WHERE
						category_management_idx = '13'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:53:31 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:53:33 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:53:35 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:03 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:04 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:04 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:08 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:08 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:14 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:14 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:25 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:32 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:33 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:34 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:43 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:44 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:49 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:54:53 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:55:00 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:55:00 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:55:05 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:56:59 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:57:09 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:57:15 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:57:15 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:57:20 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:57:20 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:57:27 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:57:34 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:57:36 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:57:40 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:57:52 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:57:52 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:57:56 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:00 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:04 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:07 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = '전자제품',
						category_name_kr = 'Electronics',
						category_name_bd = 'ইলেকট্রনিক্স',
						url = NULL
					WHERE
						category_management_idx = '1'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:58:07 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:09 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = '남성 패션',
						category_name_kr = 'Men’s Fashion',
						category_name_bd = 'পুরুষদের ফ্যাশন',
						url = NULL
					WHERE
						category_management_idx = '4'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:58:09 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:10 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:10 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = '여성 패션',
						category_name_kr = 'Women’s Fashion',
						category_name_bd = 'মহিলাদের ফ্যাশন',
						url = NULL
					WHERE
						category_management_idx = '6'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:58:12 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:12 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = '가구',
						category_name_kr = 'Household',
						category_name_bd = 'গৃহস্থালী',
						url = NULL
					WHERE
						category_management_idx = '3'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:58:14 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:17 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:17 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Adidas',
						category_name_kr = 'Adidas',
						category_name_bd = 'Adidas',
						url = NULL
					WHERE
						category_management_idx = '2'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:58:20 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:20 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET state= IF(state = 0,'1','0')
					WHERE
						category_management_idx = '2'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:58:20 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:22 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:23 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:30 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:30 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:58:32 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_detail?notice_idx=14&history_data=14 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:34 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:34 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:58:34 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_state_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:35 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:35 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:58:37 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:37 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:58:39 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:39 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:41 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=15 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:43 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_qa
						WHERE
							del_yn ='N'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:58:43 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:43 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:45 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:45 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:46 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:46 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:58:46 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:47 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:47 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:47 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-10-04 08:58:48 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 08:58:48 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 09:16:47 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=2&history_data=22 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 09:17:07 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "2"
  ["title"]=>
  string(19) "운영정책 관련"
  ["contents"]=>
  string(19) "운영정책 관련"
  ["title_us"]=>
  string(20) "계정 인증 관련"
  ["title_kr"]=>
  string(19) "운영정책 관련"
  ["title_bd"]=>
  string(19) "운영정책 관련"
  ["contents_us"]=>
  string(20) "계정 인증 관련"
  ["contents_kr"]=>
  string(19) "운영정책 관련"
  ["contents_bd"]=>
  string(19) "운영정책 관련"
  ["faq_type"]=>
  string(1) "2"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '운영정책 관련',
							title_us = '계정 인증 관련',
							title_kr = '운영정책 관련',
							title_bd = '운영정책 관련',
							contents = '운영정책 관련',
							contents_us = '계정 인증 관련',
							contents_kr = '운영정책 관련',
							contents_bd = '운영정책 관련',
							faq_type = '2',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '2'
						</pre> 
 <br /> ' 
ERROR - 2022-10-04 09:17:09 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 09:17:09 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 09:17:11 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=1&history_data=23 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:16:12 --> query :  '<pre>admin.dilri.com/login/login_action 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:16:14 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:16:14 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:16:18 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:16:18 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_forbidden_search
						WHERE
							del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-10-04 16:16:19 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:16:19 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:16:19 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:16:19 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:16:19 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:16:19 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:16:19 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:16:19 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:16:19 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:16:19 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:16:19 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:16:19 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:16:27 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:16:27 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET state= IF(state = 0,'1','0')
					WHERE
						category_management_idx = '16'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 16:16:27 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:16:29 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:16:30 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:19 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:20 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:22 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:27 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:27 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:28 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:29 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:31 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:35 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:36 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:38 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:42 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:43 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:45 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:47 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:48 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:17:54 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:18:40 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:18:41 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:18:50 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:18:52 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Others',
						category_name_kr = '기타',
						category_name_bd = 'অন্যান্য',
						url = NULL
					WHERE
						category_management_idx = '5'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 16:18:52 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:18:54 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:18:54 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Household',
						category_name_kr = '가구',
						category_name_bd = 'গৃহস্থালী',
						url = NULL
					WHERE
						category_management_idx = '3'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 16:18:55 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:18:55 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Women’s Fashion',
						category_name_kr = '여성 패션',
						category_name_bd = 'মহিলাদের ফ্যাশন',
						url = NULL
					WHERE
						category_management_idx = '6'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 16:18:57 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:18:57 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Men’s Fashion',
						category_name_kr = '남성 패션',
						category_name_bd = 'পুরুষদের ফ্যাশন',
						url = NULL
					WHERE
						category_management_idx = '4'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 16:18:58 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:18:58 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET
						category_name = NULL,
						category_name_us = 'Electronics',
						category_name_kr = '전자제품',
						category_name_bd = 'ইলেকট্রনিক্স',
						url = NULL
					WHERE
						category_management_idx = '1'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 16:20:53 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:20:53 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:01 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  string(11) "Test_Banner"
  ["link_url"]=>
  NULL
  ["img_path"]=>
  array(1) {
    [0]=>
    string(64) "/media/commonfile/202210/04/596b9669c30e25adb76743d42e318724.jpg"
  }
  ["img_width"]=>
  NULL
  ["img_height"]=>
  NULL
  ["banner_type"]=>
  string(1) "0"
}

 <br> ^INSERT INTO
							tbl_banner
							(
								title,
								link_url,
								img_path,
								img_width,
								img_height,
								banner_type,
								state,
								ins_date,
								upd_date
						)VALUES(
								'Test_Banner',
								NULL,
								('/media/commonfile/202210/04/596b9669c30e25adb76743d42e318724.jpg'),
								NULL,
								NULL,
								'0',
								1,
								NOW(),
								NOW()
							)
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 16:23:03 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:03 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:19 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_state_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(2) {
  ["banner_idx"]=>
  string(2) "45"
  ["state"]=>
  string(1) "0"
}

 <br> ^UPDATE
							tbl_banner
						SET
							state = '0',
							upd_date = NOW()
						WHERE
							banner_idx = '45'
						</pre> 
 <br /> ' 
ERROR - 2022-10-04 16:23:21 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:21 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:28 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_state_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(2) {
  ["banner_idx"]=>
  string(2) "45"
  ["state"]=>
  string(1) "1"
}

 <br> ^UPDATE
							tbl_banner
						SET
							state = '1',
							upd_date = NOW()
						WHERE
							banner_idx = '45'
						</pre> 
 <br /> ' 
ERROR - 2022-10-04 16:23:30 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:30 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:31 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_detail?banner_idx=45&history_data=13 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(1) {
  ["banner_idx"]=>
  string(2) "45"
}

 <br> ^SELECT
          	banner_idx,
						title,
						contents,
						banner_s_date,
						banner_e_date,
						img_path,
						img_width,
						img_height,
						link_url,
						state,
						hits_cnt,
						ins_date
          FROM
            tbl_banner
          WHERE
            banner_idx = '45'
						AND del_yn = 'N'
        </pre> 
 <br /> ' 
ERROR - 2022-10-04 16:23:34 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:34 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:34 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:34 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:34 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:34 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:34 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:34 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:34 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:34 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:34 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:34 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:35 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:35 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:36 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:36 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:36 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:36 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:36 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:36 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:36 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:36 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:36 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:36 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:36 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:36 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:38 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:38 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:38 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:38 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:38 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:38 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:38 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:38 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:38 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:38 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:38 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:38 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:47 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:47 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_state_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
						tbl_category_management
					SET state= IF(state = 0,'1','0')
					WHERE
						category_management_idx = '7'
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 16:23:47 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:58 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:23:58 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:58 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:58 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:58 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:58 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:58 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:58 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:58 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:58 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:59 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:23:59 --> 404 Page Not Found: /index
ERROR - 2022-10-04 16:24:14 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:24:14 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:24:38 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(6) {
  ["title"]=>
  string(11) "Tset_banner"
  ["link_url"]=>
  NULL
  ["img_path"]=>
  array(1) {
    [0]=>
    string(64) "/media/commonfile/202210/04/786513354d694850da49662db49a082e.jpg"
  }
  ["img_width"]=>
  NULL
  ["img_height"]=>
  NULL
  ["banner_type"]=>
  string(1) "1"
}

 <br> ^INSERT INTO
							tbl_banner
							(
								title,
								link_url,
								img_path,
								img_width,
								img_height,
								banner_type,
								state,
								ins_date,
								upd_date
						)VALUES(
								'Tset_banner',
								NULL,
								('/media/commonfile/202210/04/786513354d694850da49662db49a082e.jpg'),
								NULL,
								NULL,
								'1',
								1,
								NOW(),
								NOW()
							)
					</pre> 
 <br /> ' 
ERROR - 2022-10-04 16:24:40 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:24:40 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:31:09 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:31:09 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:31:12 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:31:12 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:31:19 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
  int(50)
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
		 ORDER BY ins_date DESC LIMIT 50, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-04 16:31:19 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
  int(50)
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
ERROR - 2022-10-04 16:31:21 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-04 16:31:21 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
