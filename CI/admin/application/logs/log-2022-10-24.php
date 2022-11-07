<html>

ERROR - 2022-10-24 02:27:23 --> query :  '<pre>admin.dilri.com/login/login_action 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-24 02:27:25 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:27:25 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:27:56 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:27:56 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:27:59 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:27:59 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:29:54 --> query :  '<pre>admin.dilri.com/login/login_action 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-24 02:29:55 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:29:55 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:30:01 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:30:01 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:30:06 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:30:06 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:30:15 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:30:15 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:37:24 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:37:24 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:37:29 --> query :  '<pre>admin.dilri.com/product_report_v_1_0_0/product_report_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(8) {
  ["member_name"]=>
  NULL
  ["member_id"]=>
  NULL
  ["reported_member_name"]=>
  NULL
  ["reported_member_id"]=>
  NULL
  ["report_type"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.product_report_idx,
							b.member_idx as reported_member_idx,
							FN_AES_DECRYPT(c.member_name) as member_name,
							FN_AES_DECRYPT(c.member_id) as member_id,
							FN_AES_DECRYPT(d.member_name) as reported_member_name,
							FN_AES_DECRYPT(d.member_id) as reported_member_id,
							b.title,
							a.report_type,
							a.report_contents,
							a.product_idx,
							a.ins_date,
							b.display_yn,
							a.del_yn
						FROM
							tbl_product_report a
							JOIN tbl_product b ON b.product_idx = a.product_idx and b.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							JOIN tbl_member d ON d.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 ORDER BY product_report_idx DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-24 02:37:29 --> query :  '<pre>admin.dilri.com/product_report_v_1_0_0/product_report_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(8) {
  ["member_name"]=>
  NULL
  ["member_id"]=>
  NULL
  ["reported_member_name"]=>
  NULL
  ["reported_member_id"]=>
  NULL
  ["report_type"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product_report a
							JOIN tbl_product b ON b.product_idx = a.product_idx and b.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							JOIN tbl_member d ON d.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-10-24 02:37:34 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_detail?product_idx=416 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(1) {
  ["product_idx"]=>
  string(3) "416"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							a.product_member_idx,
							a.img_path,
							a.product_state,
							a.product_price,
							a.free_product_yn,
							a.title,
							a.contents,
							a.product_addr,
							a.product_lat,
							a.product_lng,
							a.chatting_cnt,
							a.tags,
							(SELECT category_name FROM tbl_category_management WHERE category_management_idx = a.category_management_idx) AS category_name,
							a.like_cnt,
							a.list_up_cnt,
							a.view_cnt,
							a.report_cnt,
							a.chatting_cnt,
							a.display_yn,
							a.upd_date,
							a.ins_date,
							a.list_up_date,							
							FN_AES_DECRYPT(b.member_id) AS member_id,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							b.member_join_type,
							b.member_phone,
							b.member_img,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.free_product_cnt,
							b.del_yn,
							FN_AES_DECRYPT(c.member_id) AS partner_member_id,
							FN_AES_DECRYPT(c.member_name) AS partner_member_name,
							c.member_img as partner_member_img,
							d.category_name
											
						FROM
							tbl_product AS a 
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx
							JOIN tbl_category_management d ON d.category_management_idx = a.category_management_idx AND d.del_yn = 'N'
							
						WHERE
							a.product_idx = '416'
		</pre> 
 <br /> ' 
ERROR - 2022-10-24 02:37:39 --> query :  '<pre>admin.dilri.com/product_report_v_1_0_0/product_report_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(8) {
  ["member_name"]=>
  NULL
  ["member_id"]=>
  NULL
  ["reported_member_name"]=>
  NULL
  ["reported_member_id"]=>
  NULL
  ["report_type"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.product_report_idx,
							b.member_idx as reported_member_idx,
							FN_AES_DECRYPT(c.member_name) as member_name,
							FN_AES_DECRYPT(c.member_id) as member_id,
							FN_AES_DECRYPT(d.member_name) as reported_member_name,
							FN_AES_DECRYPT(d.member_id) as reported_member_id,
							b.title,
							a.report_type,
							a.report_contents,
							a.product_idx,
							a.ins_date,
							b.display_yn,
							a.del_yn
						FROM
							tbl_product_report a
							JOIN tbl_product b ON b.product_idx = a.product_idx and b.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							JOIN tbl_member d ON d.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 ORDER BY product_report_idx DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-24 02:37:39 --> query :  '<pre>admin.dilri.com/product_report_v_1_0_0/product_report_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(8) {
  ["member_name"]=>
  NULL
  ["member_id"]=>
  NULL
  ["reported_member_name"]=>
  NULL
  ["reported_member_id"]=>
  NULL
  ["report_type"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product_report a
							JOIN tbl_product b ON b.product_idx = a.product_idx and b.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							JOIN tbl_member d ON d.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-10-24 02:37:42 --> query :  '<pre>admin.dilri.com/board_reply_report_v_1_0_0/board_reply_report_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(5) {
  ["member_name"]=>
  NULL
  ["title"]=>
  NULL
  ["report_type"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.board_reply_report_idx,
							a.board_reply_idx,
							b.member_idx as reported_member_idx,
							FN_AES_DECRYPT(c.member_name) as member_name,
							FN_AES_DECRYPT(c.member_id) as member_id,
							FN_AES_DECRYPT(d.member_name) as reported_member_name,
							FN_AES_DECRYPT(d.member_id) as reported_member_id,
							a.report_contents,
							a.report_type,
							b.board_idx,
							b.reply_comment,
							c.member_nickname,
							d.member_nickname AS reported_member_nickname,
							a.ins_date,
							DATE_FORMAT(a.upd_date,'%Y.%m.%d') as  upd_date,
							a.del_yn
						FROM
							tbl_board_reply_report a
							LEFT JOIN tbl_board_reply b ON b.board_reply_idx = a.board_reply_idx AND b.del_yn = 'N'
							LEFT JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_member d ON d.member_idx = b.member_idx
							JOIN tbl_board e ON e.board_idx = b.board_idx 
						WHERE
							a.del_yn = 'N'

		 ORDER BY board_reply_report_idx DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-24 02:37:42 --> query :  '<pre>admin.dilri.com/board_reply_report_v_1_0_0/board_reply_report_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(5) {
  ["member_name"]=>
  NULL
  ["title"]=>
  NULL
  ["report_type"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_board_reply_report a
							LEFT JOIN tbl_board_reply b ON b.board_reply_idx = a.board_reply_idx AND b.del_yn = 'N'
							LEFT JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_member d ON d.member_idx = b.member_idx
							JOIN tbl_board e ON e.board_idx = b.board_idx 
						WHERE
							a.del_yn = 'N'

		</pre> 
 <br /> ' 
ERROR - 2022-10-24 02:37:50 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:37:50 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:37:52 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:37:52 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:38:09 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:38:09 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:38:14 --> query :  '<pre>admin.dilri.com/suboperator_v_1_0_0/suboperator_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(4) {
  ["admin_name"]=>
  NULL
  ["admin_id"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							a.admin_idx,
							FN_AES_DECRYPT(a.admin_id) AS admin_id,
							a.admin_name,
							a.admin_right,
							DATE_FORMAT(a.ins_date,'%Y-%m-%d %H:%i') as  ins_date,
							a.del_yn
						FROM
							tbl_admin a
						WHERE
							a.del_yn ='N'
						 ORDER BY a.ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-24 02:38:14 --> query :  '<pre>admin.dilri.com/suboperator_v_1_0_0/suboperator_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_admin a
						WHERE
							a.del_yn ='N'
						</pre> 
 <br /> ' 
ERROR - 2022-10-24 02:55:53 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:55:53 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:55:54 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:55:54 --> query :  '<pre>admin.dilri.com/recommend_search_v_1_0_0 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:56:19 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:56:19 --> query :  '<pre>admin.dilri.com/forbidden_search_v_1_0_0/forbidden_search_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 02:59:43 --> query :  '<pre>admin.dilri.com/product_report_v_1_0_0/product_report_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(8) {
  ["member_name"]=>
  NULL
  ["member_id"]=>
  NULL
  ["reported_member_name"]=>
  NULL
  ["reported_member_id"]=>
  NULL
  ["report_type"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.product_report_idx,
							b.member_idx as reported_member_idx,
							FN_AES_DECRYPT(c.member_name) as member_name,
							FN_AES_DECRYPT(c.member_id) as member_id,
							FN_AES_DECRYPT(d.member_name) as reported_member_name,
							FN_AES_DECRYPT(d.member_id) as reported_member_id,
							b.title,
							a.report_type,
							a.report_contents,
							a.product_idx,
							a.ins_date,
							b.display_yn,
							a.del_yn
						FROM
							tbl_product_report a
							JOIN tbl_product b ON b.product_idx = a.product_idx and b.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							JOIN tbl_member d ON d.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 ORDER BY product_report_idx DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-24 02:59:43 --> query :  '<pre>admin.dilri.com/product_report_v_1_0_0/product_report_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(8) {
  ["member_name"]=>
  NULL
  ["member_id"]=>
  NULL
  ["reported_member_name"]=>
  NULL
  ["reported_member_id"]=>
  NULL
  ["report_type"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product_report a
							JOIN tbl_product b ON b.product_idx = a.product_idx and b.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							JOIN tbl_member d ON d.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-10-24 02:59:44 --> query :  '<pre>admin.dilri.com/board_report_v_1_0_0/board_report_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(8) {
  ["member_name"]=>
  NULL
  ["member_id"]=>
  NULL
  ["reported_member_name"]=>
  NULL
  ["reported_member_id"]=>
  NULL
  ["report_type"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.board_report_idx,
							b.member_idx as reported_member_idx,
							FN_AES_DECRYPT(c.member_name) as member_name,
							FN_AES_DECRYPT(c.member_id) as member_id,
							FN_AES_DECRYPT(d.member_name) as reported_member_name,
							FN_AES_DECRYPT(d.member_id) as reported_member_id,
							b.title,
							a.report_type,
							a.report_contents,
							a.board_idx,
							a.ins_date,
							b.display_yn,
							a.del_yn
						FROM
							tbl_board_report a
							JOIN tbl_board b ON b.board_idx = a.board_idx and b.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							JOIN tbl_member d ON d.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 ORDER BY board_report_idx DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-24 02:59:44 --> query :  '<pre>admin.dilri.com/board_report_v_1_0_0/board_report_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(8) {
  ["member_name"]=>
  NULL
  ["member_id"]=>
  NULL
  ["reported_member_name"]=>
  NULL
  ["reported_member_id"]=>
  NULL
  ["report_type"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_board_report a
							JOIN tbl_board b ON b.board_idx = a.board_idx and b.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							JOIN tbl_member d ON d.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-10-24 02:59:45 --> query :  '<pre>admin.dilri.com/board_reply_report_v_1_0_0/board_reply_report_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(5) {
  ["member_name"]=>
  NULL
  ["title"]=>
  NULL
  ["report_type"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.board_reply_report_idx,
							a.board_reply_idx,
							b.member_idx as reported_member_idx,
							FN_AES_DECRYPT(c.member_name) as member_name,
							FN_AES_DECRYPT(c.member_id) as member_id,
							FN_AES_DECRYPT(d.member_name) as reported_member_name,
							FN_AES_DECRYPT(d.member_id) as reported_member_id,
							a.report_contents,
							a.report_type,
							b.board_idx,
							b.reply_comment,
							c.member_nickname,
							d.member_nickname AS reported_member_nickname,
							a.ins_date,
							DATE_FORMAT(a.upd_date,'%Y.%m.%d') as  upd_date,
							a.del_yn
						FROM
							tbl_board_reply_report a
							LEFT JOIN tbl_board_reply b ON b.board_reply_idx = a.board_reply_idx AND b.del_yn = 'N'
							LEFT JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_member d ON d.member_idx = b.member_idx
							JOIN tbl_board e ON e.board_idx = b.board_idx 
						WHERE
							a.del_yn = 'N'

		 ORDER BY board_reply_report_idx DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-24 02:59:45 --> query :  '<pre>admin.dilri.com/board_reply_report_v_1_0_0/board_reply_report_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(5) {
  ["member_name"]=>
  NULL
  ["title"]=>
  NULL
  ["report_type"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_board_reply_report a
							LEFT JOIN tbl_board_reply b ON b.board_reply_idx = a.board_reply_idx AND b.del_yn = 'N'
							LEFT JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_member d ON d.member_idx = b.member_idx
							JOIN tbl_board e ON e.board_idx = b.board_idx 
						WHERE
							a.del_yn = 'N'

		</pre> 
 <br /> ' 
ERROR - 2022-10-24 03:01:07 --> query :  '<pre>admin.dilri.com/product_report_v_1_0_0/product_report_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(8) {
  ["member_name"]=>
  NULL
  ["member_id"]=>
  NULL
  ["reported_member_name"]=>
  NULL
  ["reported_member_id"]=>
  NULL
  ["report_type"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.product_report_idx,
							b.member_idx as reported_member_idx,
							FN_AES_DECRYPT(c.member_name) as member_name,
							FN_AES_DECRYPT(c.member_id) as member_id,
							FN_AES_DECRYPT(d.member_name) as reported_member_name,
							FN_AES_DECRYPT(d.member_id) as reported_member_id,
							b.title,
							a.report_type,
							a.report_contents,
							a.product_idx,
							a.ins_date,
							b.display_yn,
							a.del_yn
						FROM
							tbl_product_report a
							JOIN tbl_product b ON b.product_idx = a.product_idx and b.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							JOIN tbl_member d ON d.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 ORDER BY product_report_idx DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-24 03:01:07 --> query :  '<pre>admin.dilri.com/product_report_v_1_0_0/product_report_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(8) {
  ["member_name"]=>
  NULL
  ["member_id"]=>
  NULL
  ["reported_member_name"]=>
  NULL
  ["reported_member_id"]=>
  NULL
  ["report_type"]=>
  NULL
  ["display_yn"]=>
  NULL
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product_report a
							JOIN tbl_product b ON b.product_idx = a.product_idx and b.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							JOIN tbl_member d ON d.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-10-24 03:01:13 --> query :  '<pre>admin.dilri.com/member_point_v_1_0_0/member_point_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
							a.memo_kr,
							a.memo_us,
							a.memo_bd,
							a.ins_date
						FROM
							tbl_member_point AS a LEFT JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE 1=1
		 ORDER BY a.ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-24 03:01:13 --> query :  '<pre>admin.dilri.com/member_point_v_1_0_0/member_point_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_member_point AS a LEFT JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE 1=1
		</pre> 
 <br /> ' 
ERROR - 2022-10-24 03:01:17 --> query :  '<pre>admin.dilri.com/member_point_v_1_0_0/member_point_reg?point_type=0 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							FN_AES_DECRYPT(member_name) AS member_name,
							member_join_type,
							member_point,
							a.ins_date
						FROM
							tbl_member AS a
						WHERE
							a.del_yn='N'
						ORDER BY
							a.member_name ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-24 03:14:06 --> query :  '<pre>admin.dilri.com/suboperator_v_1_0_0/suboperator_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(4) {
  ["admin_name"]=>
  NULL
  ["admin_id"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							a.admin_idx,
							FN_AES_DECRYPT(a.admin_id) AS admin_id,
							a.admin_name,
							a.admin_right,
							DATE_FORMAT(a.ins_date,'%Y-%m-%d %H:%i') as  ins_date,
							a.del_yn
						FROM
							tbl_admin a
						WHERE
							a.del_yn ='N'
						 ORDER BY a.ins_date DESC LIMIT 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-24 03:14:06 --> query :  '<pre>admin.dilri.com/suboperator_v_1_0_0/suboperator_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_admin a
						WHERE
							a.del_yn ='N'
						</pre> 
 <br /> ' 
ERROR - 2022-10-24 03:14:10 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							contents,
							contents_kr,
							contents_us,
							contents_bd,
							upd_date
						FROM
							tbl_terms_management
          	</pre> 
 <br /> ' 
ERROR - 2022-10-24 03:14:12 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 03:14:12 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 03:14:17 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 03:14:17 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 03:17:22 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 03:17:22 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 03:40:42 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 03:40:42 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:40:42 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:40:43 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:40:43 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:40:43 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:40:43 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:40:43 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:40:43 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:40:43 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:40:43 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:40:43 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:40:56 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 03:40:58 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 03:40:58 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/img_change?category_management_idx=2 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
						and category_management_idx='2'
		</pre> 
 <br /> ' 
ERROR - 2022-10-24 03:40:58 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:41:02 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0/category_management_list 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 03:41:06 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 03:41:06 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 03:41:07 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
  <br> ^ address=>27.147.191.201 
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
ERROR - 2022-10-24 03:41:07 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:41:07 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:41:07 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:41:07 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:41:07 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:41:07 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:41:07 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:41:07 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:41:07 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:41:07 --> 404 Page Not Found: /index
ERROR - 2022-10-24 03:41:07 --> 404 Page Not Found: /index
