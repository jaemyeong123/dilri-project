<html>

ERROR - 2022-09-14 12:26:01 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:01 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:01 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:01 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:02 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:02 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:02 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:07 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:07 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:07 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:07 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:08 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:08 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:08 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:40 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=07065852-0032-457d-9d83-193c93146985&user_idx=59 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 12:26:40 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=07065852-0032-457d-9d83-193c93146985&user_idx=59 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "59"
  ["uuid"]=>
  string(36) "07065852-0032-457d-9d83-193c93146985"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = '07065852-0032-457d-9d83-193c93146985',
						upd_date = NOW()
					WHERE
						member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:26:40 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=07065852-0032-457d-9d83-193c93146985&user_idx=59 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:40 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 12:26:40 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:40 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:40 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:40 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:40 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:42 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 12:26:42 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(3) "1,3"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,3',
							upd_date = NOW()
						WHERE
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:26:42 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(3) "1,3"
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
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:26:42 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:26:43 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 12:26:43 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:43 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 03:26:43 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 03:26:43 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 03:26:43 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/abfaa7068dd047b6b64a082bad13354a.jpg  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 12:26:43 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 12:26:43 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:43 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:43 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 12:26:43 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:43 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:43 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 12:26:43 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:43 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 12:26:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 12:26:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 12:26:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 12:26:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:45 --> query :  '<pre>m.dilri.com/kr/setting_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 12:26:45 --> query :  '<pre>m.dilri.com/kr/setting_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 03:26:45 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 03:26:45 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 03:26:45 --> 404 Page Not Found ...--> m.dilri.com/images/arrow_right.png  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 12:26:49 --> query :  '<pre>m.dilri.com/kr/logout_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:49 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:49 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:49 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:49 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:26:50 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "35.8721719"
  ["current_lng"]=>
  string(11) "128.6246117"
  ["category_management_idx"]=>
  string(3) "1,3"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,3',
							upd_date = NOW()
						WHERE
							member_idx = ''
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:26:50 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "35.8721719"
  ["current_lng"]=>
  string(11) "128.6246117"
  ["category_management_idx"]=>
  string(3) "1,3"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721719))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246117))+SIN(RADIANS(35.8721719))*SIN(RADIANS(a.product_lat)))), 1) as distance,
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
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(35.8721719))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246117))+SIN(RADIANS(35.8721719))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:26:50 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(35.8721719))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246117))+SIN(RADIANS(35.8721719))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:26:53 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:27:30 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(17) "Testrr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(8) "TESTUSER"
  ["member_phone"]=>
  NULL
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('Testrr@tester.com')
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:30 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(17) "Testrr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(8) "TESTUSER"
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
ERROR - 2022-09-14 12:27:30 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(17) "Testrr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(8) "TESTUSER"
  ["member_phone"]=>
  NULL
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_member
						WHERE
							member_name = FN_AES_ENCRYPT('TESTUSER')
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:30 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(17) "Testrr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(8) "TESTUSER"
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
								FN_AES_ENCRYPT('Testrr@tester.com'),
								SHA2('1q2w3e4r5t6y', 512),
								FN_AES_ENCRYPT('TESTUSER'),
								FN_AES_ENCRYPT(NULL),
								'N',
                NOW(),
                NOW()
              )
    </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:30 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(7) {
  ["member_id"]=>
  string(17) "Testrr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(8) "TESTUSER"
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
ERROR - 2022-09-14 12:27:30 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(7) {
  ["member_id"]=>
  string(17) "Testrr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(8) "TESTUSER"
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
								type,
								point_type,
								point,
								del_yn,
								ins_date,
								upd_date
							) VALUES (
								72,
								'회원 가입',
								'1',
								'0',
								2000,
								'N',
								NOW(),
								NOW()
							)
							</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:30 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(7) {
  ["member_id"]=>
  string(17) "Testrr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(8) "TESTUSER"
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
ERROR - 2022-09-14 12:27:30 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:27:30 --> Severity: Notice --> Undefined property: stdClass::$current_nation /home/sususoftuser/html/CI/m/application/modules/common/models/Model_common.php 219
ERROR - 2022-09-14 12:27:30 --> Severity: Notice --> Undefined property: stdClass::$current_nation /home/sususoftuser/html/CI/m/application/modules/common/models/Model_common.php 221
ERROR - 2022-09-14 12:27:30 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							'{\"member_id\":\"Testrr@tester.com\",\"member_pw\":\"1q2w3e4r5t6y\",\"member_name\":\"TESTUSER\",\"member_phone\":null,\"member_idx\":\"72\",\"point\":2000,\"memo_type\":\"1\",\"gcm_key\":null,\"device_os\":null,\"title\":\"\",\"msg\":\"You have earned Point.\",\"index\":\"111\",\"alarm_yn\":\"Y\"}',
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
ERROR - 2022-09-14 12:27:30 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:30 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(14) {
  ["member_id"]=>
  string(17) "Testrr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(8) "TESTUSER"
  ["member_phone"]=>
  NULL
  ["member_idx"]=>
  string(2) "72"
  ["point"]=>
  int(2000)
  ["memo_type"]=>
  string(1) "1"
  ["gcm_key"]=>
  NULL
  ["device_os"]=>
  NULL
  ["title"]=>
  string(0) ""
  ["msg"]=>
  string(22) "You have earned Point."
  ["index"]=>
  string(3) "111"
  ["alarm_yn"]=>
  string(1) "Y"
  ["badge_type"]=>
  string(1) "5"
}

 <br> ^SELECT
								sum(a.point) as total_point
							FROM
								tbl_member_point a
							WHERE
								a.del_yn = 'N'
								and a.member_idx='72'
			</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:30 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(14) {
  ["member_id"]=>
  string(17) "Testrr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(8) "TESTUSER"
  ["member_phone"]=>
  NULL
  ["member_idx"]=>
  string(2) "72"
  ["point"]=>
  int(2000)
  ["memo_type"]=>
  string(1) "1"
  ["gcm_key"]=>
  NULL
  ["device_os"]=>
  NULL
  ["title"]=>
  string(0) ""
  ["msg"]=>
  string(22) "You have earned Point."
  ["index"]=>
  string(3) "111"
  ["alarm_yn"]=>
  string(1) "Y"
  ["badge_type"]=>
  string(1) "5"
}

 <br> ^UPDATE
								tbl_member
							SET
								my_badge_types = IF(my_badge_types iS NULL,'5' ,concat(my_badge_types, ',', '5')),
								upd_date = NOW()
							WHERE
								member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:30 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:27:30 --> Severity: Notice --> Undefined property: stdClass::$current_nation /home/sususoftuser/html/CI/m/application/modules/common/models/Model_common.php 435
ERROR - 2022-09-14 12:27:30 --> Severity: Notice --> Undefined property: stdClass::$current_nation /home/sususoftuser/html/CI/m/application/modules/common/models/Model_common.php 437
ERROR - 2022-09-14 12:27:30 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							'{\"member_id\":\"Testrr@tester.com\",\"member_pw\":\"1q2w3e4r5t6y\",\"member_name\":\"TESTUSER\",\"member_phone\":null,\"member_idx\":\"72\",\"point\":2000,\"memo_type\":\"1\",\"gcm_key\":null,\"device_os\":null,\"title\":\"\",\"msg\":\"You have earned new badge.\",\"index\":\"110\",\"alarm_yn\":\"Y\",\"badge_type\":\"5\"}',
							'',
							'You have earned new badge.',
							'110',
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
ERROR - 2022-09-14 12:27:37 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(17) "Testrr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(8) "TESTUSER"
  ["member_phone"]=>
  NULL
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('Testrr@tester.com')
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:45 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(16) "Testr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(8) "TESTUSER"
  ["member_phone"]=>
  NULL
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('Testr@tester.com')
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:45 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(16) "Testr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(8) "TESTUSER"
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
ERROR - 2022-09-14 12:27:45 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(16) "Testr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(8) "TESTUSER"
  ["member_phone"]=>
  NULL
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_member
						WHERE
							member_name = FN_AES_ENCRYPT('TESTUSER')
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:49 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(16) "Testr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(7) "TESTUSE"
  ["member_phone"]=>
  NULL
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('Testr@tester.com')
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:49 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(16) "Testr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(7) "TESTUSE"
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
ERROR - 2022-09-14 12:27:49 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(16) "Testr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(7) "TESTUSE"
  ["member_phone"]=>
  NULL
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_member
						WHERE
							member_name = FN_AES_ENCRYPT('TESTUSE')
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:49 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(16) "Testr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(7) "TESTUSE"
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
								FN_AES_ENCRYPT('Testr@tester.com'),
								SHA2('1q2w3e4r5t6y', 512),
								FN_AES_ENCRYPT('TESTUSE'),
								FN_AES_ENCRYPT(NULL),
								'N',
                NOW(),
                NOW()
              )
    </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:49 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(7) {
  ["member_id"]=>
  string(16) "Testr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(7) "TESTUSE"
  ["member_phone"]=>
  NULL
  ["member_idx"]=>
  int(73)
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
							and a.member_idx='73'
							AND DATE_FORMAT(a.ins_date, '%Y-%m-%d')=DATE_FORMAT(NOW(), '%Y-%m-%d')
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:49 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(7) {
  ["member_id"]=>
  string(16) "Testr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(7) "TESTUSE"
  ["member_phone"]=>
  NULL
  ["member_idx"]=>
  int(73)
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
								type,
								point_type,
								point,
								del_yn,
								ins_date,
								upd_date
							) VALUES (
								73,
								'회원 가입',
								'1',
								'0',
								2000,
								'N',
								NOW(),
								NOW()
							)
							</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:49 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(7) {
  ["member_id"]=>
  string(16) "Testr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(7) "TESTUSE"
  ["member_phone"]=>
  NULL
  ["member_idx"]=>
  int(73)
  ["point"]=>
  int(2000)
  ["memo_type"]=>
  string(1) "1"
}

 <br> ^UPDATE
								 tbl_member
							 SET
								 member_point = (select sum(point) from tbl_member_point where member_idx = '73' AND del_yn = 'N'),
								 upd_date = NOW()
							 WHERE
								 member_idx = 73
						 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:49 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							and member_idx = '73'
			</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:49 --> Severity: Notice --> Undefined property: stdClass::$current_nation /home/sususoftuser/html/CI/m/application/modules/common/models/Model_common.php 219
ERROR - 2022-09-14 12:27:49 --> Severity: Notice --> Undefined property: stdClass::$current_nation /home/sususoftuser/html/CI/m/application/modules/common/models/Model_common.php 221
ERROR - 2022-09-14 12:27:49 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							'73',
							'{\"member_id\":\"Testr@tester.com\",\"member_pw\":\"1q2w3e4r5t6y\",\"member_name\":\"TESTUSE\",\"member_phone\":null,\"member_idx\":\"73\",\"point\":2000,\"memo_type\":\"1\",\"gcm_key\":null,\"device_os\":null,\"title\":\"\",\"msg\":\"You have earned Point.\",\"index\":\"111\",\"alarm_yn\":\"Y\"}',
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
ERROR - 2022-09-14 12:27:49 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '73'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:49 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(14) {
  ["member_id"]=>
  string(16) "Testr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(7) "TESTUSE"
  ["member_phone"]=>
  NULL
  ["member_idx"]=>
  string(2) "73"
  ["point"]=>
  int(2000)
  ["memo_type"]=>
  string(1) "1"
  ["gcm_key"]=>
  NULL
  ["device_os"]=>
  NULL
  ["title"]=>
  string(0) ""
  ["msg"]=>
  string(22) "You have earned Point."
  ["index"]=>
  string(3) "111"
  ["alarm_yn"]=>
  string(1) "Y"
  ["badge_type"]=>
  string(1) "5"
}

 <br> ^SELECT
								sum(a.point) as total_point
							FROM
								tbl_member_point a
							WHERE
								a.del_yn = 'N'
								and a.member_idx='73'
			</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:49 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(14) {
  ["member_id"]=>
  string(16) "Testr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(7) "TESTUSE"
  ["member_phone"]=>
  NULL
  ["member_idx"]=>
  string(2) "73"
  ["point"]=>
  int(2000)
  ["memo_type"]=>
  string(1) "1"
  ["gcm_key"]=>
  NULL
  ["device_os"]=>
  NULL
  ["title"]=>
  string(0) ""
  ["msg"]=>
  string(22) "You have earned Point."
  ["index"]=>
  string(3) "111"
  ["alarm_yn"]=>
  string(1) "Y"
  ["badge_type"]=>
  string(1) "5"
}

 <br> ^UPDATE
								tbl_member
							SET
								my_badge_types = IF(my_badge_types iS NULL,'5' ,concat(my_badge_types, ',', '5')),
								upd_date = NOW()
							WHERE
								member_idx = '73'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:49 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							and member_idx = '73'
			</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:49 --> Severity: Notice --> Undefined property: stdClass::$current_nation /home/sususoftuser/html/CI/m/application/modules/common/models/Model_common.php 435
ERROR - 2022-09-14 12:27:49 --> Severity: Notice --> Undefined property: stdClass::$current_nation /home/sususoftuser/html/CI/m/application/modules/common/models/Model_common.php 437
ERROR - 2022-09-14 12:27:49 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							'73',
							'{\"member_id\":\"Testr@tester.com\",\"member_pw\":\"1q2w3e4r5t6y\",\"member_name\":\"TESTUSE\",\"member_phone\":null,\"member_idx\":\"73\",\"point\":2000,\"memo_type\":\"1\",\"gcm_key\":null,\"device_os\":null,\"title\":\"\",\"msg\":\"You have earned new badge.\",\"index\":\"110\",\"alarm_yn\":\"Y\",\"badge_type\":\"5\"}',
							'',
							'You have earned new badge.',
							'110',
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
ERROR - 2022-09-14 12:27:51 --> query :  '<pre>m.dilri.com/kr/join_v_1_0_0/join_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(4) {
  ["member_id"]=>
  string(16) "Testr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_name"]=>
  string(7) "TESTUSE"
  ["member_phone"]=>
  NULL
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('Testr@tester.com')
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:53 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:27:53 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:27:53 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:27:53 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:27:54 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(3) "1,3"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,3',
							upd_date = NOW()
						WHERE
							member_idx = ''
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:54 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(3) "1,3"
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
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:27:54 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:03 --> query :  '<pre>m.dilri.com/kr/login_v_1_0_0/login_action_member 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							del_yn
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('Testrr@tester.com')
							AND member_pw = SHA2('1q2w3e4r5t6y',512)
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:03 --> query :  '<pre>m.dilri.com/kr/login_v_1_0_0/login_action_member 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["member_id"]=>
  string(17) "Testrr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_idx"]=>
  string(2) "72"
  ["gcm_key"]=>
  string(163) "euNDlblLQJOmtHOkZVEPrj:APA91bG4vtPwn--p0BeYnxN0XHjlJB9z6vvFowb0pSdzeNxEqY1UgKrt2FGUDb9Lnm8-MH7OmgMPZJ9qymP-XkbNG0AF0aexN7kWQ4nz3C0PNusC5-utJomaeynXRfAGjx7it3jEq0BC"
  ["device_os"]=>
  string(1) "A"
}

 <br> ^UPDATE
					 tbl_member
				 SET
				 	 uuid = '07065852-0032-457d-9d83-193c93146985',
					 gcm_key = 'euNDlblLQJOmtHOkZVEPrj:APA91bG4vtPwn--p0BeYnxN0XHjlJB9z6vvFowb0pSdzeNxEqY1UgKrt2FGUDb9Lnm8-MH7OmgMPZJ9qymP-XkbNG0AF0aexN7kWQ4nz3C0PNusC5-utJomaeynXRfAGjx7it3jEq0BC',
					 device_os = 'A',
					 upd_date = NOW()
				 WHERE
					 member_idx = '72'
	 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '72' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '72' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '72' AND a.product_state IN (2) 
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '72'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '72'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '72'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '72'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '72' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '72' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '72'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '72'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:05 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:06 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:06 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '72'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:06 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '72'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:06 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:06 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							z.member_idx = '72'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:06 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '72'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:06 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:06 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:06 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '72' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '72' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '72' AND a.product_state IN (2) 
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '72'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '72'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '72'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '72'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721719"
  ["current_lng"]=>
  string(11) "128.6246094"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721719))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246094))+SIN(RADIANS(35.8721719))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721719"
  ["current_lng"]=>
  string(11) "128.6246094"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721719))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246094))+SIN(RADIANS(35.8721719))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721719"
  ["current_lng"]=>
  string(11) "128.6246094"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721719))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246094))+SIN(RADIANS(35.8721719))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '72' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '72' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721719"
  ["current_lng"]=>
  string(11) "128.6246094"
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '72'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721719"
  ["current_lng"]=>
  string(11) "128.6246094"
  ["tab_type"]=>
  string(1) "3"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721719"
  ["current_lng"]=>
  string(11) "128.6246094"
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '72'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721719"
  ["current_lng"]=>
  string(11) "128.6246094"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
             	COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721719"
  ["current_lng"]=>
  string(11) "128.6246094"
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '72'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721719"
  ["current_lng"]=>
  string(11) "128.6246094"
  ["tab_type"]=>
  string(1) "5"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '72'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721719"
  ["current_lng"]=>
  string(11) "128.6246094"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721719))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246094))+SIN(RADIANS(35.8721719))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '72'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:28:07 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '72'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:42 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=07065852-0032-457d-9d83-193c93146985&user_idx=72 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:42 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=07065852-0032-457d-9d83-193c93146985&user_idx=72 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "72"
  ["uuid"]=>
  string(36) "07065852-0032-457d-9d83-193c93146985"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = '07065852-0032-457d-9d83-193c93146985',
						upd_date = NOW()
					WHERE
						member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:42 --> query :  '<pre>m.dilri.com/bd?app_yn=Y&uuid=07065852-0032-457d-9d83-193c93146985&user_idx=72 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:29:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:29:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:29:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:44 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:44 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:44 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:44 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '72' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '72' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '72' AND a.product_state IN (2) 
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '72'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '72'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '72'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '72'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(10) "128.624601"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721772))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.624601))+SIN(RADIANS(35.8721772))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(10) "128.624601"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721772))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.624601))+SIN(RADIANS(35.8721772))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(10) "128.624601"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721772))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.624601))+SIN(RADIANS(35.8721772))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '72' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '72' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(10) "128.624601"
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '72'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(10) "128.624601"
  ["tab_type"]=>
  string(1) "3"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(10) "128.624601"
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '72'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(10) "128.624601"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
             	COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(10) "128.624601"
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '72'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:45 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(10) "128.624601"
  ["tab_type"]=>
  string(1) "5"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '72'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 03:29:45 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 03:29:45 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 03:29:45 --> 404 Page Not Found ...--> m.dilri.com/images/arrow_right.png  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 12:29:47 --> query :  '<pre>m.dilri.com/bd/language/nation_change 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:47 --> query :  '<pre>m.dilri.com/bd/language/nation_change 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(1) {
  ["current_lang"]=>
  string(2) "kr"
}

 <br> ^UPDATE
							tbl_member
						SET
							current_lang = 'kr',
							upd_date = NOW()
						WHERE
							member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:48 --> query :  '<pre>m.dilri.com/kr/setting_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:48 --> query :  '<pre>m.dilri.com/kr/setting_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:49 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:49 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:49 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '72' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '72' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '72' AND a.product_state IN (2) 
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '72'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '72'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '72'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '72'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:49 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:49 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:49 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(11) "128.6246151"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721772))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246151))+SIN(RADIANS(35.8721772))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '72' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '72' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(11) "128.6246151"
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '72'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(11) "128.6246151"
  ["tab_type"]=>
  string(1) "3"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(11) "128.6246151"
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '72'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(11) "128.6246151"
  ["tab_type"]=>
  string(1) "4"
}

 <br> ^SELECT
             	COUNT(*) AS cnt
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(11) "128.6246151"
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '72'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(11) "128.6246151"
  ["tab_type"]=>
  string(1) "5"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '72'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(0)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(11) "128.6246151"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721772))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246151))+SIN(RADIANS(35.8721772))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '72'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:50 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '72'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:51 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:51 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(11) "128.6246151"
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
							member_idx = '72'
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:51 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "35.8721772"
  ["current_lng"]=>
  string(11) "128.6246151"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721772))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246151))+SIN(RADIANS(35.8721772))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(35.8721772))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246151))+SIN(RADIANS(35.8721772))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:51 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(35.8721772))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246151))+SIN(RADIANS(35.8721772))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:51 --> query :  '<pre>m.dilri.com/kr/common/COM_profile_check 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:29:51 --> query :  '<pre>m.dilri.com/kr/common/COM_profile_check 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:06 --> query :  '<pre>m.dilri.com/kr/login_v_1_0_0/member_info_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(3) {
  ["member_name"]=>
  string(6) "Tester"
  ["member_phone"]=>
  string(10) "1234567890"
  ["member_gender"]=>
  string(1) "0"
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_member
						WHERE
							member_name = FN_AES_ENCRYPT('Tester')
							AND member_phone = FN_AES_ENCRYPT('1234567890')
							AND member_idx != '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:06 --> query :  '<pre>m.dilri.com/kr/login_v_1_0_0/member_info_mod_up 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(3) {
  ["member_name"]=>
  string(6) "Tester"
  ["member_phone"]=>
  string(10) "1234567890"
  ["member_gender"]=>
  string(1) "0"
}

 <br> ^UPDATE
							tbl_member
						SET
							member_name = FN_AES_ENCRYPT('Tester'),
							member_phone = FN_AES_ENCRYPT('1234567890'),
							member_gender = '0',
							upd_date = NOW()
						WHERE
							member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:07 --> query :  '<pre>m.dilri.com/kr/product_v_1_0_0/product_reg?member_idx=72 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:07 --> query :  '<pre>m.dilri.com/kr/product_v_1_0_0/product_reg?member_idx=72 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:30:07 --> query :  '<pre>m.dilri.com/kr/product_v_1_0_0/product_reg?member_idx=72 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:07 --> query :  '<pre>m.dilri.com/kr/product_v_1_0_0/product_reg?member_idx=72 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:10 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:10 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:30:10 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:30:10 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:10 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:30:10 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:10 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:10 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "35.8721612"
  ["current_lng"]=>
  string(11) "128.6245919"
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
							member_idx = '72'
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:10 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "35.8721612"
  ["current_lng"]=>
  string(11) "128.6245919"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721612))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6245919))+SIN(RADIANS(35.8721612))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(35.8721612))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6245919))+SIN(RADIANS(35.8721612))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:10 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(35.8721612))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6245919))+SIN(RADIANS(35.8721612))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:11 --> query :  '<pre>m.dilri.com/kr/common/COM_profile_check 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:11 --> query :  '<pre>m.dilri.com/kr/common/COM_profile_check 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:11 --> query :  '<pre>m.dilri.com/kr/product_v_1_0_0/product_reg 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:11 --> query :  '<pre>m.dilri.com/kr/product_v_1_0_0/product_reg 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:30:11 --> query :  '<pre>m.dilri.com/kr/product_v_1_0_0/product_reg 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:11 --> query :  '<pre>m.dilri.com/kr/product_v_1_0_0/product_reg 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:12 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:12 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:30:12 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:30:12 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:12 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:30:12 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:13 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:13 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "35.8721664"
  ["current_lng"]=>
  string(11) "128.6245948"
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
							member_idx = '72'
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:13 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "35.8721664"
  ["current_lng"]=>
  string(11) "128.6245948"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721664))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6245948))+SIN(RADIANS(35.8721664))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(35.8721664))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6245948))+SIN(RADIANS(35.8721664))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:13 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(35.8721664))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6245948))+SIN(RADIANS(35.8721664))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:26 --> query :  '<pre>m.dilri.com/kr/common/COM_profile_check 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:26 --> query :  '<pre>m.dilri.com/kr/common/COM_profile_check 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:27 --> query :  '<pre>m.dilri.com/kr/product_v_1_0_0/product_reg 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:27 --> query :  '<pre>m.dilri.com/kr/product_v_1_0_0/product_reg 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 12:30:27 --> query :  '<pre>m.dilri.com/kr/product_v_1_0_0/product_reg 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:30:27 --> query :  '<pre>m.dilri.com/kr/product_v_1_0_0/product_reg 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 12:31:41 --> query :  '<pre>m.dilri.com/kr/product_v_1_0_0/member_location_reg_in 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-G991N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:06:17 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:06:17 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:06:17 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:06:17 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:06:24 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:06:24 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:06:24 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:06:24 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:06:25 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8155006"
  ["current_lng"]=>
  string(10) "90.4116239"
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
ERROR - 2022-09-14 15:06:25 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8155006"
  ["current_lng"]=>
  string(10) "90.4116239"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8155006))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116239))+SIN(RADIANS(23.8155006))*SIN(RADIANS(a.product_lat)))), 1) as distance,
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
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8155006))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116239))+SIN(RADIANS(23.8155006))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:06:25 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8155006))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116239))+SIN(RADIANS(23.8155006))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:23 --> query :  '<pre>m.dilri.com/bd/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							member_idx,
							FN_AES_DECRYPT(member_id) AS member_id,
							del_yn
						FROM
							tbl_member
						WHERE
							member_id = FN_AES_ENCRYPT('Testrr@tester.com')
							AND member_pw = SHA2('1q2w3e4r5t6y',512)
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:23 --> query :  '<pre>m.dilri.com/bd/login_v_1_0_0/login_action_member 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["member_id"]=>
  string(17) "Testrr@tester.com"
  ["member_pw"]=>
  string(12) "1q2w3e4r5t6y"
  ["member_idx"]=>
  string(2) "72"
  ["gcm_key"]=>
  string(163) "d2XHt40rR22rBQtVNC1Ykk:APA91bFPFAo0oSKFyboBTKJc1T0AeYwLKsVifqme73W5bFGLUU0R2Lwyo4_tj4T6fj3dxq8Bd4n-f3pU8xZbtW4TQh0_JZ0rvuhgqxMDcBhYI9H7J_NrAzIe7u6Dtj7Eek9gjNjITm-m"
  ["device_os"]=>
  string(1) "A"
}

 <br> ^UPDATE
					 tbl_member
				 SET
				 	 uuid = NULL,
					 gcm_key = 'd2XHt40rR22rBQtVNC1Ykk:APA91bFPFAo0oSKFyboBTKJc1T0AeYwLKsVifqme73W5bFGLUU0R2Lwyo4_tj4T6fj3dxq8Bd4n-f3pU8xZbtW4TQh0_JZ0rvuhgqxMDcBhYI9H7J_NrAzIe7u6Dtj7Eek9gjNjITm-m',
					 device_os = 'A',
					 upd_date = NOW()
				 WHERE
					 member_idx = '72'
	 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:25 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:25 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:25 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '72' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '72' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '72' AND a.product_state IN (2) 
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '72'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '72'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '72'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '72'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '72' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '72' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '72'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '72'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							z.member_idx = '72'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '72'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '72'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:26 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '72'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:33 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:33 --> query :  '<pre>m.dilri.com/bd/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 06:07:33 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 06:07:33 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 06:07:33 --> 404 Page Not Found ...--> m.dilri.com/images/arrow_right.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 15:07:36 --> query :  '<pre>m.dilri.com/kr/language/nation_change 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:36 --> query :  '<pre>m.dilri.com/kr/language/nation_change 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:37 --> query :  '<pre>m.dilri.com/us/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:37 --> query :  '<pre>m.dilri.com/us/setting_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							all_alarm_yn
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:43 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:43 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:43 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '72' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '72' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '72' AND a.product_state IN (2) 
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '72'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '72'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '72'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '72'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '72' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '72'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '72' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '72' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '72'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '72' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '72'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '72'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							z.member_idx = '72'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product_like z
							JOIN tbl_product AS a ON a.product_idx = z.product_idx
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							z.member_idx = '72'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:07:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:07:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:07:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:46 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:46 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8154267"
  ["current_lng"]=>
  string(10) "90.4115722"
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
							member_idx = '72'
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:46 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8154267"
  ["current_lng"]=>
  string(10) "90.4115722"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8154267))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115722))+SIN(RADIANS(23.8154267))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8154267))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115722))+SIN(RADIANS(23.8154267))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:46 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(23.8154267))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4115722))+SIN(RADIANS(23.8154267))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:47 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:47 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:07:47 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:07:47 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:47 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '72' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:47 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '72' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:48 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:48 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:07:48 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/community_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 06:08:57 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 06:08:57 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 06:08:57 --> 404 Page Not Found ...--> m.dilri.com/common/fileUpload_action  ^ address=>203.76.98.146 ^ agent=>okhttp/4.2.2
