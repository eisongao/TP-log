<?php
/**
 * ============================================================================
 * 版权所有 2017-2077 tpframe工作室，并保留所有权利。
 * @link http://www.tpframe.com/
 * @copyright Copyright (c) 2017 TPFrame Software LLC
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！未经本公司授权您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 */
namespace app\backend\service;
use \tpfcore\Core;
/**
 * 导航管理
 */
class Menu extends AdminServiceBase
{
	public function getMenuList($type="list",$data=[]){
		if($type=="list")
			return Core::loadModel($this->name)->getMenuList($data);
		else
			return Core::loadModel($this->name)->getTreeMenu($data);
	}
	public function saveMenu($data){
		return Core::loadModel($this->name)->saveMenu($data);	
	}
	public function getMenuListByid($data){
		return Core::loadModel($this->name)->getMenuListByid($data);
	}
	public function getMenuArrTree($where,$filter=false,$returnarr=false){
		return Core::loadModel($this->name)->getMenuArrTree($where,$filter,$returnarr);	
	}
	public function delMenu($data){
		return Core::loadModel($this->name)->delMenu($data);
	}
	public function getMenuRole($data){
		return Core::loadModel($this->name)->getMenuRole($data);	
	}
}
