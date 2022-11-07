<html>

ERROR - 2022-10-26 08:57:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 08:57:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 08:57:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 08:57:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 11:57:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 08:57:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = ''
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 08:57:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 08:57:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-26 08:57:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 08:57:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 08:57:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 08:57:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 11:57:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 08:57:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = ''
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 08:57:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 08:57:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-26 08:57:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 08:57:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 08:57:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 08:57:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 11:57:19 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:19 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:19 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:19 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:19 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 11:57:19 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36
ERROR - 2022-10-26 08:57:20 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = ''
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 08:57:20 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 08:57:20 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-26 08:58:42 --> query :  '<pre>m.dilri.com/us/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							del_yn
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('test005@qaz.com')
							AND member_pw = SHA2('1q2w3e4r5t6y',512)
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 08:58:50 --> query :  '<pre>m.dilri.com/us/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							del_yn
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('Test005@qaz.com')
							AND member_pw = SHA2('1q2w3e4r5t6y',512)
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 08:58:50 --> query :  '<pre>m.dilri.com/us/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
array(5) {
  ["member_id"]=>
  string(15) "Test005@qaz.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_idx"]=>
  string(2) "77"
  ["gcm_key"]=>
  string(163) "e2BlMZPySWiHbA4J85TIAL:APA91bHArmdP_h8HengBII_dMEePPY6VXk_nx6l5QF_9SzmkBmA7X4a8H7XQyqfBjOQOUoy9jswuFLV0viVLhbnp0PzbqrKK3D2ITFLys3zg9JePH0OyjHgUN_I51ogrsHcOchLeZmsM"
  ["device_os"]=>
  string(1) "A"
}

 <br> ^UPDATE
					 tbl_member
				 SET
				 	 uuid = NULL,
					 gcm_key = 'e2BlMZPySWiHbA4J85TIAL:APA91bHArmdP_h8HengBII_dMEePPY6VXk_nx6l5QF_9SzmkBmA7X4a8H7XQyqfBjOQOUoy9jswuFLV0viVLhbnp0PzbqrKK3D2ITFLys3zg9JePH0OyjHgUN_I51ogrsHcOchLeZmsM',
					 device_os = 'A',
					 upd_date = NOW()
				 WHERE
					 member_idx = '77'
	 </pre> 
 <br /> ' 
ERROR - 2022-10-26 08:58:52 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 08:58:52 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 08:58:52 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
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
							member_idx = '77'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 08:58:52 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:07:34 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:07:34 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "77"
  ["uuid"]=>
  string(36) "75d77079-89e0-4014-9796-11bf1134da5c"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = '75d77079-89e0-4014-9796-11bf1134da5c',
						upd_date = NOW()
					WHERE
						member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:07:34 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							FN_AES_DECRYPT(member_id)  AS member_id,
							a.uuid,
							a.gcm_key,
							a.device_os,
							a.del_yn
						FROM
							tbl_member as a
						WHERE
							a.member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:07:35 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:07:35 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 09:07:35 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 09:07:35 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '77'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:07:35 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 09:07:35 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 12:07:42 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:07:42 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:07:42 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:07:42 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:07:42 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:07:42 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 09:08:48 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:48 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "77"
  ["uuid"]=>
  string(36) "75d77079-89e0-4014-9796-11bf1134da5c"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = '75d77079-89e0-4014-9796-11bf1134da5c',
						upd_date = NOW()
					WHERE
						member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:48 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							FN_AES_DECRYPT(member_id)  AS member_id,
							a.uuid,
							a.gcm_key,
							a.device_os,
							a.del_yn
						FROM
							tbl_member as a
						WHERE
							a.member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 09:08:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 09:08:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '77'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 09:08:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 12:08:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:08:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:08:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:08:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:08:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:08:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 09:08:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8156090"
  ["current_lng"]=>
  string(10) "90.4115961"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '77'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8156090"
  ["current_lng"]=>
  string(10) "90.4115961"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) <= 1  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) <= 1  </pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:53 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:53 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							FN_AES_DECRYPT(a.member_birth) AS member_birth,
							a.member_gender,
							a.del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:56 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:56 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							FN_AES_DECRYPT(a.member_birth) AS member_birth,
							a.member_gender,
							a.del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:56 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:56 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 09:08:56 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '77'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:08:56 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:09:00 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 12:09:37 --> 404 Page Not Found ...--> m.dilri.com/images/i_alarm_delete.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 09:09:46 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:09:46 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product AS a
						WHERE
							a.del_yn = 'N'
							AND a.member_idx = '77'
							AND DATE_FORMAT(a.ins_date, '%Y-%m-%d') = DATE_FORMAT(NOW(), '%Y-%m-%d')
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:09:46 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product AS a
						WHERE
							a.del_yn = 'N'
							AND a.member_idx = '77'
							AND a.product_state IN (0,1)
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:09:46 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							forbidden_search_idx,
							title
						FROM
							tbl_forbidden_search
						WHERE
							del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:09:46 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(8) {
  ["category_management_idx"]=>
  string(1) "1"
  ["title"]=>
  string(3) "Rgf"
  ["free_product_yn"]=>
  string(1) "N"
  ["product_price"]=>
  string(3) "123"
  ["img_path"]=>
  string(64) "/media/commonfile/202210/26/b21816217798a91ba4829dc394f07059.jpg"
  ["contents"]=>
  string(3) "Dff"
  ["tags"]=>
  string(4) "#egg"
  ["member_location_idx"]=>
  string(2) "84"
}

 <br> ^INSERT INTO
							tbl_product
	          (
		          member_idx,
		          category_management_idx,
		          title,
		          free_product_yn,
		          product_price,
		          img_path,
		          contents,
		          tags,
		          member_location_idx,
		          product_location_title,
		          product_addr,
		          product_lat,
		          product_lng,
							del_yn,
		          list_up_date,
		          ins_date,
		          upd_date
	          )
						select
		          '77',
		          '1',
		          'Rgf',
		          'N',
		          '123',
		          '/media/commonfile/202210/26/b21816217798a91ba4829dc394f07059.jpg',
		          'Dff',
		          '#egg',
		          '84',
		          b.title,
		          b.member_addr,
		          b.member_lat,
		          b.member_lng,
		          'N',
		          NOW(),
		          NOW(),
		          NOW()
	          FROM
							tbl_member_location b
						where
							b.member_location_idx='84'
	  </pre> 
 <br /> ' 
ERROR - 2022-10-26 09:09:46 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(8) {
  ["category_management_idx"]=>
  string(1) "1"
  ["title"]=>
  string(3) "Rgf"
  ["free_product_yn"]=>
  string(1) "N"
  ["product_price"]=>
  string(3) "123"
  ["img_path"]=>
  string(64) "/media/commonfile/202210/26/b21816217798a91ba4829dc394f07059.jpg"
  ["contents"]=>
  string(3) "Dff"
  ["tags"]=>
  string(4) "#egg"
  ["member_location_idx"]=>
  string(2) "84"
}

 <br> ^UPDATE
							 tbl_member
						 SET
						 	product_cnt = product_cnt+1
						 WHERE
							 member_idx = '77'
		 </pre> 
 <br /> ' 
ERROR - 2022-10-26 09:09:46 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["member_idx"]=>
  int(0)
  ["corp_idx"]=>
  int(0)
  ["index"]=>
  string(3) "101"
  ["keywords"]=>
  string(4) "#egg"
  ["title"]=>
  string(3) "Rgf"
}

 <br> ^SELECT
                  a.member_idx,
                  a.current_lang,
                  '#egg' as keyword,
                  0 as corp_idx,
                  FN_AES_DECRYPT(a.member_name) AS member_name,
                  a.all_alarm_yn as alarm_yn,
                  a.device_os,
                  a.gcm_key
                FROM
                  tbl_member a
                WHERE
                  a.del_yn='N'
                  AND FIND_IN_SET('#egg',a.alarm_keyword)>0
                  AND member_idx NOT IN (77)
        </pre> 
 <br /> ' 
ERROR - 2022-10-26 09:09:46 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["member_idx"]=>
  int(0)
  ["corp_idx"]=>
  int(0)
  ["index"]=>
  string(3) "101"
  ["keywords"]=>
  string(4) "#egg"
  ["title"]=>
  string(3) "Rgf"
}

 <br> ^SELECT
                a.member_idx,
                a.current_lang,

                a.alarm_keyword,
                0 as corp_idx,
                FN_AES_DECRYPT(a.member_name) AS member_name,
                a.all_alarm_yn as alarm_yn,
                a.device_os,
                a.gcm_key
              FROM
                tbl_member a
              WHERE
                a.del_yn='N'
                AND 'Rgf' REGEXP REPLACE(a.alarm_keyword,',','|')
                AND member_idx NOT IN (77)
      </pre> 
 <br /> ' 
