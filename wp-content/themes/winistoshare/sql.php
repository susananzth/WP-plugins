SELECT ID, user_login, user_email FROM wp_users WHERE ID = 1

SELECT u.ID, u.user_login, u.user_email, m.user_id, m.meta_key, m.meta_value FROM wp_users u INNER JOIN wp_usermeta m ON m.user_id = 1

SELECT u.ID, u.user_login, u.user_email, m.user_id, m.meta_key, m.meta_value, n.meta_value 
FROM wp_users u 
INNER JOIN wp_usermeta m ON m.meta_key='first_name' and u.ID=2 and m.user_id=2
INNER JOIN wp_usermeta n ON n.meta_key='last_name' and u.ID=2 and n.user_id=2

SELECT u.user_login as Usuario, m.meta_value as Nombres, n.meta_value as Apellidos, u.user_email as Email, o.meta_value as Perfil, p.meta_value as Sponsor 
FROM wpvl_users u 
INNER JOIN wpvl_usermeta m ON m.meta_key='first_name' and u.ID=311 and m.user_id=311 
INNER JOIN wpvl_usermeta n ON n.meta_key='last_name' and u.ID=311 and n.user_id=311 
INNER JOIN wpvl_usermeta o ON o.meta_key='wpvl_capabilities' and u.ID=311 and o.user_id=311 
INNER JOIN wpvl_usermeta p ON p.meta_key='mlm_user_sponsor' and u.ID=311 and p.user_id=311