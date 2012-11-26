<?php

/**
 * @copyright  Copyright 2012 metaio GmbH. All rights reserved.
 * @link       http://www.metaio.com
 * @author     Frank Angermann
 **/

require_once '../library/arel_xmlhelper.class.php';
 
/**
 * When the channel is being viewed, a poi request will be sent
 * $_GET['l']...(optional) Position of the user when requesting poi search information
 * $_GET['o']...(optional) Orientation of the user when requesting poi search information
 * $_GET['p']...(optional) perimeter of the data requested in meters.
 * $_GET['uid']... Unique user identifier
 * $_GET['m']... (optional) limit of to be returned values
 * $_GET['page']...page number of result. e.g. m = 10: page 1: 1-10; page 2: 11-20, e.g.
 **/
 
//use the Arel Helper to start the output with arel


/**
 * 	For more information about using reflection map, please look at those pages:
 * 	
 * 	http://docs.metaio.com/bin/view/Main/EnvironmentMapping
 *  http://dev.metaio.com/sdk/tutorials/content-types/
 * 
 */

//start output
ArelXMLHelper::start(NULL, NULL, "http://www.junaio.com/publisherDownload/tutorial/tracking_tutorial.zip");

//output the truck with reflection maps included
$oObject = ArelXMLHelper::createGLUEModel3D(
											"1",	//ID 
											WWW_ROOT . "/resources/truck.zip", //model Path 
											NULL, //texture Path
											array(0,0,0), //translation
											array(1,1,1), //scale
											new ArelRotation(ArelRotation::ROTATION_EULERDEG, array(90,0,0)), //rotation
											1 //CoordinateSystemID
										);
//output the object
ArelXMLHelper::outputObject($oObject);

//end the output
ArelXMLHelper::end();