ERROR - 2022-10-26 09:10:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:10:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 09:10:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 09:10:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '77'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:10:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 09:10:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 12:10:02 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:10:02 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:10:02 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:10:02 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:10:02 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 12:10:02 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 09:10:03 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:10:03 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8156090"
  ["current_lng"]=>
  string(10) "90.4115961"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '77'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 09:10:03 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8156090"
  ["current_lng"]=>
  string(10) "90.4115961"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) <= 1  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 09:10:03 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) <= 1  </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:16:39 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:16:39 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "77"
  ["uuid"]=>
  string(36) "75d77079-89e0-4014-9796-11bf1134da5c"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = '75d77079-89e0-4014-9796-11bf1134da5c',
						upd_date = NOW()
					WHERE
						member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:16:39 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							FN_AES_DECRYPT(member_id)  AS member_id,
							a.uuid,
							a.gcm_key,
							a.device_os,
							a.del_yn
						FROM
							tbl_member as a
						WHERE
							a.member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:16:40 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:16:40 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:16:40 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:16:40 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '77'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:16:40 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:16:40 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 13:16:44 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:16:44 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:16:44 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:16:44 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:16:44 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:16:46 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:16:46 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8156090"
  ["current_lng"]=>
  string(10) "90.4115961"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '77'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:16:46 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8156090"
  ["current_lng"]=>
  string(10) "90.4115961"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) <= 1  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:16:46 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) <= 1  </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:16:50 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:16:50 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							FN_AES_DECRYPT(a.member_birth) AS member_birth,
							a.member_gender,
							a.del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:16:50 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:16:50 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:16:50 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '77'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:16:50 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:17:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:17:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:17:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:17:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '77'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:17:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:17:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 13:17:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:17:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:17:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:17:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:17:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:17:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:17:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8156090"
  ["current_lng"]=>
  string(10) "90.4115961"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '77'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:17:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8156090"
  ["current_lng"]=>
  string(10) "90.4115961"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) <= 1  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:17:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) <= 1  </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:16 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=74 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:16 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=74 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "74"
  ["uuid"]=>
  string(36) "7f4c48d5-1c4c-424d-b4e1-19cec493e4bb"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = '7f4c48d5-1c4c-424d-b4e1-19cec493e4bb',
						upd_date = NOW()
					WHERE
						member_idx = '74'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:16 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=74 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							FN_AES_DECRYPT(member_id)  AS member_id,
							a.uuid,
							a.gcm_key,
							a.device_os,
							a.del_yn
						FROM
							tbl_member as a
						WHERE
							a.member_idx = '74'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:16 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:16 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:32:16 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:32:16 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '74'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:16 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:32:16 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 13:32:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:32:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:32:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:32:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:32:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:32:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:32:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156012"
  ["current_lng"]=>
  string(10) "90.4115990"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '74'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156012"
  ["current_lng"]=>
  string(10) "90.4115990"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '74' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:52 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:52 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156012"
  ["current_lng"]=>
  string(10) "90.4115990"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(10)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '74'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:52 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156012"
  ["current_lng"]=>
  string(10) "90.4115990"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(10)
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '74' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 10, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:52 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:54 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:54 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							FN_AES_DECRYPT(a.member_birth) AS member_birth,
							a.member_gender,
							a.del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:55 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:55 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:32:55 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '74'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:32:55 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 13:34:20 --> 404 Page Not Found ...--> m.dilri.com/images/i_alarm_delete.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:34:33 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:33 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product AS a
						WHERE
							a.del_yn = 'N'
							AND a.member_idx = '74'
							AND DATE_FORMAT(a.ins_date, '%Y-%m-%d') = DATE_FORMAT(NOW(), '%Y-%m-%d')
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:33 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product AS a
						WHERE
							a.del_yn = 'N'
							AND a.member_idx = '74'
							AND a.product_state IN (0,1)
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:33 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							forbidden_search_idx,
							title
						FROM
							tbl_forbidden_search
						WHERE
							del_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:33 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(8) {
  ["category_management_idx"]=>
  string(1) "1"
  ["title"]=>
  string(9) "Headphone"
  ["free_product_yn"]=>
  string(1) "N"
  ["product_price"]=>
  string(4) "2000"
  ["img_path"]=>
  string(64) "/media/commonfile/202210/26/5f7344c472c0d79282c30adc1ac7066e.jpg"
  ["contents"]=>
  string(21) "Awei brand full fresh"
  ["tags"]=>
  string(9) "Headphone"
  ["member_location_idx"]=>
  string(2) "77"
}

 <br> ^INSERT INTO
							tbl_product
	          (
		          member_idx,
		          category_management_idx,
		          title,
		          free_product_yn,
		          product_price,
		          img_path,
		          contents,
		          tags,
		          member_location_idx,
		          product_location_title,
		          product_addr,
		          product_lat,
		          product_lng,
							del_yn,
		          list_up_date,
		          ins_date,
		          upd_date
	          )
						select
		          '74',
		          '1',
		          'Headphone',
		          'N',
		          '2000',
		          '/media/commonfile/202210/26/5f7344c472c0d79282c30adc1ac7066e.jpg',
		          'Awei brand full fresh',
		          'Headphone',
		          '77',
		          b.title,
		          b.member_addr,
		          b.member_lat,
		          b.member_lng,
		          'N',
		          NOW(),
		          NOW(),
		          NOW()
	          FROM
							tbl_member_location b
						where
							b.member_location_idx='77'
	  </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:33 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(8) {
  ["category_management_idx"]=>
  string(1) "1"
  ["title"]=>
  string(9) "Headphone"
  ["free_product_yn"]=>
  string(1) "N"
  ["product_price"]=>
  string(4) "2000"
  ["img_path"]=>
  string(64) "/media/commonfile/202210/26/5f7344c472c0d79282c30adc1ac7066e.jpg"
  ["contents"]=>
  string(21) "Awei brand full fresh"
  ["tags"]=>
  string(9) "Headphone"
  ["member_location_idx"]=>
  string(2) "77"
}

 <br> ^UPDATE
							 tbl_member
						 SET
						 	product_cnt = product_cnt+1
						 WHERE
							 member_idx = '74'
		 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:33 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["member_idx"]=>
  int(0)
  ["corp_idx"]=>
  int(0)
  ["index"]=>
  string(3) "101"
  ["keywords"]=>
  string(9) "Headphone"
  ["title"]=>
  string(9) "Headphone"
}

 <br> ^SELECT
                  a.member_idx,
                  a.current_lang,
                  'Headphone' as keyword,
                  0 as corp_idx,
                  FN_AES_DECRYPT(a.member_name) AS member_name,
                  a.all_alarm_yn as alarm_yn,
                  a.device_os,
                  a.gcm_key
                FROM
                  tbl_member a
                WHERE
                  a.del_yn='N'
                  AND FIND_IN_SET('Headphone',a.alarm_keyword)>0
                  AND member_idx NOT IN (74)
        </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:33 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["member_idx"]=>
  int(0)
  ["corp_idx"]=>
  int(0)
  ["index"]=>
  string(3) "101"
  ["keywords"]=>
  string(9) "Headphone"
  ["title"]=>
  string(9) "Headphone"
}

 <br> ^SELECT
                a.member_idx,
                a.current_lang,

                a.alarm_keyword,
                0 as corp_idx,
                FN_AES_DECRYPT(a.member_name) AS member_name,
                a.all_alarm_yn as alarm_yn,
                a.device_os,
                a.gcm_key
              FROM
                tbl_member a
              WHERE
                a.del_yn='N'
                AND 'Headphone' REGEXP REPLACE(a.alarm_keyword,',','|')
                AND member_idx NOT IN (74)
      </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:35 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:35 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:34:35 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:34:35 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '74'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:35 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:34:35 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 13:34:36 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:34:36 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:34:36 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:34:36 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:34:36 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:34:36 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:34:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:37 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156012"
  ["current_lng"]=>
  string(10) "90.4115990"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '74'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:37 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156012"
  ["current_lng"]=>
  string(10) "90.4115990"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '74' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:37 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:45 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:45 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							FN_AES_DECRYPT(a.member_birth) AS member_birth,
							a.member_gender,
							a.del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:45 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=432 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:45 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=432 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:45 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=432 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "432"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^UPDATE
	            tbl_product
	          SET
							view_cnt = view_cnt+1,
	            upd_date = NOW()
	          WHERE
	            product_idx = '432'
	          </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:45 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=432 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "432"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							a.product_member_idx,
							a.reserve_member_idxs,
							IF(a.member_idx='74', 'seller', 'buyer') as viewer,
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
							a.upd_date,
							a.ins_date,
							a.list_up_date,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							b.member_join_type,
							b.member_phone,
							b.member_img,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.free_product_cnt,
							b.del_yn,
							IFNULL((select count(*) from tbl_product_report r where r.member_idx = '74' AND r.product_idx = a.product_idx and r.del_yn = 'N'), 0) as report_cnt,

							FN_AES_DECRYPT(c.member_name) AS partner_member_name,
							c.member_img as partner_member_img
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx

						WHERE
							a.product_idx = '432'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:45 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=432 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "432"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
		 					like_yn
						FROM
	  					tbl_product_like
						WHERE
		 					product_idx = '432'
							AND member_idx = '74'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:46 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:46 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "432"
  ["current_lat"]=>
  string(10) "23.8156012"
  ["current_lng"]=>
  string(10) "90.4115990"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) as distance
						FROM
							tbl_product AS a
						WHERE
							a.product_idx = '432'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:48 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:48 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							FN_AES_DECRYPT(a.member_birth) AS member_birth,
							a.member_gender,
							a.del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:50 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:50 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:34:50 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:34:50 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '74'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:50 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:34:50 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 13:34:50 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:34:50 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:34:50 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:34:50 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:34:50 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:34:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156012"
  ["current_lng"]=>
  string(10) "90.4115990"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '74'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156012"
  ["current_lng"]=>
  string(10) "90.4115990"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '74' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:56 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:56 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							member_img,
							member_join_type,
							FN_AES_DECRYPT(member_name) AS member_name,
							FN_AES_DECRYPT(member_id) AS member_id,
							member_point,
							free_product_cnt,
							good_product_cnt,
							bad_product_cnt,
							del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:56 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '74' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '74' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '74' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '74' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '74'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '74' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '74'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '74' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '74' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '74'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '74'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:56 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:56 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "0"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '74' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '74' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:56 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '74' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:56 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:56 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "1"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '74' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '74' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:56 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '74' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "2"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '74' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '74' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '74' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "3"
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
							c.del_yn as member_del_yn,
							a.display_yn,
							DATE_FORMAT(a.ins_date, '%Y-%m-%d %H:%i:%s') as ins_date,
							if(t.scrap_yn='Y', 'Y', 'N') as scrap_yn,
							if(r.board_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='74', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '74' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '74' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '74'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "3"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '74' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '74'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
							a.board_idx,
							a.board_reply_idx,
							a.parent_board_reply_idx,
							a.depth,
							a.reply_comment,
							a.display_yn,
							a.del_yn,
							c.img_path,
							date_format(a.ins_date, '%Y.%m.%d. %H:%i') AS ins_date,
							if(c.member_idx=b.member_idx, 'Y', 'N') as board_member_reply_yn,
							b.member_idx,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							r.relpy_member_idx,
							FN_AES_DECRYPT(d.member_name) AS reply_member_name,
							b.member_img,
							b.del_yn as member_del_yn,
							if(r.board_reply_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='74', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '74' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '74'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
             	COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '74' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '74'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "6"
}

 <br> ^SELECT
							a.product_idx,
							ifnull(z.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							a.display_yn,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '74'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '74'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "5"
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
							c.del_yn as member_del_yn,
							a.display_yn,
							DATE_FORMAT(a.ins_date, '%Y-%m-%d %H:%i:%s') as ins_date,
							if(z.scrap_yn='Y', 'Y', 'N') as scrap_yn,
							if(r.board_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='74', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '74' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '74'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:34:57 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "5"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '74' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '74' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '74'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:01 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:01 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(10)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156364"
  ["current_lng"]=>
  string(10) "90.4116426"
  ["tab_type"]=>
  string(1) "1"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(23.8156364))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116426))+SIN(RADIANS(23.8156364))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '74' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '74' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 10, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:01 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '74' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:09 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:09 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "77"
  ["uuid"]=>
  string(36) "75d77079-89e0-4014-9796-11bf1134da5c"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = '75d77079-89e0-4014-9796-11bf1134da5c',
						upd_date = NOW()
					WHERE
						member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:09 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							FN_AES_DECRYPT(member_id)  AS member_id,
							a.uuid,
							a.gcm_key,
							a.device_os,
							a.del_yn
						FROM
							tbl_member as a
						WHERE
							a.member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:09 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:09 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:35:09 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:35:09 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '77'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:09 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:35:09 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 13:35:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:35:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:35:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:35:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:35:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:35:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8156090"
  ["current_lng"]=>
  string(10) "90.4115961"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '77'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8156090"
  ["current_lng"]=>
  string(10) "90.4115961"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) <= 1  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) <= 1  </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							member_img,
							member_join_type,
							FN_AES_DECRYPT(member_name) AS member_name,
							FN_AES_DECRYPT(member_id) AS member_id,
							member_point,
							free_product_cnt,
							good_product_cnt,
							bad_product_cnt,
							del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '77' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '77' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '77' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '77'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '77' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '77'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '77' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '77'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '77'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "0"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '77' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '77' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "1"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '77' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '77' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "2"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '77' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '77' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "3"
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
							c.del_yn as member_del_yn,
							a.display_yn,
							DATE_FORMAT(a.ins_date, '%Y-%m-%d %H:%i:%s') as ins_date,
							if(t.scrap_yn='Y', 'Y', 'N') as scrap_yn,
							if(r.board_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='77', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '77' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '77'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "3"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
							a.board_idx,
							a.board_reply_idx,
							a.parent_board_reply_idx,
							a.depth,
							a.reply_comment,
							a.display_yn,
							a.del_yn,
							c.img_path,
							date_format(a.ins_date, '%Y.%m.%d. %H:%i') AS ins_date,
							if(c.member_idx=b.member_idx, 'Y', 'N') as board_member_reply_yn,
							b.member_idx,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							r.relpy_member_idx,
							FN_AES_DECRYPT(d.member_name) AS reply_member_name,
							b.member_img,
							b.del_yn as member_del_yn,
							if(r.board_reply_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='77', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '77' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '77'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
             	COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '77' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "5"
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
							c.del_yn as member_del_yn,
							a.display_yn,
							DATE_FORMAT(a.ins_date, '%Y-%m-%d %H:%i:%s') as ins_date,
							if(z.scrap_yn='Y', 'Y', 'N') as scrap_yn,
							if(r.board_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='77', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '77' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '77'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "5"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '77' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '77'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "6"
}

 <br> ^SELECT
							a.product_idx,
							ifnull(z.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							a.display_yn,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '77'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:16 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '77'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 13:35:16 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:35:17 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=432 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:17 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=432 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:17 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=432 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "432"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^UPDATE
	            tbl_product
	          SET
							view_cnt = view_cnt+1,
	            upd_date = NOW()
	          WHERE
	            product_idx = '432'
	          </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:17 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=432 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "432"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							a.product_member_idx,
							a.reserve_member_idxs,
							IF(a.member_idx='77', 'seller', 'buyer') as viewer,
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
							a.upd_date,
							a.ins_date,
							a.list_up_date,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							b.member_join_type,
							b.member_phone,
							b.member_img,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.free_product_cnt,
							b.del_yn,
							IFNULL((select count(*) from tbl_product_report r where r.member_idx = '77' AND r.product_idx = a.product_idx and r.del_yn = 'N'), 0) as report_cnt,

							FN_AES_DECRYPT(c.member_name) AS partner_member_name,
							c.member_img as partner_member_img
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx

						WHERE
							a.product_idx = '432'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:17 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=432 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "432"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
		 					like_yn
						FROM
	  					tbl_product_like
						WHERE
		 					product_idx = '432'
							AND member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:17 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:17 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "432"
  ["current_lat"]=>
  string(10) "23.8156090"
  ["current_lng"]=>
  string(10) "90.4115961"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) as distance
						FROM
							tbl_product AS a
						WHERE
							a.product_idx = '432'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:18 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:18 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							FN_AES_DECRYPT(a.member_birth) AS member_birth,
							a.member_gender,
							a.del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:22 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_del 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:22 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_del 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(1) {
  ["product_idx"]=>
  string(3) "432"
}

 <br> ^UPDATE
							tbl_product
						SET
							del_yn = 'Y',
							upd_date = NOW()
						WHERE
							product_idx = '432'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							member_img,
							member_join_type,
							FN_AES_DECRYPT(member_name) AS member_name,
							FN_AES_DECRYPT(member_id) AS member_id,
							member_point,
							free_product_cnt,
							good_product_cnt,
							bad_product_cnt,
							del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '77' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '77' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '77' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '77'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '77' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '77'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '77' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '77'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '77'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "0"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '77' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '77' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "1"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '77' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '77' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "2"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '77' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '77' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "3"
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
							c.del_yn as member_del_yn,
							a.display_yn,
							DATE_FORMAT(a.ins_date, '%Y-%m-%d %H:%i:%s') as ins_date,
							if(t.scrap_yn='Y', 'Y', 'N') as scrap_yn,
							if(r.board_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='77', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '77' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '77'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "3"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:24 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:24 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "5"
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
							c.del_yn as member_del_yn,
							a.display_yn,
							DATE_FORMAT(a.ins_date, '%Y-%m-%d %H:%i:%s') as ins_date,
							if(z.scrap_yn='Y', 'Y', 'N') as scrap_yn,
							if(r.board_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='77', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '77' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '77'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:24 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "5"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '77' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '77'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:24 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:24 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
							a.board_idx,
							a.board_reply_idx,
							a.parent_board_reply_idx,
							a.depth,
							a.reply_comment,
							a.display_yn,
							a.del_yn,
							c.img_path,
							date_format(a.ins_date, '%Y.%m.%d. %H:%i') AS ins_date,
							if(c.member_idx=b.member_idx, 'Y', 'N') as board_member_reply_yn,
							b.member_idx,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							r.relpy_member_idx,
							FN_AES_DECRYPT(d.member_name) AS reply_member_name,
							b.member_img,
							b.del_yn as member_del_yn,
							if(r.board_reply_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='77', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '77' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '77'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:24 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
             	COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '77' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:24 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:24 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "6"
}

 <br> ^SELECT
							a.product_idx,
							ifnull(z.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							a.display_yn,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '77'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:24 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '77'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 13:35:24 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:35:25 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=421 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:25 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=421 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:25 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=421 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "421"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^UPDATE
	            tbl_product
	          SET
							view_cnt = view_cnt+1,
	            upd_date = NOW()
	          WHERE
	            product_idx = '421'
	          </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:25 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=421 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "421"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							a.product_member_idx,
							a.reserve_member_idxs,
							IF(a.member_idx='77', 'seller', 'buyer') as viewer,
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
							a.upd_date,
							a.ins_date,
							a.list_up_date,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							b.member_join_type,
							b.member_phone,
							b.member_img,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.free_product_cnt,
							b.del_yn,
							IFNULL((select count(*) from tbl_product_report r where r.member_idx = '77' AND r.product_idx = a.product_idx and r.del_yn = 'N'), 0) as report_cnt,

							FN_AES_DECRYPT(c.member_name) AS partner_member_name,
							c.member_img as partner_member_img
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx

						WHERE
							a.product_idx = '421'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:25 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=421 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "421"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
		 					like_yn
						FROM
	  					tbl_product_like
						WHERE
		 					product_idx = '421'
							AND member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:26 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:26 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "421"
  ["current_lat"]=>
  string(10) "23.8156090"
  ["current_lng"]=>
  string(10) "90.4115961"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) as distance
						FROM
							tbl_product AS a
						WHERE
							a.product_idx = '421'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:26 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:26 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							FN_AES_DECRYPT(a.member_birth) AS member_birth,
							a.member_gender,
							a.del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:28 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_del 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:28 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_del 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(1) {
  ["product_idx"]=>
  string(3) "421"
}

 <br> ^UPDATE
							tbl_product
						SET
							del_yn = 'Y',
							upd_date = NOW()
						WHERE
							product_idx = '421'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							member_img,
							member_join_type,
							FN_AES_DECRYPT(member_name) AS member_name,
							FN_AES_DECRYPT(member_id) AS member_id,
							member_point,
							free_product_cnt,
							good_product_cnt,
							bad_product_cnt,
							del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '77' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '77' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '77' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '77'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '77' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '77'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '77' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '77'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '77'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "0"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '77' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '77' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "1"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '77' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '77' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "2"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '77' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '77' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156097"
  ["current_lng"]=>
  string(10) "90.4116321"
  ["tab_type"]=>
  string(1) "3"
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
							c.del_yn as member_del_yn,
							a.display_yn,
							DATE_FORMAT(a.ins_date, '%Y-%m-%d %H:%i:%s') as ins_date,
							if(t.scrap_yn='Y', 'Y', 'N') as scrap_yn,
							if(r.board_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='77', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '77' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '77'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156097"
  ["current_lng"]=>
  string(10) "90.4116321"
  ["tab_type"]=>
  string(1) "3"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156097"
  ["current_lng"]=>
  string(10) "90.4116321"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
							a.board_idx,
							a.board_reply_idx,
							a.parent_board_reply_idx,
							a.depth,
							a.reply_comment,
							a.display_yn,
							a.del_yn,
							c.img_path,
							date_format(a.ins_date, '%Y.%m.%d. %H:%i') AS ins_date,
							if(c.member_idx=b.member_idx, 'Y', 'N') as board_member_reply_yn,
							b.member_idx,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							r.relpy_member_idx,
							FN_AES_DECRYPT(d.member_name) AS reply_member_name,
							b.member_img,
							b.del_yn as member_del_yn,
							if(r.board_reply_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='77', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '77' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '77'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:29 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156097"
  ["current_lng"]=>
  string(10) "90.4116321"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
             	COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '77' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '77'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 13:35:30 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:35:30 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:30 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156097"
  ["current_lng"]=>
  string(10) "90.4116321"
  ["tab_type"]=>
  string(1) "5"
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
							c.del_yn as member_del_yn,
							a.display_yn,
							DATE_FORMAT(a.ins_date, '%Y-%m-%d %H:%i:%s') as ins_date,
							if(z.scrap_yn='Y', 'Y', 'N') as scrap_yn,
							if(r.board_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='77', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '77' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '77'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:30 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156097"
  ["current_lng"]=>
  string(10) "90.4116321"
  ["tab_type"]=>
  string(1) "5"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '77' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '77' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '77'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:30 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:30 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156097"
  ["current_lng"]=>
  string(10) "90.4116321"
  ["tab_type"]=>
  string(1) "6"
}

 <br> ^SELECT
							a.product_idx,
							ifnull(z.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							a.display_yn,
							ROUND((6371*ACOS(COS(RADIANS(23.8156097))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116321))+SIN(RADIANS(23.8156097))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '77'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:30 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '77'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:31 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:31 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:35:31 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:35:31 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '77'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:31 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:35:31 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 13:35:31 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:35:31 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:35:31 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:35:31 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:35:31 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:35:31 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '77'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:31 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8156090"
  ["current_lng"]=>
  string(10) "90.4115961"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '77'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:31 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8156090"
  ["current_lng"]=>
  string(10) "90.4115961"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '77' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) <= 1  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:31 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156090))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115961))+SIN(RADIANS(23.8156090))*SIN(RADIANS(a.product_lat)))), 1) <= 1  </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:35:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:35:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '74'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:35:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 13:35:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:35:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:35:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:35:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:35:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:35:37 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:37 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156012"
  ["current_lng"]=>
  string(10) "90.4115990"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '74'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:37 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156012"
  ["current_lng"]=>
  string(10) "90.4115990"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '74' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:37 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:53 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:53 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:53 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^UPDATE
	            tbl_product
	          SET
							view_cnt = view_cnt+1,
	            upd_date = NOW()
	          WHERE
	            product_idx = '433'
	          </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:53 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							a.product_member_idx,
							a.reserve_member_idxs,
							IF(a.member_idx='74', 'seller', 'buyer') as viewer,
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
							a.upd_date,
							a.ins_date,
							a.list_up_date,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							b.member_join_type,
							b.member_phone,
							b.member_img,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.free_product_cnt,
							b.del_yn,
							IFNULL((select count(*) from tbl_product_report r where r.member_idx = '74' AND r.product_idx = a.product_idx and r.del_yn = 'N'), 0) as report_cnt,

							FN_AES_DECRYPT(c.member_name) AS partner_member_name,
							c.member_img as partner_member_img
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx

						WHERE
							a.product_idx = '433'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:53 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
		 					like_yn
						FROM
	  					tbl_product_like
						WHERE
		 					product_idx = '433'
							AND member_idx = '74'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:54 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:54 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  string(10) "23.8156012"
  ["current_lng"]=>
  string(10) "90.4115990"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) as distance
						FROM
							tbl_product AS a
						WHERE
							a.product_idx = '433'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:55 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:55 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							FN_AES_DECRYPT(a.member_birth) AS member_birth,
							a.member_gender,
							a.del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:56 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:56 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(1) {
  ["product_idx"]=>
  string(3) "433"
}

 <br> ^SELECT
							product_idx,
							category_management_idx,
							title,
							product_price,
							img_path,
							contents,
							free_product_yn,
							tags,
							member_location_idx,
							product_location_title,
							product_addr
						FROM
							tbl_product
						WHERE
							product_idx = '433'
							</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:56 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:35:56 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '74'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:56 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:35:56 --> Could not find the language line "lang_add_00000"
