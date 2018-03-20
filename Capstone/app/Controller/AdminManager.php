<?php
namespace app\Controller;

use app\Models\entity\Admin;
use app\Models\data\AdminManagerDB;

class AdminManager
{
    public static function getAllAdmin(){
        return AdminManagerDB::getAllAdmins();
    }
    public function getAdminByEmailPassword($email,$password){
        return AdminManagerDB::getAdminByEmailPassword($email,$password);
    }
    public function getAdminByEmail($email){
        return AdminManagerDB::getAdminByEmail($email);
    }
    public function saveAdmin(Admin $admin){
        AdminManagerDB::saveAdmin($admin);
	}	
	public function getAdminBySearch($searchvalue){
		return AdminManagerDB::getAdminBySearch($searchvalue);
    }
}
?>