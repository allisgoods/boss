<?php
namespace app\admin\Controller;

use think\Controller;
use think\Request;

class Common extends Controller
{
    //判断用户是否登录的基类
    public function __construct(){
        parent::__construct();
        $admin = session("user");
        if($admin){
            echo "这是测试git";
        }else{
            //获取用户相对于公众号的唯一ID
            $this->redirect("Login/login");
        }
    }
    //多文件上传
    public function uploads($parname){
        $common = model("common");
        $upre = $common->upload($parname);
        return $upre;
    }
}
