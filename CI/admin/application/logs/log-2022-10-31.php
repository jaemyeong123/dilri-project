<html>

ERROR - 2022-10-31 09:25:36 --> query :  '<pre>admin.dilri.com/login/login_action 
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
ERROR - 2022-10-31 09:25:37 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
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
ERROR - 2022-10-31 09:25:37 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
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
ERROR - 2022-10-31 09:25:40 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
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
ERROR - 2022-10-31 09:25:40 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
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
ERROR - 2022-10-31 09:26:29 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
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
ERROR - 2022-10-31 09:26:29 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
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
ERROR - 2022-10-31 09:26:33 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_state_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(2) {
  ["banner_idx"]=>
  string(2) "46"
  ["state"]=>
  string(1) "0"
}

 <br> ^UPDATE
							tbl_banner
						SET
							state = '0',
							upd_date = NOW()
						WHERE
							banner_idx = '46'
						</pre> 
 <br /> ' 
ERROR - 2022-10-31 09:26:35 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
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
ERROR - 2022-10-31 09:26:35 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
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
ERROR - 2022-10-31 09:26:36 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_state_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(2) {
  ["banner_idx"]=>
  string(2) "46"
  ["state"]=>
  string(1) "1"
}

 <br> ^UPDATE
							tbl_banner
						SET
							state = '1',
							upd_date = NOW()
						WHERE
							banner_idx = '46'
						</pre> 
 <br /> ' 
ERROR - 2022-10-31 09:26:37 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
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
ERROR - 2022-10-31 09:26:37 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
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
ERROR - 2022-10-31 09:46:34 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:46:34 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:46:48 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_detail?board_idx=208&history_data=5 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(1) {
  ["board_idx"]=>
  string(3) "208"
}

 <br> ^SELECT
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.board_idx,
							a.member_idx,
							a.img_path,
							a.title,
							a.tags,
							a.contents,
							a.reply_cnt,
							a.recommend_cnt,
							a.scrap_cnt,
							a.view_cnt,
							a.report_cnt,
							a.recommend_cnt,
							a.best_yn,
							a.display_yn,
							a.ins_date,
							a.del_yn
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and board_idx='208'
		</pre> 
 <br /> ' 
