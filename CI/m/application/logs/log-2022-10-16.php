<html>

ERROR - 2022-10-16 10:15:46 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=59 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:46 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=59 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "59"
  ["uuid"]=>
  string(36) "7f4c48d5-1c4c-424d-b4e1-19cec493e4bb"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = '7f4c48d5-1c4c-424d-b4e1-19cec493e4bb',
						upd_date = NOW()
					WHERE
						member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:46 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=59 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:47 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:47 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:15:47 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:15:47 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:47 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:15:47 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:15:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:15:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:15:48 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:15:48 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:15:48 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:15:49 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:49 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:49 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:49 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:15:54 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:54 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:15:54 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:15:54 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:54 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:15:54 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:15:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:15:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:15:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:15:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:15:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:15:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:15:55 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:55 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156105"
  ["current_lng"]=>
  string(10) "90.4116071"
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:55 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156105"
  ["current_lng"]=>
  string(10) "90.4116071"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156105))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116071))+SIN(RADIANS(23.8156105))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8156105))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116071))+SIN(RADIANS(23.8156105))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:55 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8156105))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116071))+SIN(RADIANS(23.8156105))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:55 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:55 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:15:55 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:15:55 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:55 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:15:55 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:15:55 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:15:55 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:15:56 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:15:56 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:15:56 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:15:56 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:15:56 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:56 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156105"
  ["current_lng"]=>
  string(10) "90.4116071"
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:56 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156105"
  ["current_lng"]=>
  string(10) "90.4116071"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156105))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116071))+SIN(RADIANS(23.8156105))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8156105))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116071))+SIN(RADIANS(23.8156105))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:15:56 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8156105))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116071))+SIN(RADIANS(23.8156105))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/my_location_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/my_location_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["member_location_idx"]=>
  string(1) "0"
}

 <br> ^UPDATE
							tbl_member
						SET
							member_location_idx = '0',
							upd_date = NOW()
						WHERE
							member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:16:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:16:13 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:13 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:13 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:13 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:20 --> query :  '<pre>m.dilri.com/bd/alarm_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:21 --> query :  '<pre>m.dilri.com/bd/alarm_v_1_0_0/alarm_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:21 --> query :  '<pre>m.dilri.com/bd/alarm_v_1_0_0/alarm_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
              tbl_alarm
            SET
              read_yn = 'Y',
              upd_date =NOW()
            WHERE
              member_idx = '59'
              AND read_yn = 'N'
    </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:21 --> query :  '<pre>m.dilri.com/bd/alarm_v_1_0_0/alarm_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(2) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(15)
}

 <br> ^SELECT
              alarm_idx,
              member_idx,
              msg,
              data,
              read_yn,
              del_yn,
              DATE_FORMAT(ins_date,'%Y.%m.%d') as ins_date,
              DATE_FORMAT(ins_date,'%H:%i') as ins_date_hm,
              upd_date
            FROM
              tbl_alarm
            WHERE
              member_idx = 59
              AND del_yn = 'N'
	  	ORDER BY alarm_idx DESC  </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:21 --> query :  '<pre>m.dilri.com/bd/alarm_v_1_0_0/alarm_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
            	count(*) as cnt
            FROM
            	tbl_alarm
            WHERE
            	del_yn = 'N'
              AND member_idx = 59
				  </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:22 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:22 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:22 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:22 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:22 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:22 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:16:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:16:23 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:23 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:23 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:23 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:29 --> query :  '<pre>m.dilri.com/bd/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:29 --> query :  '<pre>m.dilri.com/bd/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:29 --> query :  '<pre>m.dilri.com/bd/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:29 --> query :  '<pre>m.dilri.com/bd/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:29 --> query :  '<pre>m.dilri.com/bd/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:29 --> query :  '<pre>m.dilri.com/bd/product_v_1_0_0/product_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:38 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:38 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:38 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:38 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:38 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:38 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:16:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:16:39 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:39 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:39 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:39 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:41 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:41 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:41 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:42 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:42 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:42 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:16:42 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:42 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/0a7d7233a446dfaba77bcf6b0a41753c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:42 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/6d9386bc2aeb83fd5f22144a61997587.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:42 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202205/17/8f8233e847f9df3e1da1f1d6e0a3d1d6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:16:45 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:45 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:45 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:16:45 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:45 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:45 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:16:45 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/0a7d7233a446dfaba77bcf6b0a41753c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:45 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:45 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/6d9386bc2aeb83fd5f22144a61997587.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:16:45 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202205/17/8f8233e847f9df3e1da1f1d6e0a3d1d6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:16:47 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:16:47 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:17:05 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:05 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 10, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:05 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:17:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/b8be0715219759c7af315af842fa4d5c.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:17:16 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:16 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["board_idx"]=>
  string(3) "123"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
						WHERE
							a.del_yn = 'N'
							and a.board_idx='123'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:21 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:21 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["board_idx"]=>
  string(3) "123"
}

 <br> ^UPDATE
							tbl_board
						SET
							del_yn = 'Y',
							upd_date = NOW()
						WHERE
							board_idx = '123'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:24 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:24 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["board_idx"]=>
  string(3) "122"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
						WHERE
							a.del_yn = 'N'
							and a.board_idx='122'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:25 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:25 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["board_idx"]=>
  string(3) "122"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
						WHERE
							a.del_yn = 'N'
							and a.board_idx='122'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:30 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:30 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["board_idx"]=>
  string(3) "122"
}

 <br> ^UPDATE
							tbl_board
						SET
							del_yn = 'Y',
							upd_date = NOW()
						WHERE
							board_idx = '122'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:41 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:41 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["board_idx"]=>
  string(3) "121"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
						WHERE
							a.del_yn = 'N'
							and a.board_idx='121'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:43 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:43 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_del 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["board_idx"]=>
  string(3) "121"
}

 <br> ^UPDATE
							tbl_board
						SET
							del_yn = 'Y',
							upd_date = NOW()
						WHERE
							board_idx = '121'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:49 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:49 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:17:49 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:17:49 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:49 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:49 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:17:50 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:50 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/0a7d7233a446dfaba77bcf6b0a41753c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:50 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/6d9386bc2aeb83fd5f22144a61997587.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:50 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202205/17/8f8233e847f9df3e1da1f1d6e0a3d1d6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:50 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:50 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/b8be0715219759c7af315af842fa4d5c.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:17:53 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:53 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 10, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:17:53 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:17:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:17:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:24:34 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:24:34 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 20, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:24:34 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:24:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:24:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202201/24/dcd5e79974f257203e78a5489804efa4.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:24:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202201/24/4574548430b1dad3de2e2ddac0e551e9.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:24:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202201/24/325fcf3ecce1da7734b6fb9abe42dcec.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:24:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:24:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202201/24/ef1d4fd0d83089a0459a6ad6f77f990c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:24:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202201/24/4bbc0eec81d155597f6bfecac554fffd.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:24:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/32a1cd8b9cd8874c078c82533e657ee6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:24:34 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/a0d8bc900f4e35bc92410ffa05f33e72.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:26:08 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:08 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 30, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:08 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/24/6b903b8b19d75f1553671f98f8f6522d.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/24/15c5c25e2352a8bb24de7aff332aa5f1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/22/cc7ed4f74b421020ad3e9b5d78bc5964.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/c8ebb13fb6bca147034a79abbe5dea1a.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/65f3bd90e6845fccaf13ac1dae91d95d.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/11354b1974e9f768133757b4bf994d45.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/f9d9c012e2f0132200d9f61f8e498603.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/449cb97f3ba6ddb39bc58a1b6e921eef.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/6fb3c73c7dd5e23b5c9dac7aba9683f0.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/912a6ca207688c5f11b1802ec978c21d.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/b5c2508345fd08908c669e69cb3d5533.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/6d3f6f53437276b33f82d8cb5f032b9e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/23/8dd7c4dea6d29062c4d9350cb5f87945.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/22/161e02fefd286b9868573f1389de9e44.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/15/b0f4bcdcd48f4cec2ad3357ead614f3c.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:26:09 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:09 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:09 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:26:09 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:26:09 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:09 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							search_idx,
							title
						FROM
							tbl_search
						WHERE
							del_yn ='N'
							AND member_idx = '59'
							AND search_type = '0'
						 ORDER BY upd_date DESC LIMIT 5 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:09 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:26:09 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0/famous_product_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:09 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0/famous_product_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:11 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:11 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:26:11 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:26:12 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:12 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:12 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:26:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/0a7d7233a446dfaba77bcf6b0a41753c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202205/17/8f8233e847f9df3e1da1f1d6e0a3d1d6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/6d9386bc2aeb83fd5f22144a61997587.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/b8be0715219759c7af315af842fa4d5c.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:26:13 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:13 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:26:13 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:26:13 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:13 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:13 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:26:14 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202205/17/8f8233e847f9df3e1da1f1d6e0a3d1d6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:14 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/0a7d7233a446dfaba77bcf6b0a41753c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:14 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:14 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:14 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/b8be0715219759c7af315af842fa4d5c.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:14 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/6d9386bc2aeb83fd5f22144a61997587.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 10:26:17 --> query :  '<pre>m.dilri.com/bd/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:17 --> query :  '<pre>m.dilri.com/bd/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:17 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/community_detail?board_idx=124 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:17 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/community_detail?board_idx=124 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["board_idx"]=>
  string(3) "124"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
						WHERE
							a.del_yn = 'N'
							and a.board_idx='124'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:17 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/community_detail?board_idx=124 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["board_idx"]=>
  string(3) "124"
}

 <br> ^SELECT
							a.board_idx,
							a.member_idx,
							a.reply_cnt,
							a.contents
						FROM
							tbl_board a
						WHERE
							board_idx = '124'

			</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:17 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_comment_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:17 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_comment_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(4) {
  ["board_idx"]=>
  string(3) "124"
  ["member_idx"]=>
  string(2) "59"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							a.board_reply_idx,
							a.parent_board_reply_idx,
							a.depth,
							a.reply_comment,
							a.display_yn,
							a.del_yn,
							date_format(a.ins_date, '%Y.%m.%d. %H:%i') AS ins_date,
							if(c.member_idx=b.member_idx, 'Y', 'N') as board_member_reply_yn,
							b.member_idx,
							FN_AES_DECRYPT(b.member_name) AS member_name,
							a.relpy_member_idx,
							FN_AES_DECRYPT(d.member_name) AS reply_member_name,
							b.member_img,
							b.del_yn as member_del_yn,
							if(r.board_reply_report_idx>0, 'Y', 'N') as report_yn,
							if(a.member_idx='59', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							 a.depth = 0
							AND a.board_idx = '124'
		 ORDER BY a.board_reply_idx asc limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:17 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_comment_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(4) {
  ["board_idx"]=>
  string(3) "124"
  ["member_idx"]=>
  string(2) "59"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
             	COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
						WHERE
							 a.depth = 0
							AND a.board_idx = '124'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:21 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:21 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:26:21 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 10:26:22 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:22 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 10:26:22 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:26:22 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:22 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/0a7d7233a446dfaba77bcf6b0a41753c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:22 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/6d9386bc2aeb83fd5f22144a61997587.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:22 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202205/17/8f8233e847f9df3e1da1f1d6e0a3d1d6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:22 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:26:22 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/b8be0715219759c7af315af842fa4d5c.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 11:13:47 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=59 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:13:47 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=59 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "59"
  ["uuid"]=>
  string(36) "7f4c48d5-1c4c-424d-b4e1-19cec493e4bb"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = '7f4c48d5-1c4c-424d-b4e1-19cec493e4bb',
						upd_date = NOW()
					WHERE
						member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:13:47 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=59 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:13:47 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:13:47 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 11:13:47 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 11:13:47 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:13:47 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 11:13:47 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:13:48 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:13:48 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:13:48 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:13:48 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:13:48 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 11:13:49 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:13:49 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:13:49 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:13:49 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 11:14:37 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:37 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:37 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '59'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '59'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '59'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '59'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:38 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:38 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:38 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:39 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:14:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:40 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:40 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:40 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 11:14:40 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:40 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:14:40 --> 404 Page Not Found ...--> m.dilri.com/images/arrow_right.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 11:14:43 --> query :  '<pre>m.dilri.com/bd/language/nation_change 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:43 --> query :  '<pre>m.dilri.com/bd/language/nation_change 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["current_lang"]=>
  string(2) "us"
}

 <br> ^UPDATE
							tbl_member
						SET
							current_lang = 'us',
							upd_date = NOW()
						WHERE
							member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:44 --> query :  '<pre>m.dilri.com/us/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:44 --> query :  '<pre>m.dilri.com/us/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '59'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '59'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '59'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '59'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:48 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:14:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 11:14:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 11:14:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 11:14:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 11:14:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:14:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:52 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 11:14:52 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:52 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156056"
  ["current_lng"]=>
  string(10) "90.4116074"
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:52 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156056"
  ["current_lng"]=>
  string(10) "90.4116074"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156056))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116074))+SIN(RADIANS(23.8156056))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8156056))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116074))+SIN(RADIANS(23.8156056))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:52 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8156056))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116074))+SIN(RADIANS(23.8156056))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:54 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/my_location_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:54 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/my_location_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["member_location_idx"]=>
  string(1) "0"
}

 <br> ^UPDATE
							tbl_member
						SET
							member_location_idx = '0',
							upd_date = NOW()
						WHERE
							member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:55 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:55 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 11:14:55 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 11:14:55 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:55 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 11:14:55 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:14:56 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:56 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:56 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:56 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:14:56 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 11:14:56 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:56 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:56 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 11:14:56 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:24:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:24:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:24:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:24:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 15:25:00 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:25:00 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:25:00 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:25:01 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:25:01 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:25:04 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:25:04 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:25:04 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:25:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:25:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:25:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:25:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:25:21 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.215.183 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:25:21 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.215.183 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:25:21 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.215.183 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:25:21 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.215.183 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 15:25:22 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>37.111.215.183 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:25:22 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>37.111.215.183 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:25:22 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>37.111.215.183 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:25:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>37.111.215.183 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:25:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>37.111.215.183 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:25:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.215.183 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8154792"
  ["current_lng"]=>
  string(10) "90.4116729"
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
ERROR - 2022-10-16 12:25:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.215.183 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8154792"
  ["current_lng"]=>
  string(10) "90.4116729"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8154792))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116729))+SIN(RADIANS(23.8154792))*SIN(RADIANS(a.product_lat)))), 1) as distance,
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
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8154792))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116729))+SIN(RADIANS(23.8154792))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:25:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.215.183 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8154792))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116729))+SIN(RADIANS(23.8154792))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:32:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:32:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:32:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:32:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 15:33:00 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:33:00 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:33:00 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:33:00 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:33:00 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:33:00 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:33:01 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:33:01 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:33:01 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:33:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/my_location_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["member_location_idx"]=>
  string(1) "0"
}

 <br> ^UPDATE
							tbl_member
						SET
							member_location_idx = '0',
							upd_date = NOW()
						WHERE
							member_idx = ''
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:33:06 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:33:06 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:33:06 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:33:06 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 15:33:07 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:33:07 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:33:07 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:33:07 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:33:07 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:33:07 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:33:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:33:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:33:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:36:02 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=59 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:02 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=59 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "59"
  ["uuid"]=>
  string(36) "7f4c48d5-1c4c-424d-b4e1-19cec493e4bb"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = '7f4c48d5-1c4c-424d-b4e1-19cec493e4bb',
						upd_date = NOW()
					WHERE
						member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:02 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=7f4c48d5-1c4c-424d-b4e1-19cec493e4bb&user_idx=59 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:36:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:36:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:36:02 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:36:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:04 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:36:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:05 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:36:09 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:09 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:09 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '59'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '59'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '59'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '59'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155986"
  ["current_lng"]=>
  string(9) "90.411583"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155986))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.411583))+SIN(RADIANS(23.8155986))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155986"
  ["current_lng"]=>
  string(9) "90.411583"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155986))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.411583))+SIN(RADIANS(23.8155986))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155986"
  ["current_lng"]=>
  string(9) "90.411583"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155986))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.411583))+SIN(RADIANS(23.8155986))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155986"
  ["current_lng"]=>
  string(9) "90.411583"
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155986"
  ["current_lng"]=>
  string(9) "90.411583"
  ["tab_type"]=>
  string(1) "3"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155986"
  ["current_lng"]=>
  string(9) "90.411583"
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155986"
  ["current_lng"]=>
  string(9) "90.411583"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
             	COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:36:10 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:10 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:10 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155986"
  ["current_lng"]=>
  string(9) "90.411583"
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155986"
  ["current_lng"]=>
  string(9) "90.411583"
  ["tab_type"]=>
  string(1) "5"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155986"
  ["current_lng"]=>
  string(9) "90.411583"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155986))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.411583))+SIN(RADIANS(23.8155986))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:10 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:36:10 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:10 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:10 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:10 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:10 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:10 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:36:12 --> query :  '<pre>m.dilri.com/us/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:12 --> query :  '<pre>m.dilri.com/us/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:36:12 --> 404 Page Not Found ...--> m.dilri.com/images/arrow_right.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:36:15 --> query :  '<pre>m.dilri.com/us/member_info_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:15 --> query :  '<pre>m.dilri.com/us/member_info_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.member_join_type,
							a.member_img,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:22 --> query :  '<pre>m.dilri.com/us/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:22 --> query :  '<pre>m.dilri.com/us/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '59'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '59'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '59'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '59'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:36:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:36:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:36:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:36:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:36:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:36:24 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:24 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8155986"
  ["current_lng"]=>
  string(9) "90.411583"
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:24 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8155986"
  ["current_lng"]=>
  string(9) "90.411583"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155986))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.411583))+SIN(RADIANS(23.8155986))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8155986))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.411583))+SIN(RADIANS(23.8155986))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:36:24 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8155986))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.411583))+SIN(RADIANS(23.8155986))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:17 --> query :  '<pre>m.dilri.com/us/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							del_yn
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('Qaz1@qaz.com')
							AND member_pw = SHA2('1q2w3e4r5t',512)
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:17 --> query :  '<pre>m.dilri.com/us/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["member_id"]=>
  string(12) "Qaz1@qaz.com"
  ["member_pw"]=>
  string(10) "1q2w3e4r5t"
  ["member_idx"]=>
  string(2) "59"
  ["gcm_key"]=>
  string(163) "cwUzjIPmTBGUdraHutZ-KW:APA91bESPseVCcQ3G3I6hXSAg3LtOjw_M6JohhS7A8IH_GHG3lsk8jPE29ViT4tELfE6VoFxseJ7L6h-7XMoaQZcHK1950fdjx40ff_HI6fAPxjx-Qy0Cwr2PP7ACtYCjdbekXH66__u"
  ["device_os"]=>
  string(1) "A"
}

 <br> ^UPDATE
					 tbl_member
				 SET
				 	 uuid = NULL,
					 gcm_key = 'cwUzjIPmTBGUdraHutZ-KW:APA91bESPseVCcQ3G3I6hXSAg3LtOjw_M6JohhS7A8IH_GHG3lsk8jPE29ViT4tELfE6VoFxseJ7L6h-7XMoaQZcHK1950fdjx40ff_HI6fAPxjx-Qy0Cwr2PP7ACtYCjdbekXH66__u',
					 device_os = 'A',
					 upd_date = NOW()
				 WHERE
					 member_idx = '59'
	 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:40:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:40:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:40:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:40:20 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:20 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:20 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:20 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:20 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:20 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:40:20 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:20 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:20 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:20 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:40:24 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/my_location_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:24 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/my_location_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["member_location_idx"]=>
  string(1) "0"
}

 <br> ^UPDATE
							tbl_member
						SET
							member_location_idx = '0',
							upd_date = NOW()
						WHERE
							member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:25 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:25 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:40:25 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:40:25 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:25 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:40:25 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0? 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:40:26 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:26 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:26 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:26 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:26 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:26 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:40:26 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:26 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:26 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:26 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:40:33 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:33 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:33 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '59'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '59'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '59'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '59'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:33 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:33 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:33 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:33 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:33 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:33 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:34 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:40:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:40:37 --> query :  '<pre>m.dilri.com/us/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:37 --> query :  '<pre>m.dilri.com/us/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:40:37 --> 404 Page Not Found ...--> m.dilri.com/images/arrow_right.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:40:40 --> query :  '<pre>m.dilri.com/us/language/nation_change 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:40 --> query :  '<pre>m.dilri.com/us/language/nation_change 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["current_lang"]=>
  string(2) "bd"
}

 <br> ^UPDATE
							tbl_member
						SET
							current_lang = 'bd',
							upd_date = NOW()
						WHERE
							member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:41 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:41 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:45 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:45 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:46 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:46 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:46 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '59'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '59'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '59'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '59'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:46 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:46 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:46 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:46 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:46 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:46 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:46 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:46 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:46 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:47 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:40:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:48 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:40:50 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:50 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:51 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:51 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:51 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '59'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '59'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '59'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '59'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:40:52 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:52 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:52 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:52 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:40:52 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:52 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:52 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:52 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:52 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:40:53 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:40:55 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:40:55 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '59'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '59'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '59'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '59'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:04 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:41:05 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:05 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:41:05 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:41:05 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:05 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:41:05 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:05 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:41:06 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:06 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8155963"
  ["current_lng"]=>
  string(10) "90.4115899"
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:06 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8155963"
  ["current_lng"]=>
  string(10) "90.4115899"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155963))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115899))+SIN(RADIANS(23.8155963))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8155963))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115899))+SIN(RADIANS(23.8155963))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:06 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8155963))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115899))+SIN(RADIANS(23.8155963))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:11 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/my_location_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:11 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/my_location_mod_up 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["member_location_idx"]=>
  string(1) "0"
}

 <br> ^UPDATE
							tbl_member
						SET
							member_location_idx = '0',
							upd_date = NOW()
						WHERE
							member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:41:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:41:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 12:41:12 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 15:41:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 15:41:12 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 12:41:13 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:13 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:13 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 12:41:13 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 16:09:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:09:11 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:11 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:11 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:11 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:17 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=98f15d66-b36a-4ccf-bf8e-f6a66c5987c4&user_idx=59 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:17 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=98f15d66-b36a-4ccf-bf8e-f6a66c5987c4&user_idx=59 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "59"
  ["uuid"]=>
  string(36) "98f15d66-b36a-4ccf-bf8e-f6a66c5987c4"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = '98f15d66-b36a-4ccf-bf8e-f6a66c5987c4',
						upd_date = NOW()
					WHERE
						member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:17 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=98f15d66-b36a-4ccf-bf8e-f6a66c5987c4&user_idx=59 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:18 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:18 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:18 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:18 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:18 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:18 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 16:09:21 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:21 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:21 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:21 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:21 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:09:22 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:22 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:22 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:22 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:27 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:27 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:27 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:28 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:28 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:28 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 16:09:28 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/0a7d7233a446dfaba77bcf6b0a41753c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:28 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:28 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/6d9386bc2aeb83fd5f22144a61997587.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:29 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202205/17/8f8233e847f9df3e1da1f1d6e0a3d1d6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:29 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/b8be0715219759c7af315af842fa4d5c.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:29 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:09:32 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:32 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 10, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:32 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 16:09:33 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:33 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:33 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:33 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:33 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:33 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:33 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:33 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:09:36 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:36 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:36 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:37 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:37 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:37 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '59' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 16:09:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/6d9386bc2aeb83fd5f22144a61997587.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/b8be0715219759c7af315af842fa4d5c.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202205/17/8f8233e847f9df3e1da1f1d6e0a3d1d6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/0a7d7233a446dfaba77bcf6b0a41753c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:09:38 --> query :  '<pre>m.dilri.com/bd/chatting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:38 --> query :  '<pre>m.dilri.com/bd/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:38 --> query :  '<pre>m.dilri.com/bd/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							and (a.member_idx='59' OR a.partner_member_idx='59')
		 ORDER BY a.last_chatting_date DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:38 --> query :  '<pre>m.dilri.com/bd/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
						 count(*) as cnt
						FROM
							tbl_chatting_room as a
							left join tbl_member as c on c.member_idx=a.member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='59' OR a.partner_member_idx='59')
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:38 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:38 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:38 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:38 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 13:09:38 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:38 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							search_idx,
							title
						FROM
							tbl_search
						WHERE
							del_yn ='N'
							AND member_idx = '59'
							AND search_type = '0'
						 ORDER BY upd_date DESC LIMIT 5 </pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:38 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 16:09:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 16:09:39 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 13:09:39 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0/famous_product_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:39 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0/famous_product_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:40 --> query :  '<pre>m.dilri.com/bd/chatting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:40 --> query :  '<pre>m.dilri.com/bd/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:40 --> query :  '<pre>m.dilri.com/bd/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							and (a.member_idx='59' OR a.partner_member_idx='59')
		 ORDER BY a.last_chatting_date DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-10-16 13:09:40 --> query :  '<pre>m.dilri.com/bd/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-A127F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
						 count(*) as cnt
						FROM
							tbl_chatting_room as a
							left join tbl_member as c on c.member_idx=a.member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='59' OR a.partner_member_idx='59')
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:40:32 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.215.183 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:40:32 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.215.183 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:40:32 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.215.183 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:40:32 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.215.183 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 17:40:33 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>37.111.215.183 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:40:33 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>37.111.215.183 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:40:33 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>37.111.215.183 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:40:33 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>37.111.215.183 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:40:33 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>37.111.215.183 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:40:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.215.183 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:40:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.215.183 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:40:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.215.183 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:40:58 --> query :  '<pre>m.dilri.com/us/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							del_yn
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('Qaz1@qaz.com')
							AND member_pw = SHA2('1q2w3e4r5t6y',512)
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:02 --> query :  '<pre>m.dilri.com/us/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							del_yn
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('Qaz1@qaz.com')
							AND member_pw = SHA2('1q2w3e4r5t',512)
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:02 --> query :  '<pre>m.dilri.com/us/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["member_id"]=>
  string(12) "Qaz1@qaz.com"
  ["member_pw"]=>
  string(10) "1q2w3e4r5t"
  ["member_idx"]=>
  string(2) "59"
  ["gcm_key"]=>
  string(163) "dEPkOdJnSSi2oTawRNtQsV:APA91bH_eqJWU5jsjXR8IYjf2j1MbgcQ3dvvIZV23syBuSn_Ub6Ldt0jfd47dxNR7WURSmZikZz6bqE4rmbeZdAFY_jX_i3o_7o8xmy4NYLUamv-VsHrIlzqLweSk4M1RdbBEt1DEqqj"
  ["device_os"]=>
  string(1) "A"
}

 <br> ^UPDATE
					 tbl_member
				 SET
				 	 uuid = NULL,
					 gcm_key = 'dEPkOdJnSSi2oTawRNtQsV:APA91bH_eqJWU5jsjXR8IYjf2j1MbgcQ3dvvIZV23syBuSn_Ub6Ldt0jfd47dxNR7WURSmZikZz6bqE4rmbeZdAFY_jX_i3o_7o8xmy4NYLUamv-VsHrIlzqLweSk4M1RdbBEt1DEqqj',
					 device_os = 'A',
					 upd_date = NOW()
				 WHERE
					 member_idx = '59'
	 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:04 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:04 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:04 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '59'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '59'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '59'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '59'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155989"
  ["current_lng"]=>
  string(10) "90.4116393"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155989))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116393))+SIN(RADIANS(23.8155989))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155989"
  ["current_lng"]=>
  string(10) "90.4116393"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155989))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116393))+SIN(RADIANS(23.8155989))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155989"
  ["current_lng"]=>
  string(10) "90.4116393"
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155989"
  ["current_lng"]=>
  string(10) "90.4116393"
  ["tab_type"]=>
  string(1) "3"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155989"
  ["current_lng"]=>
  string(10) "90.4116393"
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155989"
  ["current_lng"]=>
  string(10) "90.4116393"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
             	COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155989"
  ["current_lng"]=>
  string(10) "90.4116393"
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155989"
  ["current_lng"]=>
  string(10) "90.4116393"
  ["tab_type"]=>
  string(1) "5"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8155989"
  ["current_lng"]=>
  string(10) "90.4116393"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155989))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116393))+SIN(RADIANS(23.8155989))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:05 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 17:41:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:06 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:41:09 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:09 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:09 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '59'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '59'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '59'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '59'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 17:41:10 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:10 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:10 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:10 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 17:41:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '59'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '59'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '59'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '59'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:12 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:13 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:13 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:13 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 17:41:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:41:13 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:13 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:13 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:13 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:13 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:13 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 17:41:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:13 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:41:14 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:14 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 17:41:14 --> 404 Page Not Found ...--> m.dilri.com/images/arrow_right.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:41:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '59'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '59'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '59'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '59'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156502))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4117147))+SIN(RADIANS(23.8156502))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156502))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4117147))+SIN(RADIANS(23.8156502))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156502))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4117147))+SIN(RADIANS(23.8156502))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
  ["tab_type"]=>
  string(1) "3"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
             	COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
  ["tab_type"]=>
  string(1) "5"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 17:41:17 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:17 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '59'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '59'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '59'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '59'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 17:41:17 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156502))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4117147))+SIN(RADIANS(23.8156502))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 17:41:17 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:17 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:17 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156502))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4117147))+SIN(RADIANS(23.8156502))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156502))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4117147))+SIN(RADIANS(23.8156502))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156502))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4117147))+SIN(RADIANS(23.8156502))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:17 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:18 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:18 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:18 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
  ["tab_type"]=>
  string(1) "3"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:18 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:18 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:18 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
             	COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 17:41:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:41:18 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:18 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:18 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
  ["tab_type"]=>
  string(1) "5"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:18 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:18 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156502"
  ["current_lng"]=>
  string(10) "90.4117147"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156502))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4117147))+SIN(RADIANS(23.8156502))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:18 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:18 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:18 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 17:41:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:41:20 --> query :  '<pre>m.dilri.com/bd/language/nation_change 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:20 --> query :  '<pre>m.dilri.com/bd/language/nation_change 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["current_lang"]=>
  string(2) "us"
}

 <br> ^UPDATE
							tbl_member
						SET
							current_lang = 'us',
							upd_date = NOW()
						WHERE
							member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:21 --> query :  '<pre>m.dilri.com/us/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:21 --> query :  '<pre>m.dilri.com/us/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:22 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:22 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:22 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '59' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '59'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '59'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '59'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '59'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '59' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '59' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '59' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							if(a.member_idx='59', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '59' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '59' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '59'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:23 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '59'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 17:41:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/04/85d85c5e5625fe0ce3e307cd3bcfb4be.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202203/15/20b87d786447da3e2c6721a8b8bdca54.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:24 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:24 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/343ebd39d0847f4aaf24a6941141a2a1.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:24 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/62281e09b118375f8393a73a9ccaf167.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:24 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/04/375c6aae532b65d0f7041577bf4c8260.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:24 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/f6157b8ceaafcaafdfe5ddb4e198c9ab.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:24 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/08/52956bb74f867179961c3c885d702893.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:24 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/cf790a37d79267586334648bffe6050e.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:41:24 --> query :  '<pre>m.dilri.com/us/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:24 --> query :  '<pre>m.dilri.com/us/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '59'
						</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:28 --> query :  '<pre>m.dilri.com/us/logout_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(1) {
  ["member_idx"]=>
  string(2) "59"
}

 <br> ^UPDATE
            	tbl_member
            SET
            	uuid =  NULL,
            	gcm_key =  NULL,
            	upd_date = NOW()
            WHERE
            	member_idx = '59'
          </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:41:28 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:41:28 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:41:28 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:41:28 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 17:41:28 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:28 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:28 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:28 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:28 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:28 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:41:29 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:41:29 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:41:29 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:41:50 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:41:50 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:41:50 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:41:50 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 17:41:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:41:51 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:41:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:41:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:41:51 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:41:58 --> query :  '<pre>m.dilri.com/us/join_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:42:36 --> query :  '<pre>m.dilri.com/us/join_v_1_0_0/join_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(20) "dreamct925@gmail.com"
  ["member_pw"]=>
  string(10) "1q2w3e4r5t"
  ["member_name"]=>
  string(10) "Sungil kim"
  ["member_phone"]=>
  NULL
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('dreamct925@gmail.com')
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:42:36 --> query :  '<pre>m.dilri.com/us/join_v_1_0_0/join_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(20) "dreamct925@gmail.com"
  ["member_pw"]=>
  string(10) "1q2w3e4r5t"
  ["member_name"]=>
  string(10) "Sungil kim"
  ["member_phone"]=>
  NULL
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_member
						WHERE
							member_phone = FN_AES_ENCRYPT(NULL)
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:42:36 --> query :  '<pre>m.dilri.com/us/join_v_1_0_0/join_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(20) "dreamct925@gmail.com"
  ["member_pw"]=>
  string(10) "1q2w3e4r5t"
  ["member_name"]=>
  string(10) "Sungil kim"
  ["member_phone"]=>
  NULL
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_member
						WHERE
							member_name = FN_AES_ENCRYPT('Sungil kim')
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:42:36 --> query :  '<pre>m.dilri.com/us/join_v_1_0_0/join_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(20) "dreamct925@gmail.com"
  ["member_pw"]=>
  string(10) "1q2w3e4r5t"
  ["member_name"]=>
  string(10) "Sungil kim"
  ["member_phone"]=>
  NULL
}

 <br> ^INSERT INTO
							tbl_member
							(
								member_id,
								member_pw,
								member_name,
								member_phone,
								del_yn,
								ins_date,
								upd_date
							) VALUES (
								FN_AES_ENCRYPT('dreamct925@gmail.com'),
								SHA2('1q2w3e4r5t', 512),
								FN_AES_ENCRYPT('Sungil kim'),
								FN_AES_ENCRYPT(NULL),
								'N',
                NOW(),
                NOW()
              )
    </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:42:36 --> query :  '<pre>m.dilri.com/us/join_v_1_0_0/join_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(7) {
  ["member_id"]=>
  string(20) "dreamct925@gmail.com"
  ["member_pw"]=>
  string(10) "1q2w3e4r5t"
  ["member_name"]=>
  string(10) "Sungil kim"
  ["member_phone"]=>
  NULL
  ["member_idx"]=>
  int(72)
  ["point"]=>
  int(2000)
  ["memo_type"]=>
  string(1) "1"
}

 <br> ^SELECT
							sum(a.point) as total_point
						FROM
							tbl_member_point a
						WHERE
							a.del_yn = 'N'
							AND a.point_type = '0'
							and a.member_idx='72'
							AND DATE_FORMAT(a.ins_date, '%Y-%m-%d')=DATE_FORMAT(NOW(), '%Y-%m-%d')
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:42:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?,
								?,
								?,
								'0',
								?,
								'N',
								NOW(' at line 16 - Invalid query: INSERT INTO
								tbl_member_point
							(
								member_idx,
								memo,
								memo_kr,
								memo_us,
								memo_bd,
								type,
								point_type,
								point,
								del_yn,
								ins_date,
								upd_date
							) VALUES (
								?,
								?,
								?,
								'0',
								?,
								'N',
								NOW(),
								NOW()
							)
							
ERROR - 2022-10-16 14:42:36 --> query :  '<pre>m.dilri.com/us/join_v_1_0_0/join_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(7) {
  ["member_id"]=>
  string(20) "dreamct925@gmail.com"
  ["member_pw"]=>
  string(10) "1q2w3e4r5t"
  ["member_name"]=>
  string(10) "Sungil kim"
  ["member_phone"]=>
  NULL
  ["member_idx"]=>
  int(72)
  ["point"]=>
  int(2000)
  ["memo_type"]=>
  string(1) "1"
}

 <br> ^INSERT INTO
								tbl_member_point
							(
								member_idx,
								memo,
								memo_kr,
								memo_us,
								memo_bd,
								type,
								point_type,
								point,
								del_yn,
								ins_date,
								upd_date
							) VALUES (
								?,
								?,
								?,
								'0',
								?,
								'N',
								NOW(),
								NOW()
							)
							</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:42:36 --> query :  '<pre>m.dilri.com/us/join_v_1_0_0/join_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(7) {
  ["member_id"]=>
  string(20) "dreamct925@gmail.com"
  ["member_pw"]=>
  string(10) "1q2w3e4r5t"
  ["member_name"]=>
  string(10) "Sungil kim"
  ["member_phone"]=>
  NULL
  ["member_idx"]=>
  int(72)
  ["point"]=>
  int(2000)
  ["memo_type"]=>
  string(1) "1"
}

 <br> ^UPDATE
								 tbl_member
							 SET
								 member_point = (select sum(point) from tbl_member_point where member_idx = '72' AND del_yn = 'N'),
								 upd_date = NOW()
							 WHERE
								 member_idx = 72
						 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:42:36 --> query :  '<pre>m.dilri.com/us/join_v_1_0_0/join_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							0 as corp_idx,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							a.all_alarm_yn as alarm_yn,
							a.current_lang,
							a.device_os,
							a.gcm_key
						from tbl_member as a
						where
							a.del_yn='N'
							and member_idx = '72'
			</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:42:36 --> Severity: Notice --> Undefined property: stdClass::$current_nation /home/sususoftuser/html/CI/m/application/modules/common/models/Model_common.php 237
