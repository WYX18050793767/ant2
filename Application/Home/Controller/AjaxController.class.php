<?php
namespace Home\Controller;
use Home\Controller\SiteController;
/**
 * 站点首页
 */

class AjaxController extends SiteController {
    
    /*
     * 更多新闻
     */
    public function get_news(){

        $page_num = I('post.page_num',0,'intval');
        $class_id = I('post.class_id','all','intval');

        
        $where['status'] = 2;
        if($class_id != 'all'){
            $where['class_id'] = $class_id;
        }
        //热门新闻
        $newsList = M('content')->where($where)->field('content_id,title,description,image,time,views,author')->page($page_num,10)
                    ->order('content_id desc')->select();
        if(empty($newsList)){
            $rdata['code'] = 0;
            $rdata['info'] = '已经没有更多了';
            $this->ajaxReturn($rdata);
        }
        
        $detect = new \Common\Util\Mobile_Detect();
        
        if($detect->isMobile()){
            foreach($newsList as $key=>$val){
                $newsList[$key]['description'] = html_out($val['description']);
                if($val['time']>(time()-3600)){ //一小时内
                    $newsList[$key]['time'] = ceil((time()-$val['time'])/60).'分钟前';
                }else{
                    $newsList[$key]['time'] = date('m-d H:i');
                }
            }
            $this->assign('newsList',$newsList);
            $data = $this->fetch('news_list_m');
        }else{
            foreach($newsList as $key=>$val){
                $newsList[$key]['description'] = html_out($val['description']);
            }
            $this->assign('newsList',$newsList);
            
            $data = $this->fetch('news_list');
        }
        
        


        
        $rdata['code'] = 1;
        $rdata['info'] = '获取信息成功';
        $rdata['data'] = $data;
        $this->ajaxReturn($rdata);
    }
    
    /*
     * 更多快讯
     */
    public function get_message(){
        $page_num = I('post.page_num',0,'intval');
  
        $where['state'] = 2;
        $messageMod = D('Article/Message');
        
        $messageList = $messageMod->where($where)->page($page_num,10)
                                ->order('id desc')->select();
        
        if(empty($messageList)){
            $rdata['code'] = 0;
            $rdata['info'] = '已经没有更多了';
            $this->ajaxReturn($rdata);
        }
        $weekname=array('星期天','星期一','星期二','星期三','星期四','星期五','星期六');
        
        foreach($messageList as $key=>$val){
            $messageList[$key]['timeH'] = $weekname[date('w',$val['time'])].' '.date('Y-m-d H:i');
            $messageList[$key]['content'] =html_out($val['content']);
        }
        
        $this->assign('messageList',$messageList);
        
        $detect = new \Common\Util\Mobile_Detect();
        
        if($detect->isMobile()){
            $data = $this->fetch('message_list_m');
        }else{
            $data = $this->fetch('message_list');
        }
        
        
        $rdata['code'] = 1;
        $rdata['info'] = '获取信息成功';
        $rdata['data'] = $data;
        $this->ajaxReturn($rdata);
    }
    
    /*
     * 快讯操作
     */
    public function opera_message(){
        $id = I('request.id',0,'intval');
        $type = I('request.type','up','trim');
        if($type == 'up')
            $re = M('message')->where(['id'=>$id])->setInc('up');
        if($type == 'down')
            $re = M('message')->where(['id'=>$id])->setInc('down');
        
        if(!$re){
            $rdata['code'] = 0;
            $rdata['info'] = '请求失败';
            $this->ajaxReturn($rdata);
        }
        $rdata['code'] = 1;
        $rdata['info'] = '请求成功';
        $this->ajaxReturn($rdata);
    }
    
    /*
     * 更多导航
     */
    public function get_navi(){
        $page_num = I('post.page_num',0,'intval');
        $class_id = I('post.class_id','all','intval');
  
        $where['state'] = 1;

        if($class_id != 'recom'){
            $where['class_id'] = $class_id;
        }
        
        $naviMod = D('Admin/Navi');
        
        $naviList = $naviMod->where($where)->page($page_num,20)
                                ->order('id desc')->select();
        
        if(empty($naviList)){
            $rdata['code'] = 0;
            $rdata['info'] = '已经没有更多了';
            $this->ajaxReturn($rdata);
        }
        $this->assign('naviList',$naviList);
        $data = $this->fetch('navi_list');
        
        $rdata['code'] = 1;
        $rdata['info'] = '获取信息成功';
        $rdata['data'] = $data;
        $this->ajaxReturn($rdata);
    }
    
    /*
     * 更多活动
     */
    public function get_acti(){
        $page_num = I('post.page_num',0,'intval');
        $state  = I('post.state','all','intval');
        $time  = I('post.time','all','intval');

        if($state != 'all'){
            $where['state'] = $state;
        }
        if($time != 'all'){
            switch ($time){
                case 1:{
                    $where['time'] = array('gt',strtotime('-7 days'));
                    break;
                }
                case 2:{
                    $where['time'] = array('gt',strtotime('-30 days'));
                    break;
                }
                case 3:{
                    $where['time'] = array('gt',strtotime('-183 days'));
                    break;
                }
                case 4:{
                    $where['time'] = array('lt',strtotime('-183 days'));
                    break;
                }
            }
        }
        
        $activityMod = D('Admin/Activity');
        
        $actiList = $activityMod->where($where)->page($page_num,10)
                                ->order('id desc')->select();
        
        if(empty($actiList)){
            $rdata['code'] = 0;
            $rdata['info'] = '已经没有更多了';
            $this->ajaxReturn($rdata);
        }
        $this->assign('actiList',$actiList);
        
        $detect = new \Common\Util\Mobile_Detect();
        
        if($detect->isMobile()){
            $data = $this->fetch('acti_list_m');
        }else{
            $data = $this->fetch('acti_list');
        }
        
        
        $rdata['code'] = 1;
        $rdata['info'] = '获取信息成功';
        $rdata['data'] = $data;
        $this->ajaxReturn($rdata);
    }
    //图片上传
    public function upload(){
        
        $return = array('status' => 1, 'info' => '上传成功', 'data' => '');
        $file = D('DuxCms/File');
        $info = $file->uploadData($_FILES);
        if ($info)
        {
            $return['data'] = $info;
        }
        else
        {
            $return['status'] = 0;
            $return['info'] = $file->getError();
        }

        $this->ajaxReturn($return);

    }
    //申请收录提交
    public function apply_submit(){
        $data = I('post.');
        
        $_POST['state'] = 3;
        $naviMod = D('Admin/Navi');
        $re = $naviMod->saveData('add');
        if(!$re){
            $rdata['code'] = 0;
            $rdata['info'] = '提交失败';
            $this->ajaxReturn($rdata);
        }
        $rdata['code'] = 1;
        $rdata['info'] = '提交成功，请等待审核。';
        $this->ajaxReturn($rdata);
    }

   
    
}