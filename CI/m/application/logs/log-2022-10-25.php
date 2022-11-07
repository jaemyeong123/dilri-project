<html>

ERROR - 2022-10-25 19:26:24 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>37.111.222.248 
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
ERROR - 2022-10-25 19:26:24 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>37.111.222.248 
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
ERROR - 2022-10-25 19:26:24 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=75d77079-89e0-4014-9796-11bf1134da5c&user_idx=77 
  <br> ^ address=>37.111.222.248 
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
ERROR - 2022-10-25 19:26:24 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.222.248 
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
ERROR - 2022-10-25 19:26:24 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.222.248 
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
ERROR - 2022-10-25 19:26:24 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.222.248 
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
ERROR - 2022-10-25 19:26:24 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.222.248 
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
ERROR - 2022-10-25 19:26:24 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.222.248 
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
ERROR - 2022-10-25 19:26:24 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>37.111.222.248 
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
ERROR - 2022-10-25 22:26:27 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>37.111.222.248 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-25 22:26:27 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>37.111.222.248 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-25 22:26:28 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>37.111.222.248 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-25 22:26:28 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>37.111.222.248 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-25 22:26:28 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>37.111.222.248 ^ agent=>Mozilla/5.0 (Linux; Android 11; V2111 Build/RP1A.200720.012_NONFC; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-10-25 19:26:28 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.222.248 
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
ERROR - 2022-10-25 19:26:28 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.222.248 
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
ERROR - 2022-10-25 19:26:28 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.222.248 
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
ERROR - 2022-10-25 19:26:28 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>37.111.222.248 
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
