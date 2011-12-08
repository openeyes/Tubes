-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2011 at 04:26 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tubedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE IF NOT EXISTS `dataset` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) unsigned DEFAULT NULL,
  `hospital_number` varchar(50) NOT NULL,
  `pt_first_name` varchar(50) NOT NULL,
  `pt_last_name` varchar(45) NOT NULL,
  `ethnicity` enum('-','African-Caribbean','Asian','Caucasian','Mediterranean/North Africa','Sub-continent Asia','Not Available') NOT NULL,
  `pt_dob` varchar(45) NOT NULL,
  `pt_age` smallint(5) unsigned NOT NULL,
  `pt_sex` enum(' -','Male','Female') NOT NULL,
  `surg_op_date` varchar(45) NOT NULL,
  `pt_part_of_study` enum('Yes','No') DEFAULT NULL,
  `study_name` varchar(10) NOT NULL,
  `ophth_diagnosis` enum('-','POAG','PACG','Congenital','Secondary','-') NOT NULL,
  `angle_diagnosis` enum(' -','Open','PAS','Pupil Block','Recession','Not Available') NOT NULL,
  `if_secondary_specify` enum(' -','NVG','ICE','Uveitis','Epithelialdowngrowth','Traumatic','XFS','Aphakic','Not Available') NOT NULL,
  `glaucmed_beta_blockers` enum('Yes','No') NOT NULL,
  `glaucmed_prostaglandins` enum('Yes','No') NOT NULL,
  `glaucmed_pilocarpine` enum('Yes','No') NOT NULL,
  `glaucmed_alpha_agonists` enum('Yes','No') NOT NULL,
  `glaucmed_topical_cai` enum('Yes','No') NOT NULL,
  `glaucmed_sytemic_cai` enum('Yes','No') NOT NULL,
  `glaucmed_none` enum('Yes','No') NOT NULL,
  `glaucmed_not_available` enum('Yes','No') NOT NULL,
  `corticosteroids_topical` enum('Yes','No') NOT NULL,
  `corticosteroids_sub_conj` enum('Yes','No') NOT NULL,
  `corticosteroids_peri_orbital` enum('Yes','No') NOT NULL,
  `corticosteroids_none` enum('Yes','No') NOT NULL,
  `corticosteroids_intravitreal` enum('Yes','No') NOT NULL,
  `corticosteroids_systemic` enum('Yes','No') NOT NULL,
  `corticosteroids_not_available` enum('Yes','No') NOT NULL,
  `asmt_bcva` enum(' -','6/5','6/6','6/9','6/12','6/18','6/24','6/36','6/60','CF','HM','PL','Not Available') NOT NULL,
  `asmt_cd_ratio` enum(' -','0.1','0.15','0.2','0.25','0.3','0.35','0.4','0.45','0.5','0.55','0.6','0.65','0.7','0.75','0.8','0.85','0.9','0.95','Not Available') NOT NULL,
  `asmt_cornea` enum(' -','Clear','Mild Oedema','Decompensated Oedema','Abnormal','Not Available') NOT NULL,
  `asmt_iop1` tinyint(10) NOT NULL,
  `asmt_iop2` tinyint(10) NOT NULL,
  `asmt_iop3` tinyint(10) NOT NULL,
  `asmt_avg_iop` tinyint(10) NOT NULL,
  `asmt_cct` varchar(10) NOT NULL,
  `asmt_lens` enum(' -','Clear','Cataract','Pseudophakic(PC-IOL)','Aphakic or AC-IOL','Not Available') NOT NULL,
  `previous_post_op_motility` enum(' -','Yes','No','Not Available') NOT NULL,
  `previous_surgery_tube` enum('Yes','No') NOT NULL,
  `previous_surgery_VRSx` enum('Yes','No') NOT NULL,
  `previous_surgery_silicone_oil` enum('Yes','No') NOT NULL,
  `previous_surgery_silicone_removed` enum(' -','Yes','No','Not Available') NOT NULL,
  `previous_surgery_cyclo_destruction` enum('Yes','No') NOT NULL,
  `previous_surgery_trab_npfs_express` enum('Yes','No') NOT NULL,
  `previous_surgery_corneal_tx` enum('Yes','No') NOT NULL,
  `previous_surgery_comment` text,
  `asmt_eye` enum(' -','Right','Left') NOT NULL,
  `anaesthetic_type` enum('  -','Periorbital','Sub-Tenon','General') NOT NULL,
  `shunt_type` enum(' -','Baerveldt 250','Baerveldt 350','Ahmed','Molteno SP','Molteno DP','Other') NOT NULL,
  `anti_metabolites` enum(' -','MMC 0.2','MMC 0.4/0.5','None') NOT NULL,
  `per_operative_drugs` enum(' -','Periorbital','Intravitreal/Cameral','Systemic Steroids','None') NOT NULL,
  `plate_position` enum(' -','STQ','ITQ','SNQ','INQ') NOT NULL,
  `tube_position` enum(' -','AC','Sulcus','Pars Plana') NOT NULL,
  `patch` enum(' -','Sclera','Cornea','Pericardium','Tenons','Scleral Flap','None') NOT NULL,
  `plate_limbus_distance` varchar(10) NOT NULL,
  `supramid_in_eye` enum(' -','Yes','No','Not Available') NOT NULL,
  `supramid_distance_from_limbus` varchar(10) NOT NULL,
  `tube_occlusion` enum(' -','Stent','Ligature','Both','None') NOT NULL,
  `ligated` enum(' -','10/0 Nylon','Vicryl','Prolene','None') NOT NULL,
  `slit` enum(' -','Yes','No','Not Available') NOT NULL,
  `viscoelastic` enum(' -','Yes','No','Not Available') NOT NULL,
  `flow_tested` enum(' -','Yes','No','Not Available') NOT NULL,
  `surgical_comments` text NOT NULL,
  `surgeon_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`hospital_number`),
  KEY `patientName` (`pt_first_name`),
  KEY `studyName` (`study_name`),
  KEY `patient_id` (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `dataset`
--

