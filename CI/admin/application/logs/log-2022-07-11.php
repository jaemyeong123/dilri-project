<html>

ERROR - 2022-07-11 09:01:24 --> Query error: FUNCTION sususoft_dilri_db.FN_AES_DECRYPT does not exist - Invalid query: SELECT
							admin_idx,
							FN_AES_DECRYPT(admin_id) AS admin_id,
							admin_name,
							admin_right
						FROM
							tbl_admin
						WHERE
							FN_AES_DECRYPT(admin_id) = FN_AES_ENCRYPT('junho0514')
							AND admin_pw = SHA2('sususoft0514',512)
					
ERROR - 2022-07-11 09:01:26 --> Query error: FUNCTION sususoft_dilri_db.FN_AES_DECRYPT does not exist - Invalid query: SELECT
							admin_idx,
							FN_AES_DECRYPT(admin_id) AS admin_id,
							admin_name,
							admin_right
						FROM
							tbl_admin
						WHERE
							FN_AES_DECRYPT(admin_id) = FN_AES_ENCRYPT('junho0514')
							AND admin_pw = SHA2('sususoft0514',512)
					
ERROR - 2022-07-11 09:01:33 --> Query error: FUNCTION sususoft_dilri_db.FN_AES_DECRYPT does not exist - Invalid query: SELECT
							admin_idx,
							FN_AES_DECRYPT(admin_id) AS admin_id,
							admin_name,
							admin_right
						FROM
							tbl_admin
						WHERE
							FN_AES_DECRYPT(admin_id) = FN_AES_ENCRYPT(NULL)
							AND admin_pw = SHA2(NULL,512)
					
