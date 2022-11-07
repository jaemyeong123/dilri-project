<html>

ERROR - 2022-11-06 11:50:58 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=b71a80fc-c229-4955-a566-7bcfbfb45785&user_idx=119 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:50:58 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=b71a80fc-c229-4955-a566-7bcfbfb45785&user_idx=119 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(3) "119"
  ["uuid"]=>
  string(36) "b71a80fc-c229-4955-a566-7bcfbfb45785"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = 'b71a80fc-c229-4955-a566-7bcfbfb45785',
						upd_date = NOW()
					WHERE
						member_idx = '119'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:50:58 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=b71a80fc-c229-4955-a566-7bcfbfb45785&user_idx=119 
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
							a.member_idx = '119'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:50:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:50:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 11:50:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 11:50:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							member_idx = '119'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:50:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 11:50:58 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 14:50:59 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:50:59 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:50:59 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:50:59 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:50:59 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:50:59 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 11:51:01 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:01 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:01 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:01 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:10 --> query :  '<pre>m.dilri.com/us/alarm_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:11 --> query :  '<pre>m.dilri.com/us/alarm_v_1_0_0/alarm_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:11 --> query :  '<pre>m.dilri.com/us/alarm_v_1_0_0/alarm_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^UPDATE
              tbl_alarm
            SET
              read_yn = 'Y',
              upd_date =NOW()
            WHERE
              member_idx = '119'
              AND read_yn = 'N'
    </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:11 --> query :  '<pre>m.dilri.com/us/alarm_v_1_0_0/alarm_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
              member_idx = 119
              AND del_yn = 'N'
	  	ORDER BY alarm_idx DESC  </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:11 --> query :  '<pre>m.dilri.com/us/alarm_v_1_0_0/alarm_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
            	count(*) as cnt
            FROM
            	tbl_alarm
            WHERE
            	del_yn = 'N'
              AND member_idx = 119
				  </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 11:51:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 11:51:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							member_idx = '119'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 11:51:13 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 14:51:14 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:51:14 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:51:14 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:51:14 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:51:14 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:51:14 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 11:51:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:18 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:18 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 11:51:18 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 11:51:18 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							member_idx = '119'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:18 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 11:51:18 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 14:51:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:51:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:51:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:51:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:51:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:51:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 11:51:18 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:18 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:51:19 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:25 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:25 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:25 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 10, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:25 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:25 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:25 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(20)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:25 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(20)
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 20, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:25 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:30 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:30 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 11:52:30 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 11:52:30 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							member_idx = '119'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:30 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 11:52:30 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 14:52:30 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:52:30 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:52:30 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:52:30 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:52:30 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:52:30 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 11:52:31 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:31 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:31 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:31 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:33 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:33 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:33 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 10, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:33 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(20)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(20)
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 20, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(30)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(30)
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 30, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(40)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(40)
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 40, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
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
							del_yn = 'N'
							AND state = '1'
							AND banner_type = '1'
		 ORDER BY RAND() DESC LIMIT 1 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							if(a.member_idx='119', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx and c.del_yn!='Y'
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '119' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '119' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '119' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		ORDER BY a.best_yn DESC, a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:34 --> query :  '<pre>m.dilri.com/us/community_v_1_0_0/board_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '119' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_recommend s ON s.member_idx = '119' and s.board_idx = a.board_idx and s.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '119' AND r.board_idx = a.board_idx and r.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							-- and a.display_yn='Y'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 14:52:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/2770f5e9e176d009780eb7a88706796a.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:52:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/0a7d7233a446dfaba77bcf6b0a41753c.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:52:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/18/6d9386bc2aeb83fd5f22144a61997587.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 11:52:47 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:47 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:47 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 11:52:47 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 11:52:47 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:47 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
							search_idx,
							title
						FROM
							tbl_search
						WHERE
							del_yn ='N'
							AND member_idx = '119'
							AND search_type = '0'
						 ORDER BY upd_date DESC LIMIT 5 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:47 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 14:52:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:52:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:52:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:52:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:52:47 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 11:52:47 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0/famous_product_list 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:47 --> query :  '<pre>m.dilri.com/us/search_v_1_0_0/famous_product_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.famous_product_yn = 'Y'
							-- AND a.product_state IN (0,1)
							-- AND a.display_yn = 'Y'
						ORDER BY distance ASC, a.product_idx DESC
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:52 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:52 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:52 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							and (a.member_idx='119' OR a.partner_member_idx='119')
		 ORDER BY a.last_chatting_date DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:52 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
						 count(*) as cnt
						FROM
							tbl_chatting_room as a
							left join tbl_member as c on c.member_idx=a.member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='119' OR a.partner_member_idx='119')
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:55 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>okhttp/4.2.2^ 
array(4) {
  ["member_idx"]=>
  string(3) "119"
  ["chatting_room_idx"]=>
  string(3) "148"
  ["page_size"]=>
  int(4)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
						 a.chatting_room_idx,
						 a.product_idx,
						 a.member_idx,
						 a.partner_member_idx,
						 b.member_idx as product_owner_idx,
						 b.product_member_idx as product_order_idx,
						 b.product_state,
						 b.title,
						 b.img_path,
						 DATE_FORMAT(b.ins_date,'%Y.%m.%d') as product_ins_date,
						 b.display_yn,
						 c.del_yn as member_del_yn,
						 d.del_yn as partner_member_del_yn,
						 a.partner_member_idx,
						 a.state,
						 a.ins_date
						FROM   tbl_chatting_room as a
						join tbl_product as b on b.product_idx=a.product_idx
						left join tbl_member as c on c.member_idx=a.member_idx
						left join tbl_member as d on d.member_idx=a.partner_member_idx
						WHERE	 a.del_yn ='N'
							 and a.chatting_room_idx='148'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:55 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>okhttp/4.2.2^ 
array(4) {
  ["member_idx"]=>
  string(3) "119"
  ["chatting_room_idx"]=>
  string(3) "148"
  ["page_size"]=>
  int(4)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_chatting_room
						SET
							member_read_yn=IF(member_idx='119','Y', 'N'),
							partner_member_read_yn=IF(partner_member_idx='119','Y', 'N'),
							member_read_date=now(),
							partner_member_read_date=now(),
							upd_date=NOW()
						WHERE
							chatting_room_idx='148'
			</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:55 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>okhttp/4.2.2^ 
array(4) {
  ["member_idx"]=>
  string(3) "119"
  ["chatting_room_idx"]=>
  string(3) "148"
  ["page_size"]=>
  int(4)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							DATE_FORMAT(a.ins_date,'%Y-%m-%d') as st_date
						FROM
							tbl_chatting_list as a
						WHERE
							a.del_yn = 'N'
							and a.chatting_room_idx='148'
							group by DATE_FORMAT(a.ins_date,'%Y-%m-%d')
		 ORDER BY DATE_FORMAT(a.ins_date,'%Y-%m-%d') desc limit 0, 4</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:55 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>okhttp/4.2.2^ 
string(0) ""

 <br> ^SELECT
							a.chatting_list_idx,
							a.chat_writer_type,
							a.member_idx,
							IFNULL(b.member_img, '/images/default_user.png') as member_img,
							FN_AES_DECRYPT(b.member_name) AS member_name,
					  	a.comment,
							a.img_path,
							a.ins_date,
							DATE_FORMAT(a.ins_date,'%Y-%m-%d') as ins_day,
							DATE_FORMAT(a.ins_date,'%H:%i') as ins_hi
						FROM
							tbl_chatting_list as a
							left join tbl_member as b on b.member_idx=a.member_idx
						WHERE
							a.del_yn = 'N'
							and a.chatting_room_idx='148'
							and DATE_FORMAT(a.ins_date,'%Y-%m-%d')='2022-11-01'
		        ORDER BY a.chatting_list_idx asc
		 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:55 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>okhttp/4.2.2^ 
array(4) {
  ["member_idx"]=>
  string(3) "119"
  ["chatting_room_idx"]=>
  string(3) "148"
  ["page_size"]=>
  int(4)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
            (
							SELECT
							 DATE_FORMAT(a.ins_date,'%Y-%m-%d'),
							 COUNT(*) AS cnt
						 FROM
							 tbl_chatting_list as a
						 WHERE
							 a.del_yn = 'N'
							 and a.chatting_room_idx='148'
							 group by DATE_FORMAT(a.ins_date,'%Y-%m-%d')
						) as ta

		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:55 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>okhttp/4.2.2^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product AS a
						WHERE
							a.del_yn = 'N'
							AND a.product_state = 1
							AND a.free_product_yn = 'Y'
							AND a.product_member_idx = '119'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:55 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>okhttp/4.2.2^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product AS a
						WHERE
							a.del_yn = 'N'
							AND a.product_state = 2
							AND a.free_product_yn = 'Y'
							AND a.product_member_idx = '119'
							AND a.buyer_review_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:57 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:57 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							and (a.member_idx='119' OR a.partner_member_idx='119')
		 ORDER BY a.last_chatting_date DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:57 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
						 count(*) as cnt
						FROM
							tbl_chatting_room as a
							left join tbl_member as c on c.member_idx=a.member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='119' OR a.partner_member_idx='119')
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:58 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>okhttp/4.2.2^ 
array(4) {
  ["member_idx"]=>
  string(3) "119"
  ["chatting_room_idx"]=>
  string(3) "149"
  ["page_size"]=>
  int(4)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
						 a.chatting_room_idx,
						 a.product_idx,
						 a.member_idx,
						 a.partner_member_idx,
						 b.member_idx as product_owner_idx,
						 b.product_member_idx as product_order_idx,
						 b.product_state,
						 b.title,
						 b.img_path,
						 DATE_FORMAT(b.ins_date,'%Y.%m.%d') as product_ins_date,
						 b.display_yn,
						 c.del_yn as member_del_yn,
						 d.del_yn as partner_member_del_yn,
						 a.partner_member_idx,
						 a.state,
						 a.ins_date
						FROM   tbl_chatting_room as a
						join tbl_product as b on b.product_idx=a.product_idx
						left join tbl_member as c on c.member_idx=a.member_idx
						left join tbl_member as d on d.member_idx=a.partner_member_idx
						WHERE	 a.del_yn ='N'
							 and a.chatting_room_idx='149'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:58 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>okhttp/4.2.2^ 
array(4) {
  ["member_idx"]=>
  string(3) "119"
  ["chatting_room_idx"]=>
  string(3) "149"
  ["page_size"]=>
  int(4)
  ["page_no"]=>
  int(0)
}

 <br> ^UPDATE
							tbl_chatting_room
						SET
							member_read_yn=IF(member_idx='119','Y', 'N'),
							partner_member_read_yn=IF(partner_member_idx='119','Y', 'N'),
							member_read_date=now(),
							partner_member_read_date=now(),
							upd_date=NOW()
						WHERE
							chatting_room_idx='149'
			</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:58 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>okhttp/4.2.2^ 
array(4) {
  ["member_idx"]=>
  string(3) "119"
  ["chatting_room_idx"]=>
  string(3) "149"
  ["page_size"]=>
  int(4)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							DATE_FORMAT(a.ins_date,'%Y-%m-%d') as st_date
						FROM
							tbl_chatting_list as a
						WHERE
							a.del_yn = 'N'
							and a.chatting_room_idx='149'
							group by DATE_FORMAT(a.ins_date,'%Y-%m-%d')
		 ORDER BY DATE_FORMAT(a.ins_date,'%Y-%m-%d') desc limit 0, 4</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:58 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>okhttp/4.2.2^ 
string(0) ""

 <br> ^SELECT
							a.chatting_list_idx,
							a.chat_writer_type,
							a.member_idx,
							IFNULL(b.member_img, '/images/default_user.png') as member_img,
							FN_AES_DECRYPT(b.member_name) AS member_name,
					  	a.comment,
							a.img_path,
							a.ins_date,
							DATE_FORMAT(a.ins_date,'%Y-%m-%d') as ins_day,
							DATE_FORMAT(a.ins_date,'%H:%i') as ins_hi
						FROM
							tbl_chatting_list as a
							left join tbl_member as b on b.member_idx=a.member_idx
						WHERE
							a.del_yn = 'N'
							and a.chatting_room_idx='149'
							and DATE_FORMAT(a.ins_date,'%Y-%m-%d')='2022-11-02'
		        ORDER BY a.chatting_list_idx asc
		 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:58 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>okhttp/4.2.2^ 
array(4) {
  ["member_idx"]=>
  string(3) "119"
  ["chatting_room_idx"]=>
  string(3) "149"
  ["page_size"]=>
  int(4)
  ["page_no"]=>
  int(0)
}

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
            (
							SELECT
							 DATE_FORMAT(a.ins_date,'%Y-%m-%d'),
							 COUNT(*) AS cnt
						 FROM
							 tbl_chatting_list as a
						 WHERE
							 a.del_yn = 'N'
							 and a.chatting_room_idx='149'
							 group by DATE_FORMAT(a.ins_date,'%Y-%m-%d')
						) as ta

		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:58 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>okhttp/4.2.2^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product AS a
						WHERE
							a.del_yn = 'N'
							AND a.product_state = 1
							AND a.free_product_yn = 'Y'
							AND a.product_member_idx = '119'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:52:58 --> query :  '<pre>m.dilri.com/kr/chatting_v_1_0_0/chatting_list 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>okhttp/4.2.2^ 
string(0) ""

 <br> ^SELECT
							COUNT(*) AS cnt
						FROM
							tbl_product AS a
						WHERE
							a.del_yn = 'N'
							AND a.product_state = 2
							AND a.free_product_yn = 'Y'
							AND a.product_member_idx = '119'
							AND a.buyer_review_yn = 'N'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:00 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:00 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							and (a.member_idx='119' OR a.partner_member_idx='119')
		 ORDER BY a.last_chatting_date DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:00 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
						 count(*) as cnt
						FROM
							tbl_chatting_room as a
							left join tbl_member as c on c.member_idx=a.member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='119' OR a.partner_member_idx='119')
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:01 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:01 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:01 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
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
							and (a.member_idx='119' OR a.partner_member_idx='119')
		 ORDER BY a.last_chatting_date DESC LIMIT 0, 10</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:01 --> query :  '<pre>m.dilri.com/us/chatting_v_1_0_0/chatting_room_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
string(0) ""

 <br> ^SELECT
						 count(*) as cnt
						FROM
							tbl_chatting_room as a
							left join tbl_member as c on c.member_idx=a.member_idx

						WHERE
							a.del_yn ='N'
							and (a.member_idx='119' OR a.partner_member_idx='119')
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:02 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:02 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:02 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0 
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
									AND a.member_idx = '119' AND a.product_state IN (0,1)
							),0) as cnt_0,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.member_idx = '119' AND a.product_state IN (2)
							),0) as cnt_1,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product AS a
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									a.del_yn = 'N'
									AND a.product_member_idx = '119' AND a.product_state IN (2)
							),0) as cnt_2,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board a
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '119' and t.board_idx = a.board_idx and t.del_yn = 'N'
								WHERE
									a.del_yn = 'N'
									and a.member_idx = '119'
							),0) as cnt_3,
							IFNULL((SELECT
									COUNT(*) AS cnt
								FROM
									tbl_board_reply a
									JOIN tbl_member b ON b.member_idx = a.member_idx
									JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
									LEFT JOIN tbl_board_reply_report r ON r.member_idx = '119' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
									LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
								WHERE
									a.del_yn='N'
									AND a.member_idx = '119'
							),0) as cnt_4,
							IFNULL((SELECT
									count(*) as cnt
								FROM
									tbl_board_scrap z
									JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
									JOIN tbl_member c ON c.member_idx = a.member_idx
									LEFT JOIN tbl_board_scrap t ON t.member_idx = '119' and t.board_idx = a.board_idx and t.del_yn = 'N'
									LEFT JOIN tbl_board_report r ON r.member_idx = '119' AND r.board_idx = a.board_idx and r.del_yn = 'N'

								WHERE
									z.del_yn = 'N'
									and z.member_idx = '119'
									AND z.scrap_yn = 'Y'
							),0) as cnt_5,
							IFNULL((SELECT
									COUNT(1) AS cnt
								FROM
									tbl_product_like z
									JOIN tbl_product AS a ON a.product_idx = z.product_idx
									JOIN tbl_member AS b ON a.member_idx = b.member_idx
								WHERE
									z.member_idx = '119'
									AND z.like_yn = 'Y'
									AND z.del_yn = 'N'
									AND a.display_yn = 'Y'
							),0) as cnt_6
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '119' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
		 AND a.member_idx = '119' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '119' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
		 AND a.member_idx = '119' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.product_member_idx = '119' AND a.product_state IN (2) ORDER BY a.complete_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
		 AND a.product_member_idx = '119' AND a.product_state IN (2) </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							if(a.member_idx='119', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '119' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '119' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '119'
		ORDER BY a.board_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '119' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '119'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							if(a.member_idx='119', 'Y', 'N') as my_board_yn
						FROM
							tbl_board_reply a
							JOIN tbl_member b ON b.member_idx = a.member_idx
							JOIN tbl_board c ON c.board_idx = a.board_idx and c.del_yn='N'
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '119' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx

						WHERE
							a.del_yn='N'
							AND a.member_idx = '119'
		 ORDER BY a.board_reply_idx DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							LEFT JOIN tbl_board_reply_report r ON r.member_idx = '119' AND r.board_reply_idx = a.board_reply_idx and r.del_yn = 'N'
							LEFT JOIN tbl_member d ON d.member_idx = a.relpy_member_idx
						WHERE
							a.del_yn='N'
							AND a.member_idx = '119'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							if(a.member_idx='119', 'Y', 'N') as my_board_yn

						FROM
							tbl_board_scrap z
							JOIN tbl_board a ON a.board_idx = z.board_idx and a.del_yn='N'
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_report r ON r.member_idx = '119' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '119'
							AND z.scrap_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '119' and t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '119' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							z.del_yn = 'N'
							and z.member_idx = '119'
							AND z.scrap_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							z.member_idx = '119'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		ORDER BY z.upd_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 11:53:03 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							z.member_idx = '119'
							AND z.like_yn = 'Y'
							AND z.del_yn = 'N'
							AND a.display_yn = 'Y'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:39 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:39 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(10)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156072"
  ["current_lng"]=>
  string(10) "90.4116117"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156072))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116117))+SIN(RADIANS(23.8156072))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '119' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 10, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:39 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
		 AND a.member_idx = '119' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:39 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:39 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(20)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156072"
  ["current_lng"]=>
  string(10) "90.4116117"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156072))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116117))+SIN(RADIANS(23.8156072))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '119' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 20, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:39 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
		 AND a.member_idx = '119' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:42 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:42 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(40)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156072"
  ["current_lng"]=>
  string(10) "90.4116117"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156072))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116117))+SIN(RADIANS(23.8156072))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '119' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 40, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:42 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
		 AND a.member_idx = '119' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:42 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:42 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(30)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156072"
  ["current_lng"]=>
  string(10) "90.4116117"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156072))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116117))+SIN(RADIANS(23.8156072))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '119' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 30, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:42 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
		 AND a.member_idx = '119' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(50)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156072"
  ["current_lng"]=>
  string(10) "90.4116117"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156072))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116117))+SIN(RADIANS(23.8156072))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '119' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 50, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
		 AND a.member_idx = '119' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(60)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156072"
  ["current_lng"]=>
  string(10) "90.4116117"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156072))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116117))+SIN(RADIANS(23.8156072))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '119' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 60, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
		 AND a.member_idx = '119' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(70)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156072"
  ["current_lng"]=>
  string(10) "90.4116117"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156072))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116117))+SIN(RADIANS(23.8156072))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '119' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 70, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
		 AND a.member_idx = '119' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(80)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156072"
  ["current_lng"]=>
  string(10) "90.4116117"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156072))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116117))+SIN(RADIANS(23.8156072))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '119' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 80, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
		 AND a.member_idx = '119' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(90)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156072"
  ["current_lng"]=>
  string(10) "90.4116117"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156072))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116117))+SIN(RADIANS(23.8156072))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '119' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 90, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
		 AND a.member_idx = '119' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(100)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156072"
  ["current_lng"]=>
  string(10) "90.4116117"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156072))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116117))+SIN(RADIANS(23.8156072))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '119' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 100, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
		 AND a.member_idx = '119' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:43 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(110)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156072"
  ["current_lng"]=>
  string(10) "90.4116117"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156072))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116117))+SIN(RADIANS(23.8156072))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							a.seller_review_yn,
							a.buyer_review_yn,
							a.display_yn,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
		 AND a.member_idx = '119' AND a.product_state IN (0,1) ORDER BY a.list_up_date DESC limit 110, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:20:44 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
		 AND a.member_idx = '119' AND a.product_state IN (0,1) </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:06 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:06 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(10)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156072"
  ["current_lng"]=>
  string(10) "90.4116117"
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
							if(a.member_idx='119', 'Y', 'N') as my_board_yn

						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '119' AND t.board_idx = a.board_idx and t.del_yn = 'N'
							LEFT JOIN tbl_board_report r ON r.member_idx = '119' AND r.board_idx = a.board_idx and r.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							and a.member_idx = '119'
		ORDER BY a.board_idx DESC limit 10, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:06 --> query :  '<pre>m.dilri.com/us/mypage_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(5) {
  ["page_no"]=>
  int(10)
  ["page_size"]=>
  int(10)
  ["current_lat"]=>
  string(10) "23.8156072"
  ["current_lng"]=>
  string(10) "90.4116117"
  ["tab_type"]=>
  string(1) "3"
}

 <br> ^SELECT
							count(*) as cnt
						FROM
							tbl_board a
							JOIN tbl_member c ON c.member_idx = a.member_idx
							LEFT JOIN tbl_board_scrap t ON t.member_idx = '119' and t.board_idx = a.board_idx and t.del_yn = 'N'
						WHERE
							a.del_yn = 'N'
							and a.member_idx = '119'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:25:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:25:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							member_idx = '119'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:25:11 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 15:25:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:25:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:25:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:25:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:25:11 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 12:25:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:33 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=b71a80fc-c229-4955-a566-7bcfbfb45785&user_idx=119 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:33 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=b71a80fc-c229-4955-a566-7bcfbfb45785&user_idx=119 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(2) {
  ["member_idx"]=>
  string(3) "119"
  ["uuid"]=>
  string(36) "b71a80fc-c229-4955-a566-7bcfbfb45785"
}

 <br> ^UPDATE
					 tbl_member
					SET
						uuid = 'b71a80fc-c229-4955-a566-7bcfbfb45785',
						upd_date = NOW()
					WHERE
						member_idx = '119'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:33 --> query :  '<pre>m.dilri.com/us?app_yn=Y&uuid=b71a80fc-c229-4955-a566-7bcfbfb45785&user_idx=119 
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
							a.member_idx = '119'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:33 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:33 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:25:33 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:25:33 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							member_idx = '119'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:33 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:25:33 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 15:25:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:25:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:25:35 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:25:36 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:25:36 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:25:36 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 12:25:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 10, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(20)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(20)
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 20, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:45 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(30)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(30)
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 30, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(40)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(40)
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 40, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(50)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(50)
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 50, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(60)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(60)
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 60, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:47 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:48 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:48 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(70)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:48 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(70)
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 70, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:25:48 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:00 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:00 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:00 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=435 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:00 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=435 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:00 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=435 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "435"
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
	            product_idx = '435'
	          </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:00 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=435 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "435"
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
							IF(a.member_idx='119', 'seller', 'buyer') as viewer,
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
							IFNULL((select count(*) from tbl_product_report r where r.member_idx = '119' AND r.product_idx = a.product_idx and r.del_yn = 'N'), 0) as report_cnt,

							FN_AES_DECRYPT(c.member_name) AS partner_member_name,
							c.member_img as partner_member_img
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx

						WHERE
							a.product_idx = '435'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:00 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=435 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "435"
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
		 					product_idx = '435'
							AND member_idx = '119'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:01 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:01 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "435"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance
						FROM
							tbl_product AS a
						WHERE
							a.product_idx = '435'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:02 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:02 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:31:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:31:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							member_idx = '119'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:31:08 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 15:31:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:31:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:31:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:31:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:31:09 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 12:31:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:12 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 10, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(30)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(30)
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 30, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(20)
}

 <br> ^UPDATE
							tbl_member
						SET
							category_management_idx = '1,4,6,3,5',
							upd_date = NOW()
						WHERE
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
  ["category_management_idx"]=>
  string(9) "1,4,6,3,5"
  ["page_size"]=>
  int(10)
  ["page_no"]=>
  int(20)
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 20, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:14 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:17 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:17 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:31:17 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:31:17 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							member_idx = '119'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:17 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:31:17 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 15:31:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:31:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:31:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:31:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:31:18 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 12:31:18 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:18 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:18 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:18 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:20 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:20 --> query :  '<pre>m.dilri.com/us/common/COM_profile_check 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:20 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=436 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:20 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=436 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:20 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=436 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "436"
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
	            product_idx = '436'
	          </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:20 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=436 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "436"
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
							IF(a.member_idx='119', 'seller', 'buyer') as viewer,
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
							IFNULL((select count(*) from tbl_product_report r where r.member_idx = '119' AND r.product_idx = a.product_idx and r.del_yn = 'N'), 0) as report_cnt,

							FN_AES_DECRYPT(c.member_name) AS partner_member_name,
							c.member_img as partner_member_img
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_member AS c ON c.member_idx = a.product_member_idx

						WHERE
							a.product_idx = '436'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:20 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail?product_idx=436 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "436"
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
		 					product_idx = '436'
							AND member_idx = '119'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:20 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:20 --> query :  '<pre>m.dilri.com/us/product_v_1_0_0/product_detail_distance 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(3) {
  ["product_idx"]=>
  string(3) "436"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
}

 <br> ^SELECT
							a.product_idx,
							a.member_idx,
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance
						FROM
							tbl_product AS a
						WHERE
							a.product_idx = '436'
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:31:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:31:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							member_idx = '119'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 12:31:23 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 15:31:25 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:31:25 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:31:25 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:31:25 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:31:25 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 15:31:25 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 12:31:26 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:26 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:26 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 12:31:26 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 14:56:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 14:56:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 14:56:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 14:56:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							member_idx = '119'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 14:56:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 14:56:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 17:56:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 17:56:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 17:56:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 17:56:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 17:56:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 17:56:49 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:56:50 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 14:56:50 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 14:56:50 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 14:56:50 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 14:56:55 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 14:56:55 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 14:56:55 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 14:56:55 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							member_idx = '119'
							AND del_yn = 'N'
						ORDER BY title ASC
		</pre> 
 <br /> ' 
