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

}
