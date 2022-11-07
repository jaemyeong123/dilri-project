<html>

ERROR - 2022-09-05 13:34:57 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
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
ERROR - 2022-09-05 13:34:57 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
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
ERROR - 2022-09-05 13:34:57 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
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
ERROR - 2022-09-05 13:34:57 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
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
ERROR - 2022-09-05 04:34:58 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 04:34:58 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 04:34:58 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-05 13:34:59 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
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
ERROR - 2022-09-05 13:34:59 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
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
ERROR - 2022-09-05 13:34:59 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
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
ERROR - 2022-09-05 13:55:11 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-05 13:55:11 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-05 13:55:11 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-05 13:55:11 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-05 04:55:12 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 04:55:12 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 04:55:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36
ERROR - 2022-09-05 13:55:13 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-05 13:55:13 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-05 13:55:13 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>58.124.235.115 
 <br> ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36^ 
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
ERROR - 2022-09-05 14:07:02 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
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
ERROR - 2022-09-05 14:07:02 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
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
ERROR - 2022-09-05 14:07:02 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
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
ERROR - 2022-09-05 14:07:02 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
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
ERROR - 2022-09-05 05:07:02 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:07:02 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:07:02 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>58.124.235.115 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-05 14:07:03 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
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
ERROR - 2022-09-05 14:07:03 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
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
ERROR - 2022-09-05 14:07:03 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
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
ERROR - 2022-09-05 05:07:48 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:07:48 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:07:48 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:07:48 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:07:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:07:48 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:07:48 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:07:48 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 14:08:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>27.167.224.214 
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
ERROR - 2022-09-05 14:08:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>27.167.224.214 
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
ERROR - 2022-09-05 14:08:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>27.167.224.214 
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
ERROR - 2022-09-05 14:08:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>27.167.224.214 
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
ERROR - 2022-09-05 05:08:10 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:08:10 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:08:10 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>27.167.224.214 ^ agent=>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36
ERROR - 2022-09-05 14:08:11 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>27.167.224.214 
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
ERROR - 2022-09-05 14:08:11 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>27.167.224.214 
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
ERROR - 2022-09-05 14:08:11 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>27.167.224.214 
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
ERROR - 2022-09-05 05:09:36 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:09:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:09:36 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:09:36 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:09:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:09:36 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:09:36 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:09:36 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:09:37 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:09:37 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:09:37 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:09:37 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:09:37 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:09:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:09:37 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 05:10:23 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:10:23 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:10:23 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:10:23 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:10:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:10:23 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:10:23 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:10:23 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 05:10:24 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:10:24 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:10:24 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:10:24 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:10:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:10:24 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:10:24 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:10:24 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 05:12:02 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:12:02 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:12:02 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:12:02 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:12:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:12:02 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:12:02 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:12:02 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 05:15:06 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:15:06 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:15:06 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:15:06 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:15:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:15:06 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:15:06 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:15:06 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 05:15:10 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:15:10 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:15:10 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:15:10 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:15:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:15:10 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:15:10 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:15:10 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 05:15:37 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:15:37 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:15:37 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:15:37 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:15:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:15:37 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:15:37 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:15:37 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 05:15:45 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:15:45 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:15:45 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:15:45 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:15:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:15:45 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:15:45 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:15:45 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 05:16:17 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:16:17 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:16:17 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:16:17 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:16:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:16:17 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:16:17 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:16:17 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
ERROR - 2022-09-05 05:17:14 --> Severity: Warning --> mkdir(): Permission denied /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 117
ERROR - 2022-09-05 05:17:14 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-05 05:17:14 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-05 05:17:14 --> Severity: error --> Exception: Session: Configured save path '/home/sususoftuser/html/pc/session' is not a directory, doesn't exist or cannot be created. /home/sususoftuser/html/CI/system/libraries/Session/drivers/Session_files_driver.php 119
ERROR - 2022-09-05 05:17:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sususoftuser/html/CI/system/core/Exceptions.php:244) /home/sususoftuser/html/CI/system/core/Common.php 565
ERROR - 2022-09-05 05:17:14 --> Severity: Notice --> Undefined variable: severity /home/sususoftuser/html/CI/m/application/errors/error_php.php 5
ERROR - 2022-09-05 05:17:14 --> Severity: Notice --> Undefined variable: filepath /home/sususoftuser/html/CI/m/application/errors/error_php.php 7
ERROR - 2022-09-05 05:17:14 --> Severity: Notice --> Undefined variable: line /home/sususoftuser/html/CI/m/application/errors/error_php.php 8
