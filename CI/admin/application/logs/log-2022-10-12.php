<html>

ERROR - 2022-10-12 09:15:03 --> query :  '<pre>admin.dilri.com/login/login_action 
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
ERROR - 2022-10-12 09:15:05 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
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
ERROR - 2022-10-12 09:15:05 --> query :  '<pre>admin.dilri.com/member_v_1_0_0/member_list_get 
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
ERROR - 2022-10-12 09:15:22 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0 
  <br> ^ address=>218.49.184.72 
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
ERROR - 2022-10-12 09:15:22 --> query :  '<pre>admin.dilri.com/terms_v_1_0_0 
  <br> ^ address=>218.49.184.72 
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
ERROR - 2022-10-12 09:15:42 --> query :  '<pre>admin.dilri.com/category_management_v_1_0_0 
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
ERROR - 2022-10-12 09:15:42 --> 404 Page Not Found: /index
ERROR - 2022-10-12 09:15:42 --> 404 Page Not Found: /index
ERROR - 2022-10-12 09:15:42 --> 404 Page Not Found: /index
ERROR - 2022-10-12 09:15:42 --> 404 Page Not Found: /index
ERROR - 2022-10-12 09:15:42 --> 404 Page Not Found: /index
ERROR - 2022-10-12 09:15:42 --> 404 Page Not Found: /index
ERROR - 2022-10-12 09:15:42 --> 404 Page Not Found: /index
ERROR - 2022-10-12 09:15:42 --> 404 Page Not Found: /index
ERROR - 2022-10-12 09:15:42 --> 404 Page Not Found: /index
ERROR - 2022-10-12 09:15:42 --> 404 Page Not Found: /index
ERROR - 2022-10-12 09:15:42 --> 404 Page Not Found: /index
ERROR - 2022-10-12 09:15:49 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0 
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
ERROR - 2022-10-12 09:15:49 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
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
ERROR - 2022-10-12 09:15:49 --> query :  '<pre>admin.dilri.com/qa_v_1_0_0/qa_list_get 
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
ERROR - 2022-10-12 09:15:50 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:15:50 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:15:54 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=1&history_data=9 
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
ERROR - 2022-10-12 09:16:55 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "1"
  ["title"]=>
  string(26) "Operational policy related"
  ["contents"]=>
  string(19) "운영정책 관련"
  ["title_us"]=>
  string(19) "운영정책 관련"
  ["title_kr"]=>
  string(26) "Operational policy related"
  ["title_bd"]=>
  string(34) "অপারেশন নীতি"
  ["contents_us"]=>
  string(19) "운영정책 관련"
  ["contents_kr"]=>
  string(19) "운영정책 관련"
  ["contents_bd"]=>
  string(19) "운영정책 관련"
  ["faq_type"]=>
  string(1) "1"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = 'Operational policy related',
							title_us = '운영정책 관련',
							title_kr = 'Operational policy related',
							title_bd = 'অপারেশন নীতি',
							contents = '운영정책 관련',
							contents_us = '운영정책 관련',
							contents_kr = '운영정책 관련',
							contents_bd = '운영정책 관련',
							faq_type = '1',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '1'
						</pre> 
 <br /> ' 