ERROR - 2022-11-06 14:56:55 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
ERROR - 2022-11-06 14:56:55 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 17:56:55 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 17:56:55 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 17:56:55 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 17:56:55 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 17:56:55 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 17:56:55 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>203.76.98.146 ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36
ERROR - 2022-11-06 14:56:56 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
							a.member_idx = '119'
						</pre> 
 <br /> ' 
ERROR - 2022-11-06 14:56:56 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							member_idx = '119'
					</pre> 
 <br /> ' 
ERROR - 2022-11-06 14:56:56 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>203.76.98.146 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; V2120 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.126 Mobile Safari/537.36^ 
array(6) {
  ["distance"]=>
  string(1) "6"
  ["current_lat"]=>
  string(10) "23.8156409"
  ["current_lng"]=>
  string(10) "90.4116507"
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
							ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) as distance,
							b.good_product_cnt,
							b.bad_product_cnt,
							b.del_yn
						FROM
							tbl_product AS a
							JOIN tbl_member AS b ON a.member_idx = b.member_idx
							LEFT JOIN tbl_product_like t ON t.member_idx = '119' AND t.product_idx = a.product_idx and t.del_yn = 'N'

						WHERE
							a.del_yn = 'N'
							AND a.display_yn = 'Y'
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  ORDER BY a.list_up_date DESC limit 0, 10 </pre> 
 <br /> ' 
