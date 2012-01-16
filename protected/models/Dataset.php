<?php

/**
 * This is the model class for table "dataset".
 *
 * The followings are the available columns in table 'dataset':
 * @property integer $id
 * @property string $patient_id
 * @property string $hospital_number
 * @property string $pt_first_name
 * @property string $pt_last_name
 * @property string $ethnicity
 * @property string $pt_dob
 * @property integer $pt_age
 * @property string $pt_sex
 * @property string $surg_op_date
 * @property string $pt_part_of_study
 * @property string $study_name
 * @property string $ophth_diagnosis
 * @property string $angle_diagnosis
 * @property string $if_secondary_specify
 * @property string $glaucmed_beta_blockers
 * @property string $glaucmed_prostaglandins
 * @property string $glaucmed_pilocarpine
 * @property string $glaucmed_alpha_agonists
 * @property string $glaucmed_topical_cai
 * @property string $glaucmed_sytemic_cai
 * @property string $glaucmed_none
 * @property string $glaucmed_not_available
 * @property string $corticosteroids_topical
 * @property string $corticosteroids_sub_conj
 * @property string $corticosteroids_peri_orbital
 * @property string $corticosteroids_none
 * @property string $corticosteroids_intravitreal
 * @property string $corticosteroids_systemic
 * @property string $corticosteroids_not_available
 * @property string $asmt_bcva
 * @property string $asmt_cd_ratio
 * @property string $asmt_cornea
 * @property integer $asmt_iop1
 * @property integer $asmt_iop2
 * @property integer $asmt_iop3
 * @property integer $asmt_avg_iop
 * @property string $asmt_cct
 * @property string $asmt_lens
 * @property string $previous_post_op_motility
 * @property string $previous_surgery_tube
 * @property string $previous_surgery_VRSx
 * @property string $previous_surgery_silicone_oil
 * @property string $previous_surgery_silicone_removed
 * @property string $previous_surgery_cyclo_destruction
 * @property string $previous_surgery_trab_npfs_express
 * @property string $previous_surgery_corneal_tx
 * @property string $previous_surgery_comment
 * @property string $asmt_eye
 * @property string $anaesthetic_type
 * @property string $shunt_type
 * @property string $anti_metabolites
 * @property string $per_operative_drugs
 * @property string $plate_position
 * @property string $tube_position
 * @property string $patch
 * @property string $plate_limbus_distance
 * @property string $supramid_in_eye
 * @property string $supramid_distance_from_limbus
 * @property string $tube_occlusion
 * @property string $ligated
 * @property string $slit
 * @property string $viscoelastic
 * @property string $flow_tested
 * @property string $surgical_comments
 * @property string $surgeon_name
 *
 * The followings are the available model relations:
 * @property Patient $patient
 */