ERROR - 2022-10-26 13:35:56 --> 404 Page Not Found ...--> m.dilri.com/images/i_alarm_delete.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:36:02 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:02 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(9) {
  ["category_management_idx"]=>
  string(1) "1"
  ["title"]=>
  string(9) "Headphone"
  ["free_product_yn"]=>
  string(1) "N"
  ["product_price"]=>
  string(4) "2000"
  ["img_path"]=>
  string(64) "/media/commonfile/202210/26/5f7344c472c0d79282c30adc1ac7066e.jpg"
  ["contents"]=>
  string(21) "Awei brand full fresh"
  ["tags"]=>
  string(9) "Headphone"
  ["member_location_idx"]=>
  string(2) "78"
  ["product_idx"]=>
  string(3) "433"
}

 <br> ^UPDATE
							tbl_product a,
							(SELECT
									b.title,
									b.member_addr,
									b.member_lat,
									b.member_lng
								FROM
									tbl_member_location b
								WHERE
									b.member_location_idx = '78'
							) as tb_b
						SET
							a.category_management_idx = '1',
							a.title = 'Headphone',
							a.product_price = '2000',
							a.free_product_yn = 'N',
							a.img_path = '/media/commonfile/202210/26/5f7344c472c0d79282c30adc1ac7066e.jpg',
							a.contents = 'Awei brand full fresh',
							a.tags = 'Headphone',
							a.member_location_idx = '78',
							a.product_location_title = tb_b.title,
							a.product_addr = tb_b.member_addr,
							a.product_lat = tb_b.member_lat,
							a.product_lng = tb_b.member_lng,
							a.upd_date = NOW()
						WHERE
							a.product_idx = '433'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:04 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:04 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:36:04 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:36:04 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '74'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:04 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:36:04 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 13:36:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:36:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:36:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:36:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:36:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:36:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156012"
  ["current_lng"]=>
  string(10) "90.4115990"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '74'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156012"
  ["current_lng"]=>
  string(10) "90.4115990"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '74' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156012))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115990))+SIN(RADIANS(23.8156012))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:09 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/my_location_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:09 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/my_location_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(1) {
  ["member_location_idx"]=>
  string(2) "78"
}

 <br> ^UPDATE
							tbl_member
						SET
							member_location_idx = '78',
							upd_date = NOW()
						WHERE
							member_idx = '74'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:10 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:10 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:36:10 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:36:10 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '74'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:10 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 10:36:10 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 13:36:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:36:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:36:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:36:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:36:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 13:36:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 10:36:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8155929"
  ["current_lng"]=>
  string(10) "90.4116060"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '74'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8155929"
  ["current_lng"]=>
  string(10) "90.4116060"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '74' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) <= 1  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 10:36:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) <= 1  </pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:43 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=74 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:43 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=74 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "74"
  ["uuid"]=>
  string(36) "7f4c48d5-1c4c-424d-b4e1-19cec493e4bb"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = '7f4c48d5-1c4c-424d-b4e1-19cec493e4bb',
						upd_date = NOW()
					WHERE
						member_idx = '74'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:43 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=74 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							FN_AES_DECRYPT(member_id)  AS member_id,
							a.uuid,
							a.gcm_key,
							a.device_os,
							a.del_yn
						FROM
							tbl_member as a
						WHERE
							a.member_idx = '74'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:44 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:44 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 11:13:44 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 11:13:44 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '74'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:44 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 11:13:44 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 14:13:46 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:13:46 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:13:46 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:13:46 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:13:46 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:13:46 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 11:13:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8155929"
  ["current_lng"]=>
  string(10) "90.4116060"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '74'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8155929"
  ["current_lng"]=>
  string(10) "90.4116060"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '74' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) <= 1  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) <= 1  </pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:50 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:50 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:50 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^UPDATE
	            tbl_product
	          SET
							view_cnt = view_cnt+1,
	            upd_date = NOW()
	          WHERE
	            product_idx = '433'
	          </pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:50 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							a.product_member_idx,
							a.reserve_member_idxs,
							IF(a.member_idx='74', 'seller', 'buyer') as viewer,
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
							a.upd_date,
							a.ins_date,
							a.list_up_date,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							b.member_join_type,
							b.member_phone,
							b.member_img,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.free_product_cnt,
							b.del_yn,
							IFNULL((select count(*) from tbl_product_report r where r.member_idx = '74' AND r.product_idx = a.product_idx and r.del_yn = 'N'), 0) as report_cnt,

							FN_AES_DECRYPT(c.member_name) AS partner_member_name,
							c.member_img as partner_member_img
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx

						WHERE
							a.product_idx = '433'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:50 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
		 					like_yn
						FROM
	  					tbl_product_like
						WHERE
		 					product_idx = '433'
							AND member_idx = '74'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:50 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:50 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  string(10) "23.8155929"
  ["current_lng"]=>
  string(10) "90.4116060"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) as distance
						FROM
							tbl_product AS a
						WHERE
							a.product_idx = '433'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:51 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:51 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							FN_AES_DECRYPT(a.member_birth) AS member_birth,
							a.member_gender,
							a.del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:52 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:52 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(1) {
  ["product_idx"]=>
  string(3) "433"
}

 <br> ^SELECT
							product_idx,
							category_management_idx,
							title,
							product_price,
							img_path,
							contents,
							free_product_yn,
							tags,
							member_location_idx,
							product_location_title,
							product_addr
						FROM
							tbl_product
						WHERE
							product_idx = '433'
							</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:52 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 11:13:52 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '74'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:52 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:13:52 --> Could not find the language line "lang_add_00000"