ERROR - 2022-11-06 14:56:56 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
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
		 AND FIND_IN_SET(a.category_management_idx, '1,4,6,3,5') > 0   AND ROUND((6371*ACOS(COS(RADIANS(23.8156409))*COS(RADIANS(a.product_lat))*COS(RADIANS(a.product_lng)-RADIANS(90.4116507))+SIN(RADIANS(23.8156409))*SIN(RADIANS(a.product_lat)))), 1) <= 6  </pre> 
 <br /> ' 
ERROR - 2022-11-06 18:16:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 18:16:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 18:16:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 18:16:36 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 21:16:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>27.147.191.201 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36
ERROR - 2022-11-06 21:16:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>27.147.191.201 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36
ERROR - 2022-11-06 21:16:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>27.147.191.201 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36
ERROR - 2022-11-06 21:16:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>27.147.191.201 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36
ERROR - 2022-11-06 21:16:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>27.147.191.201 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36
ERROR - 2022-11-06 21:16:37 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>27.147.191.201 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36
ERROR - 2022-11-06 18:16:38 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 18:16:38 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 18:16:38 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 18:16:42 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 18:16:42 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 18:16:42 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 18:16:42 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 21:16:43 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202112/10/f4547d912b9f79f481c552dd10d8fbae.jpg  ^ address=>27.147.191.201 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36
ERROR - 2022-11-06 21:16:43 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/db22228c6fb8d63a0d1ab744e9d2779d.png  ^ address=>27.147.191.201 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36
ERROR - 2022-11-06 21:16:43 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/a40eae560cbea325327c0319ce53675b.png  ^ address=>27.147.191.201 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36
ERROR - 2022-11-06 21:16:43 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/7625c6feffc906c2a44119fe57abbb4d.png  ^ address=>27.147.191.201 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36
ERROR - 2022-11-06 21:16:43 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202111/10/04069ba7e07940468efb690f6b64755e.png  ^ address=>27.147.191.201 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36
ERROR - 2022-11-06 21:16:43 --> 404 Page Not Found ...--> m.dilri.com/media/commonfile/202110/26/c2bc4dd543e707de4baf86a85d8f421b.jpg  ^ address=>27.147.191.201 ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36
ERROR - 2022-11-06 18:16:43 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 18:16:43 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36^ 
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
ERROR - 2022-11-06 18:16:43 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0/main_list_get 
  <br> ^ address=>27.147.191.201 
 <br> ^ agent=>Mozilla/5.0 (Linux; Android 12; SM-N971N Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.91 Mobile Safari/537.36^ 
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
