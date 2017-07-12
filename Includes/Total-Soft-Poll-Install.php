<?php
	if(!defined('ABSPATH')) exit;
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
	global $wpdb;

	$table_name   = $wpdb->prefix . "totalsoft_fonts";
	$table_name1  = $wpdb->prefix . "totalsoft_poll_manager";
	$table_name2  = $wpdb->prefix . "totalsoft_poll_answers";
	$table_name3  = $wpdb->prefix . "totalsoft_poll_id";
	$table_name4  = $wpdb->prefix . "totalsoft_poll_dbt";
	$table_name5  = $wpdb->prefix . "totalsoft_poll_stpoll";
	$table_name6  = $wpdb->prefix . "totalsoft_poll_results";
	$table_name7  = $wpdb->prefix . "totalsoft_poll_inform";	
	$table_name8  = $wpdb->prefix . "totalsoft_poll_stpoll_1";
	$table_name9  = $wpdb->prefix . "totalsoft_poll_impoll";
	$table_name10 = $wpdb->prefix . "totalsoft_poll_impoll_1";
	$table_name11 = $wpdb->prefix . "totalsoft_poll_stwibu";
	$table_name12 = $wpdb->prefix . "totalsoft_poll_stwibu_1";
	$table_name13 = $wpdb->prefix . "totalsoft_poll_imwibu";
	$table_name14 = $wpdb->prefix . "totalsoft_poll_imwibu_1";
	$table_name15 = $wpdb->prefix . "totalsoft_poll_quest_im";
	$table_name16 = $wpdb->prefix . "totalsoft_poll_iminqu";
	$table_name17 = $wpdb->prefix . "totalsoft_poll_iminqu_1";

	$sql = 'CREATE TABLE IF NOT EXISTS ' .$table_name . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		Font VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql1 = 'CREATE TABLE IF NOT EXISTS ' .$table_name1 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftPoll_Question VARCHAR(255) NOT NULL,
		TotalSoftPoll_Theme VARCHAR(255) NOT NULL,
		TotalSoftPoll_Ans_C VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql2 = 'CREATE TABLE IF NOT EXISTS ' .$table_name2 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		Question_ID VARCHAR(255) NOT NULL,
		TotalSoftPoll_Ans VARCHAR(255) NOT NULL,
		TotalSoftPoll_Ans_Im VARCHAR(255) NOT NULL,
		TotalSoftPoll_Ans_Vd VARCHAR(255) NOT NULL,
		TotalSoftPoll_Ans_Cl VARCHAR(255) NOT NULL,
		TotalSoftPoll_Ans_01 VARCHAR(255) NOT NULL,
		TotalSoftPoll_Ans_02 VARCHAR(255) NOT NULL,
		TotalSoftPoll_Ans_03 VARCHAR(255) NOT NULL,
		TotalSoftPoll_Ans_04 VARCHAR(255) NOT NULL,
		TotalSoftPoll_Ans_05 VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql3 = 'CREATE TABLE IF NOT EXISTS ' .$table_name3 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		Poll_ID VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql4 = 'CREATE TABLE IF NOT EXISTS ' .$table_name4 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoft_Poll_TTitle VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TType VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql5 = 'CREATE TABLE IF NOT EXISTS ' .$table_name5 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoft_Poll_TID VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TTitle VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TType VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_MW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_BoxSh_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_BoxSh_Type VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_BoxSh VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_BoxShC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_Q_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_Q_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_Q_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_Q_FF VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_Q_TA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_LAQ_W VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_LAQ_H VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_LAQ_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_LAQ_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_A_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_A_CTF VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_A_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_A_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_CH_CM VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_CH_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_CH_TBC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_CH_CBC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_CH_TAC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_CH_CAC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_A_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_A_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_LAA_W VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_LAA_H VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_LAA_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_LAA_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_FF VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_IA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_IS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_VB_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_FF VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_IA VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql6 = 'CREATE TABLE IF NOT EXISTS ' .$table_name6 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		Poll_ID INTEGER(10) NOT NULL,
		Poll_A_ID INTEGER(10) NOT NULL,
		Poll_A_Votes INTEGER(10) NOT NULL,
		PRIMARY KEY  (id) )';
	$sql7 = 'CREATE TABLE IF NOT EXISTS ' . $table_name7 . ' ( 
		id INTEGER(10) UNSIGNED AUTO_INCREMENT, 
		Poll_ID VARCHAR(255) NOT NULL, 
		IPAddress VARCHAR(255) NOT NULL, 
		City VARCHAR(255) NOT NULL, 
		Region VARCHAR(255) NOT NULL, 
		CountryCode VARCHAR(255) NOT NULL, 
		CountryName VARCHAR(255) NOT NULL, 
		CountryFlag VARCHAR(255) NOT NULL, 
		Data VARCHAR(255) NOT NULL, 
		PRIMARY KEY (id))';
	$sql8 = 'CREATE TABLE IF NOT EXISTS ' .$table_name8 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoft_Poll_TID VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TTitle VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TType VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_IS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_RB_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_ShPop VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_ShEff VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_Q_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_Q_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_LAQ_W VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_LAQ_H VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_LAQ_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_LAQ_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_A_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_A_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_A_VT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_A_VC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_A_VEff VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_LAA_W VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_LAA_H VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_LAA_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_LAA_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_BB_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_BB_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_BB_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_BB_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_BB_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_BB_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_BB_IA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_BB_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_BB_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_BB_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_P_A_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_1_A_MBgC VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql9 = 'CREATE TABLE IF NOT EXISTS ' .$table_name9 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoft_Poll_TID VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TTitle VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TType VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_MW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_BoxSh_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_BoxSh_Type VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_BoxSh VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_BoxShC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_Q_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_Q_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_Q_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_Q_FF VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_Q_TA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_LAQ_W VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_LAQ_H VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_LAQ_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_LAQ_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_A_CC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_A_IH VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_A_CA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_A_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_A_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_A_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_A_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_A_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_CH_CM VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_CH_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_CH_TBC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_CH_CBC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_CH_TAC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_CH_CAC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_A_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_A_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_A_HSh_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_A_HShC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_LAA_W VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_LAA_H VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_LAA_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_LAA_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_P_A_OC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_P_A_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_P_A_VT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_P_A_VEff VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_Play_IC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_Play_IS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_Play_IOvC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_Play_IT VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql10 = 'CREATE TABLE IF NOT EXISTS ' .$table_name10 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoft_Poll_TID VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TTitle VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TType VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_FF VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_IA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_IS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_VB_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_FF VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_IA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_IS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_RB_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_P_BB_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_P_BB_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_P_BB_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_P_BB_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_P_BB_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_P_BB_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_P_BB_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_P_BB_IA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_P_BB_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_2_P_BB_HC VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql11 = 'CREATE TABLE IF NOT EXISTS ' .$table_name11 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoft_Poll_TID VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TTitle VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TType VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_MW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BoxSh_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BoxSh_Type VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BoxSh VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BoxShC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_Q_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_Q_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_Q_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_Q_FF VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_Q_TA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_LAQ_W VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_LAQ_H VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_LAQ_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_LAQ_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_A_CA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_A_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_A_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_A_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_A_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_A_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_A_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_A_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_CH_Sh VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_CH_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_CH_TBC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_CH_CBC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_CH_TAC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_CH_CAC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_A_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_A_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_LAA_W VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_LAA_H VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_LAA_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_LAA_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_MBgC VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql12 = 'CREATE TABLE IF NOT EXISTS ' .$table_name12 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoft_Poll_TID VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TTitle VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TType VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_TV_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_TV_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_TV_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_TV_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_TV_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_VT_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_FF VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_IA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_IS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_RB_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_V_CA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_V_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_V_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_V_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_V_T VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_V_Eff VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BB_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BB_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BB_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BB_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BB_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BB_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BB_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BB_IA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BB_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_BB_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_3_VT_IA VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql13 = 'CREATE TABLE IF NOT EXISTS ' .$table_name13 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoft_Poll_TID VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TTitle VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TType VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_MW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BoxSh_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BoxSh_Type VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BoxSh VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BoxShC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_Q_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_Q_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_Q_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_Q_FF VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_Q_TA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_LAQ_W VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_LAQ_H VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_LAQ_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_LAQ_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_A_CA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_A_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_A_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_A_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_A_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_A_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_A_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_A_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_A_FF VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_A_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_A_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_I_H VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_I_Ra VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_I_OC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_I_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_I_IC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_I_IS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_Pop_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_Pop_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_Pop_IC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_Pop_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_Pop_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_LAA_W VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_LAA_H VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_LAA_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_LAA_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_TV_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_TV_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_TV_C VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql14 = 'CREATE TABLE IF NOT EXISTS ' .$table_name14 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoft_Poll_TID VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TTitle VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TType VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_TV_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_TV_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_VT_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_VT_IA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_FF VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_IA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_IS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_RB_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_V_CA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_V_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_V_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_V_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_V_T VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_V_Eff VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BB_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BB_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BB_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BB_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BB_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BB_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BB_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BB_IA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BB_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_4_BB_HC VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql15 = 'CREATE TABLE IF NOT EXISTS ' .$table_name15 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		Question_ID VARCHAR(255) NOT NULL,
		TotalSoftPoll_Q_Im VARCHAR(255) NOT NULL,
		TotalSoftPoll_Q_Vd VARCHAR(255) NOT NULL,
		TotalSoftPoll_Q_01 VARCHAR(255) NOT NULL,
		TotalSoftPoll_Q_02 VARCHAR(255) NOT NULL,
		TotalSoftPoll_Q_03 VARCHAR(255) NOT NULL,
		TotalSoftPoll_Q_04 VARCHAR(255) NOT NULL,
		TotalSoftPoll_Q_05 VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql16 = 'CREATE TABLE IF NOT EXISTS ' .$table_name16 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoft_Poll_TID VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TTitle VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TType VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_MW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BoxSh_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BoxSh_Type VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BoxSh VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BoxShC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_Q_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_Q_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_Q_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_Q_FF VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_Q_TA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_I_H VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_I_Ra VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_V_W VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_LAQ_W VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_LAQ_H VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_LAQ_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_LAQ_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_A_CA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_A_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_A_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_A_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_A_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_A_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_A_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_A_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_CH_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_CH_TBC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_CH_CBC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_CH_TAC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_CH_CAC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_A_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_A_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_LAA_W VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_LAA_H VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_LAA_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_LAA_S VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_TV_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_TV_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_TV_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_TV_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VT_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VT_IA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_FF VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql17 = 'CREATE TABLE IF NOT EXISTS ' .$table_name17 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoft_Poll_TID VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TTitle VARCHAR(255) NOT NULL,
		TotalSoft_Poll_TType VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_IA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_IS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_Show VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_BW VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_BR VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_FS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_FF VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_IA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_IS VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_V_CA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_V_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_V_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_V_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_V_T VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_V_Eff VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BB_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BB_Pos VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BB_BC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BB_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BB_C VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BB_IT VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BB_IA VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BB_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BB_HC VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_TV_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_BB_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_RB_Text VARCHAR(255) NOT NULL,
		TotalSoft_Poll_5_VB_Text VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';

	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
	dbDelta($sql1);
	dbDelta($sql2);
	dbDelta($sql3);
	dbDelta($sql4);
	dbDelta($sql5);
	dbDelta($sql6);
	dbDelta($sql7);
	dbDelta($sql8);
	dbDelta($sql9);
	dbDelta($sql10);
	dbDelta($sql11);
	dbDelta($sql12);
	dbDelta($sql13);
	dbDelta($sql14);
	dbDelta($sql15);
	dbDelta($sql16);
	dbDelta($sql17);

	$sqla   = 'ALTER TABLE ' . $table_name . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla1  = 'ALTER TABLE ' . $table_name1 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla2  = 'ALTER TABLE ' . $table_name2 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla3  = 'ALTER TABLE ' . $table_name3 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla4  = 'ALTER TABLE ' . $table_name4 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla5  = 'ALTER TABLE ' . $table_name5 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla6  = 'ALTER TABLE ' . $table_name6 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla7  = 'ALTER TABLE ' . $table_name7 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla8  = 'ALTER TABLE ' . $table_name8 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla9  = 'ALTER TABLE ' . $table_name9 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla10 = 'ALTER TABLE ' . $table_name10 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla11 = 'ALTER TABLE ' . $table_name11 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla12 = 'ALTER TABLE ' . $table_name12 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla13 = 'ALTER TABLE ' . $table_name13 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla14 = 'ALTER TABLE ' . $table_name14 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla15 = 'ALTER TABLE ' . $table_name15 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla16 = 'ALTER TABLE ' . $table_name16 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla17 = 'ALTER TABLE ' . $table_name17 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';

	$wpdb->query($sqla);
	$wpdb->query($sqla1);
	$wpdb->query($sqla2);
	$wpdb->query($sqla3);
	$wpdb->query($sqla4);
	$wpdb->query($sqla5);
	$wpdb->query($sqla6);
	$wpdb->query($sqla7);
	$wpdb->query($sqla8);
	$wpdb->query($sqla9);
	$wpdb->query($sqla10);
	$wpdb->query($sqla11);
	$wpdb->query($sqla12);
	$wpdb->query($sqla13);
	$wpdb->query($sqla14);
	$wpdb->query($sqla15);
	$wpdb->query($sqla16);
	$wpdb->query($sqla17);

	$TotalSoft_Fonts = array('Abadi MT Condensed Light','Aharoni','Aldhabi','Andalus','Angsana New','AngsanaUPC','Aparajita','Arabic Typesetting','Arial','Arial Black', 'Batang','BatangChe','Browallia New','BrowalliaUPC','Calibri','Calibri Light','Calisto MT','Cambria','Candara','Century Gothic','Comic Sans MS','Consolas', 'Constantia','Copperplate Gothic','Copperplate Gothic Light','Corbel','Cordia New','CordiaUPC','Courier New','DaunPenh','David','DFKai-SB','DilleniaUPC', 'DokChampa','Dotum','DotumChe','Ebrima','Estrangelo Edessa','EucrosiaUPC','Euphemia','FangSong','Franklin Gothic Medium','FrankRuehl','FreesiaUPC','Gabriola', 'Gadugi','Gautami','Georgia','Gisha','Gulim','GulimChe','Gungsuh','GungsuhChe','Impact','IrisUPC','Iskoola Pota','JasmineUPC','KaiTi','Kalinga','Kartika', 'Khmer UI','KodchiangUPC','Kokila','Lao UI','Latha','Leelawadee','Levenim MT','LilyUPC','Lucida Console','Lucida Handwriting Italic','Lucida Sans Unicode', 'Malgun Gothic','Mangal','Manny ITC','Marlett','Meiryo','Meiryo UI','Microsoft Himalaya','Microsoft JhengHei','Microsoft JhengHei UI','Microsoft New Tai Lue', 'Microsoft PhagsPa','Microsoft Sans Serif','Microsoft Tai Le','Microsoft Uighur','Microsoft YaHei','Microsoft YaHei UI','Microsoft Yi Baiti','MingLiU_HKSCS', 'MingLiU_HKSCS-ExtB','Miriam','Mongolian Baiti','MoolBoran','MS UI Gothic','MV Boli','Myanmar Text','Narkisim','Nirmala UI','News Gothic MT','NSimSun','Nyala', 'Palatino Linotype','Plantagenet Cherokee','Raavi','Rod','Sakkal Majalla','Segoe Print','Segoe Script','Segoe UI Symbol','Shonar Bangla','Shruti','SimHei','SimKai', 'Simplified Arabic','SimSun','SimSun-ExtB','Sylfaen','Tahoma','Times New Roman','Traditional Arabic','Trebuchet MS','Tunga','Utsaah','Vani','Vijaya');
	
	$TotalSoftFontCount=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id>%d",0));
	if(count($TotalSoftFontCount)==0)
	{
		foreach ($TotalSoft_Fonts as $Fonts) 
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name (id, Font) VALUES (%d, %s)", '', $Fonts));
		}
	}

	$TotalSoftPoll1=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE id>%d",0));
	if(count($TotalSoftPoll1) == 0)
	{
		//1
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Total Soft Poll 1', 'Standart Poll'));

		$TotalSoftPoll1_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Total Soft Poll 1'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name5 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_1_MW, TotalSoft_Poll_1_Pos, TotalSoft_Poll_1_BW, TotalSoft_Poll_1_BC, TotalSoft_Poll_1_BR, TotalSoft_Poll_1_BoxSh_Show, TotalSoft_Poll_1_BoxSh_Type, TotalSoft_Poll_1_BoxSh, TotalSoft_Poll_1_BoxShC, TotalSoft_Poll_1_Q_BgC, TotalSoft_Poll_1_Q_C, TotalSoft_Poll_1_Q_FS, TotalSoft_Poll_1_Q_FF, TotalSoft_Poll_1_Q_TA, TotalSoft_Poll_1_LAQ_W, TotalSoft_Poll_1_LAQ_H, TotalSoft_Poll_1_LAQ_C, TotalSoft_Poll_1_LAQ_S, TotalSoft_Poll_1_A_FS, TotalSoft_Poll_1_A_CTF, TotalSoft_Poll_1_A_BgC, TotalSoft_Poll_1_A_C, TotalSoft_Poll_1_CH_CM, TotalSoft_Poll_1_CH_S, TotalSoft_Poll_1_CH_TBC, TotalSoft_Poll_1_CH_CBC, TotalSoft_Poll_1_CH_TAC, TotalSoft_Poll_1_CH_CAC, TotalSoft_Poll_1_A_HBgC, TotalSoft_Poll_1_A_HC, TotalSoft_Poll_1_LAA_W, TotalSoft_Poll_1_LAA_H, TotalSoft_Poll_1_LAA_C, TotalSoft_Poll_1_LAA_S, TotalSoft_Poll_1_VB_MBgC, TotalSoft_Poll_1_VB_Pos, TotalSoft_Poll_1_VB_BW, TotalSoft_Poll_1_VB_BC, TotalSoft_Poll_1_VB_BR, TotalSoft_Poll_1_VB_BgC, TotalSoft_Poll_1_VB_C, TotalSoft_Poll_1_VB_FS, TotalSoft_Poll_1_VB_FF, TotalSoft_Poll_1_VB_Text, TotalSoft_Poll_1_VB_IT, TotalSoft_Poll_1_VB_IA, TotalSoft_Poll_1_VB_IS, TotalSoft_Poll_1_VB_HBgC, TotalSoft_Poll_1_VB_HC, TotalSoft_Poll_1_RB_Show, TotalSoft_Poll_1_RB_Pos, TotalSoft_Poll_1_RB_BW, TotalSoft_Poll_1_RB_BC, TotalSoft_Poll_1_RB_BR, TotalSoft_Poll_1_RB_BgC, TotalSoft_Poll_1_RB_C, TotalSoft_Poll_1_RB_FS, TotalSoft_Poll_1_RB_FF, TotalSoft_Poll_1_RB_Text, TotalSoft_Poll_1_RB_IT, TotalSoft_Poll_1_RB_IA) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll1_ID[0]->id, 'Total Soft Poll 1', 'Standart Poll', '85', 'center', '6', '#ffffff', '15', 'true', 'true', '13', '#848484', '#ffffff', '#000000', '23', 'Gabriola', 'center', '80', '1', '#1e73be', 'solid', '17', 'true', '#ffffff', '#1e73be', 'false', 'medium 1', 'f10c', '#000000', 'f192', '#000000', '#ffffff', '#333333', '80', '1', '#1e73be', 'solid', '#ffffff', 'right', '1', '#e8e8e8', '10', '#ffffff', '#000000', '20', 'Gabriola', 'Vote', 'f0a1', 'before', '18', '#ffffff', '#515151', 'true', 'left', '1', '#e8e8e8', '10', '#ffffff', '#000000', '20', 'Gabriola', 'Results', 'f084', 'after'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name8 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_1_RB_IS, TotalSoft_Poll_1_RB_HBgC, TotalSoft_Poll_1_RB_HC, TotalSoft_Poll_1_P_BW, TotalSoft_Poll_1_P_BC, TotalSoft_Poll_1_P_ShPop, TotalSoft_Poll_1_P_ShEff, TotalSoft_Poll_1_P_Q_BgC, TotalSoft_Poll_1_P_Q_C, TotalSoft_Poll_1_P_LAQ_W, TotalSoft_Poll_1_P_LAQ_H, TotalSoft_Poll_1_P_LAQ_C, TotalSoft_Poll_1_P_LAQ_S, TotalSoft_Poll_1_P_A_BgC, TotalSoft_Poll_1_P_A_C, TotalSoft_Poll_1_P_A_VT, TotalSoft_Poll_1_P_A_VC, TotalSoft_Poll_1_P_A_VEff, TotalSoft_Poll_1_P_LAA_W, TotalSoft_Poll_1_P_LAA_H, TotalSoft_Poll_1_P_LAA_C, TotalSoft_Poll_1_P_LAA_S, TotalSoft_Poll_1_P_BB_Pos, TotalSoft_Poll_1_P_BB_BC, TotalSoft_Poll_1_P_BB_BgC, TotalSoft_Poll_1_P_BB_C, TotalSoft_Poll_1_P_BB_Text, TotalSoft_Poll_1_P_BB_IT, TotalSoft_Poll_1_P_BB_IA, TotalSoft_Poll_1_P_BB_HBgC, TotalSoft_Poll_1_P_BB_HC, TotalSoft_Poll_1_P_BB_MBgC, TotalSoft_Poll_1_P_A_MBgC, TotalSoft_Poll_1_A_MBgC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll1_ID[0]->id, 'Total Soft Poll 1', 'Standart Poll', '18', '#ffffff', '#515151', '1', '#ffffff', 'false', 'FCTA', '#ffffff', '#000000', '80', '1', '#1e73be', 'solid', '#d1d1d1', '#000000', 'both', '#ffffff', '0', '80', '1', '#1e73be', 'solid', 'right', '#ffffff', '#ffffff', '#000000', 'Back', 'f021', 'before', '#ffffff', '#515151', '#ffffff', '#ffffff', '#ffffff'));
		//2
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Total Soft Poll 2', 'Standart Poll'));

		$TotalSoftPoll1_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Total Soft Poll 2'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name5 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_1_MW, TotalSoft_Poll_1_Pos, TotalSoft_Poll_1_BW, TotalSoft_Poll_1_BC, TotalSoft_Poll_1_BR, TotalSoft_Poll_1_BoxSh_Show, TotalSoft_Poll_1_BoxSh_Type, TotalSoft_Poll_1_BoxSh, TotalSoft_Poll_1_BoxShC, TotalSoft_Poll_1_Q_BgC, TotalSoft_Poll_1_Q_C, TotalSoft_Poll_1_Q_FS, TotalSoft_Poll_1_Q_FF, TotalSoft_Poll_1_Q_TA, TotalSoft_Poll_1_LAQ_W, TotalSoft_Poll_1_LAQ_H, TotalSoft_Poll_1_LAQ_C, TotalSoft_Poll_1_LAQ_S, TotalSoft_Poll_1_A_FS, TotalSoft_Poll_1_A_CTF, TotalSoft_Poll_1_A_BgC, TotalSoft_Poll_1_A_C, TotalSoft_Poll_1_CH_CM, TotalSoft_Poll_1_CH_S, TotalSoft_Poll_1_CH_TBC, TotalSoft_Poll_1_CH_CBC, TotalSoft_Poll_1_CH_TAC, TotalSoft_Poll_1_CH_CAC, TotalSoft_Poll_1_A_HBgC, TotalSoft_Poll_1_A_HC, TotalSoft_Poll_1_LAA_W, TotalSoft_Poll_1_LAA_H, TotalSoft_Poll_1_LAA_C, TotalSoft_Poll_1_LAA_S, TotalSoft_Poll_1_VB_MBgC, TotalSoft_Poll_1_VB_Pos, TotalSoft_Poll_1_VB_BW, TotalSoft_Poll_1_VB_BC, TotalSoft_Poll_1_VB_BR, TotalSoft_Poll_1_VB_BgC, TotalSoft_Poll_1_VB_C, TotalSoft_Poll_1_VB_FS, TotalSoft_Poll_1_VB_FF, TotalSoft_Poll_1_VB_Text, TotalSoft_Poll_1_VB_IT, TotalSoft_Poll_1_VB_IA, TotalSoft_Poll_1_VB_IS, TotalSoft_Poll_1_VB_HBgC, TotalSoft_Poll_1_VB_HC, TotalSoft_Poll_1_RB_Show, TotalSoft_Poll_1_RB_Pos, TotalSoft_Poll_1_RB_BW, TotalSoft_Poll_1_RB_BC, TotalSoft_Poll_1_RB_BR, TotalSoft_Poll_1_RB_BgC, TotalSoft_Poll_1_RB_C, TotalSoft_Poll_1_RB_FS, TotalSoft_Poll_1_RB_FF, TotalSoft_Poll_1_RB_Text, TotalSoft_Poll_1_RB_IT, TotalSoft_Poll_1_RB_IA) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll1_ID[0]->id, 'Total Soft Poll 2', 'Standart Poll', '70', 'center', '4', '#000000', '10', 'true', 'false', '13', '#848484', '#000000', '#ffffff', '23', 'Gabriola', 'center', '80', '0', '#1e73be', 'solid', '17', 'true', '#000000', '#dd9933', 'false', 'small', 'f10c', '#dd9933', 'f192', '#dd9933', '#000000', '#ffffff', '80', '1', '#dd9933', 'solid', '#000000', 'right', '1', '#000000', '10', '#dd9933', '#ffffff', '18', 'Gabriola', 'Vote', 'f1d8', 'before', '18', '#dd9933', '#ffffff', 'true', 'left', '1', '#000000', '10', '#dd9933', '#ffffff', '18', 'Gabriola', 'Results', 'f05a', 'after'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name8 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_1_RB_IS, TotalSoft_Poll_1_RB_HBgC, TotalSoft_Poll_1_RB_HC, TotalSoft_Poll_1_P_BW, TotalSoft_Poll_1_P_BC, TotalSoft_Poll_1_P_ShPop, TotalSoft_Poll_1_P_ShEff, TotalSoft_Poll_1_P_Q_BgC, TotalSoft_Poll_1_P_Q_C, TotalSoft_Poll_1_P_LAQ_W, TotalSoft_Poll_1_P_LAQ_H, TotalSoft_Poll_1_P_LAQ_C, TotalSoft_Poll_1_P_LAQ_S, TotalSoft_Poll_1_P_A_BgC, TotalSoft_Poll_1_P_A_C, TotalSoft_Poll_1_P_A_VT, TotalSoft_Poll_1_P_A_VC, TotalSoft_Poll_1_P_A_VEff, TotalSoft_Poll_1_P_LAA_W, TotalSoft_Poll_1_P_LAA_H, TotalSoft_Poll_1_P_LAA_C, TotalSoft_Poll_1_P_LAA_S, TotalSoft_Poll_1_P_BB_Pos, TotalSoft_Poll_1_P_BB_BC, TotalSoft_Poll_1_P_BB_BgC, TotalSoft_Poll_1_P_BB_C, TotalSoft_Poll_1_P_BB_Text, TotalSoft_Poll_1_P_BB_IT, TotalSoft_Poll_1_P_BB_IA, TotalSoft_Poll_1_P_BB_HBgC, TotalSoft_Poll_1_P_BB_HC, TotalSoft_Poll_1_P_BB_MBgC, TotalSoft_Poll_1_P_A_MBgC, TotalSoft_Poll_1_A_MBgC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll1_ID[0]->id, 'Total Soft Poll 2', 'Standart Poll', '18', '#dd9933', '#ffffff', '1', '#ffffff', 'false', 'FTTB', '#000000', '#ffffff', '80', '1', '#ffffff', 'solid', '#000000', '#dd9933', 'both', '#ffffff', '1', '80', '1', '#ffffff', 'solid', 'full', '#dd9933', '#dd9933', '#ffffff', 'Back', 'f021', 'before', '#dd9933', '#ffffff', '#000000', '#000000', '#000000'));
		//3
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Total Soft Poll 3', 'Standart Poll'));

		$TotalSoftPoll1_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Total Soft Poll 3'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name5 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_1_MW, TotalSoft_Poll_1_Pos, TotalSoft_Poll_1_BW, TotalSoft_Poll_1_BC, TotalSoft_Poll_1_BR, TotalSoft_Poll_1_BoxSh_Show, TotalSoft_Poll_1_BoxSh_Type, TotalSoft_Poll_1_BoxSh, TotalSoft_Poll_1_BoxShC, TotalSoft_Poll_1_Q_BgC, TotalSoft_Poll_1_Q_C, TotalSoft_Poll_1_Q_FS, TotalSoft_Poll_1_Q_FF, TotalSoft_Poll_1_Q_TA, TotalSoft_Poll_1_LAQ_W, TotalSoft_Poll_1_LAQ_H, TotalSoft_Poll_1_LAQ_C, TotalSoft_Poll_1_LAQ_S, TotalSoft_Poll_1_A_FS, TotalSoft_Poll_1_A_CTF, TotalSoft_Poll_1_A_BgC, TotalSoft_Poll_1_A_C, TotalSoft_Poll_1_CH_CM, TotalSoft_Poll_1_CH_S, TotalSoft_Poll_1_CH_TBC, TotalSoft_Poll_1_CH_CBC, TotalSoft_Poll_1_CH_TAC, TotalSoft_Poll_1_CH_CAC, TotalSoft_Poll_1_A_HBgC, TotalSoft_Poll_1_A_HC, TotalSoft_Poll_1_LAA_W, TotalSoft_Poll_1_LAA_H, TotalSoft_Poll_1_LAA_C, TotalSoft_Poll_1_LAA_S, TotalSoft_Poll_1_VB_MBgC, TotalSoft_Poll_1_VB_Pos, TotalSoft_Poll_1_VB_BW, TotalSoft_Poll_1_VB_BC, TotalSoft_Poll_1_VB_BR, TotalSoft_Poll_1_VB_BgC, TotalSoft_Poll_1_VB_C, TotalSoft_Poll_1_VB_FS, TotalSoft_Poll_1_VB_FF, TotalSoft_Poll_1_VB_Text, TotalSoft_Poll_1_VB_IT, TotalSoft_Poll_1_VB_IA, TotalSoft_Poll_1_VB_IS, TotalSoft_Poll_1_VB_HBgC, TotalSoft_Poll_1_VB_HC, TotalSoft_Poll_1_RB_Show, TotalSoft_Poll_1_RB_Pos, TotalSoft_Poll_1_RB_BW, TotalSoft_Poll_1_RB_BC, TotalSoft_Poll_1_RB_BR, TotalSoft_Poll_1_RB_BgC, TotalSoft_Poll_1_RB_C, TotalSoft_Poll_1_RB_FS, TotalSoft_Poll_1_RB_FF, TotalSoft_Poll_1_RB_Text, TotalSoft_Poll_1_RB_IT, TotalSoft_Poll_1_RB_IA) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll1_ID[0]->id, 'Total Soft Poll 3', 'Standart Poll', '85', 'center', '0', '#dd3333', '15', 'true', 'true', '10', '#848484', '#ffffff', '#dd0000', '23', 'Gabriola', 'center', '80', '1', '#000000', 'solid', '17', 'false', '#ffffff', '#1e73be', 'true', 'medium 1', 'f096', '#000000', 'f14a', '#000000', '#ffffff', '#333333', '80', '1', '#000000', 'solid', '#ffffff', 'right', '1', '#dd3333', '10', '#ffffff', '#dd3333', '16', 'Aldhabi', 'Vote', 'f124', 'before', '18', '#ffffff', '#dd0000', 'true', 'left', '1', '#dd3333', '10', '#ffffff', '#dd3333', '16', 'Aldhabi', 'Results', 'f128', 'after'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name8 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_1_RB_IS, TotalSoft_Poll_1_RB_HBgC, TotalSoft_Poll_1_RB_HC, TotalSoft_Poll_1_P_BW, TotalSoft_Poll_1_P_BC, TotalSoft_Poll_1_P_ShPop, TotalSoft_Poll_1_P_ShEff, TotalSoft_Poll_1_P_Q_BgC, TotalSoft_Poll_1_P_Q_C, TotalSoft_Poll_1_P_LAQ_W, TotalSoft_Poll_1_P_LAQ_H, TotalSoft_Poll_1_P_LAQ_C, TotalSoft_Poll_1_P_LAQ_S, TotalSoft_Poll_1_P_A_BgC, TotalSoft_Poll_1_P_A_C, TotalSoft_Poll_1_P_A_VT, TotalSoft_Poll_1_P_A_VC, TotalSoft_Poll_1_P_A_VEff, TotalSoft_Poll_1_P_LAA_W, TotalSoft_Poll_1_P_LAA_H, TotalSoft_Poll_1_P_LAA_C, TotalSoft_Poll_1_P_LAA_S, TotalSoft_Poll_1_P_BB_Pos, TotalSoft_Poll_1_P_BB_BC, TotalSoft_Poll_1_P_BB_BgC, TotalSoft_Poll_1_P_BB_C, TotalSoft_Poll_1_P_BB_Text, TotalSoft_Poll_1_P_BB_IT, TotalSoft_Poll_1_P_BB_IA, TotalSoft_Poll_1_P_BB_HBgC, TotalSoft_Poll_1_P_BB_HC, TotalSoft_Poll_1_P_BB_MBgC, TotalSoft_Poll_1_P_A_MBgC, TotalSoft_Poll_1_A_MBgC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll1_ID[0]->id, 'Total Soft Poll 3', 'Standart Poll', '18', '#ffffff', '#ff0000', '1', '#ffffff', 'true', 'FTTB', '#ffffff', '#dd3333', '80', '1', '#000000', 'solid', '#eaeaea', '#000000', 'both', '#000000', '10', '80', '1', '#000000', 'solid', 'right', '#ff0000', '#ffffff', '#ff0000', 'Back', 'f021', 'before', '#ffffff', '#dd3333', '#ffffff', '#ffffff', '#ffffff'));
		//4
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Total Soft Poll 4', 'Standart Poll'));

		$TotalSoftPoll1_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Total Soft Poll 4'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name5 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_1_MW, TotalSoft_Poll_1_Pos, TotalSoft_Poll_1_BW, TotalSoft_Poll_1_BC, TotalSoft_Poll_1_BR, TotalSoft_Poll_1_BoxSh_Show, TotalSoft_Poll_1_BoxSh_Type, TotalSoft_Poll_1_BoxSh, TotalSoft_Poll_1_BoxShC, TotalSoft_Poll_1_Q_BgC, TotalSoft_Poll_1_Q_C, TotalSoft_Poll_1_Q_FS, TotalSoft_Poll_1_Q_FF, TotalSoft_Poll_1_Q_TA, TotalSoft_Poll_1_LAQ_W, TotalSoft_Poll_1_LAQ_H, TotalSoft_Poll_1_LAQ_C, TotalSoft_Poll_1_LAQ_S, TotalSoft_Poll_1_A_FS, TotalSoft_Poll_1_A_CTF, TotalSoft_Poll_1_A_BgC, TotalSoft_Poll_1_A_C, TotalSoft_Poll_1_CH_CM, TotalSoft_Poll_1_CH_S, TotalSoft_Poll_1_CH_TBC, TotalSoft_Poll_1_CH_CBC, TotalSoft_Poll_1_CH_TAC, TotalSoft_Poll_1_CH_CAC, TotalSoft_Poll_1_A_HBgC, TotalSoft_Poll_1_A_HC, TotalSoft_Poll_1_LAA_W, TotalSoft_Poll_1_LAA_H, TotalSoft_Poll_1_LAA_C, TotalSoft_Poll_1_LAA_S, TotalSoft_Poll_1_VB_MBgC, TotalSoft_Poll_1_VB_Pos, TotalSoft_Poll_1_VB_BW, TotalSoft_Poll_1_VB_BC, TotalSoft_Poll_1_VB_BR, TotalSoft_Poll_1_VB_BgC, TotalSoft_Poll_1_VB_C, TotalSoft_Poll_1_VB_FS, TotalSoft_Poll_1_VB_FF, TotalSoft_Poll_1_VB_Text, TotalSoft_Poll_1_VB_IT, TotalSoft_Poll_1_VB_IA, TotalSoft_Poll_1_VB_IS, TotalSoft_Poll_1_VB_HBgC, TotalSoft_Poll_1_VB_HC, TotalSoft_Poll_1_RB_Show, TotalSoft_Poll_1_RB_Pos, TotalSoft_Poll_1_RB_BW, TotalSoft_Poll_1_RB_BC, TotalSoft_Poll_1_RB_BR, TotalSoft_Poll_1_RB_BgC, TotalSoft_Poll_1_RB_C, TotalSoft_Poll_1_RB_FS, TotalSoft_Poll_1_RB_FF, TotalSoft_Poll_1_RB_Text, TotalSoft_Poll_1_RB_IT, TotalSoft_Poll_1_RB_IA) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll1_ID[0]->id, 'Total Soft Poll 4', 'Standart Poll', '85', 'center', '4', '#ffffff', '15', 'true', 'true', '13', '#848484', '#ff0044', '#ffffff', '23', 'Gabriola', 'center', '80', '1', '#ffffff', 'solid', '17', 'true', '#ff0044', '#ffffff', 'false', 'medium 1', 'f10c', '#ffffff', 'f192', '#ffffff', '#dd003b', '#ffffff', '80', '1', '#ffffff', 'solid', '#ff0044', 'right', '1', '#ffffff', '10', '#ffffff', '#ff0044', '20', 'Gabriola', 'Vote', 'f25a', 'before', '18', '#ff0044', '#ffffff', 'true', 'left', '1', '#ffffff', '10', '#ffffff', '#ff0044', '16', 'Arial', 'Results', 'f080', 'after'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name8 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_1_RB_IS, TotalSoft_Poll_1_RB_HBgC, TotalSoft_Poll_1_RB_HC, TotalSoft_Poll_1_P_BW, TotalSoft_Poll_1_P_BC, TotalSoft_Poll_1_P_ShPop, TotalSoft_Poll_1_P_ShEff, TotalSoft_Poll_1_P_Q_BgC, TotalSoft_Poll_1_P_Q_C, TotalSoft_Poll_1_P_LAQ_W, TotalSoft_Poll_1_P_LAQ_H, TotalSoft_Poll_1_P_LAQ_C, TotalSoft_Poll_1_P_LAQ_S, TotalSoft_Poll_1_P_A_BgC, TotalSoft_Poll_1_P_A_C, TotalSoft_Poll_1_P_A_VT, TotalSoft_Poll_1_P_A_VC, TotalSoft_Poll_1_P_A_VEff, TotalSoft_Poll_1_P_LAA_W, TotalSoft_Poll_1_P_LAA_H, TotalSoft_Poll_1_P_LAA_C, TotalSoft_Poll_1_P_LAA_S, TotalSoft_Poll_1_P_BB_Pos, TotalSoft_Poll_1_P_BB_BC, TotalSoft_Poll_1_P_BB_BgC, TotalSoft_Poll_1_P_BB_C, TotalSoft_Poll_1_P_BB_Text, TotalSoft_Poll_1_P_BB_IT, TotalSoft_Poll_1_P_BB_IA, TotalSoft_Poll_1_P_BB_HBgC, TotalSoft_Poll_1_P_BB_HC, TotalSoft_Poll_1_P_BB_MBgC, TotalSoft_Poll_1_P_A_MBgC, TotalSoft_Poll_1_A_MBgC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll1_ID[0]->id, 'Total Soft Poll 4', 'Standart Poll', '18', '#ff0044', '#ffffff', '4', '#ffffff', 'false', 'FTTB', '#ff0044', '#ffffff', '80', '1', '#ffffff', 'solid', '#ffffff', '#e8e8e8', 'count', '#ff0044', '0', '80', '1', '#ffffff', 'solid', 'full', '#ffffff', '#ffffff', '#ff0044', 'Back', 'f021', 'before', '#ff0044', '#ffffff', '#ff0044', '#ff0044', '#ff0044'));
	}

	$TotalSoftPollQuest1=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id>%d",0));
	if(count($TotalSoftPollQuest1) == 0)
	{
		$TotalSoftPoll1_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Total Soft Poll 1'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name1 (id, TotalSoftPoll_Question, TotalSoftPoll_Theme, TotalSoftPoll_Ans_C) VALUES (%d, %s, %s, %s)", '', 'Do You Like Our Plugin?', $TotalSoftPoll1_ID[0]->id, '5'));

		$TotalSoftPollQuest1_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE TotalSoftPoll_Question=%s order by id desc limit 1", 'Do You Like Our Plugin?'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name3 (id, Poll_ID) VALUES (%d, %d)", '', $TotalSoftPollQuest1_ID[0]->id));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, Question_ID, TotalSoftPoll_Ans, TotalSoftPoll_Ans_Im, TotalSoftPoll_Ans_Vd, TotalSoftPoll_Ans_Cl, TotalSoftPoll_Ans_01, TotalSoftPoll_Ans_02, TotalSoftPoll_Ans_03, TotalSoftPoll_Ans_04, TotalSoftPoll_Ans_05) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPollQuest1_ID[0]->id, 'Yes', '', '', '#dd3333', '', '', '', '', ''));
		$TotalSoftPollAns1_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE Question_ID=%s order by id desc limit 1", $TotalSoftPollQuest1_ID[0]->id));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Poll_ID, Poll_A_ID, Poll_A_Votes) VALUES (%d, %s, %s, %s)", '', $TotalSoftPollQuest1_ID[0]->id, $TotalSoftPollAns1_ID[0]->id, 50));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, Question_ID, TotalSoftPoll_Ans, TotalSoftPoll_Ans_Im, TotalSoftPoll_Ans_Vd, TotalSoftPoll_Ans_Cl, TotalSoftPoll_Ans_01, TotalSoftPoll_Ans_02, TotalSoftPoll_Ans_03, TotalSoftPoll_Ans_04, TotalSoftPoll_Ans_05) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPollQuest1_ID[0]->id, 'No', '', '', '#dd9933', '', '', '', '', ''));
		$TotalSoftPollAns1_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE Question_ID=%s order by id desc limit 1", $TotalSoftPollQuest1_ID[0]->id));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Poll_ID, Poll_A_ID, Poll_A_Votes) VALUES (%d, %s, %s, %s)", '', $TotalSoftPollQuest1_ID[0]->id, $TotalSoftPollAns1_ID[0]->id, 20));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, Question_ID, TotalSoftPoll_Ans, TotalSoftPoll_Ans_Im, TotalSoftPoll_Ans_Vd, TotalSoftPoll_Ans_Cl, TotalSoftPoll_Ans_01, TotalSoftPoll_Ans_02, TotalSoftPoll_Ans_03, TotalSoftPoll_Ans_04, TotalSoftPoll_Ans_05) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPollQuest1_ID[0]->id, 'Not at All', '', '', '#81d742', '', '', '', '', ''));
		$TotalSoftPollAns1_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE Question_ID=%s order by id desc limit 1", $TotalSoftPollQuest1_ID[0]->id));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Poll_ID, Poll_A_ID, Poll_A_Votes) VALUES (%d, %s, %s, %s)", '', $TotalSoftPollQuest1_ID[0]->id, $TotalSoftPollAns1_ID[0]->id, 30));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, Question_ID, TotalSoftPoll_Ans, TotalSoftPoll_Ans_Im, TotalSoftPoll_Ans_Vd, TotalSoftPoll_Ans_Cl, TotalSoftPoll_Ans_01, TotalSoftPoll_Ans_02, TotalSoftPoll_Ans_03, TotalSoftPoll_Ans_04, TotalSoftPoll_Ans_05) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPollQuest1_ID[0]->id, 'Of Course', '', '', '#1e73be', '', '', '', '', ''));
		$TotalSoftPollAns1_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE Question_ID=%s order by id desc limit 1", $TotalSoftPollQuest1_ID[0]->id));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Poll_ID, Poll_A_ID, Poll_A_Votes) VALUES (%d, %s, %s, %s)", '', $TotalSoftPollQuest1_ID[0]->id, $TotalSoftPollAns1_ID[0]->id, 70));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, Question_ID, TotalSoftPoll_Ans, TotalSoftPoll_Ans_Im, TotalSoftPoll_Ans_Vd, TotalSoftPoll_Ans_Cl, TotalSoftPoll_Ans_01, TotalSoftPoll_Ans_02, TotalSoftPoll_Ans_03, TotalSoftPoll_Ans_04, TotalSoftPoll_Ans_05) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPollQuest1_ID[0]->id, 'The Best Plugin Ever', '', '', '#8224e3', '', '', '', '', ''));
		$TotalSoftPollAns1_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE Question_ID=%s order by id desc limit 1", $TotalSoftPollQuest1_ID[0]->id));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Poll_ID, Poll_A_ID, Poll_A_Votes) VALUES (%d, %s, %s, %s)", '', $TotalSoftPollQuest1_ID[0]->id, $TotalSoftPollAns1_ID[0]->id, 110));
	}
	$TotalSoftPollQuest2=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id>%d",0));
	$TotalSoftPollQuest3=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name15 WHERE id>%d",0));
	if(count($TotalSoftPollQuest2) != 0 && count($TotalSoftPollQuest3) == 0)
	{
		for($i = 0; $i < count($TotalSoftPollQuest2); $i++)
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name15 (id, Question_ID, TotalSoftPoll_Q_Im, TotalSoftPoll_Q_Vd, TotalSoftPoll_Q_01, TotalSoftPoll_Q_02, TotalSoftPoll_Q_03, TotalSoftPoll_Q_04, TotalSoftPoll_Q_05) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPollQuest2[$i]->id, '', '', '', '', '', '', ''));
		}
	}

	$TotalSoftPoll2=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9 WHERE id>%d",0));
	if(count($TotalSoftPoll2) == 0)
	{
		//1
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Total Soft Image Poll 1', 'Image Poll'));

		$TotalSoftPoll2_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Total Soft Image Poll 1'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name9 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_2_MW, TotalSoft_Poll_2_Pos, TotalSoft_Poll_2_BW, TotalSoft_Poll_2_BC, TotalSoft_Poll_2_BR, TotalSoft_Poll_2_BoxSh_Show, TotalSoft_Poll_2_BoxSh_Type, TotalSoft_Poll_2_BoxSh, TotalSoft_Poll_2_BoxShC, TotalSoft_Poll_2_Q_BgC, TotalSoft_Poll_2_Q_C, TotalSoft_Poll_2_Q_FS, TotalSoft_Poll_2_Q_FF, TotalSoft_Poll_2_Q_TA, TotalSoft_Poll_2_LAQ_W, TotalSoft_Poll_2_LAQ_H, TotalSoft_Poll_2_LAQ_C, TotalSoft_Poll_2_LAQ_S, TotalSoft_Poll_2_A_CC, TotalSoft_Poll_2_A_IH, TotalSoft_Poll_2_A_CA, TotalSoft_Poll_2_A_FS, TotalSoft_Poll_2_A_MBgC, TotalSoft_Poll_2_A_BgC, TotalSoft_Poll_2_A_C, TotalSoft_Poll_2_A_Pos, TotalSoft_Poll_2_CH_CM, TotalSoft_Poll_2_CH_S, TotalSoft_Poll_2_CH_TBC, TotalSoft_Poll_2_CH_CBC, TotalSoft_Poll_2_CH_TAC, TotalSoft_Poll_2_CH_CAC, TotalSoft_Poll_2_A_HBgC, TotalSoft_Poll_2_A_HC, TotalSoft_Poll_2_A_HSh_Show, TotalSoft_Poll_2_A_HShC, TotalSoft_Poll_2_LAA_W, TotalSoft_Poll_2_LAA_H, TotalSoft_Poll_2_LAA_C, TotalSoft_Poll_2_LAA_S, TotalSoft_Poll_2_P_A_OC, TotalSoft_Poll_2_P_A_C, TotalSoft_Poll_2_P_A_VT, TotalSoft_Poll_2_P_A_VEff, TotalSoft_Poll_2_VB_MBgC, TotalSoft_Poll_2_VB_Pos, TotalSoft_Poll_2_VB_BW, TotalSoft_Poll_2_VB_BC, TotalSoft_Poll_2_Play_IC, TotalSoft_Poll_2_Play_IS, TotalSoft_Poll_2_Play_IOvC, TotalSoft_Poll_2_Play_IT) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Total Soft Image Poll 1', 'Image Poll', '100', 'center', '0', '#000000', '8', 'true', 'true', '22', '#7c7c7c', '#ffffff', '#000000', '20', 'Abadi MT Condensed Light', 'center', '80', '1', '#939393', 'solid', '2', '160', 'Nothing', '14', '#ffffff', '#cccccc', '#000000', 'Position 3', 'false', 'medium 1', 'f10c', '#000000', 'f192', '#1e73be', '#ffffff', '#000000', 'true', '#ffffff', '66', '2', '#ffffff', 'solid', 'rgba(30,115,190,0.5)', '#ffffff', 'bothlab', '1', '#ffffff', 'right', '3', '#000000', '', '', '', ''));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name10 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_2_VB_BR, TotalSoft_Poll_2_VB_BgC, TotalSoft_Poll_2_VB_C, TotalSoft_Poll_2_VB_FS, TotalSoft_Poll_2_VB_FF, TotalSoft_Poll_2_VB_Text, TotalSoft_Poll_2_VB_IT, TotalSoft_Poll_2_VB_IA, TotalSoft_Poll_2_VB_IS, TotalSoft_Poll_2_VB_HBgC, TotalSoft_Poll_2_VB_HC, TotalSoft_Poll_2_RB_Show, TotalSoft_Poll_2_RB_Pos, TotalSoft_Poll_2_RB_BW, TotalSoft_Poll_2_RB_BC, TotalSoft_Poll_2_RB_BR, TotalSoft_Poll_2_RB_BgC, TotalSoft_Poll_2_RB_C, TotalSoft_Poll_2_RB_FS, TotalSoft_Poll_2_RB_FF, TotalSoft_Poll_2_RB_Text, TotalSoft_Poll_2_RB_IT, TotalSoft_Poll_2_RB_IA, TotalSoft_Poll_2_RB_IS, TotalSoft_Poll_2_RB_HBgC, TotalSoft_Poll_2_RB_HC, TotalSoft_Poll_2_P_BB_MBgC, TotalSoft_Poll_2_P_BB_Pos, TotalSoft_Poll_2_P_BB_BC, TotalSoft_Poll_2_P_BB_BgC, TotalSoft_Poll_2_P_BB_C, TotalSoft_Poll_2_P_BB_Text, TotalSoft_Poll_2_P_BB_IT, TotalSoft_Poll_2_P_BB_IA, TotalSoft_Poll_2_P_BB_HBgC, TotalSoft_Poll_2_P_BB_HC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Total Soft Image Poll 1', 'Image Poll', '2', '#000000', '#ffffff', '20', 'Abadi MT Condensed Light', 'Vote', '', 'after', '18', '#000000', '#cccccc', 'true', 'right', '3', '#000000', '2', '#000000', '#ffffff', '20', 'Abadi MT Condensed Light', 'Results', '', 'before', '21', '#000000', '#cccccc', '#ffffff', 'full', '#000000', '#000000', '#ffffff', 'Back', 'f015', 'after', '#000000', '#cccccc'));
		//2
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Total Soft Image Poll 2', 'Image Poll'));

		$TotalSoftPoll2_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Total Soft Image Poll 2'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name9 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_2_MW, TotalSoft_Poll_2_Pos, TotalSoft_Poll_2_BW, TotalSoft_Poll_2_BC, TotalSoft_Poll_2_BR, TotalSoft_Poll_2_BoxSh_Show, TotalSoft_Poll_2_BoxSh_Type, TotalSoft_Poll_2_BoxSh, TotalSoft_Poll_2_BoxShC, TotalSoft_Poll_2_Q_BgC, TotalSoft_Poll_2_Q_C, TotalSoft_Poll_2_Q_FS, TotalSoft_Poll_2_Q_FF, TotalSoft_Poll_2_Q_TA, TotalSoft_Poll_2_LAQ_W, TotalSoft_Poll_2_LAQ_H, TotalSoft_Poll_2_LAQ_C, TotalSoft_Poll_2_LAQ_S, TotalSoft_Poll_2_A_CC, TotalSoft_Poll_2_A_IH, TotalSoft_Poll_2_A_CA, TotalSoft_Poll_2_A_FS, TotalSoft_Poll_2_A_MBgC, TotalSoft_Poll_2_A_BgC, TotalSoft_Poll_2_A_C, TotalSoft_Poll_2_A_Pos, TotalSoft_Poll_2_CH_CM, TotalSoft_Poll_2_CH_S, TotalSoft_Poll_2_CH_TBC, TotalSoft_Poll_2_CH_CBC, TotalSoft_Poll_2_CH_TAC, TotalSoft_Poll_2_CH_CAC, TotalSoft_Poll_2_A_HBgC, TotalSoft_Poll_2_A_HC, TotalSoft_Poll_2_A_HSh_Show, TotalSoft_Poll_2_A_HShC, TotalSoft_Poll_2_LAA_W, TotalSoft_Poll_2_LAA_H, TotalSoft_Poll_2_LAA_C, TotalSoft_Poll_2_LAA_S, TotalSoft_Poll_2_P_A_OC, TotalSoft_Poll_2_P_A_C, TotalSoft_Poll_2_P_A_VT, TotalSoft_Poll_2_P_A_VEff, TotalSoft_Poll_2_VB_MBgC, TotalSoft_Poll_2_VB_Pos, TotalSoft_Poll_2_VB_BW, TotalSoft_Poll_2_VB_BC, TotalSoft_Poll_2_Play_IC, TotalSoft_Poll_2_Play_IS, TotalSoft_Poll_2_Play_IOvC, TotalSoft_Poll_2_Play_IT) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Total Soft Image Poll 2', 'Image Poll', '100', 'center', '0', '#000000', '8', 'true', 'true', '22', '#7c7c7c', '#1e73be', '#ffffff', '25', 'Gabriola', 'center', '80', '1', '#ffffff', 'solid', '3', '160', 'Background', '15', '#ffffff', '#cccccc', '#ffffff', 'Position 3', 'false', 'medium 1', 'f096', '#ffffff', 'f046', '#ffffff', '#1e73be', '#ffffff', 'true', '#1e73be', '66', '2', '#1e73be', 'solid', 'rgba(0,0,0,0.5)', '#ffffff', 'bothlab', '0', '#ffffff', 'right', '3', '#1e73be', '', '', '', ''));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name10 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_2_VB_BR, TotalSoft_Poll_2_VB_BgC, TotalSoft_Poll_2_VB_C, TotalSoft_Poll_2_VB_FS, TotalSoft_Poll_2_VB_FF, TotalSoft_Poll_2_VB_Text, TotalSoft_Poll_2_VB_IT, TotalSoft_Poll_2_VB_IA, TotalSoft_Poll_2_VB_IS, TotalSoft_Poll_2_VB_HBgC, TotalSoft_Poll_2_VB_HC, TotalSoft_Poll_2_RB_Show, TotalSoft_Poll_2_RB_Pos, TotalSoft_Poll_2_RB_BW, TotalSoft_Poll_2_RB_BC, TotalSoft_Poll_2_RB_BR, TotalSoft_Poll_2_RB_BgC, TotalSoft_Poll_2_RB_C, TotalSoft_Poll_2_RB_FS, TotalSoft_Poll_2_RB_FF, TotalSoft_Poll_2_RB_Text, TotalSoft_Poll_2_RB_IT, TotalSoft_Poll_2_RB_IA, TotalSoft_Poll_2_RB_IS, TotalSoft_Poll_2_RB_HBgC, TotalSoft_Poll_2_RB_HC, TotalSoft_Poll_2_P_BB_MBgC, TotalSoft_Poll_2_P_BB_Pos, TotalSoft_Poll_2_P_BB_BC, TotalSoft_Poll_2_P_BB_BgC, TotalSoft_Poll_2_P_BB_C, TotalSoft_Poll_2_P_BB_Text, TotalSoft_Poll_2_P_BB_IT, TotalSoft_Poll_2_P_BB_IA, TotalSoft_Poll_2_P_BB_HBgC, TotalSoft_Poll_2_P_BB_HC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Total Soft Image Poll 2', 'Image Poll', '5', '#1e73be', '#ffffff', '24', 'Gabriola', 'Vote', 'f0fb', 'after', '18', '#1e73be', '#cccccc', 'true', 'left', '3', '#1e73be', '5', '#1e73be', '#ffffff', '24', 'Gabriola', 'Results', 'f129', 'before', '18', '#1e73be', '#cccccc', '#ffffff', 'full', '#1e73be', '#1e73be', '#ffffff', 'Back', 'f015', 'after', '#1e73be', '#cccccc'));

		//3
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Total Soft Video Poll 1', 'Video Poll'));

		$TotalSoftPoll2_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Total Soft Video Poll 1'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name9 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_2_MW, TotalSoft_Poll_2_Pos, TotalSoft_Poll_2_BW, TotalSoft_Poll_2_BC, TotalSoft_Poll_2_BR, TotalSoft_Poll_2_BoxSh_Show, TotalSoft_Poll_2_BoxSh_Type, TotalSoft_Poll_2_BoxSh, TotalSoft_Poll_2_BoxShC, TotalSoft_Poll_2_Q_BgC, TotalSoft_Poll_2_Q_C, TotalSoft_Poll_2_Q_FS, TotalSoft_Poll_2_Q_FF, TotalSoft_Poll_2_Q_TA, TotalSoft_Poll_2_LAQ_W, TotalSoft_Poll_2_LAQ_H, TotalSoft_Poll_2_LAQ_C, TotalSoft_Poll_2_LAQ_S, TotalSoft_Poll_2_A_CC, TotalSoft_Poll_2_A_IH, TotalSoft_Poll_2_A_CA, TotalSoft_Poll_2_A_FS, TotalSoft_Poll_2_A_MBgC, TotalSoft_Poll_2_A_BgC, TotalSoft_Poll_2_A_C, TotalSoft_Poll_2_A_Pos, TotalSoft_Poll_2_CH_CM, TotalSoft_Poll_2_CH_S, TotalSoft_Poll_2_CH_TBC, TotalSoft_Poll_2_CH_CBC, TotalSoft_Poll_2_CH_TAC, TotalSoft_Poll_2_CH_CAC, TotalSoft_Poll_2_A_HBgC, TotalSoft_Poll_2_A_HC, TotalSoft_Poll_2_A_HSh_Show, TotalSoft_Poll_2_A_HShC, TotalSoft_Poll_2_LAA_W, TotalSoft_Poll_2_LAA_H, TotalSoft_Poll_2_LAA_C, TotalSoft_Poll_2_LAA_S, TotalSoft_Poll_2_P_A_OC, TotalSoft_Poll_2_P_A_C, TotalSoft_Poll_2_P_A_VT, TotalSoft_Poll_2_P_A_VEff, TotalSoft_Poll_2_VB_MBgC, TotalSoft_Poll_2_VB_Pos, TotalSoft_Poll_2_VB_BW, TotalSoft_Poll_2_VB_BC, TotalSoft_Poll_2_Play_IC, TotalSoft_Poll_2_Play_IS, TotalSoft_Poll_2_Play_IOvC, TotalSoft_Poll_2_Play_IT) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Total Soft Video Poll 1', 'Video Poll', '100', 'center', '0', '#000000', '8', 'true', 'true', '22', '#7c7c7c', '#ffffff', '#000000', '20', 'Abadi MT Condensed Light', 'center', '80', '1', '#939393', 'solid', '2', '160', 'Nothing', '14', '#ffffff', '#cccccc', '#000000', 'Position 3', 'false', 'medium 1', 'f10c', '#000000', 'f192', '#1e73be', '#ffffff', '#000000', 'true', '#ffffff', '66', '2', '#ffffff', 'solid', 'rgba(30,115,190,0.5)', '#ffffff', 'bothlab', '1', '#ffffff', 'right', '3', '#000000', '#ffffff', '42', 'rgba(0,0,0,0.43)', 'f04b'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name10 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_2_VB_BR, TotalSoft_Poll_2_VB_BgC, TotalSoft_Poll_2_VB_C, TotalSoft_Poll_2_VB_FS, TotalSoft_Poll_2_VB_FF, TotalSoft_Poll_2_VB_Text, TotalSoft_Poll_2_VB_IT, TotalSoft_Poll_2_VB_IA, TotalSoft_Poll_2_VB_IS, TotalSoft_Poll_2_VB_HBgC, TotalSoft_Poll_2_VB_HC, TotalSoft_Poll_2_RB_Show, TotalSoft_Poll_2_RB_Pos, TotalSoft_Poll_2_RB_BW, TotalSoft_Poll_2_RB_BC, TotalSoft_Poll_2_RB_BR, TotalSoft_Poll_2_RB_BgC, TotalSoft_Poll_2_RB_C, TotalSoft_Poll_2_RB_FS, TotalSoft_Poll_2_RB_FF, TotalSoft_Poll_2_RB_Text, TotalSoft_Poll_2_RB_IT, TotalSoft_Poll_2_RB_IA, TotalSoft_Poll_2_RB_IS, TotalSoft_Poll_2_RB_HBgC, TotalSoft_Poll_2_RB_HC, TotalSoft_Poll_2_P_BB_MBgC, TotalSoft_Poll_2_P_BB_Pos, TotalSoft_Poll_2_P_BB_BC, TotalSoft_Poll_2_P_BB_BgC, TotalSoft_Poll_2_P_BB_C, TotalSoft_Poll_2_P_BB_Text, TotalSoft_Poll_2_P_BB_IT, TotalSoft_Poll_2_P_BB_IA, TotalSoft_Poll_2_P_BB_HBgC, TotalSoft_Poll_2_P_BB_HC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Total Soft Video Poll 1', 'Video Poll', '2', '#000000', '#ffffff', '20', 'Abadi MT Condensed Light', 'Vote', '', 'after', '18', '#000000', '#cccccc', 'true', 'right', '3', '#000000', '2', '#000000', '#ffffff', '20', 'Abadi MT Condensed Light', 'Results', '', 'before', '21', '#000000', '#cccccc', '#ffffff', 'full', '#000000', '#000000', '#ffffff', 'Back', 'f015', 'after', '#000000', '#cccccc'));
		//4
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Total Soft Video Poll 2', 'Video Poll'));

		$TotalSoftPoll2_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Total Soft Video Poll 2'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name9 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_2_MW, TotalSoft_Poll_2_Pos, TotalSoft_Poll_2_BW, TotalSoft_Poll_2_BC, TotalSoft_Poll_2_BR, TotalSoft_Poll_2_BoxSh_Show, TotalSoft_Poll_2_BoxSh_Type, TotalSoft_Poll_2_BoxSh, TotalSoft_Poll_2_BoxShC, TotalSoft_Poll_2_Q_BgC, TotalSoft_Poll_2_Q_C, TotalSoft_Poll_2_Q_FS, TotalSoft_Poll_2_Q_FF, TotalSoft_Poll_2_Q_TA, TotalSoft_Poll_2_LAQ_W, TotalSoft_Poll_2_LAQ_H, TotalSoft_Poll_2_LAQ_C, TotalSoft_Poll_2_LAQ_S, TotalSoft_Poll_2_A_CC, TotalSoft_Poll_2_A_IH, TotalSoft_Poll_2_A_CA, TotalSoft_Poll_2_A_FS, TotalSoft_Poll_2_A_MBgC, TotalSoft_Poll_2_A_BgC, TotalSoft_Poll_2_A_C, TotalSoft_Poll_2_A_Pos, TotalSoft_Poll_2_CH_CM, TotalSoft_Poll_2_CH_S, TotalSoft_Poll_2_CH_TBC, TotalSoft_Poll_2_CH_CBC, TotalSoft_Poll_2_CH_TAC, TotalSoft_Poll_2_CH_CAC, TotalSoft_Poll_2_A_HBgC, TotalSoft_Poll_2_A_HC, TotalSoft_Poll_2_A_HSh_Show, TotalSoft_Poll_2_A_HShC, TotalSoft_Poll_2_LAA_W, TotalSoft_Poll_2_LAA_H, TotalSoft_Poll_2_LAA_C, TotalSoft_Poll_2_LAA_S, TotalSoft_Poll_2_P_A_OC, TotalSoft_Poll_2_P_A_C, TotalSoft_Poll_2_P_A_VT, TotalSoft_Poll_2_P_A_VEff, TotalSoft_Poll_2_VB_MBgC, TotalSoft_Poll_2_VB_Pos, TotalSoft_Poll_2_VB_BW, TotalSoft_Poll_2_VB_BC, TotalSoft_Poll_2_Play_IC, TotalSoft_Poll_2_Play_IS, TotalSoft_Poll_2_Play_IOvC, TotalSoft_Poll_2_Play_IT) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Total Soft Video Poll 2', 'Video Poll', '100', 'center', '0', '#000000', '8', 'true', 'true', '22', '#7c7c7c', '#1e73be', '#ffffff', '25', 'Gabriola', 'center', '80', '1', '#ffffff', 'solid', '3', '160', 'Background', '15', '#ffffff', '#cccccc', '#ffffff', 'Position 3', 'false', 'medium 1', 'f096', '#ffffff', 'f046', '#ffffff', '#1e73be', '#ffffff', 'true', '#1e73be', '66', '2', '#1e73be', 'solid', 'rgba(0,0,0,0.5)', '#ffffff', 'bothlab', '0', '#ffffff', 'right', '3', '#1e73be', '#ffffff', '40', 'rgba(30,115,190,0.5)', 'f144'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name10 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_2_VB_BR, TotalSoft_Poll_2_VB_BgC, TotalSoft_Poll_2_VB_C, TotalSoft_Poll_2_VB_FS, TotalSoft_Poll_2_VB_FF, TotalSoft_Poll_2_VB_Text, TotalSoft_Poll_2_VB_IT, TotalSoft_Poll_2_VB_IA, TotalSoft_Poll_2_VB_IS, TotalSoft_Poll_2_VB_HBgC, TotalSoft_Poll_2_VB_HC, TotalSoft_Poll_2_RB_Show, TotalSoft_Poll_2_RB_Pos, TotalSoft_Poll_2_RB_BW, TotalSoft_Poll_2_RB_BC, TotalSoft_Poll_2_RB_BR, TotalSoft_Poll_2_RB_BgC, TotalSoft_Poll_2_RB_C, TotalSoft_Poll_2_RB_FS, TotalSoft_Poll_2_RB_FF, TotalSoft_Poll_2_RB_Text, TotalSoft_Poll_2_RB_IT, TotalSoft_Poll_2_RB_IA, TotalSoft_Poll_2_RB_IS, TotalSoft_Poll_2_RB_HBgC, TotalSoft_Poll_2_RB_HC, TotalSoft_Poll_2_P_BB_MBgC, TotalSoft_Poll_2_P_BB_Pos, TotalSoft_Poll_2_P_BB_BC, TotalSoft_Poll_2_P_BB_BgC, TotalSoft_Poll_2_P_BB_C, TotalSoft_Poll_2_P_BB_Text, TotalSoft_Poll_2_P_BB_IT, TotalSoft_Poll_2_P_BB_IA, TotalSoft_Poll_2_P_BB_HBgC, TotalSoft_Poll_2_P_BB_HC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Total Soft Video Poll 2', 'Video Poll', '5', '#1e73be', '#ffffff', '24', 'Gabriola', 'Vote', 'f0fb', 'after', '18', '#1e73be', '#cccccc', 'true', 'left', '3', '#1e73be', '5', '#1e73be', '#ffffff', '24', 'Gabriola', 'Results', 'f129', 'before', '18', '#1e73be', '#cccccc', '#ffffff', 'full', '#1e73be', '#1e73be', '#ffffff', 'Back', 'f015', 'after', '#1e73be', '#cccccc'));
	}

	$TotalSoftPoll3=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name11 WHERE id>%d",0));
	if(count($TotalSoftPoll3) == 0)
	{
		//1
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Standart Without Button 1', 'Standart Without Button'));

		$TotalSoftPoll2_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Standart Without Button 1'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name11 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_3_MW, TotalSoft_Poll_3_Pos, TotalSoft_Poll_3_BW, TotalSoft_Poll_3_BC, TotalSoft_Poll_3_BR, TotalSoft_Poll_3_BoxSh_Show, TotalSoft_Poll_3_BoxSh_Type, TotalSoft_Poll_3_BoxSh, TotalSoft_Poll_3_BoxShC, TotalSoft_Poll_3_Q_BgC, TotalSoft_Poll_3_Q_C, TotalSoft_Poll_3_Q_FS, TotalSoft_Poll_3_Q_FF, TotalSoft_Poll_3_Q_TA, TotalSoft_Poll_3_LAQ_W, TotalSoft_Poll_3_LAQ_H, TotalSoft_Poll_3_LAQ_C, TotalSoft_Poll_3_LAQ_S, TotalSoft_Poll_3_A_CA, TotalSoft_Poll_3_A_FS, TotalSoft_Poll_3_A_MBgC, TotalSoft_Poll_3_A_BgC, TotalSoft_Poll_3_A_C, TotalSoft_Poll_3_A_BW, TotalSoft_Poll_3_A_BC, TotalSoft_Poll_3_A_BR, TotalSoft_Poll_3_CH_Sh, TotalSoft_Poll_3_CH_S, TotalSoft_Poll_3_CH_TBC, TotalSoft_Poll_3_CH_CBC, TotalSoft_Poll_3_CH_TAC, TotalSoft_Poll_3_CH_CAC, TotalSoft_Poll_3_A_HBgC, TotalSoft_Poll_3_A_HC, TotalSoft_Poll_3_LAA_W, TotalSoft_Poll_3_LAA_H, TotalSoft_Poll_3_LAA_C, TotalSoft_Poll_3_LAA_S, TotalSoft_Poll_3_RB_MBgC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Standart Without Button 1', 'Standart Without Button', '100', 'center', '3', '#ffffff', '15', 'true', 'true', '10', '#a0a0a0', '#ffffff', '#dd0000', '20', 'Abadi MT Condensed Light', 'center', '60', '1', '#dd0000', 'solid', 'Nothing', '17', '#ffffff', '#ffffff', '#dd0000', '1', '#d8d8d8', '6', 'true', 'medium 1', 'f0c8', '#d8d8d8', 'f14a', '#d8d8d8', '#d8d8d8', '#dd0000', '90', '2', '#ffffff', 'solid', '#ffffff'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name12 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_3_TV_Show, TotalSoft_Poll_3_TV_Pos, TotalSoft_Poll_3_TV_C, TotalSoft_Poll_3_TV_FS, TotalSoft_Poll_3_TV_Text, TotalSoft_Poll_3_VT_IT, TotalSoft_Poll_3_RB_Show, TotalSoft_Poll_3_RB_Pos, TotalSoft_Poll_3_RB_BW, TotalSoft_Poll_3_RB_BC, TotalSoft_Poll_3_RB_BR, TotalSoft_Poll_3_RB_BgC, TotalSoft_Poll_3_RB_C, TotalSoft_Poll_3_RB_FS, TotalSoft_Poll_3_RB_FF, TotalSoft_Poll_3_RB_Text, TotalSoft_Poll_3_RB_IT, TotalSoft_Poll_3_RB_IA, TotalSoft_Poll_3_RB_IS, TotalSoft_Poll_3_RB_HBgC, TotalSoft_Poll_3_RB_HC, TotalSoft_Poll_3_V_CA, TotalSoft_Poll_3_V_MBgC, TotalSoft_Poll_3_V_BgC, TotalSoft_Poll_3_V_C, TotalSoft_Poll_3_V_T, TotalSoft_Poll_3_V_Eff, TotalSoft_Poll_3_BB_MBgC, TotalSoft_Poll_3_BB_Pos, TotalSoft_Poll_3_BB_BC, TotalSoft_Poll_3_BB_BgC, TotalSoft_Poll_3_BB_C, TotalSoft_Poll_3_BB_Text, TotalSoft_Poll_3_BB_IT, TotalSoft_Poll_3_BB_IA, TotalSoft_Poll_3_BB_HBgC, TotalSoft_Poll_3_BB_HC, TotalSoft_Poll_3_VT_IA) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Standart Without Button 1', 'Standart Without Button', 'true', 'right', '#000000', '18', 'Total Votes', 'f200', 'true', 'left', '2', '#d8d8d8', '6', '#d8d8d8', '#000000', '20', 'Abadi MT Condensed Light', 'Result', 'f080', 'before', '19', '#d8d8d8', '#4f4f4f', 'Nothing', '#dd3e3e', '#dd0000', '#ffffff', 'both', '9', '#ffffff', 'full', '#d8d8d8', '#d8d8d8', '#000000', 'Back', 'f015', 'before', '#d8d8d8', '#000000', 'before'));
		//2
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Standart Without Button 2', 'Standart Without Button'));

		$TotalSoftPoll2_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Standart Without Button 2'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name11 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_3_MW, TotalSoft_Poll_3_Pos, TotalSoft_Poll_3_BW, TotalSoft_Poll_3_BC, TotalSoft_Poll_3_BR, TotalSoft_Poll_3_BoxSh_Show, TotalSoft_Poll_3_BoxSh_Type, TotalSoft_Poll_3_BoxSh, TotalSoft_Poll_3_BoxShC, TotalSoft_Poll_3_Q_BgC, TotalSoft_Poll_3_Q_C, TotalSoft_Poll_3_Q_FS, TotalSoft_Poll_3_Q_FF, TotalSoft_Poll_3_Q_TA, TotalSoft_Poll_3_LAQ_W, TotalSoft_Poll_3_LAQ_H, TotalSoft_Poll_3_LAQ_C, TotalSoft_Poll_3_LAQ_S, TotalSoft_Poll_3_A_CA, TotalSoft_Poll_3_A_FS, TotalSoft_Poll_3_A_MBgC, TotalSoft_Poll_3_A_BgC, TotalSoft_Poll_3_A_C, TotalSoft_Poll_3_A_BW, TotalSoft_Poll_3_A_BC, TotalSoft_Poll_3_A_BR, TotalSoft_Poll_3_CH_Sh, TotalSoft_Poll_3_CH_S, TotalSoft_Poll_3_CH_TBC, TotalSoft_Poll_3_CH_CBC, TotalSoft_Poll_3_CH_TAC, TotalSoft_Poll_3_CH_CAC, TotalSoft_Poll_3_A_HBgC, TotalSoft_Poll_3_A_HC, TotalSoft_Poll_3_LAA_W, TotalSoft_Poll_3_LAA_H, TotalSoft_Poll_3_LAA_C, TotalSoft_Poll_3_LAA_S, TotalSoft_Poll_3_RB_MBgC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Standart Without Button 2', 'Standart Without Button', '100', 'center', '0', '#ffffff', '15', 'true', 'false', '10', '#a0a0a0', '#ffffff', '#000000', '20', 'Abadi MT Condensed Light', 'center', '60', '0', '#ffffff', 'solid', 'Background', '17', '#ffffff', '#ffffff', '#ffffff', '1', '#ffffff', '6', 'false', 'medium 1', 'f0c8', '#d8d8d8', 'f14a', '#d8d8d8', '#ffffff', '#000000', '90', '2', '#ffffff', 'solid', '#ffffff'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name12 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_3_TV_Show, TotalSoft_Poll_3_TV_Pos, TotalSoft_Poll_3_TV_C, TotalSoft_Poll_3_TV_FS, TotalSoft_Poll_3_TV_Text, TotalSoft_Poll_3_VT_IT, TotalSoft_Poll_3_RB_Show, TotalSoft_Poll_3_RB_Pos, TotalSoft_Poll_3_RB_BW, TotalSoft_Poll_3_RB_BC, TotalSoft_Poll_3_RB_BR, TotalSoft_Poll_3_RB_BgC, TotalSoft_Poll_3_RB_C, TotalSoft_Poll_3_RB_FS, TotalSoft_Poll_3_RB_FF, TotalSoft_Poll_3_RB_Text, TotalSoft_Poll_3_RB_IT, TotalSoft_Poll_3_RB_IA, TotalSoft_Poll_3_RB_IS, TotalSoft_Poll_3_RB_HBgC, TotalSoft_Poll_3_RB_HC, TotalSoft_Poll_3_V_CA, TotalSoft_Poll_3_V_MBgC, TotalSoft_Poll_3_V_BgC, TotalSoft_Poll_3_V_C, TotalSoft_Poll_3_V_T, TotalSoft_Poll_3_V_Eff, TotalSoft_Poll_3_BB_MBgC, TotalSoft_Poll_3_BB_Pos, TotalSoft_Poll_3_BB_BC, TotalSoft_Poll_3_BB_BgC, TotalSoft_Poll_3_BB_C, TotalSoft_Poll_3_BB_Text, TotalSoft_Poll_3_BB_IT, TotalSoft_Poll_3_BB_IA, TotalSoft_Poll_3_BB_HBgC, TotalSoft_Poll_3_BB_HC, TotalSoft_Poll_3_VT_IA) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Standart Without Button 2', 'Standart Without Button', 'true', 'right', '#000000', '18', 'Total Votes', 'f201', 'false', 'left', '2', '#d8d8d7', '6', '#d8d8d7', '#000000', '20', 'Abadi MT Condensed Light', 'Result', 'f080', 'before', '19', '#d8d8d7', '#4f4f4f', 'Background', '#ffffff', '#5000b2', '#000000', 'bothlab', '9', '#ffffff', 'full', '#d8d8d7', '#d8d8d8', '#000000', 'Back', 'f015', 'before', '#d8d8d8', '#000000', 'before'));
	}

	$TotalSoftPoll4=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name13 WHERE id>%d",0));
	if(count($TotalSoftPoll4) == 0)
	{
		//1
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Image Without Button 1', 'Image Without Button'));

		$TotalSoftPoll2_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Image Without Button 1'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name13 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_4_MW, TotalSoft_Poll_4_Pos, TotalSoft_Poll_4_BW, TotalSoft_Poll_4_BC, TotalSoft_Poll_4_BR, TotalSoft_Poll_4_BoxSh_Show, TotalSoft_Poll_4_BoxSh_Type, TotalSoft_Poll_4_BoxSh, TotalSoft_Poll_4_BoxShC, TotalSoft_Poll_4_Q_BgC, TotalSoft_Poll_4_Q_C, TotalSoft_Poll_4_Q_FS, TotalSoft_Poll_4_Q_FF, TotalSoft_Poll_4_Q_TA, TotalSoft_Poll_4_LAQ_W, TotalSoft_Poll_4_LAQ_H, TotalSoft_Poll_4_LAQ_C, TotalSoft_Poll_4_LAQ_S, TotalSoft_Poll_4_A_CA, TotalSoft_Poll_4_A_FS, TotalSoft_Poll_4_A_MBgC, TotalSoft_Poll_4_A_BgC, TotalSoft_Poll_4_A_C, TotalSoft_Poll_4_A_BW, TotalSoft_Poll_4_A_BC, TotalSoft_Poll_4_A_BR, TotalSoft_Poll_4_A_FF, TotalSoft_Poll_4_A_HBgC, TotalSoft_Poll_4_A_HC, TotalSoft_Poll_4_I_H, TotalSoft_Poll_4_I_Ra, TotalSoft_Poll_4_I_OC, TotalSoft_Poll_4_I_IT, TotalSoft_Poll_4_I_IC, TotalSoft_Poll_4_I_IS, TotalSoft_Poll_4_Pop_Show, TotalSoft_Poll_4_Pop_IT, TotalSoft_Poll_4_Pop_IC, TotalSoft_Poll_4_Pop_BW, TotalSoft_Poll_4_Pop_BC, TotalSoft_Poll_4_LAA_W, TotalSoft_Poll_4_LAA_H, TotalSoft_Poll_4_LAA_C, TotalSoft_Poll_4_LAA_S, TotalSoft_Poll_4_TV_Show, TotalSoft_Poll_4_TV_Pos, TotalSoft_Poll_4_TV_C) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Image Without Button 1', 'Image Without Button', '100', 'center', '0', '#ffffff', '22', 'true', 'true', '10', '#848484', '#ffffff', '#000000', '24', 'Abadi MT Condensed Light', 'center', '78', '1', '#a5a5a5', 'solid', 'Nothing', '18', '#ffffff', '#ffffff', '#000000', '2', '#a5a5a5', '10', 'Abadi MT Condensed Light', '#6394bf', '#000000', '80', '4', 'rgba(99,148,191,0.55)', 'f030', '#ffffff', '25', 'true', 'f00d', '#6394bf', '10', '#ffffff', '80', '1', '#a5a5a5', 'solid', 'true', 'right', '#a5a5a5'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name14 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_4_TV_FS, TotalSoft_Poll_4_TV_Text, TotalSoft_Poll_4_VT_IT, TotalSoft_Poll_4_VT_IA, TotalSoft_Poll_4_RB_Show, TotalSoft_Poll_4_RB_Pos, TotalSoft_Poll_4_RB_BW, TotalSoft_Poll_4_RB_BC, TotalSoft_Poll_4_RB_BR, TotalSoft_Poll_4_RB_MBgC, TotalSoft_Poll_4_RB_BgC, TotalSoft_Poll_4_RB_C, TotalSoft_Poll_4_RB_FS, TotalSoft_Poll_4_RB_FF, TotalSoft_Poll_4_RB_Text, TotalSoft_Poll_4_RB_IT, TotalSoft_Poll_4_RB_IA, TotalSoft_Poll_4_RB_IS, TotalSoft_Poll_4_RB_HBgC, TotalSoft_Poll_4_RB_HC, TotalSoft_Poll_4_V_CA, TotalSoft_Poll_4_V_MBgC, TotalSoft_Poll_4_V_BgC, TotalSoft_Poll_4_V_C, TotalSoft_Poll_4_V_T, TotalSoft_Poll_4_V_Eff, TotalSoft_Poll_4_BB_MBgC, TotalSoft_Poll_4_BB_Pos, TotalSoft_Poll_4_BB_BC, TotalSoft_Poll_4_BB_BgC, TotalSoft_Poll_4_BB_C, TotalSoft_Poll_4_BB_Text, TotalSoft_Poll_4_BB_IT, TotalSoft_Poll_4_BB_IA, TotalSoft_Poll_4_BB_HBgC, TotalSoft_Poll_4_BB_HC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Image Without Button 1', 'Image Without Button', '20', 'Total Votes', 'f200', 'before', 'true', 'left', '2', '#6394bf', '10', '#ffffff', '#6394bf', '#ffffff', '20', 'Abadi MT Condensed Light', 'Results', '', 'before', '21', '#6394bf', '#ffffff', 'Nothing', '#ffffff', '#6394bf', '#000000', 'bothlab', '2', '#6394bf', 'full', '#6394bf', '#6394bf', '#ffffff', 'Back', 'f00d', 'before', '#6394bf', '#ffffff'));
		//2
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Image Without Button 2', 'Image Without Button'));

		$TotalSoftPoll2_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Image Without Button 2'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name13 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_4_MW, TotalSoft_Poll_4_Pos, TotalSoft_Poll_4_BW, TotalSoft_Poll_4_BC, TotalSoft_Poll_4_BR, TotalSoft_Poll_4_BoxSh_Show, TotalSoft_Poll_4_BoxSh_Type, TotalSoft_Poll_4_BoxSh, TotalSoft_Poll_4_BoxShC, TotalSoft_Poll_4_Q_BgC, TotalSoft_Poll_4_Q_C, TotalSoft_Poll_4_Q_FS, TotalSoft_Poll_4_Q_FF, TotalSoft_Poll_4_Q_TA, TotalSoft_Poll_4_LAQ_W, TotalSoft_Poll_4_LAQ_H, TotalSoft_Poll_4_LAQ_C, TotalSoft_Poll_4_LAQ_S, TotalSoft_Poll_4_A_CA, TotalSoft_Poll_4_A_FS, TotalSoft_Poll_4_A_MBgC, TotalSoft_Poll_4_A_BgC, TotalSoft_Poll_4_A_C, TotalSoft_Poll_4_A_BW, TotalSoft_Poll_4_A_BC, TotalSoft_Poll_4_A_BR, TotalSoft_Poll_4_A_FF, TotalSoft_Poll_4_A_HBgC, TotalSoft_Poll_4_A_HC, TotalSoft_Poll_4_I_H, TotalSoft_Poll_4_I_Ra, TotalSoft_Poll_4_I_OC, TotalSoft_Poll_4_I_IT, TotalSoft_Poll_4_I_IC, TotalSoft_Poll_4_I_IS, TotalSoft_Poll_4_Pop_Show, TotalSoft_Poll_4_Pop_IT, TotalSoft_Poll_4_Pop_IC, TotalSoft_Poll_4_Pop_BW, TotalSoft_Poll_4_Pop_BC, TotalSoft_Poll_4_LAA_W, TotalSoft_Poll_4_LAA_H, TotalSoft_Poll_4_LAA_C, TotalSoft_Poll_4_LAA_S, TotalSoft_Poll_4_TV_Show, TotalSoft_Poll_4_TV_Pos, TotalSoft_Poll_4_TV_C) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Image Without Button 2', 'Image Without Button', '100', 'center', '0', '#ffffff', '0', 'true', 'false', '25', '#ffffff', '#dd3333', '#ffffff', '23', 'Abadi MT Condensed Light', 'center', '0', '1', '#ffffff', 'solid', 'Background', '23', '#ffffff', '#ffffff', '#ffffff', '0', '#ffffff', '0', 'Abadi MT Condensed Light', '#dd3333', '#ffffff', '110', '8', 'rgba(221,51,51,0.5)', '', '#ffffff', '30', 'false', '', '#ffffff', '0', '#ffffff', '50', '0', '#ffffff', 'none', 'false', 'right', '#ffffff'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name14 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_4_TV_FS, TotalSoft_Poll_4_TV_Text, TotalSoft_Poll_4_VT_IT, TotalSoft_Poll_4_VT_IA, TotalSoft_Poll_4_RB_Show, TotalSoft_Poll_4_RB_Pos, TotalSoft_Poll_4_RB_BW, TotalSoft_Poll_4_RB_BC, TotalSoft_Poll_4_RB_BR, TotalSoft_Poll_4_RB_MBgC, TotalSoft_Poll_4_RB_BgC, TotalSoft_Poll_4_RB_C, TotalSoft_Poll_4_RB_FS, TotalSoft_Poll_4_RB_FF, TotalSoft_Poll_4_RB_Text, TotalSoft_Poll_4_RB_IT, TotalSoft_Poll_4_RB_IA, TotalSoft_Poll_4_RB_IS, TotalSoft_Poll_4_RB_HBgC, TotalSoft_Poll_4_RB_HC, TotalSoft_Poll_4_V_CA, TotalSoft_Poll_4_V_MBgC, TotalSoft_Poll_4_V_BgC, TotalSoft_Poll_4_V_C, TotalSoft_Poll_4_V_T, TotalSoft_Poll_4_V_Eff, TotalSoft_Poll_4_BB_MBgC, TotalSoft_Poll_4_BB_Pos, TotalSoft_Poll_4_BB_BC, TotalSoft_Poll_4_BB_BgC, TotalSoft_Poll_4_BB_C, TotalSoft_Poll_4_BB_Text, TotalSoft_Poll_4_BB_IT, TotalSoft_Poll_4_BB_IA, TotalSoft_Poll_4_BB_HBgC, TotalSoft_Poll_4_BB_HC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Image Without Button 2', 'Image Without Button', '26', 'Total', '', 'before', 'false', 'right', '0', '#dd3333', '13', '#ffffff', '#ffffff', '#dd3333', '27', 'Abadi MT Condensed Light', 'Results', '', 'before', '26', '#ffffff', '#ffffff', 'Background', '#ffffff', '#ffffff', '#000000', 'both', '6', '#ffffff', 'right', '#ffffff', '#ffffff', '#ffffff', 'Back', '', 'before', '#ffffff', '#ffffff'));
		//3
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Video Without Button 1', 'Video Without Button'));

		$TotalSoftPoll2_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Video Without Button 1'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name13 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_4_MW, TotalSoft_Poll_4_Pos, TotalSoft_Poll_4_BW, TotalSoft_Poll_4_BC, TotalSoft_Poll_4_BR, TotalSoft_Poll_4_BoxSh_Show, TotalSoft_Poll_4_BoxSh_Type, TotalSoft_Poll_4_BoxSh, TotalSoft_Poll_4_BoxShC, TotalSoft_Poll_4_Q_BgC, TotalSoft_Poll_4_Q_C, TotalSoft_Poll_4_Q_FS, TotalSoft_Poll_4_Q_FF, TotalSoft_Poll_4_Q_TA, TotalSoft_Poll_4_LAQ_W, TotalSoft_Poll_4_LAQ_H, TotalSoft_Poll_4_LAQ_C, TotalSoft_Poll_4_LAQ_S, TotalSoft_Poll_4_A_CA, TotalSoft_Poll_4_A_FS, TotalSoft_Poll_4_A_MBgC, TotalSoft_Poll_4_A_BgC, TotalSoft_Poll_4_A_C, TotalSoft_Poll_4_A_BW, TotalSoft_Poll_4_A_BC, TotalSoft_Poll_4_A_BR, TotalSoft_Poll_4_A_FF, TotalSoft_Poll_4_A_HBgC, TotalSoft_Poll_4_A_HC, TotalSoft_Poll_4_I_H, TotalSoft_Poll_4_I_Ra, TotalSoft_Poll_4_I_OC, TotalSoft_Poll_4_I_IT, TotalSoft_Poll_4_I_IC, TotalSoft_Poll_4_I_IS, TotalSoft_Poll_4_Pop_Show, TotalSoft_Poll_4_Pop_IT, TotalSoft_Poll_4_Pop_IC, TotalSoft_Poll_4_Pop_BW, TotalSoft_Poll_4_Pop_BC, TotalSoft_Poll_4_LAA_W, TotalSoft_Poll_4_LAA_H, TotalSoft_Poll_4_LAA_C, TotalSoft_Poll_4_LAA_S, TotalSoft_Poll_4_TV_Show, TotalSoft_Poll_4_TV_Pos, TotalSoft_Poll_4_TV_C) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Video Without Button 1', 'Video Without Button', '100', 'center', '0', '#ffffff', '10', 'true', 'true', '10', '#cccccc', '#ffffff', '#dd9933', '21', 'Abadi MT Condensed Light', 'center', '50', '1', '#dd9933', 'solid', 'Nothing', '22', '#ffffff', '#ffffff', '#dd9933', '1', '#cccccc', '5', 'Abadi MT Condensed Light', '#ffffff', '#dd9933', '100', '2', 'rgba(0,0,0,0.5)', 'f26c', '#dd9933', '30', 'true', 'f00d', '#ffffff', '10', '#000000', '50', '1', '#dd9933', 'solid', 'true', 'right', '#dd9933'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name14 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_4_TV_FS, TotalSoft_Poll_4_TV_Text, TotalSoft_Poll_4_VT_IT, TotalSoft_Poll_4_VT_IA, TotalSoft_Poll_4_RB_Show, TotalSoft_Poll_4_RB_Pos, TotalSoft_Poll_4_RB_BW, TotalSoft_Poll_4_RB_BC, TotalSoft_Poll_4_RB_BR, TotalSoft_Poll_4_RB_MBgC, TotalSoft_Poll_4_RB_BgC, TotalSoft_Poll_4_RB_C, TotalSoft_Poll_4_RB_FS, TotalSoft_Poll_4_RB_FF, TotalSoft_Poll_4_RB_Text, TotalSoft_Poll_4_RB_IT, TotalSoft_Poll_4_RB_IA, TotalSoft_Poll_4_RB_IS, TotalSoft_Poll_4_RB_HBgC, TotalSoft_Poll_4_RB_HC, TotalSoft_Poll_4_V_CA, TotalSoft_Poll_4_V_MBgC, TotalSoft_Poll_4_V_BgC, TotalSoft_Poll_4_V_C, TotalSoft_Poll_4_V_T, TotalSoft_Poll_4_V_Eff, TotalSoft_Poll_4_BB_MBgC, TotalSoft_Poll_4_BB_Pos, TotalSoft_Poll_4_BB_BC, TotalSoft_Poll_4_BB_BgC, TotalSoft_Poll_4_BB_C, TotalSoft_Poll_4_BB_Text, TotalSoft_Poll_4_BB_IT, TotalSoft_Poll_4_BB_IA, TotalSoft_Poll_4_BB_HBgC, TotalSoft_Poll_4_BB_HC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Video Without Button 1', 'Video Without Button', '17', 'Total', 'f200', 'before', 'false', 'right', '3', '#dd9933', '14', '#ffffff', '#ffffff', '#dd9933', '25', 'Abadi MT Condensed Light', 'Results', 'f1fe', 'before', '20', '#ffffff', '#000000', 'Color', '#ffffff', '#dd9933', '#ffffff', 'bothlab', '9', '#ffffff', 'right', '#dd9933', '#dd9933', '#ffffff', 'Back', 'f015', 'before', '#dd9933', '#ffffff'));
		//4
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Video Without Button 2', 'Video Without Button'));

		$TotalSoftPoll2_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Video Without Button 2'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name13 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_4_MW, TotalSoft_Poll_4_Pos, TotalSoft_Poll_4_BW, TotalSoft_Poll_4_BC, TotalSoft_Poll_4_BR, TotalSoft_Poll_4_BoxSh_Show, TotalSoft_Poll_4_BoxSh_Type, TotalSoft_Poll_4_BoxSh, TotalSoft_Poll_4_BoxShC, TotalSoft_Poll_4_Q_BgC, TotalSoft_Poll_4_Q_C, TotalSoft_Poll_4_Q_FS, TotalSoft_Poll_4_Q_FF, TotalSoft_Poll_4_Q_TA, TotalSoft_Poll_4_LAQ_W, TotalSoft_Poll_4_LAQ_H, TotalSoft_Poll_4_LAQ_C, TotalSoft_Poll_4_LAQ_S, TotalSoft_Poll_4_A_CA, TotalSoft_Poll_4_A_FS, TotalSoft_Poll_4_A_MBgC, TotalSoft_Poll_4_A_BgC, TotalSoft_Poll_4_A_C, TotalSoft_Poll_4_A_BW, TotalSoft_Poll_4_A_BC, TotalSoft_Poll_4_A_BR, TotalSoft_Poll_4_A_FF, TotalSoft_Poll_4_A_HBgC, TotalSoft_Poll_4_A_HC, TotalSoft_Poll_4_I_H, TotalSoft_Poll_4_I_Ra, TotalSoft_Poll_4_I_OC, TotalSoft_Poll_4_I_IT, TotalSoft_Poll_4_I_IC, TotalSoft_Poll_4_I_IS, TotalSoft_Poll_4_Pop_Show, TotalSoft_Poll_4_Pop_IT, TotalSoft_Poll_4_Pop_IC, TotalSoft_Poll_4_Pop_BW, TotalSoft_Poll_4_Pop_BC, TotalSoft_Poll_4_LAA_W, TotalSoft_Poll_4_LAA_H, TotalSoft_Poll_4_LAA_C, TotalSoft_Poll_4_LAA_S, TotalSoft_Poll_4_TV_Show, TotalSoft_Poll_4_TV_Pos, TotalSoft_Poll_4_TV_C) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Video Without Button 2', 'Video Without Button', '100', 'center', '3', '#ffffff', '4', 'true', 'false', '10', '#a8a8a8', '#000000', '#ffffff', '20', 'Abadi MT Condensed Light', 'center', '50', '1', '#ffffff', 'solid', 'Nothing', '17', '#000000', '#000000', '#ffffff', '0', '#ffffff', '4', 'Abadi MT Condensed Light', '#2b2b2b', '#ffffff', '75', '2', 'rgba(30,115,190,0.5)', 'f04b', '#ffffff', '28', 'true', 'f00d', '#ffffff', '10', '#000000', '47', '1', '#ffffff', 'solid', 'true', 'left', '#729bbf'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name14 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_4_TV_FS, TotalSoft_Poll_4_TV_Text, TotalSoft_Poll_4_VT_IT, TotalSoft_Poll_4_VT_IA, TotalSoft_Poll_4_RB_Show, TotalSoft_Poll_4_RB_Pos, TotalSoft_Poll_4_RB_BW, TotalSoft_Poll_4_RB_BC, TotalSoft_Poll_4_RB_BR, TotalSoft_Poll_4_RB_MBgC, TotalSoft_Poll_4_RB_BgC, TotalSoft_Poll_4_RB_C, TotalSoft_Poll_4_RB_FS, TotalSoft_Poll_4_RB_FF, TotalSoft_Poll_4_RB_Text, TotalSoft_Poll_4_RB_IT, TotalSoft_Poll_4_RB_IA, TotalSoft_Poll_4_RB_IS, TotalSoft_Poll_4_RB_HBgC, TotalSoft_Poll_4_RB_HC, TotalSoft_Poll_4_V_CA, TotalSoft_Poll_4_V_MBgC, TotalSoft_Poll_4_V_BgC, TotalSoft_Poll_4_V_C, TotalSoft_Poll_4_V_T, TotalSoft_Poll_4_V_Eff, TotalSoft_Poll_4_BB_MBgC, TotalSoft_Poll_4_BB_Pos, TotalSoft_Poll_4_BB_BC, TotalSoft_Poll_4_BB_BgC, TotalSoft_Poll_4_BB_C, TotalSoft_Poll_4_BB_Text, TotalSoft_Poll_4_BB_IT, TotalSoft_Poll_4_BB_IA, TotalSoft_Poll_4_BB_HBgC, TotalSoft_Poll_4_BB_HC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Video Without Button 2', 'Video Without Button', '18', 'Total', 'f201', 'after', 'false', 'right', '2', '#ffffff', '5', '#000000', '#ffffff', '#ffffff', '23', 'Abadi MT Condensed Light', 'Results', 'f0c9', 'after', '22', '#ffffff', '#ffffff', 'Background', '#000000', '#ffffff', '#ffffff', 'both', '3', '#000000', 'right', '#000000', '#000000', '#ffffff', 'Back', 'f015', 'after', '#000000', '#ffffff'));
	}

	$TotalSoftPoll4=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name16 WHERE id>%d",0));
	if(count($TotalSoftPoll4) == 0)
	{
		//1
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Image in Question 1', 'Image in Question'));

		$TotalSoftPoll2_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Image in Question 1'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name16 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_5_MW, TotalSoft_Poll_5_Pos, TotalSoft_Poll_5_BW, TotalSoft_Poll_5_BC, TotalSoft_Poll_5_BR, TotalSoft_Poll_5_BoxSh_Show, TotalSoft_Poll_5_BoxSh_Type, TotalSoft_Poll_5_BoxSh, TotalSoft_Poll_5_BoxShC, TotalSoft_Poll_5_Q_BgC, TotalSoft_Poll_5_Q_C, TotalSoft_Poll_5_Q_FS, TotalSoft_Poll_5_Q_FF, TotalSoft_Poll_5_Q_TA, TotalSoft_Poll_5_I_H, TotalSoft_Poll_5_I_Ra, TotalSoft_Poll_5_V_W, TotalSoft_Poll_5_LAQ_W, TotalSoft_Poll_5_LAQ_H, TotalSoft_Poll_5_LAQ_C, TotalSoft_Poll_5_LAQ_S, TotalSoft_Poll_5_A_CA, TotalSoft_Poll_5_A_FS, TotalSoft_Poll_5_A_MBgC, TotalSoft_Poll_5_A_BgC, TotalSoft_Poll_5_A_C, TotalSoft_Poll_5_A_BW, TotalSoft_Poll_5_A_BC, TotalSoft_Poll_5_A_BR, TotalSoft_Poll_5_CH_S, TotalSoft_Poll_5_CH_TBC, TotalSoft_Poll_5_CH_CBC, TotalSoft_Poll_5_CH_TAC, TotalSoft_Poll_5_CH_CAC, TotalSoft_Poll_5_A_HBgC, TotalSoft_Poll_5_A_HC, TotalSoft_Poll_5_LAA_W, TotalSoft_Poll_5_LAA_H, TotalSoft_Poll_5_LAA_C, TotalSoft_Poll_5_LAA_S, TotalSoft_Poll_5_TV_Show, TotalSoft_Poll_5_TV_Pos, TotalSoft_Poll_5_TV_C, TotalSoft_Poll_5_TV_FS, TotalSoft_Poll_5_VT_IT, TotalSoft_Poll_5_VT_IA, TotalSoft_Poll_5_VB_Show, TotalSoft_Poll_5_VB_Pos, TotalSoft_Poll_5_VB_BW, TotalSoft_Poll_5_VB_BC, TotalSoft_Poll_5_VB_BR, TotalSoft_Poll_5_VB_MBgC, TotalSoft_Poll_5_VB_BgC, TotalSoft_Poll_5_VB_C, TotalSoft_Poll_5_VB_FS, TotalSoft_Poll_5_VB_FF) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Image in Question 1', 'Image in Question', '100', 'center', '4', '#ffffff', '2', 'true', 'true', '10', '#828282', '#e8e8e8', '#000000', '24', 'Vijaya', 'center', '200', '2', '50', '90', '1', '#828282', 'solid', 'Background', '18', '#e8e8e8', '#6a3b6d', '#ffffff', '0', '#1e73be', '2', 'medium 1', 'f10c', '#ffffff', 'f192', '#d1d1d1', '', '#eaeaea', '90', '1', '#828282', 'solid', 'false', 'right', '#309979', '19', 'f1fe', 'before', 'true', 'right', '3', '#ffffff', '2', '#e8e8e8', '#ffffff', '#000000', '21', 'Vijaya'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name17 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_5_VB_IT, TotalSoft_Poll_5_VB_IA, TotalSoft_Poll_5_VB_IS, TotalSoft_Poll_5_VB_HBgC, TotalSoft_Poll_5_VB_HC, TotalSoft_Poll_5_RB_Show, TotalSoft_Poll_5_RB_Pos, TotalSoft_Poll_5_RB_BW, TotalSoft_Poll_5_RB_BC, TotalSoft_Poll_5_RB_BR, TotalSoft_Poll_5_RB_BgC, TotalSoft_Poll_5_RB_C, TotalSoft_Poll_5_RB_FS, TotalSoft_Poll_5_RB_FF, TotalSoft_Poll_5_RB_IT, TotalSoft_Poll_5_RB_IA, TotalSoft_Poll_5_RB_IS, TotalSoft_Poll_5_RB_HBgC, TotalSoft_Poll_5_RB_HC, TotalSoft_Poll_5_V_CA, TotalSoft_Poll_5_V_MBgC, TotalSoft_Poll_5_V_BgC, TotalSoft_Poll_5_V_C, TotalSoft_Poll_5_V_T, TotalSoft_Poll_5_V_Eff, TotalSoft_Poll_5_BB_MBgC, TotalSoft_Poll_5_BB_Pos, TotalSoft_Poll_5_BB_BC, TotalSoft_Poll_5_BB_BgC, TotalSoft_Poll_5_BB_C, TotalSoft_Poll_5_BB_IT, TotalSoft_Poll_5_BB_IA, TotalSoft_Poll_5_BB_HBgC, TotalSoft_Poll_5_BB_HC, TotalSoft_Poll_5_TV_Text, TotalSoft_Poll_5_BB_Text, TotalSoft_Poll_5_RB_Text, TotalSoft_Poll_5_VB_Text) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Image in Question 1', 'Image in Question', 'f124', 'before', '17', '#ffffff', '#000000', 'true', 'left', '3', '#ffffff', '2', '#ffffff', '#000000', '21', 'Vijaya', 'f05a', 'before', '17', '#ffffff', '#000000', 'Background', '#e8e8e8', '#ffffff', '#000000', 'bothlab', '7', '#e8e8e8', 'full', '#ffffff', '#e8e8e8', '#000000', 'f177', 'before', '#e8e8e8', '#000000', 'Total', 'Back', 'Result', 'Vote'));
		//2
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Image in Question 2', 'Image in Question'));

		$TotalSoftPoll2_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Image in Question 2'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name16 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_5_MW, TotalSoft_Poll_5_Pos, TotalSoft_Poll_5_BW, TotalSoft_Poll_5_BC, TotalSoft_Poll_5_BR, TotalSoft_Poll_5_BoxSh_Show, TotalSoft_Poll_5_BoxSh_Type, TotalSoft_Poll_5_BoxSh, TotalSoft_Poll_5_BoxShC, TotalSoft_Poll_5_Q_BgC, TotalSoft_Poll_5_Q_C, TotalSoft_Poll_5_Q_FS, TotalSoft_Poll_5_Q_FF, TotalSoft_Poll_5_Q_TA, TotalSoft_Poll_5_I_H, TotalSoft_Poll_5_I_Ra, TotalSoft_Poll_5_V_W, TotalSoft_Poll_5_LAQ_W, TotalSoft_Poll_5_LAQ_H, TotalSoft_Poll_5_LAQ_C, TotalSoft_Poll_5_LAQ_S, TotalSoft_Poll_5_A_CA, TotalSoft_Poll_5_A_FS, TotalSoft_Poll_5_A_MBgC, TotalSoft_Poll_5_A_BgC, TotalSoft_Poll_5_A_C, TotalSoft_Poll_5_A_BW, TotalSoft_Poll_5_A_BC, TotalSoft_Poll_5_A_BR, TotalSoft_Poll_5_CH_S, TotalSoft_Poll_5_CH_TBC, TotalSoft_Poll_5_CH_CBC, TotalSoft_Poll_5_CH_TAC, TotalSoft_Poll_5_CH_CAC, TotalSoft_Poll_5_A_HBgC, TotalSoft_Poll_5_A_HC, TotalSoft_Poll_5_LAA_W, TotalSoft_Poll_5_LAA_H, TotalSoft_Poll_5_LAA_C, TotalSoft_Poll_5_LAA_S, TotalSoft_Poll_5_TV_Show, TotalSoft_Poll_5_TV_Pos, TotalSoft_Poll_5_TV_C, TotalSoft_Poll_5_TV_FS, TotalSoft_Poll_5_VT_IT, TotalSoft_Poll_5_VT_IA, TotalSoft_Poll_5_VB_Show, TotalSoft_Poll_5_VB_Pos, TotalSoft_Poll_5_VB_BW, TotalSoft_Poll_5_VB_BC, TotalSoft_Poll_5_VB_BR, TotalSoft_Poll_5_VB_MBgC, TotalSoft_Poll_5_VB_BgC, TotalSoft_Poll_5_VB_C, TotalSoft_Poll_5_VB_FS, TotalSoft_Poll_5_VB_FF) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Image in Question 2', 'Image in Question', '100', 'center', '2', '#ffffff', '3', 'true', 'true', '14', '#b7b7b7', '#dd8500', '#ffffff', '21', 'Aldhabi', 'center', '200', '8', '50', '0', '0', 'rgba(0,0,0,0)', 'none', 'Color', '18', '#ffffff', '#ffffff', '#ffffff', '0', '#ffffff', '0', 'medium 1', 'f096', '#000000', 'f046', '#000000', '', '', '0', '0', 'rgba(0,0,0,0)', 'none', 'false', 'left', 'rgba(0,0,0,0)', '28', '', 'after', 'true', 'right', '0', '#dd8500', '0', '#dd8500', '#dd8500', '#ffffff', '19', 'Aldhabi'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name17 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_5_VB_IT, TotalSoft_Poll_5_VB_IA, TotalSoft_Poll_5_VB_IS, TotalSoft_Poll_5_VB_HBgC, TotalSoft_Poll_5_VB_HC, TotalSoft_Poll_5_RB_Show, TotalSoft_Poll_5_RB_Pos, TotalSoft_Poll_5_RB_BW, TotalSoft_Poll_5_RB_BC, TotalSoft_Poll_5_RB_BR, TotalSoft_Poll_5_RB_BgC, TotalSoft_Poll_5_RB_C, TotalSoft_Poll_5_RB_FS, TotalSoft_Poll_5_RB_FF, TotalSoft_Poll_5_RB_IT, TotalSoft_Poll_5_RB_IA, TotalSoft_Poll_5_RB_IS, TotalSoft_Poll_5_RB_HBgC, TotalSoft_Poll_5_RB_HC, TotalSoft_Poll_5_V_CA, TotalSoft_Poll_5_V_MBgC, TotalSoft_Poll_5_V_BgC, TotalSoft_Poll_5_V_C, TotalSoft_Poll_5_V_T, TotalSoft_Poll_5_V_Eff, TotalSoft_Poll_5_BB_MBgC, TotalSoft_Poll_5_BB_Pos, TotalSoft_Poll_5_BB_BC, TotalSoft_Poll_5_BB_BgC, TotalSoft_Poll_5_BB_C, TotalSoft_Poll_5_BB_IT, TotalSoft_Poll_5_BB_IA, TotalSoft_Poll_5_BB_HBgC, TotalSoft_Poll_5_BB_HC, TotalSoft_Poll_5_TV_Text, TotalSoft_Poll_5_BB_Text, TotalSoft_Poll_5_RB_Text, TotalSoft_Poll_5_VB_Text) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Image in Question 2', 'Image in Question', 'f1d8', 'after', '17', '#dd8500', '#ffffff', 'true', 'right', '0', '#dd8500', '0', '#dd8500', '#ffffff', '19', 'Aldhabi', 'f201', 'after', '17', '#dd8500', '#ffffff', 'Color', '#ffffff', '#dd8500', '#ffffff', 'bothlab', '3', '#dd8500', 'right', '#dd8500', '#dd8500', '#ffffff', 'f00d', 'after', '#dd8500', '#ffffff', 'Total', 'Back', 'Results', 'Vote'));
		//3
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Video in Question 1', 'Video in Question'));

		$TotalSoftPoll2_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Video in Question 1'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name16 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_5_MW, TotalSoft_Poll_5_Pos, TotalSoft_Poll_5_BW, TotalSoft_Poll_5_BC, TotalSoft_Poll_5_BR, TotalSoft_Poll_5_BoxSh_Show, TotalSoft_Poll_5_BoxSh_Type, TotalSoft_Poll_5_BoxSh, TotalSoft_Poll_5_BoxShC, TotalSoft_Poll_5_Q_BgC, TotalSoft_Poll_5_Q_C, TotalSoft_Poll_5_Q_FS, TotalSoft_Poll_5_Q_FF, TotalSoft_Poll_5_Q_TA, TotalSoft_Poll_5_I_H, TotalSoft_Poll_5_I_Ra, TotalSoft_Poll_5_V_W, TotalSoft_Poll_5_LAQ_W, TotalSoft_Poll_5_LAQ_H, TotalSoft_Poll_5_LAQ_C, TotalSoft_Poll_5_LAQ_S, TotalSoft_Poll_5_A_CA, TotalSoft_Poll_5_A_FS, TotalSoft_Poll_5_A_MBgC, TotalSoft_Poll_5_A_BgC, TotalSoft_Poll_5_A_C, TotalSoft_Poll_5_A_BW, TotalSoft_Poll_5_A_BC, TotalSoft_Poll_5_A_BR, TotalSoft_Poll_5_CH_S, TotalSoft_Poll_5_CH_TBC, TotalSoft_Poll_5_CH_CBC, TotalSoft_Poll_5_CH_TAC, TotalSoft_Poll_5_CH_CAC, TotalSoft_Poll_5_A_HBgC, TotalSoft_Poll_5_A_HC, TotalSoft_Poll_5_LAA_W, TotalSoft_Poll_5_LAA_H, TotalSoft_Poll_5_LAA_C, TotalSoft_Poll_5_LAA_S, TotalSoft_Poll_5_TV_Show, TotalSoft_Poll_5_TV_Pos, TotalSoft_Poll_5_TV_C, TotalSoft_Poll_5_TV_FS, TotalSoft_Poll_5_VT_IT, TotalSoft_Poll_5_VT_IA, TotalSoft_Poll_5_VB_Show, TotalSoft_Poll_5_VB_Pos, TotalSoft_Poll_5_VB_BW, TotalSoft_Poll_5_VB_BC, TotalSoft_Poll_5_VB_BR, TotalSoft_Poll_5_VB_MBgC, TotalSoft_Poll_5_VB_BgC, TotalSoft_Poll_5_VB_C, TotalSoft_Poll_5_VB_FS, TotalSoft_Poll_5_VB_FF) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Video in Question 1', 'Video in Question', '100', 'center', '3', '#bc0032', '10', 'true', 'true', '10', '#ffffff', '#ffffff', '#bc0032', '18', 'Abadi MT Condensed Light', 'center', '260', '1', '70', '70', '2', '#bc0032', 'solid', 'Nothing', '16', '#ffffff', '#bc0032', '#ffffff', '0', '#ffffff', '10', 'small', 'f10c', '#ffffff', 'f00c', '#ffffff', '#bc1c47', '#ffffff', '50', '3', 'rgba(0,0,0,0)', 'none', 'false', 'left', 'rgba(0,0,0,0)', '28', '', 'after', 'true', 'right', '0', '#bc0032', '0', '#bc0032', '#bc103e', '#ffffff', '17', 'Abadi MT Condensed Light'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name17 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_5_VB_IT, TotalSoft_Poll_5_VB_IA, TotalSoft_Poll_5_VB_IS, TotalSoft_Poll_5_VB_HBgC, TotalSoft_Poll_5_VB_HC, TotalSoft_Poll_5_RB_Show, TotalSoft_Poll_5_RB_Pos, TotalSoft_Poll_5_RB_BW, TotalSoft_Poll_5_RB_BC, TotalSoft_Poll_5_RB_BR, TotalSoft_Poll_5_RB_BgC, TotalSoft_Poll_5_RB_C, TotalSoft_Poll_5_RB_FS, TotalSoft_Poll_5_RB_FF, TotalSoft_Poll_5_RB_IT, TotalSoft_Poll_5_RB_IA, TotalSoft_Poll_5_RB_IS, TotalSoft_Poll_5_RB_HBgC, TotalSoft_Poll_5_RB_HC, TotalSoft_Poll_5_V_CA, TotalSoft_Poll_5_V_MBgC, TotalSoft_Poll_5_V_BgC, TotalSoft_Poll_5_V_C, TotalSoft_Poll_5_V_T, TotalSoft_Poll_5_V_Eff, TotalSoft_Poll_5_BB_MBgC, TotalSoft_Poll_5_BB_Pos, TotalSoft_Poll_5_BB_BC, TotalSoft_Poll_5_BB_BgC, TotalSoft_Poll_5_BB_C, TotalSoft_Poll_5_BB_IT, TotalSoft_Poll_5_BB_IA, TotalSoft_Poll_5_BB_HBgC, TotalSoft_Poll_5_BB_HC, TotalSoft_Poll_5_TV_Text, TotalSoft_Poll_5_BB_Text, TotalSoft_Poll_5_RB_Text, TotalSoft_Poll_5_VB_Text) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Video in Question 1', 'Video in Question', 'f005', 'after', '16', '#bc0032', '#ffffff', 'false', 'left', '2', '#dd3333', '11', '#ffffff', '#ffffff', '28', 'Abadi MT Condensed Light', '', 'after', '20', '#dd3333', '#ffffff', 'Nothing', '#bc0032', '#bc1844', '#ffffff', 'bothlab', '5', '#bc0032', 'right', '#bc0032', '#bc0032', '#ffffff', 'f00d', 'after', '#bc0032', '#ffffff', 'Total', 'Back', 'Results', 'Vote'));
		//4
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType) VALUES (%d, %s, %s)", '', 'Video in Question 2', 'Video in Question'));

		$TotalSoftPoll2_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoft_Poll_TTitle=%s order by id desc limit 1", 'Video in Question 2'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name16 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_5_MW, TotalSoft_Poll_5_Pos, TotalSoft_Poll_5_BW, TotalSoft_Poll_5_BC, TotalSoft_Poll_5_BR, TotalSoft_Poll_5_BoxSh_Show, TotalSoft_Poll_5_BoxSh_Type, TotalSoft_Poll_5_BoxSh, TotalSoft_Poll_5_BoxShC, TotalSoft_Poll_5_Q_BgC, TotalSoft_Poll_5_Q_C, TotalSoft_Poll_5_Q_FS, TotalSoft_Poll_5_Q_FF, TotalSoft_Poll_5_Q_TA, TotalSoft_Poll_5_I_H, TotalSoft_Poll_5_I_Ra, TotalSoft_Poll_5_V_W, TotalSoft_Poll_5_LAQ_W, TotalSoft_Poll_5_LAQ_H, TotalSoft_Poll_5_LAQ_C, TotalSoft_Poll_5_LAQ_S, TotalSoft_Poll_5_A_CA, TotalSoft_Poll_5_A_FS, TotalSoft_Poll_5_A_MBgC, TotalSoft_Poll_5_A_BgC, TotalSoft_Poll_5_A_C, TotalSoft_Poll_5_A_BW, TotalSoft_Poll_5_A_BC, TotalSoft_Poll_5_A_BR, TotalSoft_Poll_5_CH_S, TotalSoft_Poll_5_CH_TBC, TotalSoft_Poll_5_CH_CBC, TotalSoft_Poll_5_CH_TAC, TotalSoft_Poll_5_CH_CAC, TotalSoft_Poll_5_A_HBgC, TotalSoft_Poll_5_A_HC, TotalSoft_Poll_5_LAA_W, TotalSoft_Poll_5_LAA_H, TotalSoft_Poll_5_LAA_C, TotalSoft_Poll_5_LAA_S, TotalSoft_Poll_5_TV_Show, TotalSoft_Poll_5_TV_Pos, TotalSoft_Poll_5_TV_C, TotalSoft_Poll_5_TV_FS, TotalSoft_Poll_5_VT_IT, TotalSoft_Poll_5_VT_IA, TotalSoft_Poll_5_VB_Show, TotalSoft_Poll_5_VB_Pos, TotalSoft_Poll_5_VB_BW, TotalSoft_Poll_5_VB_BC, TotalSoft_Poll_5_VB_BR, TotalSoft_Poll_5_VB_MBgC, TotalSoft_Poll_5_VB_BgC, TotalSoft_Poll_5_VB_C, TotalSoft_Poll_5_VB_FS, TotalSoft_Poll_5_VB_FF) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Video in Question 2', 'Video in Question', '100', 'center', '0', 'rgba(0,0,0,0)', '0', 'true', 'true', '12', '#068ea3', '#068ea3', '#ffffff', '17', 'Andalus', 'center', '260', '1', '60', '100', '1', '#ffffff', 'dotted', 'Nothing', '14', '#068ea3', '#068ea3', '#ffffff', '0', '#ffffff', '0', 'small', 'f0c8', '#ffffff', 'f00c', '#ffffff', '', '', '100', '1', '#ffffff', 'dotted', 'false', 'left', 'rgba(0,0,0,0)', '28', '', 'after', 'true', 'right', '1', '#ffffff', '0', '#068ea3', '#068ea3', '#ffffff', '16', 'Andalus'));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name17 (id, TotalSoft_Poll_TID, TotalSoft_Poll_TTitle, TotalSoft_Poll_TType, TotalSoft_Poll_5_VB_IT, TotalSoft_Poll_5_VB_IA, TotalSoft_Poll_5_VB_IS, TotalSoft_Poll_5_VB_HBgC, TotalSoft_Poll_5_VB_HC, TotalSoft_Poll_5_RB_Show, TotalSoft_Poll_5_RB_Pos, TotalSoft_Poll_5_RB_BW, TotalSoft_Poll_5_RB_BC, TotalSoft_Poll_5_RB_BR, TotalSoft_Poll_5_RB_BgC, TotalSoft_Poll_5_RB_C, TotalSoft_Poll_5_RB_FS, TotalSoft_Poll_5_RB_FF, TotalSoft_Poll_5_RB_IT, TotalSoft_Poll_5_RB_IA, TotalSoft_Poll_5_RB_IS, TotalSoft_Poll_5_RB_HBgC, TotalSoft_Poll_5_RB_HC, TotalSoft_Poll_5_V_CA, TotalSoft_Poll_5_V_MBgC, TotalSoft_Poll_5_V_BgC, TotalSoft_Poll_5_V_C, TotalSoft_Poll_5_V_T, TotalSoft_Poll_5_V_Eff, TotalSoft_Poll_5_BB_MBgC, TotalSoft_Poll_5_BB_Pos, TotalSoft_Poll_5_BB_BC, TotalSoft_Poll_5_BB_BgC, TotalSoft_Poll_5_BB_C, TotalSoft_Poll_5_BB_IT, TotalSoft_Poll_5_BB_IA, TotalSoft_Poll_5_BB_HBgC, TotalSoft_Poll_5_BB_HC, TotalSoft_Poll_5_TV_Text, TotalSoft_Poll_5_BB_Text, TotalSoft_Poll_5_RB_Text, TotalSoft_Poll_5_VB_Text) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPoll2_ID[0]->id, 'Video in Question 2', 'Video in Question', 'f0e5', 'after', '15', '#068ea3', '#ffffff', 'false', 'right', '1', '#565656', '5', '#adadad', '#a3a3a3', '21', 'Andalus', 'f1fe', 'before', '16', '#000000', '#adadad', 'Nothing', '#068ea3', '#068ea3', '#ffffff', 'bothlab', '3', '#ffffff', 'right', '#068ea3', '#068ea3', '#ffffff', 'f015', 'after', '#068ea3', '#ffffff', 'Total', 'Back', 'Results', 'Vote'));
	}
?>