ERROR - 2022-10-16 14:42:36 --> Severity: Notice --> Undefined property: stdClass::$current_nation /home/sususoftuser/html/CI/m/application/modules/common/models/Model_common.php 239
ERROR - 2022-10-16 14:42:36 --> query :  '<pre>m.dilri.com/us/join_v_1_0_0/join_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^INSERT INTO
							tbl_alarm
						(
							member_idx,
							`data`,
							title,
							msg,
							`index`,
							device_os,
							gcm_key,
							alarm_yn,
							send_yn,
							read_yn,
							del_yn,
							ins_date,
							upd_date
						)VALUES (
							'72',
							'{\"member_id\":\"dreamct925@gmail.com\",\"member_pw\":\"1q2w3e4r5t\",\"member_name\":\"Sungil kim\",\"member_phone\":null,\"member_idx\":\"72\",\"point\":2000,\"memo_type\":\"1\",\"gcm_key\":null,\"device_os\":null,\"title\":\"\",\"msg\":\"You have earned Point.\",\"index\":\"111\",\"alarm_yn\":\"Y\"}',
							'',
							'You have earned Point.',
							'111',
							NULL,
							NULL,
							'Y',
							'N',
							'N',
							'N',
							NOW(),
							NOW()
						)
			</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:42:38 --> query :  '<pre>m.dilri.com/us/join_v_1_0_0/join_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(20) "dreamct925@gmail.com"
  ["member_pw"]=>
  string(10) "1q2w3e4r5t"
  ["member_name"]=>
  string(10) "Sungil kim"
  ["member_phone"]=>
  NULL
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('dreamct925@gmail.com')
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:42:43 --> query :  '<pre>m.dilri.com/us/join_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:42:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:42:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:42:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:42:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 17:42:45 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:42:45 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:42:45 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:42:45 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:42:45 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:42:46 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:42:46 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:42:46 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:42:55 --> query :  '<pre>m.dilri.com/us/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							del_yn
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('dreamct925@gmail.com')
							AND member_pw = SHA2('76027150',512)
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:43:02 --> query :  '<pre>m.dilri.com/us/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							del_yn
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('dreamct925@gmail.com')
							AND member_pw = SHA2('Smh2436c1',512)
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:43:06 --> query :  '<pre>m.dilri.com/us/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							del_yn
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('dreamct925@gmail.com')
							AND member_pw = SHA2('Smh2436c1!',512)
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:43:13 --> query :  '<pre>m.dilri.com/us/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							del_yn
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('dreamct925@gmail.com')
							AND member_pw = SHA2('Smh2436c',512)
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:43:24 --> query :  '<pre>m.dilri.com/us/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							del_yn
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('dreamct925@gmail.com')
							AND member_pw = SHA2('Smh2436c1!',512)
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:43:30 --> query :  '<pre>m.dilri.com/us/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							del_yn
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('dreamct925@gmail.com')
							AND member_pw = SHA2('76027150',512)
		</pre> 
 <br /> ' 