ERROR - 2022-10-26 14:13:53 --> 404 Page Not Found ...--> m.dilri.com/images/i_alarm_delete.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 11:14:08 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:08 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(9) {
  ["category_management_idx"]=>
  string(1) "1"
  ["title"]=>
  string(9) "Headphone"
  ["free_product_yn"]=>
  string(1) "N"
  ["product_price"]=>
  string(3) "340"
  ["img_path"]=>
  string(64) "/media/commonfile/202210/26/5f7344c472c0d79282c30adc1ac7066e.jpg"
  ["contents"]=>
  string(21) "Awei brand full fresh"
  ["tags"]=>
  string(9) "Headphone"
  ["member_location_idx"]=>
  string(2) "78"
  ["product_idx"]=>
  string(3) "433"
}

 <br> ^UPDATE
							tbl_product a,
							(SELECT
									b.title,
									b.member_addr,
									b.member_lat,
									b.member_lng
								FROM
									tbl_member_location b
								WHERE
									b.member_location_idx = '78'
							) as tb_b
						SET
							a.category_management_idx = '1',
							a.title = 'Headphone',
							a.product_price = '340',
							a.free_product_yn = 'N',
							a.img_path = '/media/commonfile/202210/26/5f7344c472c0d79282c30adc1ac7066e.jpg',
							a.contents = 'Awei brand full fresh',
							a.tags = 'Headphone',
							a.member_location_idx = '78',
							a.product_location_title = tb_b.title,
							a.product_addr = tb_b.member_addr,
							a.product_lat = tb_b.member_lat,
							a.product_lng = tb_b.member_lng,
							a.upd_date = NOW()
						WHERE
							a.product_idx = '433'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 11:14:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 11:14:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '74'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 11:14:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 14:14:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:14:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:14:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:14:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:14:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:14:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 11:14:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8155929"
  ["current_lng"]=>
  string(10) "90.4116060"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '74'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8155929"
  ["current_lng"]=>
  string(10) "90.4116060"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '74' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) <= 1  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) <= 1  </pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:29 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:29 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:29 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^UPDATE
	            tbl_product
	          SET
							view_cnt = view_cnt+1,
	            upd_date = NOW()
	          WHERE
	            product_idx = '433'
	          </pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:29 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							a.product_member_idx,
							a.reserve_member_idxs,
							IF(a.member_idx='74', 'seller', 'buyer') as viewer,
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
							a.upd_date,
							a.ins_date,
							a.list_up_date,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							b.member_join_type,
							b.member_phone,
							b.member_img,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.free_product_cnt,
							b.del_yn,
							IFNULL((select count(*) from tbl_product_report r where r.member_idx = '74' AND r.product_idx = a.product_idx and r.del_yn = 'N'), 0) as report_cnt,

							FN_AES_DECRYPT(c.member_name) AS partner_member_name,
							c.member_img as partner_member_img
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx

						WHERE
							a.product_idx = '433'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:29 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
		 					like_yn
						FROM
	  					tbl_product_like
						WHERE
		 					product_idx = '433'
							AND member_idx = '74'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:29 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:30 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  string(10) "23.8155929"
  ["current_lng"]=>
  string(10) "90.4116060"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) as distance
						FROM
							tbl_product AS a
						WHERE
							a.product_idx = '433'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:38 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:38 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							FN_AES_DECRYPT(a.member_birth) AS member_birth,
							a.member_gender,
							a.del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:39 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:39 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(1) {
  ["product_idx"]=>
  string(3) "433"
}

 <br> ^SELECT
							product_idx,
							category_management_idx,
							title,
							product_price,
							img_path,
							contents,
							free_product_yn,
							tags,
							member_location_idx,
							product_location_title,
							product_addr
						FROM
							tbl_product
						WHERE
							product_idx = '433'
							</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:39 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 11:14:39 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '74'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:39 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_mod?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:14:39 --> Could not find the language line "lang_add_00000"
