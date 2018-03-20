<?php
namespace app\Controller;

use app\Models\entity\Job;
use app\Models\data\jobManagerDB;

class jobManager
{	
	public function saveJob(Job $job){
        JobManagerDB::saveJob($job);
	}
	
    public function getJobByTitle($title){
        return JobManagerDB::getJobByTitle($title);
    }
	
	public function getJobByLocation($location){
        return JobManagerDB::getJobByLocation($location);
    }
	
	public function getJobByEmployer($employer){
        return JobManagerDB::getJobByEmployer($employer);
    }
    
	public function getJobById($id){
        return JobManagerDB::getJobById($id);
    }
	
	public function deleteJob($Id){
		return JobManagerDB::deleteJob($Id);
    }
	
	public function getJob(){
        return JobManagerDB::getJob();
    }
	   
}
?>