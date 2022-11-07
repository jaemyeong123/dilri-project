<html>

ERROR - 2022-09-02 15:00:34 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							notice_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							notice_type
						FROM
							tbl_notice
						WHERE
							notice_state = 'Y'
							AND del_yn = 'N'

						ORDER BY
							ins_date DESC
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:00:34 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							banner_idx,
							img_path,
							link_url
						FROM
							tbl_banner
						WHERE
							banner_type = 0
							AND `state` = 1
						ORDER BY
							RAND()
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:00:34 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_location_idx,
							member_addr,
							member_lat,
							member_lng,
							title,
							distance
						FROM
							tbl_member_location
						WHERE
							member_idx = ''
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:00:34 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-02 06:00:35 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 06:00:35 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 06:00:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 15:00:36 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = NULL,
							upd_date = NOW()
						WHERE
							member_idx = ''
					</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:00:36 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							a.product_idx,
							ifnull(t.like_yn, 'N') as like_yn,

							a.member_idx,
							a.img_path,
							a.product_state,
							a.product_price,
							a.free_product_yn,
							a.title,
							a.product_addr,
							a.product_lat,
							a.product_lng,
							a.chatting_cnt,
							a.like_cnt,
							a.list_up_cnt,
							a.upd_date,
							a.ins_date,
							a.display_yn,
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-02 15:00:36 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-02 15:55:41 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							notice_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							notice_type
						FROM
							tbl_notice
						WHERE
							notice_state = 'Y'
							AND del_yn = 'N'

						ORDER BY
							ins_date DESC
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:55:41 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							banner_idx,
							img_path,
							link_url
						FROM
							tbl_banner
						WHERE
							banner_type = 0
							AND `state` = 1
						ORDER BY
							RAND()
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:55:41 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_location_idx,
							member_addr,
							member_lat,
							member_lng,
							title,
							distance
						FROM
							tbl_member_location
						WHERE
							member_idx = ''
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:55:41 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-02 06:55:42 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 06:55:42 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 06:55:42 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 15:55:43 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = NULL,
							upd_date = NOW()
						WHERE
							member_idx = ''
					</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:55:43 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							a.product_idx,
							ifnull(t.like_yn, 'N') as like_yn,

							a.member_idx,
							a.img_path,
							a.product_state,
							a.product_price,
							a.free_product_yn,
							a.title,
							a.product_addr,
							a.product_lat,
							a.product_lng,
							a.chatting_cnt,
							a.like_cnt,
							a.list_up_cnt,
							a.upd_date,
							a.ins_date,
							a.display_yn,
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-02 15:55:43 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-02 15:55:52 --> query :  '<pre>m.dilri.com/bd/join_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							member_type,
							contents,
							upd_date
						FROM
							tbl_terms_management
						WHERE
							member_type = '0'
          	</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:00 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							notice_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							notice_type
						FROM
							tbl_notice
						WHERE
							notice_state = 'Y'
							AND del_yn = 'N'

						ORDER BY
							ins_date DESC
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:00 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							banner_idx,
							img_path,
							link_url
						FROM
							tbl_banner
						WHERE
							banner_type = 0
							AND `state` = 1
						ORDER BY
							RAND()
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:00 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_location_idx,
							member_addr,
							member_lat,
							member_lng,
							title,
							distance
						FROM
							tbl_member_location
						WHERE
							member_idx = ''
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:00 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-02 15:56:00 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = NULL,
							upd_date = NOW()
						WHERE
							member_idx = ''
					</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:00 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							a.product_idx,
							ifnull(t.like_yn, 'N') as like_yn,

							a.member_idx,
							a.img_path,
							a.product_state,
							a.product_price,
							a.free_product_yn,
							a.title,
							a.product_addr,
							a.product_lat,
							a.product_lng,
							a.chatting_cnt,
							a.like_cnt,
							a.list_up_cnt,
							a.upd_date,
							a.ins_date,
							a.display_yn,
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:00 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							notice_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							notice_type
						FROM
							tbl_notice
						WHERE
							notice_state = 'Y'
							AND del_yn = 'N'

						ORDER BY
							ins_date DESC
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							banner_idx,
							img_path,
							link_url
						FROM
							tbl_banner
						WHERE
							banner_type = 0
							AND `state` = 1
						ORDER BY
							RAND()
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_location_idx,
							member_addr,
							member_lat,
							member_lng,
							title,
							distance
						FROM
							tbl_member_location
						WHERE
							member_idx = ''
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-02 15:56:13 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = NULL,
							upd_date = NOW()
						WHERE
							member_idx = ''
					</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:13 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							a.product_idx,
							ifnull(t.like_yn, 'N') as like_yn,

							a.member_idx,
							a.img_path,
							a.product_state,
							a.product_price,
							a.free_product_yn,
							a.title,
							a.product_addr,
							a.product_lat,
							a.product_lng,
							a.chatting_cnt,
							a.like_cnt,
							a.list_up_cnt,
							a.upd_date,
							a.ins_date,
							a.display_yn,
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:13 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:26 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							notice_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							notice_type
						FROM
							tbl_notice
						WHERE
							notice_state = 'Y'
							AND del_yn = 'N'

						ORDER BY
							ins_date DESC
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:26 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							banner_idx,
							img_path,
							link_url
						FROM
							tbl_banner
						WHERE
							banner_type = 0
							AND `state` = 1
						ORDER BY
							RAND()
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:26 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_location_idx,
							member_addr,
							member_lat,
							member_lng,
							title,
							distance
						FROM
							tbl_member_location
						WHERE
							member_idx = ''
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:26 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-02 15:56:26 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = NULL,
							upd_date = NOW()
						WHERE
							member_idx = ''
					</pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:26 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							a.product_idx,
							ifnull(t.like_yn, 'N') as like_yn,

							a.member_idx,
							a.img_path,
							a.product_state,
							a.product_price,
							a.free_product_yn,
							a.title,
							a.product_addr,
							a.product_lat,
							a.product_lng,
							a.chatting_cnt,
							a.like_cnt,
							a.list_up_cnt,
							a.upd_date,
							a.ins_date,
							a.display_yn,
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-02 15:56:26 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-02 07:01:10 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:01:10 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:01:10 --> 404 Page Not Found ...--> m.dilri.com/KR/find_pw_v_1_0_0  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 16:01:31 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							notice_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							notice_type
						FROM
							tbl_notice
						WHERE
							notice_state = 'Y'
							AND del_yn = 'N'

						ORDER BY
							ins_date DESC
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:01:31 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							banner_idx,
							img_path,
							link_url
						FROM
							tbl_banner
						WHERE
							banner_type = 0
							AND `state` = 1
						ORDER BY
							RAND()
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:01:31 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_location_idx,
							member_addr,
							member_lat,
							member_lng,
							title,
							distance
						FROM
							tbl_member_location
						WHERE
							member_idx = ''
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:01:31 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-02 07:01:32 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:01:32 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:01:32 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 16:01:33 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = NULL,
							upd_date = NOW()
						WHERE
							member_idx = ''
					</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:01:33 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							a.product_idx,
							ifnull(t.like_yn, 'N') as like_yn,

							a.member_idx,
							a.img_path,
							a.product_state,
							a.product_price,
							a.free_product_yn,
							a.title,
							a.product_addr,
							a.product_lat,
							a.product_lng,
							a.chatting_cnt,
							a.like_cnt,
							a.list_up_cnt,
							a.upd_date,
							a.ins_date,
							a.display_yn,
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-02 16:01:33 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-02 07:02:33 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:02:33 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:02:33 --> 404 Page Not Found ...--> m.dilri.com/external_js/swiper-bundle.min.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:02:33 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:02:33 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:02:33 --> 404 Page Not Found ...--> m.dilri.com/external_js/maps/swiper.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:12:34 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:34 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:34 --> 404 Page Not Found ...--> m.dilri.com/external_js/maps/swiper.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:12:34 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:34 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:34 --> 404 Page Not Found ...--> m.dilri.com/external_js/swiper-bundle.min.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:12:35 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:35 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:35 --> 404 Page Not Found ...--> m.dilri.com/external_js/maps/swiper.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:12:35 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:35 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:35 --> 404 Page Not Found ...--> m.dilri.com/external_js/swiper-bundle.min.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:36 --> 404 Page Not Found ...--> m.dilri.com/external_js/swiper-bundle.min.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:36 --> 404 Page Not Found ...--> m.dilri.com/external_js/maps/swiper.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:36 --> 404 Page Not Found ...--> m.dilri.com/external_js/maps/swiper.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:36 --> 404 Page Not Found ...--> m.dilri.com/external_js/swiper-bundle.min.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:36 --> 404 Page Not Found ...--> m.dilri.com/external_js/maps/swiper.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:36 --> 404 Page Not Found ...--> m.dilri.com/external_js/swiper-bundle.min.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:36 --> 404 Page Not Found ...--> m.dilri.com/external_js/maps/swiper.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:36 --> 404 Page Not Found ...--> m.dilri.com/external_js/swiper-bundle.min.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:12:40 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:40 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:40 --> 404 Page Not Found ...--> m.dilri.com/external_js/maps/swiper.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 07:12:40 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:40 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:40 --> 404 Page Not Found ...--> m.dilri.com/external_js/swiper-bundle.min.js.map  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 16:12:56 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							notice_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							notice_type
						FROM
							tbl_notice
						WHERE
							notice_state = 'Y'
							AND del_yn = 'N'

						ORDER BY
							ins_date DESC
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:12:56 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							banner_idx,
							img_path,
							link_url
						FROM
							tbl_banner
						WHERE
							banner_type = 0
							AND `state` = 1
						ORDER BY
							RAND()
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:12:56 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_location_idx,
							member_addr,
							member_lat,
							member_lng,
							title,
							distance
						FROM
							tbl_member_location
						WHERE
							member_idx = ''
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:12:56 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-02 07:12:56 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:12:56 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:12:56 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 16:12:57 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = NULL,
							upd_date = NOW()
						WHERE
							member_idx = ''
					</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:12:57 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							a.product_idx,
							ifnull(t.like_yn, 'N') as like_yn,

							a.member_idx,
							a.img_path,
							a.product_state,
							a.product_price,
							a.free_product_yn,
							a.title,
							a.product_addr,
							a.product_lat,
							a.product_lng,
							a.chatting_cnt,
							a.like_cnt,
							a.list_up_cnt,
							a.upd_date,
							a.ins_date,
							a.display_yn,
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-02 16:12:57 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-02 16:40:40 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							notice_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							notice_type
						FROM
							tbl_notice
						WHERE
							notice_state = 'Y'
							AND del_yn = 'N'

						ORDER BY
							ins_date DESC
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:40:40 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							banner_idx,
							img_path,
							link_url
						FROM
							tbl_banner
						WHERE
							banner_type = 0
							AND `state` = 1
						ORDER BY
							RAND()
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:40:40 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_location_idx,
							member_addr,
							member_lat,
							member_lng,
							title,
							distance
						FROM
							tbl_member_location
						WHERE
							member_idx = ''
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:40:40 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-02 07:40:40 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:40:40 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:40:40 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 16:40:41 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = NULL,
							upd_date = NOW()
						WHERE
							member_idx = ''
					</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:40:41 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							a.product_idx,
							ifnull(t.like_yn, 'N') as like_yn,

							a.member_idx,
							a.img_path,
							a.product_state,
							a.product_price,
							a.free_product_yn,
							a.title,
							a.product_addr,
							a.product_lat,
							a.product_lng,
							a.chatting_cnt,
							a.like_cnt,
							a.list_up_cnt,
							a.upd_date,
							a.ins_date,
							a.display_yn,
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-02 16:40:41 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-02 16:40:50 --> query :  '<pre>m.dilri.com/bd/join_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							member_type,
							contents,
							upd_date
						FROM
							tbl_terms_management
						WHERE
							member_type = '0'
          	</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:40:50 --> query :  '<pre>m.dilri.com/bd/join_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							member_type,
							contents,
							upd_date
						FROM
							tbl_terms_management
						WHERE
							member_type = '0'
          	</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:01 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							notice_idx,
							title,
							title_us,
							title_kr,
							title_bd,
							notice_type
						FROM
							tbl_notice
						WHERE
							notice_state = 'Y'
							AND del_yn = 'N'

						ORDER BY
							ins_date DESC
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:01 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							banner_idx,
							img_path,
							link_url
						FROM
							tbl_banner
						WHERE
							banner_type = 0
							AND `state` = 1
						ORDER BY
							RAND()
						LIMIT 1
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:01 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_location_idx,
							member_addr,
							member_lat,
							member_lng,
							title,
							distance
						FROM
							tbl_member_location
						WHERE
							member_idx = ''
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:01 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-02 07:50:02 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-02 07:50:02 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-02 07:50:02 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-02 16:50:02 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = NULL,
							upd_date = NOW()
						WHERE
							member_idx = ''
					</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:02 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  NULL
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							a.product_idx,
							ifnull(t.like_yn, 'N') as like_yn,

							a.member_idx,
							a.img_path,
							a.product_state,
							a.product_price,
							a.free_product_yn,
							a.title,
							a.product_addr,
							a.product_lat,
							a.product_lng,
							a.chatting_cnt,
							a.like_cnt,
							a.list_up_cnt,
							a.upd_date,
							a.ins_date,
							a.display_yn,
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:02 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:04 --> query :  '<pre>m.dilri.com/bd/join_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							terms_management_idx,
							title,
							type,
							member_type,
							contents,
							upd_date
						FROM
							tbl_terms_management
						WHERE
							member_type = '0'
          	</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:21 --> query :  '<pre>m.dilri.com/bd/tel_verify_v_1_0_0/tel_verify_setting 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["member_phone"]=>
  string(12) "010148752141"
  ["verify_num"]=>
  string(6) "895436"
}

 <br> ^update
							tbl_verify
            set
							del_yn='Y',
							upd_date=now()
						where
						member_phone = FN_AES_ENCRYPT('010148752141')
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:21 --> query :  '<pre>m.dilri.com/bd/tel_verify_v_1_0_0/tel_verify_setting 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["member_phone"]=>
  string(12) "010148752141"
  ["verify_num"]=>
  string(6) "895436"
}

 <br> ^INSERT INTO
							tbl_verify
						(
							member_phone,
							verify_num,
							verify_yn,
							verify_cnt,
							ins_date,
							upd_date
						)VALUES(
							FN_AES_ENCRYPT('010148752141'),
							'895436',
							'N',
							'1',
							NOW(),
							NOW()
						)
						</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:29 --> query :  '<pre>m.dilri.com/bd/tel_verify_v_1_0_0/tel_verify_setting 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["member_phone"]=>
  string(12) "010148752141"
  ["verify_num"]=>
  string(6) "895436"
}

 <br> ^SELECT
							verify_idx,
							member_phone,
							verify_num
						FROM
							tbl_verify
						WHERE
							member_phone = FN_AES_ENCRYPT('010148752141')
							and del_yn='N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:29 --> query :  '<pre>m.dilri.com/bd/tel_verify_v_1_0_0/tel_verify_setting 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["member_phone"]=>
  string(12) "010148752141"
  ["verify_num"]=>
  string(6) "179446"
}

 <br> ^update
							tbl_verify
            set
							del_yn='Y',
							upd_date=now()
						where
						member_phone = FN_AES_ENCRYPT('010148752141')
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:29 --> query :  '<pre>m.dilri.com/bd/tel_verify_v_1_0_0/tel_verify_setting 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["member_phone"]=>
  string(12) "010148752141"
  ["verify_num"]=>
  string(6) "179446"
}

 <br> ^INSERT INTO
							tbl_verify
						(
							member_phone,
							verify_num,
							verify_yn,
							verify_cnt,
							ins_date,
							upd_date
						)VALUES(
							FN_AES_ENCRYPT('010148752141'),
							'179446',
							'N',
							'1',
							NOW(),
							NOW()
						)
						</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:33 --> query :  '<pre>m.dilri.com/bd/tel_verify_v_1_0_0/tel_verify_setting 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["member_phone"]=>
  string(12) "010148752141"
  ["verify_num"]=>
  string(6) "179446"
}

 <br> ^SELECT
							verify_idx,
							member_phone,
							verify_num
						FROM
							tbl_verify
						WHERE
							member_phone = FN_AES_ENCRYPT('010148752141')
							and del_yn='N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:33 --> query :  '<pre>m.dilri.com/bd/tel_verify_v_1_0_0/tel_verify_setting 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["member_phone"]=>
  string(12) "010148752141"
  ["verify_num"]=>
  string(6) "332315"
}

 <br> ^update
							tbl_verify
            set
							del_yn='Y',
							upd_date=now()
						where
						member_phone = FN_AES_ENCRYPT('010148752141')
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:33 --> query :  '<pre>m.dilri.com/bd/tel_verify_v_1_0_0/tel_verify_setting 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["member_phone"]=>
  string(12) "010148752141"
  ["verify_num"]=>
  string(6) "332315"
}

 <br> ^INSERT INTO
							tbl_verify
						(
							member_phone,
							verify_num,
							verify_yn,
							verify_cnt,
							ins_date,
							upd_date
						)VALUES(
							FN_AES_ENCRYPT('010148752141'),
							'332315',
							'N',
							'1',
							NOW(),
							NOW()
						)
						</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:38 --> query :  '<pre>m.dilri.com/bd/tel_verify_v_1_0_0/tel_verify_setting 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["member_phone"]=>
  string(12) "010148752141"
  ["verify_num"]=>
  string(6) "332315"
}

 <br> ^SELECT
							verify_idx,
							member_phone,
							verify_num
						FROM
							tbl_verify
						WHERE
							member_phone = FN_AES_ENCRYPT('010148752141')
							and del_yn='N'
						</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:38 --> query :  '<pre>m.dilri.com/bd/tel_verify_v_1_0_0/tel_verify_setting 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["member_phone"]=>
  string(12) "010148752141"
  ["verify_num"]=>
  string(6) "479431"
}

 <br> ^update
							tbl_verify
            set
							del_yn='Y',
							upd_date=now()
						where
						member_phone = FN_AES_ENCRYPT('010148752141')
		</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:38 --> query :  '<pre>m.dilri.com/bd/tel_verify_v_1_0_0/tel_verify_setting 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["member_phone"]=>
  string(12) "010148752141"
  ["verify_num"]=>
  string(6) "479431"
}

 <br> ^INSERT INTO
							tbl_verify
						(
							member_phone,
							verify_num,
							verify_yn,
							verify_cnt,
							ins_date,
							upd_date
						)VALUES(
							FN_AES_ENCRYPT('010148752141'),
							'479431',
							'N',
							'1',
							NOW(),
							NOW()
						)
						</pre> 
 <br /> ' 
ERROR - 2022-09-02 16:50:39 --> query :  '<pre>m.dilri.com/bd/tel_verify_v_1_0_0/tel_verify_setting 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36^ 
array(2) {
  ["member_phone"]=>
  string(12) "010148752141"
  ["verify_num"]=>
  string(6) "479431"
}

 <br> ^SELECT
							verify_idx,
							member_phone,
							verify_num
						FROM
							tbl_verify
						WHERE
							member_phone = FN_AES_ENCRYPT('010148752141')
							and del_yn='N'
						</pre> 
 <br /> ' 