ERROR - 2022-10-26 11:15:04 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:15:04 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:15:04 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^UPDATE
	            tbl_product
	          SET
							view_cnt = view_cnt+1,
	            upd_date = NOW()
	          WHERE
	            product_idx = '433'
	          </pre> 
 <br /> ' 
ERROR - 2022-10-26 11:15:04 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							a.product_member_idx,
							a.reserve_member_idxs,
							IF(a.member_idx='74', 'seller', 'buyer') as viewer,
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
							a.upd_date,
							a.ins_date,
							a.list_up_date,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							b.member_join_type,
							b.member_phone,
							b.member_img,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.free_product_cnt,
							b.del_yn,
							IFNULL((select count(*) from tbl_product_report r where r.member_idx = '74' AND r.product_idx = a.product_idx and r.del_yn = 'N'), 0) as report_cnt,

							FN_AES_DECRYPT(c.member_name) AS partner_member_name,
							c.member_img as partner_member_img
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx

						WHERE
							a.product_idx = '433'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:15:04 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=433 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
		 					like_yn
						FROM
	  					tbl_product_like
						WHERE
		 					product_idx = '433'
							AND member_idx = '74'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:15:04 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:15:04 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "433"
  ["current_lat"]=>
  string(10) "23.8155929"
  ["current_lng"]=>
  string(10) "90.4116060"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) as distance
						FROM
							tbl_product AS a
						WHERE
							a.product_idx = '433'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:15:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:15:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 11:15:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 11:15:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '74'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:15:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 11:15:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 14:15:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:15:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:15:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:15:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:15:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 14:15:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 11:15:06 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '74'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:15:06 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8155929"
  ["current_lng"]=>
  string(10) "90.4116060"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '74'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 11:15:06 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "1"
  ["current_lat"]=>
  string(10) "23.8155929"
  ["current_lng"]=>
  string(10) "90.4116060"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '74' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) <= 1  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 11:15:06 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8155929))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116060))+SIN(RADIANS(23.8155929))*SIN(RADIANS(a.product_lat)))), 1) <= 1  </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:12:19 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=bae77ac2-5542-4ac6-a351-2fb0684846cb&user_idx=75 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:12:19 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=bae77ac2-5542-4ac6-a351-2fb0684846cb&user_idx=75 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "75"
  ["uuid"]=>
  string(36) "bae77ac2-5542-4ac6-a351-2fb0684846cb"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = 'bae77ac2-5542-4ac6-a351-2fb0684846cb',
						upd_date = NOW()
					WHERE
						member_idx = '75'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:12:19 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=bae77ac2-5542-4ac6-a351-2fb0684846cb&user_idx=75 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							FN_AES_DECRYPT(member_id)  AS member_id,
							a.uuid,
							a.gcm_key,
							a.device_os,
							a.del_yn
						FROM
							tbl_member as a
						WHERE
							a.member_idx = '75'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:12:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:12:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 15:12:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 15:12:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							member_idx = '75'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:12:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 15:12:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.category_management_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 18:12:20 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:12:20 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:12:20 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:12:20 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:12:21 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 15:12:21 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:12:21 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8155956"
  ["current_lng"]=>
  string(10) "90.4115948"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '75'
					</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:12:21 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8155956"
  ["current_lng"]=>
  string(10) "90.4115948"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155956))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115948))+SIN(RADIANS(23.8155956))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '75' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8155956))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115948))+SIN(RADIANS(23.8155956))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:12:21 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8155956))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115948))+SIN(RADIANS(23.8155956))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:12:34 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:12:34 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 15:12:34 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 15:12:35 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:12:35 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							if(a.member_idx='75', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:12:35 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 18:12:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:12:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/6d9386bc2aeb83fd5f22144a61997587.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:12:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/0a7d7233a446dfaba77bcf6b0a41753c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 15:13:42 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:42 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(10)
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
							if(a.member_idx='75', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 10, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:42 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(10)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 18:13:43 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:13:43 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/b8be0715219759c7af315af842fa4d5c.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:13:43 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202205/17/8f8233e847f9df3e1da1f1d6e0a3d1d6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:13:43 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 15:13:48 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:48 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							FN_AES_DECRYPT(a.member_birth) AS member_birth,
							a.member_gender,
							a.del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:49 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/community_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:51 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:51 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 15:13:51 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 15:13:51 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:51 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							if(a.member_idx='75', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:51 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 18:13:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/6d9386bc2aeb83fd5f22144a61997587.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:13:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:13:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/0a7d7233a446dfaba77bcf6b0a41753c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 15:13:53 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:53 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:53 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							AND display_yn = 'Y'
						order by recommend_search_idx
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:53 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							AND display_yn = 'Y'
						order by recommend_search_idx
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:53 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

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
							a.list_up_date,
							a.display_yn,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '75' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:53 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							search_idx,
							title
						FROM
							tbl_search
						WHERE
							del_yn ='N'
							AND member_idx = '75'
							AND search_type = '0'
						 ORDER BY upd_date DESC LIMIT 5 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:53 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							category_name,
							img_path,
							order_no
						FROM
							tbl_category_management
						where
							state = '1'
						order by order_no ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 18:13:53 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:13:53 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:13:53 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:13:53 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:13:53 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 15:13:53 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0/famous_product_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:53 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0/famous_product_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

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
							a.list_up_date,
							a.display_yn,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '75' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:57 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:57 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:58 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
						 a.chatting_room_idx,
						 a.member_idx,
						 a.partner_member_idx,
						 a.state,
						 a.member_read_yn,
						 a.partner_member_read_yn,
						 DATE_FORMAT(a.last_chatting_date, '%Y.%m.%d. %H:%i') as last_chatting_date,
						 a.last_chatting_comment,
						 FN_AES_DECRYPT(c.member_name) AS member_name,
						 c.member_img as member_img,
						 FN_AES_DECRYPT(d.member_name) AS partner_member_name,
						 d.member_img as partner_member_img,
						 b.title
						FROM
							tbl_chatting_room as a
							join tbl_product as b on b.product_idx=a.product_idx
							left join tbl_member as c on c.member_idx=a.member_idx
							left join tbl_member as d on d.member_idx=a.partner_member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='75' OR a.partner_member_idx='75')
		 ORDER BY a.last_chatting_date DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:58 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
						 count(*) as cnt
						FROM
							tbl_chatting_room as a
							left join tbl_member as c on c.member_idx=a.member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='75' OR a.partner_member_idx='75')
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:59 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:59 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(10)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
						 a.chatting_room_idx,
						 a.member_idx,
						 a.partner_member_idx,
						 a.state,
						 a.member_read_yn,
						 a.partner_member_read_yn,
						 DATE_FORMAT(a.last_chatting_date, '%Y.%m.%d. %H:%i') as last_chatting_date,
						 a.last_chatting_comment,
						 FN_AES_DECRYPT(c.member_name) AS member_name,
						 c.member_img as member_img,
						 FN_AES_DECRYPT(d.member_name) AS partner_member_name,
						 d.member_img as partner_member_img,
						 b.title
						FROM
							tbl_chatting_room as a
							join tbl_product as b on b.product_idx=a.product_idx
							left join tbl_member as c on c.member_idx=a.member_idx
							left join tbl_member as d on d.member_idx=a.partner_member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='75' OR a.partner_member_idx='75')
		 ORDER BY a.last_chatting_date DESC LIMIT 10, 10</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:59 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
						 count(*) as cnt
						FROM
							tbl_chatting_room as a
							left join tbl_member as c on c.member_idx=a.member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='75' OR a.partner_member_idx='75')
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:59 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:59 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(20)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
						 a.chatting_room_idx,
						 a.member_idx,
						 a.partner_member_idx,
						 a.state,
						 a.member_read_yn,
						 a.partner_member_read_yn,
						 DATE_FORMAT(a.last_chatting_date, '%Y.%m.%d. %H:%i') as last_chatting_date,
						 a.last_chatting_comment,
						 FN_AES_DECRYPT(c.member_name) AS member_name,
						 c.member_img as member_img,
						 FN_AES_DECRYPT(d.member_name) AS partner_member_name,
						 d.member_img as partner_member_img,
						 b.title
						FROM
							tbl_chatting_room as a
							join tbl_product as b on b.product_idx=a.product_idx
							left join tbl_member as c on c.member_idx=a.member_idx
							left join tbl_member as d on d.member_idx=a.partner_member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='75' OR a.partner_member_idx='75')
		 ORDER BY a.last_chatting_date DESC LIMIT 20, 10</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:13:59 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
						 count(*) as cnt
						FROM
							tbl_chatting_room as a
							left join tbl_member as c on c.member_idx=a.member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='75' OR a.partner_member_idx='75')
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:00 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:00 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(30)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
						 a.chatting_room_idx,
						 a.member_idx,
						 a.partner_member_idx,
						 a.state,
						 a.member_read_yn,
						 a.partner_member_read_yn,
						 DATE_FORMAT(a.last_chatting_date, '%Y.%m.%d. %H:%i') as last_chatting_date,
						 a.last_chatting_comment,
						 FN_AES_DECRYPT(c.member_name) AS member_name,
						 c.member_img as member_img,
						 FN_AES_DECRYPT(d.member_name) AS partner_member_name,
						 d.member_img as partner_member_img,
						 b.title
						FROM
							tbl_chatting_room as a
							join tbl_product as b on b.product_idx=a.product_idx
							left join tbl_member as c on c.member_idx=a.member_idx
							left join tbl_member as d on d.member_idx=a.partner_member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='75' OR a.partner_member_idx='75')
		 ORDER BY a.last_chatting_date DESC LIMIT 30, 10</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:00 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
						 count(*) as cnt
						FROM
							tbl_chatting_room as a
							left join tbl_member as c on c.member_idx=a.member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='75' OR a.partner_member_idx='75')
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:01 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:01 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(40)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
						 a.chatting_room_idx,
						 a.member_idx,
						 a.partner_member_idx,
						 a.state,
						 a.member_read_yn,
						 a.partner_member_read_yn,
						 DATE_FORMAT(a.last_chatting_date, '%Y.%m.%d. %H:%i') as last_chatting_date,
						 a.last_chatting_comment,
						 FN_AES_DECRYPT(c.member_name) AS member_name,
						 c.member_img as member_img,
						 FN_AES_DECRYPT(d.member_name) AS partner_member_name,
						 d.member_img as partner_member_img,
						 b.title
						FROM
							tbl_chatting_room as a
							join tbl_product as b on b.product_idx=a.product_idx
							left join tbl_member as c on c.member_idx=a.member_idx
							left join tbl_member as d on d.member_idx=a.partner_member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='75' OR a.partner_member_idx='75')
		 ORDER BY a.last_chatting_date DESC LIMIT 40, 10</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:01 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
						 count(*) as cnt
						FROM
							tbl_chatting_room as a
							left join tbl_member as c on c.member_idx=a.member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='75' OR a.partner_member_idx='75')
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:01 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:01 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(60)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
						 a.chatting_room_idx,
						 a.member_idx,
						 a.partner_member_idx,
						 a.state,
						 a.member_read_yn,
						 a.partner_member_read_yn,
						 DATE_FORMAT(a.last_chatting_date, '%Y.%m.%d. %H:%i') as last_chatting_date,
						 a.last_chatting_comment,
						 FN_AES_DECRYPT(c.member_name) AS member_name,
						 c.member_img as member_img,
						 FN_AES_DECRYPT(d.member_name) AS partner_member_name,
						 d.member_img as partner_member_img,
						 b.title
						FROM
							tbl_chatting_room as a
							join tbl_product as b on b.product_idx=a.product_idx
							left join tbl_member as c on c.member_idx=a.member_idx
							left join tbl_member as d on d.member_idx=a.partner_member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='75' OR a.partner_member_idx='75')
		 ORDER BY a.last_chatting_date DESC LIMIT 60, 10</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:01 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
						 count(*) as cnt
						FROM
							tbl_chatting_room as a
							left join tbl_member as c on c.member_idx=a.member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='75' OR a.partner_member_idx='75')
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:01 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:01 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(50)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
						 a.chatting_room_idx,
						 a.member_idx,
						 a.partner_member_idx,
						 a.state,
						 a.member_read_yn,
						 a.partner_member_read_yn,
						 DATE_FORMAT(a.last_chatting_date, '%Y.%m.%d. %H:%i') as last_chatting_date,
						 a.last_chatting_comment,
						 FN_AES_DECRYPT(c.member_name) AS member_name,
						 c.member_img as member_img,
						 FN_AES_DECRYPT(d.member_name) AS partner_member_name,
						 d.member_img as partner_member_img,
						 b.title
						FROM
							tbl_chatting_room as a
							join tbl_product as b on b.product_idx=a.product_idx
							left join tbl_member as c on c.member_idx=a.member_idx
							left join tbl_member as d on d.member_idx=a.partner_member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='75' OR a.partner_member_idx='75')
		 ORDER BY a.last_chatting_date DESC LIMIT 50, 10</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:01 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
						 count(*) as cnt
						FROM
							tbl_chatting_room as a
							left join tbl_member as c on c.member_idx=a.member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='75' OR a.partner_member_idx='75')
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:03 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:03 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:03 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							AND display_yn = 'Y'
						order by recommend_search_idx
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:03 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							AND display_yn = 'Y'
						order by recommend_search_idx
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:03 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

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
							a.list_up_date,
							a.display_yn,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '75' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:03 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							search_idx,
							title
						FROM
							tbl_search
						WHERE
							del_yn ='N'
							AND member_idx = '75'
							AND search_type = '0'
						 ORDER BY upd_date DESC LIMIT 5 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:03 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							category_name,
							img_path,
							order_no
						FROM
							tbl_category_management
						where
							state = '1'
						order by order_no ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 18:14:03 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:14:03 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:14:03 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:14:03 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:14:03 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 15:14:03 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0/famous_product_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:03 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0/famous_product_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

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
							a.list_up_date,
							a.display_yn,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '75' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:07 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:07 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							member_img,
							member_join_type,
							FN_AES_DECRYPT(member_name) AS member_name,
							FN_AES_DECRYPT(member_id) AS member_id,
							member_point,
							free_product_cnt,
							good_product_cnt,
							bad_product_cnt,
							del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:07 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '75' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '75' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '75' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '75'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '75' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '75'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '75'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '75'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:07 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:07 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155962"
  ["current_lng"]=>
  string(10) "90.4115878"
  ["tab_type"]=>
  string(1) "0"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(23.8155962))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115878))+SIN(RADIANS(23.8155962))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '75' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '75' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:07 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '75' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:07 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:07 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155962"
  ["current_lng"]=>
  string(10) "90.4115878"
  ["tab_type"]=>
  string(1) "1"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(23.8155962))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115878))+SIN(RADIANS(23.8155962))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '75' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '75' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:07 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '75' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155962"
  ["current_lng"]=>
  string(10) "90.4115878"
  ["tab_type"]=>
  string(1) "2"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(23.8155962))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115878))+SIN(RADIANS(23.8155962))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '75' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '75' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '75' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155962"
  ["current_lng"]=>
  string(10) "90.4115878"
  ["tab_type"]=>
  string(1) "3"
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
							c.del_yn as member_del_yn,
							a.display_yn,
							DATE_FORMAT(a.ins_date, '%Y-%m-%d %H:%i:%s') as ins_date,
							if(t.scrap_yn='Y', 'Y', 'N') as scrap_yn,
							if(r.board_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='75', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '75'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155962"
  ["current_lng"]=>
  string(10) "90.4115878"
  ["tab_type"]=>
  string(1) "3"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '75'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155962"
  ["current_lng"]=>
  string(10) "90.4115878"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
							a.board_idx,
							a.board_reply_idx,
							a.parent_board_reply_idx,
							a.depth,
							a.reply_comment,
							a.display_yn,
							a.del_yn,
							c.img_path,
							date_format(a.ins_date, '%Y.%m.%d. %H:%i') AS ins_date,
							if(c.member_idx=b.member_idx, 'Y', 'N') as board_member_reply_yn,
							b.member_idx,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							r.relpy_member_idx,
							FN_AES_DECRYPT(d.member_name) AS reply_member_name,
							b.member_img,
							b.del_yn as member_del_yn,
							if(r.board_reply_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='75', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '75' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '75'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155962"
  ["current_lng"]=>
  string(10) "90.4115878"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
             	COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '75' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '75'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155962"
  ["current_lng"]=>
  string(10) "90.4115878"
  ["tab_type"]=>
  string(1) "6"
}

 <br> ^SELECT
							a.product_idx,
							ifnull(z.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							a.display_yn,
							ROUND((6371*ACOS(COS(RADIANS(23.8155962))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115878))+SIN(RADIANS(23.8155962))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '75'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '75'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155962"
  ["current_lng"]=>
  string(10) "90.4115878"
  ["tab_type"]=>
  string(1) "5"
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
							c.del_yn as member_del_yn,
							a.display_yn,
							DATE_FORMAT(a.ins_date, '%Y-%m-%d %H:%i:%s') as ins_date,
							if(z.scrap_yn='Y', 'Y', 'N') as scrap_yn,
							if(r.board_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='75', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '75'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:08 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155962"
  ["current_lng"]=>
  string(10) "90.4115878"
  ["tab_type"]=>
  string(1) "5"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '75'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:10 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=430 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:10 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=430 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:10 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=430 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "430"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^UPDATE
	            tbl_product
	          SET
							view_cnt = view_cnt+1,
	            upd_date = NOW()
	          WHERE
	            product_idx = '430'
	          </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:10 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=430 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "430"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							a.product_member_idx,
							a.reserve_member_idxs,
							IF(a.member_idx='75', 'seller', 'buyer') as viewer,
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
							a.upd_date,
							a.ins_date,
							a.list_up_date,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							b.member_join_type,
							b.member_phone,
							b.member_img,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.free_product_cnt,
							b.del_yn,
							IFNULL((select count(*) from tbl_product_report r where r.member_idx = '75' AND r.product_idx = a.product_idx and r.del_yn = 'N'), 0) as report_cnt,

							FN_AES_DECRYPT(c.member_name) AS partner_member_name,
							c.member_img as partner_member_img
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx

						WHERE
							a.product_idx = '430'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:10 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=430 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "430"
  ["current_lat"]=>
  NULL
  ["current_lng"]=>
  NULL
}

 <br> ^SELECT
		 					like_yn
						FROM
	  					tbl_product_like
						WHERE
		 					product_idx = '430'
							AND member_idx = '75'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:10 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:10 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "430"
  ["current_lat"]=>
  string(10) "23.8155956"
  ["current_lng"]=>
  string(10) "90.4115948"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ROUND((6371*ACOS(COS(RADIANS(23.8155956))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115948))+SIN(RADIANS(23.8155956))*SIN(RADIANS(a.product_lat)))), 1) as distance
						FROM
							tbl_product AS a
						WHERE
							a.product_idx = '430'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							member_img,
							member_join_type,
							FN_AES_DECRYPT(member_name) AS member_name,
							FN_AES_DECRYPT(member_id) AS member_id,
							member_point,
							free_product_cnt,
							good_product_cnt,
							bad_product_cnt,
							del_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '75' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '75' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '75' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '75'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '75' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '75'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '75'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '75'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "0"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '75' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '75' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '75' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "1"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '75' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '75' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '75' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "2"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ifnull(t.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '75' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '75' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '75' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "3"
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
							c.del_yn as member_del_yn,
							a.display_yn,
							DATE_FORMAT(a.ins_date, '%Y-%m-%d %H:%i:%s') as ins_date,
							if(t.scrap_yn='Y', 'Y', 'N') as scrap_yn,
							if(r.board_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='75', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '75'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:14 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "3"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '75'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
							a.board_idx,
							a.board_reply_idx,
							a.parent_board_reply_idx,
							a.depth,
							a.reply_comment,
							a.display_yn,
							a.del_yn,
							c.img_path,
							date_format(a.ins_date, '%Y.%m.%d. %H:%i') AS ins_date,
							if(c.member_idx=b.member_idx, 'Y', 'N') as board_member_reply_yn,
							b.member_idx,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							r.relpy_member_idx,
							FN_AES_DECRYPT(d.member_name) AS reply_member_name,
							b.member_img,
							b.del_yn as member_del_yn,
							if(r.board_reply_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='75', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '75' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '75'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
             	COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '75' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '75'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "5"
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
							c.del_yn as member_del_yn,
							a.display_yn,
							DATE_FORMAT(a.ins_date, '%Y-%m-%d %H:%i:%s') as ins_date,
							if(z.scrap_yn='Y', 'Y', 'N') as scrap_yn,
							if(r.board_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='75', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '75'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "5"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '75'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender,
							b.member_addr,
							b.member_lat,
							b.member_lng,
							b.title,
							b.distance
						FROM
							tbl_member a
							LEFT JOIN tbl_member_location b ON b.member_location_idx = a.member_location_idx AND b.del_yn='N'
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							AND display_yn = 'Y'
						order by recommend_search_idx
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							AND display_yn = 'Y'
						order by recommend_search_idx
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

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
							a.list_up_date,
							a.display_yn,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '75' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							search_idx,
							title
						FROM
							tbl_search
						WHERE
							del_yn ='N'
							AND member_idx = '75'
							AND search_type = '0'
						 ORDER BY upd_date DESC LIMIT 5 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							category_management_idx,
							category_name,
							img_path,
							order_no
						FROM
							tbl_category_management
						where
							state = '1'
						order by order_no ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["tab_type"]=>
  string(1) "6"
}

 <br> ^SELECT
							a.product_idx,
							ifnull(z.like_yn, 'N') as like_yn,

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
							a.list_up_date,
							a.display_yn,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '75'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:15 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '75'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 18:14:15 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:14:16 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:14:16 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:14:16 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:14:16 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 15:14:16 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0/famous_product_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:16 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0/famous_product_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

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
							a.list_up_date,
							a.display_yn,
							ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '75' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:18 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:18 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 15:14:18 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-10-26 15:14:18 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:18 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							if(a.member_idx='75', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:18 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 18:14:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:14:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/0a7d7233a446dfaba77bcf6b0a41753c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:14:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/6d9386bc2aeb83fd5f22144a61997587.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 15:14:23 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:14:23 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(1) {
  ["board_idx"]=>
  string(2) "45"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
						WHERE
							a.del_yn = 'N'
							and a.board_idx='45'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:15:07 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:15:07 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(10)
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
							if(a.member_idx='75', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 10, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:15:07 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(10)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 18:15:08 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202205/17/8f8233e847f9df3e1da1f1d6e0a3d1d6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:08 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:08 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/b8be0715219759c7af315af842fa4d5c.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:08 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 15:15:17 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:15:17 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(1) {
  ["board_idx"]=>
  string(3) "120"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
						WHERE
							a.del_yn = 'N'
							and a.board_idx='120'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:15:34 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:15:34 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(20)
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
							if(a.member_idx='75', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 20, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:15:34 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(20)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 18:15:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 15:15:37 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:15:37 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(30)
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
							if(a.member_idx='75', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 30, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:15:37 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(30)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202201/24/4574548430b1dad3de2e2ddac0e551e9.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202201/24/4bbc0eec81d155597f6bfecac554fffd.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202201/24/325fcf3ecce1da7734b6fb9abe42dcec.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202201/24/dcd5e79974f257203e78a5489804efa4.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202201/24/ef1d4fd0d83089a0459a6ad6f77f990c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/24/15c5c25e2352a8bb24de7aff332aa5f1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/24/6b903b8b19d75f1553671f98f8f6522d.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/22/cc7ed4f74b421020ad3e9b5d78bc5964.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/32a1cd8b9cd8874c078c82533e657ee6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/a0d8bc900f4e35bc92410ffa05f33e72.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/c8ebb13fb6bca147034a79abbe5dea1a.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/6fb3c73c7dd5e23b5c9dac7aba9683f0.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/f9d9c012e2f0132200d9f61f8e498603.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/449cb97f3ba6ddb39bc58a1b6e921eef.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/65f3bd90e6845fccaf13ac1dae91d95d.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/11354b1974e9f768133757b4bf994d45.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/b5c2508345fd08908c669e69cb3d5533.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/912a6ca207688c5f11b1802ec978c21d.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/8dd7c4dea6d29062c4d9350cb5f87945.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:15:38 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/6d3f6f53437276b33f82d8cb5f032b9e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 15:16:42 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:16:42 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(40)
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
							if(a.member_idx='75', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 40, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:16:42 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(40)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 18:16:43 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/22/cc7ed4f74b421020ad3e9b5d78bc5964.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:16:43 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/15/b0f4bcdcd48f4cec2ad3357ead614f3c.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:16:43 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/22/161e02fefd286b9868573f1389de9e44.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 15:17:07 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '75'
						</pre> 
 <br /> ' 
ERROR - 2022-10-26 15:17:07 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(50)
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
							if(a.member_idx='75', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 50, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-26 15:17:07 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(50)
  ["page_size"]=>
  int(10)
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '75' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '75' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '75' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-26 18:17:08 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/a0d8bc900f4e35bc92410ffa05f33e72.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:17:08 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/cd805ccc78c6801ea2eb138830f91b09.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:17:08 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/07/a2e6d53677c09dd6b9a884b94609ff78.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:17:08 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/09/7e329259c6e0ce620243a3de4002d9f7.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:17:08 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/07/9537ed14c7174edc02c7e760e207a6bd.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:17:08 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/07/b40f38e2a391f97f9d7fb6564961f11d.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:17:08 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/07/3c2bea310cf3a30df76b04278b399010.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-26 18:17:08 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/07/1794c3caf5379f80445d890eba80f67c.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