ERROR - 2022-10-12 09:16:56 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:16:56 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:16:59 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=1&history_data=10 
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
ERROR - 2022-10-12 09:17:13 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "1"
  ["title"]=>
  string(20) "운영 정책 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(26) "Operational policy related"
  ["title_kr"]=>
  string(20) "운영 정책 관련"
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
							title = '운영 정책 관련',
							title_us = 'Operational policy related',
							title_kr = '운영 정책 관련',
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
ERROR - 2022-10-12 09:17:14 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:17:14 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:17:16 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=2&history_data=10 
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
ERROR - 2022-10-12 09:17:56 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "2"
  ["title"]=>
  string(13) "계정/인증"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(22) "Account/Authentication"
  ["title_kr"]=>
  string(13) "계정/인증"
  ["title_bd"]=>
  string(63) "অ্যাকাউন্ট / প্রমাণীকরণ"
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
							title = '계정/인증',
							title_us = 'Account/Authentication',
							title_kr = '계정/인증',
							title_bd = 'অ্যাকাউন্ট / প্রমাণীকরণ',
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
ERROR - 2022-10-12 09:17:58 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:17:58 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:24:46 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=3&history_data=10 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-12 09:25:57 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "3"
  ["title"]=>
  string(20) "구매/판매 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(14) "Buying/Selling"
  ["title_kr"]=>
  string(20) "구매/판매 관련"
  ["title_bd"]=>
  string(37) "বিক্রয়/কিনুন"
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
							title = '구매/판매 관련',
							title_us = 'Buying/Selling',
							title_kr = '구매/판매 관련',
							title_bd = 'বিক্রয়/কিনুন',
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
ERROR - 2022-10-12 09:25:58 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:25:58 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:26:02 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=2&history_data=10 
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
ERROR - 2022-10-12 09:26:07 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "2"
  ["title"]=>
  string(20) "계정/인증 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(22) "Account/Authentication"
  ["title_kr"]=>
  string(20) "계정/인증 관련"
  ["title_bd"]=>
  string(63) "অ্যাকাউন্ট / প্রমাণীকরণ"
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
							title = '계정/인증 관련',
							title_us = 'Account/Authentication',
							title_kr = '계정/인증 관련',
							title_bd = 'অ্যাকাউন্ট / প্রমাণীকরণ',
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
ERROR - 2022-10-12 09:26:10 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:26:10 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:26:12 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=4&history_data=10 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-12 09:26:41 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "4"
  ["title"]=>
  string(19) "거래품목 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(16) "Transaction item"
  ["title_kr"]=>
  string(19) "거래품목 관련"
  ["title_bd"]=>
  string(34) "লেনদেন আইটেম"
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
							title = '거래품목 관련',
							title_us = 'Transaction item',
							title_kr = '거래품목 관련',
							title_bd = 'লেনদেন আইটেম',
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
ERROR - 2022-10-12 09:26:42 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:26:42 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:26:44 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=5&history_data=10 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-12 09:27:15 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "5"
  ["title"]=>
  string(26) "신뢰도 포인트 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(14) "Loyalty points"
  ["title_kr"]=>
  string(26) "신뢰도 포인트 관련"
  ["title_bd"]=>
  string(43) "আনুগত্য পয়েন্ট"
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
							title_us = 'Loyalty points',
							title_kr = '신뢰도 포인트 관련',
							title_bd = 'আনুগত্য পয়েন্ট',
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
ERROR - 2022-10-12 09:27:16 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:27:16 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:27:19 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=6&history_data=10 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-12 09:27:54 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "6"
  ["title"]=>
  string(19) "이용제재 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(18) "Restriction on use"
  ["title_kr"]=>
  string(19) "이용제재 관련"
  ["title_bd"]=>
  string(55) "ব্যবহারে নিষেধাজ্ঞা"
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
							title_us = 'Restriction on use',
							title_kr = '이용제재 관련',
							title_bd = 'ব্যবহারে নিষেধাজ্ঞা',
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
ERROR - 2022-10-12 09:27:56 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:27:56 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:27:58 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=7&history_data=10 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-12 09:28:35 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "7"
  ["title"]=>
  string(6) "기타"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(3) "Etc"
  ["title_kr"]=>
  string(6) "기타"
  ["title_bd"]=>
  string(21) "ইত্যাদি"
  ["contents_us"]=>
  string(1) "-"
  ["contents_kr"]=>
  string(1) "-"
  ["contents_bd"]=>
  string(1) "-"
  ["faq_type"]=>
  string(1) "7"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '기타',
							title_us = 'Etc',
							title_kr = '기타',
							title_bd = 'ইত্যাদি',
							contents = '-',
							contents_us = '-',
							contents_kr = '-',
							contents_bd = '-',
							faq_type = '7',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '7'
						</pre> 
 <br /> ' 
ERROR - 2022-10-12 09:28:37 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:28:37 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:28:39 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=9&history_data=10 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-12 09:29:16 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(1) "9"
  ["title"]=>
  string(20) "검색 문의 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(14) "Search Contact"
  ["title_kr"]=>
  string(20) "검색 문의 관련"
  ["title_bd"]=>
  string(62) "পরিচিতি অনুসন্ধান করুন"
  ["contents_us"]=>
  string(1) "-"
  ["contents_kr"]=>
  string(1) "-"
  ["contents_bd"]=>
  string(1) "-"
  ["faq_type"]=>
  string(1) "8"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '검색 문의 관련',
							title_us = 'Search Contact',
							title_kr = '검색 문의 관련',
							title_bd = 'পরিচিতি অনুসন্ধান করুন',
							contents = '-',
							contents_us = '-',
							contents_kr = '-',
							contents_bd = '-',
							faq_type = '8',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '9'
						</pre> 
 <br /> ' 
ERROR - 2022-10-12 09:29:18 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:29:18 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:29:20 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=10&history_data=10 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
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
ERROR - 2022-10-12 09:29:50 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(2) "10"
  ["title"]=>
  string(20) "오류 제보 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(12) "error report"
  ["title_kr"]=>
  string(20) "오류 제보 관련"
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
							title = '오류 제보 관련',
							title_us = 'error report',
							title_kr = '오류 제보 관련',
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
ERROR - 2022-10-12 09:29:51 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:29:51 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:29:53 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_detail?faq_idx=11&history_data=10 
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
ERROR - 2022-10-12 09:30:18 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(11) {
  ["faq_idx"]=>
  string(2) "11"
  ["title"]=>
  string(26) "커뮤니티 문의 관련"
  ["contents"]=>
  string(1) "-"
  ["title_us"]=>
  string(21) "Contact the community"
  ["title_kr"]=>
  string(26) "커뮤니티 문의 관련"
  ["title_bd"]=>
  string(84) "সম্প্রদায়ের সাথে যোগাযোগ করুন"
  ["contents_us"]=>
  string(1) "-"
  ["contents_kr"]=>
  string(1) "-"
  ["contents_bd"]=>
  string(1) "-"
  ["faq_type"]=>
  string(2) "11"
  ["state"]=>
  string(1) "Y"
}

 <br> ^UPDATE
							tbl_faq
						SET
							title = '커뮤니티 문의 관련',
							title_us = 'Contact the community',
							title_kr = '커뮤니티 문의 관련',
							title_bd = 'সম্প্রদায়ের সাথে যোগাযোগ করুন',
							contents = '-',
							contents_us = '-',
							contents_kr = '-',
							contents_bd = '-',
							faq_type = '11',
							state = 'Y',
							upd_date = NOW()
						WHERE
							faq_idx = '11'
						</pre> 
 <br /> ' 
ERROR - 2022-10-12 09:30:20 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
ERROR - 2022-10-12 09:30:20 --> query :  '<pre>admin.dilri.com/faq_v_1_0_0/faq_list_get 
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