class Dataset extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Dataset the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dataset';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		
		// Combine rules for wizard steps (avoids defining multiple rule sets)
		$rules = array_merge($this->rules_step1() ,$this->rules_step2(), $this->rules_step3(), $this->rules_step4());
		
		// Additional rules
		$rules = array_merge($rules, array(
			array('patient_id', 'length', 'max' => 10),
			// Search rules
			array('id, patient_id, hospital_number, pt_first_name, pt_last_name, ethnicity, pt_dob, pt_age, pt_sex,
				surg_op_date, pt_part_of_study, study_name, ophth_diagnosis, angle_diagnosis, if_secondary_specify,
				glaucmed_beta_blockers, glaucmed_prostaglandins, glaucmed_pilocarpine, glaucmed_alpha_agonists,
				glaucmed_topical_cai, glaucmed_sytemic_cai, glaucmed_none, glaucmed_not_available, corticosteroids_topical,
				corticosteroids_sub_conj, corticosteroids_peri_orbital, corticosteroids_none, corticosteroids_intravitreal,
				corticosteroids_systemic, corticosteroids_not_available, asmt_bcva, asmt_cd_ratio, asmt_cornea, asmt_iop1,
				asmt_iop2, asmt_iop3, asmt_avg_iop, asmt_cct, asmt_lens, previous_post_op_motility, previous_surgery_tube,
				previous_surgery_VRSx, previous_surgery_silicone_oil, previous_surgery_silicone_removed,
				previous_surgery_cyclo_destruction, previous_surgery_trab_npfs_express, previous_surgery_corneal_tx,
				previous_surgery_comment, asmt_eye, anaesthetic_type, shunt_type, anti_metabolites, per_operative_drugs,
				plate_position, tube_position, patch, plate_limbus_distance, supramid_in_eye, supramid_distance_from_limbus,
				tube_occlusion, ligated, slit, viscoelastic, flow_tested, surgical_comments, surgeon_name', 'safe', 'on'=>'search'),
		));
		return $rules;
	}
	
	/**
	 * @return array validation rules for wizard step1 attributes.
	 */
	public function rules_step1() {
		return array(
			array('pt_part_of_study, study_name', 'safe'), // Required for attributes that have no other rules
			array('hospital_number, pt_last_name, pt_first_name, surg_op_date, pt_dob, pt_age, pt_sex, ethnicity', 'required'),
			array('pt_age', 'numerical', 'integerOnly' => true),
			array('hospital_number, pt_first_name', 'length', 'max' => 50),
			array('pt_last_name', 'length', 'max' => 45),
			array('ethnicity', 'length', 'max' => 26),
			array('pt_sex', 'length', 'max' => 6),
			array('pt_part_of_study', 'length', 'max' => 13),
		);
	}

	/**
	 * @return array validation rules for wizard step2 attributes.
	 */
	public function rules_step2() {
		return array(
			array('if_secondary_specify, glaucmed_prostaglandins, glaucmed_pilocarpine, glaucmed_topical_cai,
				glaucmed_sytemic_cai, glaucmed_alpha_agonists, glaucmed_none, glaucmed_not_available', 'safe'), // Required for attributes that have no other rules
			array('ophth_diagnosis, angle_diagnosis', 'required'),
			array('ophth_diagnosis, angle_diagnosis, glaucmed_prostaglandins, glaucmed_pilocarpine, glaucmed_alpha_agonists,
				glaucmed_topical_cai, glaucmed_sytemic_cai, glaucmed_none, glaucmed_not_available',	'length', 'max' => 13),
			array('if_secondary_specify', 'length', 'max' => 20),
		);
	}
	
	/**
	 * @return array validation rules for wizard step3 attributes.
	 */
	public function rules_step3() {
		return array(
			array('asmt_bcva, asmt_cd_ratio, asmt_cornea, asmt_iop1, asmt_iop2, asmt_iop3,
				asmt_avg_iop, asmt_cct, asmt_lens, previous_post_op_motility, previous_surgery_tube,
				previous_surgery_VRSx, previous_surgery_silicone_oil, previous_surgery_silicone_removed,
				previous_surgery_cyclo_destruction, previous_surgery_trab_npfs_express, previous_surgery_corneal_tx,
				previous_surgery_comment', 'safe'), // Required for attributes that have no other rules
			array('asmt_iop1, asmt_iop2, asmt_iop3, asmt_avg_iop', 'required'),
			array('asmt_iop1, asmt_iop2, asmt_iop3', 'numerical', 'integerOnly' => true),
			array('asmt_cct', 'length', 'max' => 10),
			array('asmt_bcva, asmt_cd_ratio, previous_post_op_motility, previous_surgery_tube, previous_surgery_VRSx,
				previous_surgery_silicone_oil, previous_surgery_silicone_removed, previous_surgery_cyclo_destruction,
				previous_surgery_trab_npfs_express, previous_surgery_corneal_tx', 'length', 'max' => 13),
			array('asmt_cornea, asmt_lens', 'length', 'max' => 20),
		);
	}

	/**
	 * @return array validation rules for wizard step4 attributes.
	 */
	public function rules_step4() {
		return array(
			array('surgical_comments, surgeon_name', 'safe'), // Required for attributes that have no other rules
			array('asmt_eye, anaesthetic_type, shunt_type, anti_metabolites, plate_position,
				tube_position, tube_occlusion, ligated, patch, plate_limbus_distance, per_operative_drugs, supramid_in_eye,
				supramid_distance_from_limbus, slit, viscoelastic, flow_tested','required'),
			array('plate_limbus_distance', 'numerical', 'integerOnly' => true),
			array('plate_limbus_distance, supramid_distance_from_limbus', 'length', 'max' => 10),
			array('asmt_eye, anaesthetic_type, shunt_type, anti_metabolites, plate_position, tube_position, patch,
				supramid_in_eye, tube_occlusion, ligated, slit, viscoelastic, flow_tested', 'length', 'max' => 13),
			array('per_operative_drugs, surgeon_name', 'length', 'max' => 20),
		);
	}
	
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			//'patient' => array(self::BELONGS_TO, 'Patient', 'patient_id'),
			'user' => array(self::BELONGS_TO, 'User', 'userId'),//added on the 2nd October for user access
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'patient_id' => 'Patient',
			'hospital_number' => 'Hospital Number',
			'pt_first_name' => ' First Name',
			'pt_last_name' => ' Last Name',
			'ethnicity' => ' Ethnicity',
			'pt_dob' => 'Date of Birth',
			'pt_age' => 'Age',
			'pt_sex' => 'Gender',
			'surg_op_date' => 'Surgery Date',
			'pt_part_of_study' => 'Patient part Of Study ?',
			'study_name' => 'Study Name',
			'ophth_diagnosis' => 'Ophthalmic Diagnosis',
			'angle_diagnosis' => 'Angle Diagnosis',
			'if_secondary_specify' => 'If Secondary Specify',
			'glaucmed_beta_blockers' => 'Beta Blockers',
			'glaucmed_prostaglandins' => 'Prostaglandins',
			'glaucmed_pilocarpine' => 'Pilocarpine',
			'glaucmed_alpha_agonists' => 'Alpha-agonists',
			'glaucmed_topical_cai' => 'Topical CAI',
			'glaucmed_sytemic_cai' => 'Sytemic CAI',
			'glaucmed_none' => 'None',
			'glaucmed_not_available' => 'Not Available',
			'corticosteroids_topical' => 'Topical',
			'corticosteroids_sub_conj' => 'Sub-Conj',
			'corticosteroids_peri_orbital' => 'Peri-orbital',
			'corticosteroids_none' => 'None',
			'corticosteroids_intravitreal' => 'Intravitreal',
			'corticosteroids_systemic' => 'Systemic',
			'corticosteroids_not_available' => 'Not Available',
			'asmt_bcva' => 'BCVA',
			'asmt_cd_ratio' => 'Cd ratio',
			'asmt_cornea' => 'Cornea',
			'asmt_iop1' => 'Previous Last 3 IOPs',
			'asmt_iop2' => '',
			'asmt_iop3' => '',
			'asmt_avg_iop' => 'Average IOP',
			'asmt_cct' => 'CCT',
			'asmt_lens' => 'Lens',
			'previous_post_op_motility' => 'Previous pre-Op motility disturbance',
			'previous_surgery_tube' => 'Tube',
			'previous_surgery_VRSx' => 'VRSx',
			'previous_surgery_silicone_oil' => 'Silicone Oil',
			'previous_surgery_silicone_removed' => 'Silicone Removed ?',
			'previous_surgery_cyclo_destruction' => 'Cyclo Destruction',
			'previous_surgery_trab_npfs_express' => 'Trab / NPFS / Express',
			'previous_surgery_corneal_tx' => 'Corneal Tx',
			'previous_surgery_comment' => 'Previous surgery Comment',
			'asmt_eye' => 'Eye',
			'anaesthetic_type' => 'Anaesthetic Type',
			'shunt_type' => 'Shunt Type',
			'anti_metabolites' => 'Anti Metabolites',
			'per_operative_drugs' => 'Per-operative steroids',
			'plate_position' => 'Plate Position',
			'tube_position' => 'Tube Position',
			'patch' => 'Patch',
			'plate_limbus_distance' => 'Plate Limbus Distance',
			'supramid_in_eye' => 'Supramid In Eye',
			'supramid_distance_from_limbus' => 'Distance from limbus',
			'tube_occlusion' => 'Tube Occlusion',
			'ligated' => 'Ligated',
			'slit' => 'Slit',
			'viscoelastic' => 'Viscoelastic',
			'flow_tested' => 'Flow Tested',
			'surgical_comments' => 'Surgical Comments',
			'surgeon_name' => 'Primary Surgeon Name',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('patient_id',$this->patient_id,true);
		$criteria->compare('hospital_number',$this->hospital_number,true);
		$criteria->compare('pt_first_name',$this->pt_first_name,true);
		$criteria->compare('pt_last_name',$this->pt_last_name,true);
		$criteria->compare('ethnicity',$this->ethnicity,true);
		$criteria->compare('pt_dob',$this->pt_dob,true);
		$criteria->compare('pt_age',$this->pt_age);
		$criteria->compare('pt_sex',$this->pt_sex,true);
		$criteria->compare('surg_op_date',$this->surg_op_date,true);
		$criteria->compare('pt_part_of_study',$this->pt_part_of_study,true);
		$criteria->compare('study_name',$this->study_name,true);
		$criteria->compare('ophth_diagnosis',$this->ophth_diagnosis,true);
		$criteria->compare('angle_diagnosis',$this->angle_diagnosis,true);
		$criteria->compare('if_secondary_specify',$this->if_secondary_specify,true);
		$criteria->compare('glaucmed_beta_blockers',$this->glaucmed_beta_blockers,true);
		$criteria->compare('glaucmed_prostaglandins',$this->glaucmed_prostaglandins,true);
		$criteria->compare('glaucmed_pilocarpine',$this->glaucmed_pilocarpine,true);
		$criteria->compare('glaucmed_alpha_agonists',$this->glaucmed_alpha_agonists,true);
		$criteria->compare('glaucmed_topical_cai',$this->glaucmed_topical_cai,true);
		$criteria->compare('glaucmed_sytemic_cai',$this->glaucmed_sytemic_cai,true);
		$criteria->compare('glaucmed_none',$this->glaucmed_none,true);
		$criteria->compare('glaucmed_not_available',$this->glaucmed_not_available,true);
		$criteria->compare('corticosteroids_topical',$this->corticosteroids_topical,true);
		$criteria->compare('corticosteroids_sub_conj',$this->corticosteroids_sub_conj,true);
		$criteria->compare('corticosteroids_peri_orbital',$this->corticosteroids_peri_orbital,true);
		$criteria->compare('corticosteroids_none',$this->corticosteroids_none,true);
		$criteria->compare('corticosteroids_intravitreal',$this->corticosteroids_intravitreal,true);
		$criteria->compare('corticosteroids_systemic',$this->corticosteroids_systemic,true);
		$criteria->compare('corticosteroids_not_available',$this->corticosteroids_not_available,true);
		$criteria->compare('asmt_bcva',$this->asmt_bcva,true);
		$criteria->compare('asmt_cd_ratio',$this->asmt_cd_ratio,true);
		$criteria->compare('asmt_cornea',$this->asmt_cornea,true);
		$criteria->compare('asmt_iop1',$this->asmt_iop1);
		$criteria->compare('asmt_iop2',$this->asmt_iop2);
		$criteria->compare('asmt_iop3',$this->asmt_iop3);
		$criteria->compare('asmt_avg_iop',$this->asmt_avg_iop);
		$criteria->compare('asmt_cct',$this->asmt_cct,true);
		$criteria->compare('asmt_lens',$this->asmt_lens,true);
		$criteria->compare('previous_post_op_motility',$this->previous_post_op_motility,true);
		$criteria->compare('previous_surgery_tube',$this->previous_surgery_tube,true);
		$criteria->compare('previous_surgery_VRSx',$this->previous_surgery_VRSx,true);
		$criteria->compare('previous_surgery_silicone_oil',$this->previous_surgery_silicone_oil,true);
		$criteria->compare('previous_surgery_silicone_removed',$this->previous_surgery_silicone_removed,true);
		$criteria->compare('previous_surgery_cyclo_destruction',$this->previous_surgery_cyclo_destruction,true);
		$criteria->compare('previous_surgery_trab_npfs_express',$this->previous_surgery_trab_npfs_express,true);
		$criteria->compare('previous_surgery_corneal_tx',$this->previous_surgery_corneal_tx,true);
		$criteria->compare('previous_surgery_comment',$this->previous_surgery_comment,true);
		$criteria->compare('asmt_eye',$this->asmt_eye,true);
		$criteria->compare('anaesthetic_type',$this->anaesthetic_type,true);
		$criteria->compare('shunt_type',$this->shunt_type,true);
		$criteria->compare('anti_metabolites',$this->anti_metabolites,true);
		$criteria->compare('per_operative_drugs',$this->per_operative_drugs,true);
		$criteria->compare('plate_position',$this->plate_position,true);
		$criteria->compare('tube_position',$this->tube_position,true);
		$criteria->compare('patch',$this->patch,true);
		$criteria->compare('plate_limbus_distance',$this->plate_limbus_distance,true);
		$criteria->compare('supramid_in_eye',$this->supramid_in_eye,true);
		$criteria->compare('supramid_distance_from_limbus',$this->supramid_distance_from_limbus,true);
		$criteria->compare('tube_occlusion',$this->tube_occlusion,true);
		$criteria->compare('ligated',$this->ligated,true);
		$criteria->compare('slit',$this->slit,true);
		$criteria->compare('viscoelastic',$this->viscoelastic,true);
		$criteria->compare('flow_tested',$this->flow_tested,true);
		$criteria->compare('surgical_comments',$this->surgical_comments,true);
		$criteria->compare('surgeon_name',$this->surgeon_name,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	
	

	/**
     * Override the before validate method to put in the current userId as the Primary surgeon identifier
     *Ernest::Adapted from::Bill Aylward RDDataset/Dataset Model class
	 This associates the user to the Primary surgeon
     */
    protected function beforeValidate()
    {
        // Save current userId
        if ($this->isNewRecord)
        {
            $this->surgeon_name= Yii::app()->user->id;
        }
        
        return parent::beforeValidate();
    }
}