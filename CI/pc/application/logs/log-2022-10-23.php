<html>

ERROR - 2022-10-23 16:53:32 --> query :  '<pre>pc.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
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
				</pre> 
 <br /> ' 
ERROR - 2022-10-23 16:53:43 --> query :  '<pre>pc.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
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
				</pre> 
 <br /> ' 
ERROR - 2022-10-23 16:53:44 --> query :  '<pre>pc.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							banner_idx,
							img_path,
							link_url
						FROM
							tbl_banner
						WHERE
							del_yn = 'N'
							AND state = '1'
							AND banner_type = '1'
		 ORDER BY RAND() DESC LIMIT 1 </pre> 
 <br /> ' 
ERROR - 2022-10-23 16:53:44 --> query :  '<pre>pc.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							notice_idx,
							title,
							del_yn,
							ins_date,
							upd_date
						FROM
							tbl_notice
						WHERE
							del_yn = 'N'
							AND notice_state = 'Y'
						 ORDER BY notice_idx DESC LIMIT 1 </pre> 
 <br /> ' 
ERROR - 2022-10-23 16:53:44 --> Severity: Notice --> Undefined property: Community_v_1_0_0::$member_del_yn /home/sususoftuser/html/CI/pc/application/third_party/MX/Loader.php 304
ERROR - 2022-10-23 16:53:44 --> query :  '<pre>pc.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							a.board_idx,
							a.member_idx,
							FN_AES_DECRYPT(c.member_name) AS member_name,
							c.member_img,
							a.img_path,
							a.title,
							a.tags,
							a.contents,
							a.reply_cnt,
							a.recommend_cnt,
							a.scrap_cnt,
							a.view_cnt,
							a.report_cnt,
							a.best_yn,
							a.del_yn,
							a.display_yn,
							c.del_yn as member_del_yn,
							DATE_FORMAT(a.ins_date, '%Y-%m-%d %H:%i:%s') as ins_date,
							if(t.scrap_yn='Y', 'Y', 'N') as scrap_yn,
							if(s.recommend_yn='Y', 'Y', 'N') as recommend_yn,
							if(r.board_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-23 16:53:44 --> query :  '<pre>pc.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-23 16:53:44 --> 404 Page Not Found ...--> pc.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36
ERROR - 2022-10-23 16:53:44 --> 404 Page Not Found ...--> pc.dilri.com/media/commonfile/202111/18/0a7d7233a446dfaba77bcf6b0a41753c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36
ERROR - 2022-10-23 16:53:44 --> 404 Page Not Found ...--> pc.dilri.com/media/commonfile/202111/18/6d9386bc2aeb83fd5f22144a61997587.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36
