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
namespace app\frontend\logic;
use \tpfcore\util\Tree;
use \tpfcore\util\Data;
use \tpfcore\Core;

class Pages extends FrontendBase
{
	 /**
     * 获取页面内容
     * @param $id 页面id
     * @return toArray
     */	
	public function getPageById($id){
		$where = ["id"=>$id];
		$result=Core::loadModel("Blog")->where($where)->find();
		return $result?$result->toArray():"";
	}
}