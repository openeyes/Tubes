<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
	
	/**Adapted from Bill Aylwards RDDataset scripts::30th June 2011
     * Function to generate a UUID
     * Taken from http://php.net/manual/en/function.uniqid.php
     *
     * @return string
     */
    public function study_name()
    {
	
	//Ernest version of unique id:
		return uniqid('Tube_', true);
	
	
        // Bill's version::version 4 UUID
    /*    return sprintf(
             '%08x-%04x-%04x-%02x%02x-%012x',
             mt_rand(),
             mt_rand(0, 65535),
             bindec(substr_replace(
             sprintf('%016b', mt_rand(0, 65535)), '0100', 11, 4)
             ),
             bindec(substr_replace(sprintf('%08b', mt_rand(0, 255)), '01', 5, 2)),
             mt_rand(0, 255),
             mt_rand()
        );*/
    }
	
	
	
	
	
	
	
}