ERROR - 2022-10-31 09:46:49 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/reply_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(5) {
  ["board_idx"]=>
  string(3) "208"
  ["member_name"]=>
  NULL
  ["orderby"]=>
  string(1) "0"
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.board_reply_idx,
							FN_AES_DECRYPT(b.member_name) as member_name,
							FN_AES_DECRYPT(d.member_name) as parent_member_name,
							a.img_path,
							a.report_cnt,
							a.reply_comment,
							a.parent_board_reply_idx,
							a.depth,
							a.ins_date,
							a.upd_date,
							a.del_yn,
							a.display_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
							LEFT JOIN tbl_board_reply c ON c.board_reply_idx=a.parent_board_reply_idx  AND 	c.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = c.member_idx AND d.del_yn = 'N'
						WHERE a.del_yn = 'N'
							AND a.board_idx = 208
		 ORDER BY a.report_cnt DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-10-31 09:46:49 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/reply_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(5) {
  ["board_idx"]=>
  string(3) "208"
  ["member_name"]=>
  NULL
  ["orderby"]=>
  string(1) "0"
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
							LEFT JOIN tbl_board_reply c ON c.board_reply_idx=a.parent_board_reply_idx  AND 	c.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = c.member_idx AND d.del_yn = 'N'
						WHERE a.del_yn = 'N'
							AND a.board_idx = 208
		</pre> 
 <br /> ' 
ERROR - 2022-10-31 09:47:04 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_detail?board_idx=208&history_data=5 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(1) {
  ["board_idx"]=>
  string(3) "208"
}

 <br> ^SELECT
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.board_idx,
							a.member_idx,
							a.img_path,
							a.title,
							a.tags,
							a.contents,
							a.reply_cnt,
							a.recommend_cnt,
							a.scrap_cnt,
							a.view_cnt,
							a.report_cnt,
							a.recommend_cnt,
							a.best_yn,
							a.display_yn,
							a.ins_date,
							a.del_yn
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and board_idx='208'
		</pre> 
 <br /> ' 
ERROR - 2022-10-31 09:47:04 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/reply_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(5) {
  ["board_idx"]=>
  string(3) "208"
  ["member_name"]=>
  NULL
  ["orderby"]=>
  string(1) "0"
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.board_reply_idx,
							FN_AES_DECRYPT(b.member_name) as member_name,
							FN_AES_DECRYPT(d.member_name) as parent_member_name,
							a.img_path,
							a.report_cnt,
							a.reply_comment,
							a.parent_board_reply_idx,
							a.depth,
							a.ins_date,
							a.upd_date,
							a.del_yn,
							a.display_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
							LEFT JOIN tbl_board_reply c ON c.board_reply_idx=a.parent_board_reply_idx  AND 	c.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = c.member_idx AND d.del_yn = 'N'
						WHERE a.del_yn = 'N'
							AND a.board_idx = 208
		 ORDER BY a.report_cnt DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-10-31 09:47:04 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/reply_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(5) {
  ["board_idx"]=>
  string(3) "208"
  ["member_name"]=>
  NULL
  ["orderby"]=>
  string(1) "0"
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
							LEFT JOIN tbl_board_reply c ON c.board_reply_idx=a.parent_board_reply_idx  AND 	c.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = c.member_idx AND d.del_yn = 'N'
						WHERE a.del_yn = 'N'
							AND a.board_idx = 208
		</pre> 
 <br /> ' 
ERROR - 2022-10-31 09:47:17 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:47:17 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:48:42 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
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
ERROR - 2022-10-31 09:48:42 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
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
ERROR - 2022-10-31 09:48:44 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:48:44 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:48:49 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:48:49 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:48:58 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:48:58 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:48:58 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:48:58 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:48:59 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:48:59 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:49:00 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:49:00 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:49:05 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_detail?board_idx=208&history_data=8 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(1) {
  ["board_idx"]=>
  string(3) "208"
}

 <br> ^SELECT
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.board_idx,
							a.member_idx,
							a.img_path,
							a.title,
							a.tags,
							a.contents,
							a.reply_cnt,
							a.recommend_cnt,
							a.scrap_cnt,
							a.view_cnt,
							a.report_cnt,
							a.recommend_cnt,
							a.best_yn,
							a.display_yn,
							a.ins_date,
							a.del_yn
						FROM
							tbl_board a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and board_idx='208'
		</pre> 
 <br /> ' 
ERROR - 2022-10-31 09:49:05 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/reply_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(5) {
  ["board_idx"]=>
  string(3) "208"
  ["member_name"]=>
  NULL
  ["orderby"]=>
  string(1) "0"
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.board_reply_idx,
							FN_AES_DECRYPT(b.member_name) as member_name,
							FN_AES_DECRYPT(d.member_name) as parent_member_name,
							a.img_path,
							a.report_cnt,
							a.reply_comment,
							a.parent_board_reply_idx,
							a.depth,
							a.ins_date,
							a.upd_date,
							a.del_yn,
							a.display_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
							LEFT JOIN tbl_board_reply c ON c.board_reply_idx=a.parent_board_reply_idx  AND 	c.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = c.member_idx AND d.del_yn = 'N'
						WHERE a.del_yn = 'N'
							AND a.board_idx = 208
		 ORDER BY a.report_cnt DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-10-31 09:49:05 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/reply_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(5) {
  ["board_idx"]=>
  string(3) "208"
  ["member_name"]=>
  NULL
  ["orderby"]=>
  string(1) "0"
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx AND b.del_yn = 'N'
							LEFT JOIN tbl_board_reply c ON c.board_reply_idx=a.parent_board_reply_idx  AND 	c.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = c.member_idx AND d.del_yn = 'N'
						WHERE a.del_yn = 'N'
							AND a.board_idx = 208
		</pre> 
 <br /> ' 
ERROR - 2022-10-31 09:49:07 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 09:49:07 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
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
ERROR - 2022-10-31 10:06:45 --> query :  '<pre>admin.dilri.com/board_reply_report_v_1_0_0/board_reply_report_list_get 
  <br> ^ address=>218.49.184.72 
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
ERROR - 2022-10-31 10:06:45 --> query :  '<pre>admin.dilri.com/board_reply_report_v_1_0_0/board_reply_report_list_get 
  <br> ^ address=>218.49.184.72 
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
ERROR - 2022-10-31 10:06:55 --> query :  '<pre>admin.dilri.com/board_report_v_1_0_0/board_report_list_get 
  <br> ^ address=>218.49.184.72 
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
ERROR - 2022-10-31 10:06:55 --> query :  '<pre>admin.dilri.com/board_report_v_1_0_0/board_report_list_get 
  <br> ^ address=>218.49.184.72 
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
ERROR - 2022-10-31 10:06:58 --> query :  '<pre>admin.dilri.com/board_reply_report_v_1_0_0/board_reply_report_list_get 
  <br> ^ address=>218.49.184.72 
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
ERROR - 2022-10-31 10:06:58 --> query :  '<pre>admin.dilri.com/board_reply_report_v_1_0_0/board_reply_report_list_get 
  <br> ^ address=>218.49.184.72 
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
