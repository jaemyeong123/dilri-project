<html>

ERROR - 2022-08-29 15:20:00 --> query :  '<pre>admin.dilri.com/login/login_action 
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
ERROR - 2022-08-29 15:20:04 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
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
ERROR - 2022-08-29 15:20:04 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
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
ERROR - 2022-08-29 15:20:11 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_detail?member_idx=71&history_data=4 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
array(1) {
  ["member_idx"]=>
  string(2) "71"
}

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							FN_AES_DECRYPT(member_name) AS member_name,
							ins_date,
							del_yn,
							member_leave_date,
							member_leave_reason,
							member_point,
							product_cnt,
							free_product_cnt,
							good_product_cnt,
							bad_product_cnt,
							#신고평가
							good_product_cnt_0,
							good_product_cnt_1,
							good_product_cnt_2,
							good_product_cnt_3,
							good_product_cnt_4,
							bad_product_cnt_0,
							bad_product_cnt_1,
							bad_product_cnt_2,
							bad_product_cnt_3,
							bad_product_cnt_4,
							bad_product_cnt_5,
							bad_product_cnt_6,
							bad_product_cnt_7,
							free_product_cnt_0,
							free_product_cnt_1,
							free_product_cnt_2,
							free_product_cnt_3,
							free_product_cnt_4,
							free_product_cnt_5,
							free_product_cnt_6,
							free_product_cnt_7,
							free_product_cnt_8,
							memo
						FROM
							tbl_member
						WHERE
							member_idx = '71'
						</pre> 
 <br /> ' 
ERROR - 2022-08-29 15:20:13 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
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
ERROR - 2022-08-29 15:20:13 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
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
ERROR - 2022-08-29 15:21:52 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:21:52 --> query :  '<pre>admin.dilri.com/banner_v_1_0_0/banner_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:21:52 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
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
ERROR - 2022-08-29 15:21:55 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:21:55 --> query :  '<pre>admin.dilri.com/notice_v_1_0_0/notice_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
						</pre> 
 <br /> ' 
ERROR - 2022-08-29 15:21:55 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:21:55 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:21:56 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_qa
						WHERE
							del_yn ='N'
					</pre> 
 <br /> ' 
ERROR - 2022-08-29 15:21:56 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:21:56 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:21:57 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:21:57 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:21:58 --> query :  '<pre>admin.dilri.com/product_report_v_1_0_0/product_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:21:58 --> query :  '<pre>admin.dilri.com/product_report_v_1_0_0/product_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:21:59 --> query :  '<pre>admin.dilri.com/board_report_v_1_0_0/board_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:21:59 --> query :  '<pre>admin.dilri.com/board_report_v_1_0_0/board_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:21:59 --> query :  '<pre>admin.dilri.com/board_reply_report_v_1_0_0/board_reply_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:21:59 --> query :  '<pre>admin.dilri.com/board_reply_report_v_1_0_0/board_reply_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:22:00 --> query :  '<pre>admin.dilri.com/product_report_v_1_0_0/product_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:22:00 --> query :  '<pre>admin.dilri.com/product_report_v_1_0_0/product_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:22:00 --> query :  '<pre>admin.dilri.com/board_report_v_1_0_0/board_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:22:00 --> query :  '<pre>admin.dilri.com/board_report_v_1_0_0/board_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:22:01 --> query :  '<pre>admin.dilri.com/board_reply_report_v_1_0_0/board_reply_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:22:01 --> query :  '<pre>admin.dilri.com/board_reply_report_v_1_0_0/board_reply_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:22:01 --> query :  '<pre>admin.dilri.com/board_report_v_1_0_0/board_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:22:01 --> query :  '<pre>admin.dilri.com/board_report_v_1_0_0/board_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:22:02 --> query :  '<pre>admin.dilri.com/product_report_v_1_0_0/product_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:22:02 --> query :  '<pre>admin.dilri.com/product_report_v_1_0_0/product_report_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:22:02 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:22:02 --> query :  '<pre>admin.dilri.com/board_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:22:03 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 15:22:03 --> query :  '<pre>admin.dilri.com/product_v_1_0_0/product_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-08-29 06:22:03 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-08-29 06:22:03 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-08-29 06:22:03 --> 404 Page Not Found: /index
ERROR - 2022-08-29 06:22:03 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-08-29 06:22:03 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-08-29 06:22:03 --> 404 Page Not Found: /index
ERROR - 2022-08-29 15:22:03 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
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
ERROR - 2022-08-29 15:22:03 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
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