ERROR - 2022-10-16 14:43:52 --> query :  '<pre>m.dilri.com/us/find_pw_v_1_0_0/find_pw_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(3) {
  ["member_phone"]=>
  string(11) "01323934221"
  ["member_id"]=>
  string(20) "dreamct925@gmail.com"
  ["member_name"]=>
  string(10) "Sungil kim"
}

 <br> ^SELECT
							member_idx,
              FN_AES_DECRYPT(member_id) as member_id,
              FN_AES_DECRYPT(member_name) as member_name
						FROM
							tbl_member
						WHERE
              member_phone = FN_AES_ENCRYPT('01323934221')
							AND member_id = FN_AES_ENCRYPT('dreamct925@gmail.com')
							AND member_name = FN_AES_ENCRYPT('Sungil kim')
		 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:43:53 --> query :  '<pre>m.dilri.com/us/find_pw_v_1_0_0/find_pw_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
array(3) {
  ["member_phone"]=>
  string(11) "01323934221"
  ["member_id"]=>
  string(20) "dreamct925@gmail.com"
  ["member_name"]=>
  string(10) "Sungil kim"
}

 <br> ^SELECT
							member_idx,
              FN_AES_DECRYPT(member_id) as member_id,
              FN_AES_DECRYPT(member_name) as member_name
						FROM
							tbl_member
						WHERE
              member_phone = FN_AES_ENCRYPT('01323934221')
							AND member_id = FN_AES_ENCRYPT('dreamct925@gmail.com')
							AND member_name = FN_AES_ENCRYPT('Sungil kim')
		 </pre> 
 <br /> ' 
ERROR - 2022-10-16 14:43:57 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:43:57 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:43:57 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:43:57 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 17:43:57 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:43:57 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:43:57 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:43:57 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:43:57 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:43:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:43:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:43:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:44:01 --> query :  '<pre>m.dilri.com/us/join_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:44:44 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:44:44 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:44:44 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:44:44 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 17:44:44 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:44:44 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:44:44 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:44:44 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:44:44 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 17:44:44 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36
ERROR - 2022-10-16 14:44:46 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:44:46 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
ERROR - 2022-10-16 14:44:46 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36^ 
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