ERROR - 2022-09-14 06:08:58 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 06:08:58 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 06:08:58 --> 404 Page Not Found ...--> m.dilri.com/common/fileUpload_action  ^ address=>203.76.98.146 ^ agent=>okhttp/4.2.2
ERROR - 2022-09-14 06:09:08 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 06:09:08 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 06:09:08 --> 404 Page Not Found ...--> m.dilri.com/common/fileUpload_action  ^ address=>203.76.98.146 ^ agent=>okhttp/4.2.2
ERROR - 2022-09-14 15:09:57 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:09:57 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:09:57 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:09:58 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:09:58 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '72' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:09:58 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '72' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:07 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:07 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:07 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/community_reg 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 06:10:12 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 06:10:12 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 06:10:12 --> 404 Page Not Found ...--> m.dilri.com/images/i_alarm_delete.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 15:10:13 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:13 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(3) {
  ["img_path"]=>
  string(0) ""
  ["tags"]=>
  string(2) "hi"
  ["contents"]=>
  string(2) "Hi"
}

 <br> ^INSERT INTO
							tbl_board
							(
								member_idx,
								img_path,
								tags,
								contents,
								del_yn,
								ins_date,
								upd_date
							) values (
								 '72',
								 '',
								 'hi',
								 'Hi',
								'N',
								NOW(),
								NOW()
							)
							</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:13 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:13 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["img_path"]=>
  string(0) ""
  ["tags"]=>
  string(2) "hi"
  ["contents"]=>
  string(2) "Hi"
  ["badge_type"]=>
  string(1) "3"
  ["member_idx"]=>
  string(2) "72"
}

 <br> ^UPDATE
								tbl_member
							SET
								my_badge_types = IF(my_badge_types iS NULL,'3' ,concat(my_badge_types, ',', '3')),
								upd_date = NOW()
							WHERE
								member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:13 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:10:13 --> Severity: Notice --> Undefined property: stdClass::$current_nation /home/sususoftuser/html/CI/m/application/modules/common/models/Model_common.php 435
