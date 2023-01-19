TYPE=VIEW
query=select `t`.`id` AS `tournament_id`,`r`.`id` AS `round_id`,`g`.`id` AS `group_id`,`t0`.`id` AS `team_id0`,`t1`.`id` AS `team_id1`,`t`.`name` AS `tournament_name`,`r`.`name` AS `round_name`,`g`.`name` AS `group_name`,`t0`.`name` AS `team_name0`,`t1`.`name` AS `team_name1`,`rs`.`outcome` AS `outcome` from ((((((`mydb`.`wc_tournament` `t` join `mydb`.`wc_round` `r` on(`t`.`id` = `r`.`tournament_id`)) join `mydb`.`wc_match` `m` on(`r`.`id` = `m`.`round_id`)) join `mydb`.`wc_group` `g` on(`g`.`id` = `m`.`group_id`)) join `mydb`.`wc_result` `rs` on(`m`.`id` = `rs`.`match_id`)) join `mydb`.`wc_team` `t0` on(`t0`.`id` = `rs`.`team_id0`)) join `mydb`.`wc_team` `t1` on(`t1`.`id` = `rs`.`team_id1`)) order by `t`.`year`,`r`.`ordering`,`m`.`ordering`
md5=92dd55bbe29c71866d7ca38d94e71bc7
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=0001673646857416848
create-version=2
source=select `t`.`id` AS `tournament_id`,`r`.`id` AS `round_id`,`g`.`id` AS `group_id`,`t0`.`id` AS `team_id0`,`t1`.`id` AS `team_id1`,`t`.`name` AS `tournament_name`,`r`.`name` AS `round_name`,`g`.`name` AS `group_name`,`t0`.`name` AS `team_name0`,`t1`.`name` AS `team_name1`,`rs`.`outcome` AS `outcome` from ((((((`wc_tournament` `t` join `wc_round` `r` on((`t`.`id` = `r`.`tournament_id`))) join `wc_match` `m` on((`r`.`id` = `m`.`round_id`))) join `wc_group` `g` on((`g`.`id` = `m`.`group_id`))) join `wc_result` `rs` on((`m`.`id` = `rs`.`match_id`))) join `wc_team` `t0` on((`t0`.`id` = `rs`.`team_id0`))) join `wc_team` `t1` on((`t1`.`id` = `rs`.`team_id1`))) order by `t`.`year`,`r`.`ordering`,`m`.`ordering`
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `t`.`id` AS `tournament_id`,`r`.`id` AS `round_id`,`g`.`id` AS `group_id`,`t0`.`id` AS `team_id0`,`t1`.`id` AS `team_id1`,`t`.`name` AS `tournament_name`,`r`.`name` AS `round_name`,`g`.`name` AS `group_name`,`t0`.`name` AS `team_name0`,`t1`.`name` AS `team_name1`,`rs`.`outcome` AS `outcome` from ((((((`mydb`.`wc_tournament` `t` join `mydb`.`wc_round` `r` on(`t`.`id` = `r`.`tournament_id`)) join `mydb`.`wc_match` `m` on(`r`.`id` = `m`.`round_id`)) join `mydb`.`wc_group` `g` on(`g`.`id` = `m`.`group_id`)) join `mydb`.`wc_result` `rs` on(`m`.`id` = `rs`.`match_id`)) join `mydb`.`wc_team` `t0` on(`t0`.`id` = `rs`.`team_id0`)) join `mydb`.`wc_team` `t1` on(`t1`.`id` = `rs`.`team_id1`)) order by `t`.`year`,`r`.`ordering`,`m`.`ordering`
mariadb-version=101002
