<?php
namespace Lazyphp\Controller;

class AboutController
{
	public function __construct()
    {
        
    }


    /**
     * 默认提示
     * @ApiDescription(section="Demo", description="默认提示")
     * @ApiLazyRoute(uri="/about/",method="GET")
     * @ApiReturn(type="object", sample="{'code': 0,'message': 'success'}")
     */
    public function index()
    {
        $data['title'] = $data['top_title'] = 'About Us';
        return send_result( $data );
    }

    /**
     * 默认提示
     * @ApiDescription(section="Demo", description="默认提示")
     * @ApiLazyRoute(uri="/about/history",method="GET")
     * @ApiReturn(type="object", sample="{'code': 0,'message': 'success'}")
     */
    public function history()
    {
        $data['title'] = $data['top_title'] = 'History of C@C';
        return send_result( $data );
    }

    /**
     * 默认提示
     * @ApiDescription(section="Demo", description="默认提示")
     * @ApiLazyRoute(uri="/about/team",method="GET")
     * @ApiReturn(type="object", sample="{'code': 0,'message': 'success'}")
     */
    public function team()
    {
        $data['title'] = $data['top_title'] = 'Our Team';
        return send_result( $data );
    }

    /**
     * 默认提示
     * @ApiDescription(section="Demo", description="默认提示")
     * @ApiLazyRoute(uri="/about/contact",method="GET")
     * @ApiReturn(type="object", sample="{'code': 0,'message': 'success'}")
     */
    public function contact()
    {
        $data['title'] = $data['top_title'] = 'Contact Us';
        return send_result( $data );
    }

    /**
     * 系统提示
     * @ApiDescription(section="Demo", description="系统提示")
     * @ApiLazyRoute(uri="/info",method="GET")
     * @ApiReturn(type="object", sample="{'code': 0,'message': 'success'}")
     */
    public function info()
    {
        //$data['notice'] = ;
        return send_error('SYSTEM','这里是信息提示页面');
    }
    
    /**
     * Demo接口
     * @ApiDescription(section="Demo", description="乘法接口")
     * @ApiLazyRoute(uri="/demo/times",method="GET")
     * @ApiParams(name="first", type="string", nullable=false, description="first", check="check_not_empty", cnname="第一个数")
     * @ApiParams(name="second", type="string", nullable=false, description="second", check="check_not_empty", cnname="第二个数")
     * @ApiReturn(type="object", sample="{'code': 0,'message': 'success'}")
     */
    public function demo($first,$second)
    {
        return send_result(intval($first)*intval($second));
    }

}