ERROR - 2022-09-14 15:10:13 --> Severity: Notice --> Undefined property: stdClass::$current_nation /home/sususoftuser/html/CI/m/application/modules/common/models/Model_common.php 437
ERROR - 2022-09-14 15:10:13 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							'{\"img_path\":\"\",\"tags\":\"hi\",\"contents\":\"Hi\",\"badge_type\":\"3\",\"member_idx\":\"72\",\"gcm_key\":\"d2XHt40rR22rBQtVNC1Ykk:APA91bFPFAo0oSKFyboBTKJc1T0AeYwLKsVifqme73W5bFGLUU0R2Lwyo4_tj4T6fj3dxq8Bd4n-f3pU8xZbtW4TQh0_JZ0rvuhgqxMDcBhYI9H7J_NrAzIe7u6Dtj7Eek9gjNjITm-m\",\"device_os\":\"A\",\"title\":\"\",\"msg\":\"You have earned new badge.\",\"index\":\"110\",\"alarm_yn\":\"Y\"}',
							'',
							'You have earned new badge.',
							'110',
							'A',
							'd2XHt40rR22rBQtVNC1Ykk:APA91bFPFAo0oSKFyboBTKJc1T0AeYwLKsVifqme73W5bFGLUU0R2Lwyo4_tj4T6fj3dxq8Bd4n-f3pU8xZbtW4TQh0_JZ0rvuhgqxMDcBhYI9H7J_NrAzIe7u6Dtj7Eek9gjNjITm-m',
							'Y',
							'N',
							'N',
							'N',
							NOW(),
							NOW()
						)
			</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:13 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(7) {
  ["img_path"]=>
  string(0) ""
  ["tags"]=>
  string(2) "hi"
  ["contents"]=>
  string(2) "Hi"
  ["badge_type"]=>
  string(1) "3"
  ["member_idx"]=>
  string(2) "72"
  ["point"]=>
  int(60)
  ["memo_type"]=>
  string(1) "3"
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
ERROR - 2022-09-14 15:10:15 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:15 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(3) {
  ["img_path"]=>
  string(0) ""
  ["tags"]=>
  string(2) "hi"
  ["contents"]=>
  string(2) "Hi"
}

 <br> ^INSERT INTO
							tbl_board
							(
								member_idx,
								img_path,
								tags,
								contents,
								del_yn,
								ins_date,
								upd_date
							) values (
								 '72',
								 '',
								 'hi',
								 'Hi',
								'N',
								NOW(),
								NOW()
							)
							</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:15 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:15 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_reg_in 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(7) {
  ["img_path"]=>
  string(0) ""
  ["tags"]=>
  string(2) "hi"
  ["contents"]=>
  string(2) "Hi"
  ["badge_type"]=>
  string(1) "3"
  ["member_idx"]=>
  string(2) "72"
  ["point"]=>
  int(60)
  ["memo_type"]=>
  string(1) "3"
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
ERROR - 2022-09-14 15:10:16 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:16 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:10:16 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:10:17 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:17 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '72' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:17 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '72' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:19 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:19 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:10:19 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:10:19 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:19 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							if(a.member_idx='72', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '72' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:19 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '72' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '72' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '72' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:20 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:20 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_del_check 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 15:10:22 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_del 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 15:10:22 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_del 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:04 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:04 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:04 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:04 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:06 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:06 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:06 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:08 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:08 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:08 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:08 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:09 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:09 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:09 --> Severity: Notice --> Undefined property: Community_v_1_0_0::$member_del_yn /home/sususoftuser/html/CI/m/application/third_party/MX/Loader.php 304
ERROR - 2022-09-14 16:37:09 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:09 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:09 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:09 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:09 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:09 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:09 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:09 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:09 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:10 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:11 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:11 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:11 --> Severity: Notice --> Undefined property: Community_v_1_0_0::$member_del_yn /home/sususoftuser/html/CI/m/application/third_party/MX/Loader.php 304
ERROR - 2022-09-14 16:37:11 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:11 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:13 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = ''
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:37:13 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:13 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:13 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:37:13 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							search_idx,
							title
						FROM
							tbl_search
						WHERE
							del_yn ='N'
							AND member_idx = ''
							AND search_type = '0'
						 ORDER BY upd_date DESC LIMIT 5 </pre> 
 <br /> ' 
ERROR - 2022-09-14 16:37:13 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:37:14 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0/famous_product_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:08 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=aeb90a08-5a3a-43b3-b5b1-6e9b2e217f77&user_idx=72 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:08 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=aeb90a08-5a3a-43b3-b5b1-6e9b2e217f77&user_idx=72 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "72"
  ["uuid"]=>
  string(36) "aeb90a08-5a3a-43b3-b5b1-6e9b2e217f77"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = 'aeb90a08-5a3a-43b3-b5b1-6e9b2e217f77',
						upd_date = NOW()
					WHERE
						member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:08 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=aeb90a08-5a3a-43b3-b5b1-6e9b2e217f77&user_idx=72 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:40:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:40:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:40:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:40:42 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:42 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:40:42 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:40:42 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:42 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:40:42 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:44 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:44 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:44 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '72' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:44 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:40:44 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:44 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:44 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:44 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:40:44 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							member_idx = '72'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:40:44 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:41:19 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							a.member_idx = ''
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:41:19 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:19 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:19 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:41:19 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							search_idx,
							title
						FROM
							tbl_search
						WHERE
							del_yn ='N'
							AND member_idx = ''
							AND search_type = '0'
						 ORDER BY upd_date DESC LIMIT 5 </pre> 
 <br /> ' 
ERROR - 2022-09-14 16:41:19 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:19 --> query :  '<pre>m.dilri.com/bd/search_v_1_0_0/famous_product_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:41:41 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:41 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:41 --> Severity: Notice --> Undefined property: Community_v_1_0_0::$member_del_yn /home/sususoftuser/html/CI/m/application/third_party/MX/Loader.php 304
ERROR - 2022-09-14 16:41:41 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:41 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:41 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:41 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:42 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:42 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:42 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:43 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:43 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:43 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:43 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:41:44 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "35.8721495"
  ["current_lng"]=>
  string(11) "128.6246118"
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
ERROR - 2022-09-14 16:41:44 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "35.8721495"
  ["current_lng"]=>
  string(11) "128.6246118"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721495))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246118))+SIN(RADIANS(35.8721495))*SIN(RADIANS(a.product_lat)))), 1) as distance,
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
		 AND ROUND((6371*ACOS(COS(RADIANS(35.8721495))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246118))+SIN(RADIANS(35.8721495))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 16:41:44 --> query :  '<pre>m.dilri.com/bd/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND ROUND((6371*ACOS(COS(RADIANS(35.8721495))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246118))+SIN(RADIANS(35.8721495))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 07:42:03 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 07:42:03 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 07:42:03 --> 404 Page Not Found ...--> m.dilri.com/common/fileUpload_action  ^ address=>37.111.212.51 ^ agent=>okhttp/4.2.2
ERROR - 2022-09-14 16:42:05 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 07:42:08 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 07:42:08 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 07:42:08 --> 404 Page Not Found ...--> m.dilri.com/images/i_alarm_delete.png  ^ address=>37.111.212.51 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 16:42:12 --> query :  '<pre>m.dilri.com/bd/login_v_1_0_0/login_action_member 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:12 --> query :  '<pre>m.dilri.com/bd/login_v_1_0_0/login_action_member 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(5) {
  ["member_id"]=>
  string(12) "Qaz1@qaz.com"
  ["member_pw"]=>
  string(10) "1q2w3e4r5t"
  ["member_idx"]=>
  string(2) "59"
  ["gcm_key"]=>
  string(163) "eDch4dDWTuiCkJKxc_4QWm:APA91bFxzKRZA55Wh3_a70_U4kOjvqczyj0BBpb05Hv8wxsO4afFrLJTLNT9aIy6U0jNspzvQv3fYWABz35xfYnN-ewY8pmYrElF6m6CNzztC7VnldMsck-Z15XLm6N0rbZuPb71u9L9"
  ["device_os"]=>
  string(1) "A"
}

 <br> ^UPDATE
					 tbl_member
				 SET
				 	 uuid = NULL,
					 gcm_key = 'eDch4dDWTuiCkJKxc_4QWm:APA91bFxzKRZA55Wh3_a70_U4kOjvqczyj0BBpb05Hv8wxsO4afFrLJTLNT9aIy6U0jNspzvQv3fYWABz35xfYnN-ewY8pmYrElF6m6CNzztC7VnldMsck-Z15XLm6N0rbZuPb71u9L9',
					 device_os = 'A',
					 upd_date = NOW()
				 WHERE
					 member_idx = '59'
	 </pre> 
 <br /> ' 
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 07:42:15 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 07:42:15 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 07:42:15 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/abfaa7068dd047b6b64a082bad13354a.jpg  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:15 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:16 --> query :  '<pre>m.dilri.com/bd/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:19 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:19 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:19 --> query :  '<pre>m.dilri.com/bd/community_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:19 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:19 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:19 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:20 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:20 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:20 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:20 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:20 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:20 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:21 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:21 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(3) "1,3"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,3',
							upd_date = NOW()
						WHERE
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:42:21 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(3) "1,3"
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
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 16:42:21 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 07:42:23 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 07:42:23 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 07:42:23 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/abfaa7068dd047b6b64a082bad13354a.jpg  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:23 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:24 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:24 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:24 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:24 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:24 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:24 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:25 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:42:25 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product AS a
						WHERE
							a.del_yn = 'N'
							AND a.member_idx = '72'
							AND DATE_FORMAT(a.ins_date, '%Y-%m-%d') = DATE_FORMAT(NOW(), '%Y-%m-%d')
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:42:25 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product AS a
						WHERE
							a.del_yn = 'N'
							AND a.member_idx = '72'
							AND a.product_state IN (0,1)
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:42:25 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:25 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(8) {
  ["category_management_idx"]=>
  string(1) "1"
  ["title"]=>
  string(9) "Hairtoner"
  ["free_product_yn"]=>
  string(1) "N"
  ["product_price"]=>
  string(4) "1000"
  ["img_path"]=>
  string(0) ""
  ["contents"]=>
  string(48) "Hair toner 
Good for hair loose 
Maid in korea"
  ["tags"]=>
  string(19) "Hairloose,Men,Toner"
  ["member_location_idx"]=>
  string(1) "0"
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
		          '72',
		          '1',
		          'Hairtoner',
		          'N',
		          '1000',
		          '',
		          'Hair toner \r\nGood for hair loose \r\nMaid in korea',
		          'Hairloose,Men,Toner',
		          '0',
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
							b.member_location_idx='0'
	  </pre> 
 <br /> ' 
ERROR - 2022-09-14 16:42:25 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(8) {
  ["category_management_idx"]=>
  string(1) "1"
  ["title"]=>
  string(9) "Hairtoner"
  ["free_product_yn"]=>
  string(1) "N"
  ["product_price"]=>
  string(4) "1000"
  ["img_path"]=>
  string(0) ""
  ["contents"]=>
  string(48) "Hair toner 
Good for hair loose 
Maid in korea"
  ["tags"]=>
  string(19) "Hairloose,Men,Toner"
  ["member_location_idx"]=>
  string(1) "0"
}

 <br> ^UPDATE
							 tbl_member
						 SET
						 	product_cnt = product_cnt+1
						 WHERE
							 member_idx = '72'
		 </pre> 
 <br /> ' 
ERROR - 2022-09-14 16:42:28 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:28 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:28 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:28 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:28 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:28 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0/board_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:28 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = '72'
						</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:42:28 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product AS a
						WHERE
							a.del_yn = 'N'
							AND a.member_idx = '72'
							AND DATE_FORMAT(a.ins_date, '%Y-%m-%d') = DATE_FORMAT(NOW(), '%Y-%m-%d')
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:42:28 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product AS a
						WHERE
							a.del_yn = 'N'
							AND a.member_idx = '72'
							AND a.product_state IN (0,1)
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 16:42:28 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:28 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(8) {
  ["category_management_idx"]=>
  string(1) "1"
  ["title"]=>
  string(9) "Hairtoner"
  ["free_product_yn"]=>
  string(1) "N"
  ["product_price"]=>
  string(4) "1000"
  ["img_path"]=>
  string(0) ""
  ["contents"]=>
  string(48) "Hair toner 
Good for hair loose 
Maid in korea"
  ["tags"]=>
  string(19) "Hairloose,Men,Toner"
  ["member_location_idx"]=>
  string(1) "0"
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
		          '72',
		          '1',
		          'Hairtoner',
		          'N',
		          '1000',
		          '',
		          'Hair toner \r\nGood for hair loose \r\nMaid in korea',
		          'Hairloose,Men,Toner',
		          '0',
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
							b.member_location_idx='0'
	  </pre> 
 <br /> ' 
ERROR - 2022-09-14 16:42:28 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_reg_in 
  <br> ^ address=>37.111.212.51 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(8) {
  ["category_management_idx"]=>
  string(1) "1"
  ["title"]=>
  string(9) "Hairtoner"
  ["free_product_yn"]=>
  string(1) "N"
  ["product_price"]=>
  string(4) "1000"
  ["img_path"]=>
  string(0) ""
  ["contents"]=>
  string(48) "Hair toner 
Good for hair loose 
Maid in korea"
  ["tags"]=>
  string(19) "Hairloose,Men,Toner"
  ["member_location_idx"]=>
  string(1) "0"
}

 <br> ^UPDATE
							 tbl_member
						 SET
						 	product_cnt = product_cnt+1
						 WHERE
							 member_idx = '72'
		 </pre> 
 <br /> ' 
ERROR - 2022-09-14 16:42:29 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:29 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:29 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:29 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:29 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:29 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:29 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:29 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0/famous_product_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:29 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0/famous_product_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 07:42:30 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 07:42:30 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 07:42:30 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/abfaa7068dd047b6b64a082bad13354a.jpg  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:30 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0/famous_product_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 16:42:31 --> query :  '<pre>m.dilri.com/kr/search_v_1_0_0/famous_product_list 
  <br> ^ address=>218.49.184.72 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
							ROUND((6371*ACOS(COS(RADIANS(35.8721602))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6246179))+SIN(RADIANS(35.8721602))*SIN(RADIANS(a.product_lat)))), 1) as distance,
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
ERROR - 2022-09-14 20:24:34 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=c692a024-62da-450d-a8f7-c4b3d0f75fa1&user_idx=59 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:34 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=c692a024-62da-450d-a8f7-c4b3d0f75fa1&user_idx=59 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(2) "59"
  ["uuid"]=>
  string(36) "c692a024-62da-450d-a8f7-c4b3d0f75fa1"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = 'c692a024-62da-450d-a8f7-c4b3d0f75fa1',
						upd_date = NOW()
					WHERE
						member_idx = '59'
		</pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:34 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=c692a024-62da-450d-a8f7-c4b3d0f75fa1&user_idx=59 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:34 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:34 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:34 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:34 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:34 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:34 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:38 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:38 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(3) "1,3"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,3',
							upd_date = NOW()
						WHERE
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:38 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(3) "1,3"
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
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:38 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:40 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:40 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:40 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:40 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:40 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:40 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:41 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:41 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(3) "1,3"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,3',
							upd_date = NOW()
						WHERE
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:41 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(3) "1,3"
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
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:41 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:41 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:41 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:41 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:41 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:41 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:41 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(3) "1,3"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,3',
							upd_date = NOW()
						WHERE
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(3) "1,3"
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
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:42 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:43 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:43 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:43 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:43 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0/board_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:43 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0/board_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:43 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0/board_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 11:24:44 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 11:24:44 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 11:24:44 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/abfaa7068dd047b6b64a082bad13354a.jpg  ^ address=>119.18.72.155 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:44 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:45 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:45 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:45 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:45 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:45 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:45 --> query :  '<pre>m.dilri.com/kr/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:45 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:45 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:45 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:45 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:45 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:45 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:46 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:46 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "35.8836444"
  ["current_lng"]=>
  string(11) "128.6385905"
  ["category_management_idx"]=>
  string(3) "1,3"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,3',
							upd_date = NOW()
						WHERE
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:46 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "35.8836444"
  ["current_lng"]=>
  string(11) "128.6385905"
  ["category_management_idx"]=>
  string(3) "1,3"
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
							ROUND((6371*ACOS(COS(RADIANS(35.8836444))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6385905))+SIN(RADIANS(35.8836444))*SIN(RADIANS(a.product_lat)))), 1) as distance,
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
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(35.8836444))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6385905))+SIN(RADIANS(35.8836444))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:46 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(35.8836444))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(128.6385905))+SIN(RADIANS(35.8836444))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:47 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:47 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:47 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:47 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:47 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:47 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:48 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:48 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(3) "1,3"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,3',
							upd_date = NOW()
						WHERE
							member_idx = '59'
					</pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:48 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "37.5185682"
  ["current_lng"]=>
  string(11) "127.0230294"
  ["category_management_idx"]=>
  string(3) "1,3"
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
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:48 --> query :  '<pre>m.dilri.com/kr/main_v_1_0_0/main_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							COUNT(1) AS cnt
						FROM
							tbl_product AS a JOIN tbl_member AS b ON a.member_idx = b.member_idx
						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,3') > 0   AND ROUND((6371*ACOS(COS(RADIANS(37.5185682))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(127.0230294))+SIN(RADIANS(37.5185682))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-09-14 20:24:48 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:48 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:48 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:49 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0/board_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:49 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0/board_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:49 --> query :  '<pre>m.dilri.com/kr/community_v_1_0_0/board_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:51 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:51 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
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
ERROR - 2022-09-14 20:24:51 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 20:24:51 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>119.18.72.155 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36^ 
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
ERROR - 2022-09-14 11:24:52 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 11:24:52 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 11:24:52 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/29/8d115ebd295488e5c7902b906aa0e7a6.jpg  ^ address=>119.18.72.155 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 11:24:52 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 11:24:52 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 11:24:52 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/10/32a1cd8b9cd8874c078c82533e657ee6.jpg  ^ address=>119.18.72.155 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 23:25:32 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 23:25:32 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 23:25:32 --> 404 Page Not Found ...--> m.dilri.com/common/fileUpload_action  ^ address=>218.49.184.72 ^ agent=>okhttp/4.2.2
ERROR - 2022-09-14 23:25:39 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 23:25:39 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 23:25:39 --> 404 Page Not Found ...--> m.dilri.com/images/i_alarm_delete.png  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 23:25:55 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 23:25:55 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 23:25:55 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/abfaa7068dd047b6b64a082bad13354a.jpg  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 23:26:01 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 23:26:01 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 23:26:01 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/abfaa7068dd047b6b64a082bad13354a.jpg  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 23:26:21 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 23:26:21 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 23:26:21 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/abfaa7068dd047b6b64a082bad13354a.jpg  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 23:26:25 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 23:26:25 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 23:26:25 --> 404 Page Not Found ...--> m.dilri.com/images/arrow_right.png  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 23:26:33 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 23:26:33 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 23:26:33 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/abfaa7068dd047b6b64a082bad13354a.jpg  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 23:26:45 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 23:26:45 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 23:26:45 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/abfaa7068dd047b6b64a082bad13354a.jpg  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 23:26:54 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 23:26:54 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 23:26:54 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/abfaa7068dd047b6b64a082bad13354a.jpg  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 23:26:58 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 23:26:58 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 23:26:58 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202202/13/abfaa7068dd047b6b64a082bad13354a.jpg  ^ address=>218.49.184.72 ^ agent=>Mozilla/5.0 (Linux; Android 12; LM-G900N Build/SKQ1.211103.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.79 Mobile Safari/537.36
ERROR - 2022-09-14 23:58:39 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 183
ERROR - 2022-09-14 23:58:39 --> Severity: Warning --> date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. /home/sususoftuser/html/CI/system/core/Log.php 212
ERROR - 2022-09-14 23:58:39 --> 404 Page Not Found ...--> m.dilri.com/common/fileUpload_action  ^ address=>218.49.184.72 ^ agent=>okhttp/4.2.2
