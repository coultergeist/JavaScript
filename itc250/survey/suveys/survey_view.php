<?php
/**
 * survey_view.php along with index.php provides a sample web application
 *
 * @package SurveySez
 * @author Danielle Coulter <velvetriotinfo@gmail.com>
 * @version 1.0 2017/05/05
 * @link http://www.velvetriot.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see index.php
 * @see Pager.php 
 * @todo none
 */

# '../' works for a sub-folder.  use './' for the root  
require '../inc_0700/config_inc.php'; #provides configuration, pathing, error handling, db credentials
 
# check variable of item passed in - if invalid data, forcibly redirect back to index.php page
if(isset($_GET['id']) && (int)$_GET['id'] > 0){#proper data must be on querystring
	 $myID = (int)$_GET['id']; #Convert to integer, will equate to zero if fails
}else{
	//myRedirect(VIRTUAL_PATH . "surveys/index.php");
    header('Location:index.php ');
}

$mySurvey = new Survey($myID);
dumpDie($mySurvey);
    
//---end config area --------------------------------------------------

if($mySurvey->IsValid)
{#only load data if record found
	$config->titleTag = $mySurvey->Title . " Surveys made with PHP & love!"; #overwrite PageTitle with Muffin info!
}

# END CONFIG AREA ---------------------------------------------------------- 

get_header(); #defaults to theme header or header_inc.php

if($mySurvey->IsValid)
{#only load data if record found
	
    echo '
    <h3>' . $mySurvey->Title . '</h3>
    <p>Description: ' . $mySurvey->Description . '</p>
    ';
    
    //$config->titleTag = $mySurveyTitle . " Surveys made with PHP & love!"; #overwrite PageTitle with Survey info!
}

get_footer(); #defaults to theme footer or footer_inc.php


class Survey
{
    public $SurveyID = 0;
    public $Title = '';
    public $Description = '';
    public $IsValid = false;
    public $Qustions = array();
    
    public function __construct($id)
    {
        //load data from survey table
        $this->SurveyID = (int)$id;
        $sql = "select Title,Description from sp17_surveys where SurveyID = " . $this->SurveyID;
           
        $result = mysqli_query(IDB::conn(),$sql) or die(trigger_error(mysqli_error(IDB::conn()), E_USER_ERROR));

        if(mysqli_num_rows($result) > 0)
        {#records exist - process
               $this->IsValid = true;	
               while ($row = mysqli_fetch_assoc($result))
               {
                    $this->Title = dbOut($row['Title']);
                    $this->Description = dbOut($row['Description']);
               }
        }//end if statement

        @mysqli_free_result($result); # We're done with the data!    
        
        //load Question data
        $sql = "Select QuestionID, Question, Description from sp17_questions where SurveyID = " . $this->SurveyID;   
        
        $result = mysqli_query(IDB::conn(),$sql) or die(trigger_error(mysqli_error(IDB::conn()), E_USER_ERROR));

        if(mysqli_num_rows($result) > 0)
        {#records exist - process
               while ($row = mysqli_fetch_assoc($result))
               {
                   $this->Questions[] = new Question(dbOut($row['QuestionID']),dbOut($row['Question']),dbOut($row['Description'])); 
                   //$this->Title = dbOut($row['Title']);
                   //$this->Description = dbOut($row['Description']);
               }
        }//end if statement

        @mysqli_free_result($result); # We're done with the data!
    }#end Survey constructor
}#end Survey class


class Question {
    
    public $QuestionID = 0;
    public $QuestionText = '';
    public $Description = '';
    
    public function __construct($QuestionID,$QuestionText,$Description){
        
        $this->$QuestionID = (int)$QuestionID;
        $this->$QuestionText = $QuestionText;
        $this->$Description = $Description;
        
    }//end Question constructor
    
}//end Question class








