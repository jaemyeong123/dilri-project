<html>

ERROR - 2022-10-03 11:25:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>211.176.125.70 
 <br> ^ agent=>Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)^ 
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
ERROR - 2022-10-03 11:25:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>211.176.125.70 
 <br> ^ agent=>Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)^ 
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
ERROR - 2022-10-03 11:25:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>211.176.125.70 
 <br> ^ agent=>Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)^ 
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
ERROR - 2022-10-03 11:25:49 --> query :  '<pre>m.dilri.com/us/main_v_1_0_0 
  <br> ^ address=>211.176.125.70 
 <br> ^ agent=>Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)^ 
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
