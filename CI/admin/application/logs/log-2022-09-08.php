<html>

ERROR - 2022-09-08 19:59:21 --> query :  '<pre>admin.dilri.com/login/login_action 
  <br> ^ address=>211.176.125.70 
 <br> ^ agent=>Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)^ 
array(2) {
  ["admin_id"]=>
  NULL
  ["admin_pw"]=>
  NULL
}

 <br> ^SELECT
							admin_idx,
							FN_AES_DECRYPT(admin_id) AS admin_id,
							admin_name,
							admin_right
						FROM
							tbl_admin
						WHERE
							FN_AES_DECRYPT(admin_id) = NULL
							AND admin_pw = SHA2(NULL,512)
					</pre> 
 <br /> ' 
