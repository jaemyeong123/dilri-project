<html>

ERROR - 2022-06-20 11:33:49 --> Severity: Notice --> Undefined property: Home::$member_idx /home/sususoftuser/html/CI/system/core/Model.php 77
ERROR - 2022-06-20 11:33:49 --> Query error: Table 'sususoft_dilri_db.tbl_member' doesn't exist - Invalid query: SELECT
							a.member_idx,
							a.current_lang,
							a.del_yn,
							a.my_badge,
							a.my_badge_types,
							a.member_join_type,
							a.member_img,
							a.member_location_idx,
							a.good_product_cnt,
							a.bad_product_cnt,
							a.uuid,
							a.gcm_key,
							a.device_os,
							FN_AES_DECRYPT(a.member_id) AS member_id,
							FN_AES_DECRYPT(a.member_name) AS member_name,
							FN_AES_DECRYPT(a.member_phone) AS member_phone,
							a.member_gender
						FROM
							tbl_member a
						WHERE
							a.member_idx = NULL
						
