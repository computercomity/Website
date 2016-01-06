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
        $data = array(
            'background' => 'aboutus/index.jpg',
            'title' => 'About Us',
            'location' => 'Home / About Us'
        );
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
        $data = array(
            'background' => 'aboutus/history.jpg',
            'title' => 'History of C@C',
            'location' => 'About Us / History of C@C'
        );
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
        $data = array(
            'background' => 'aboutus/team.jpg',
            'title' => 'Our Team',
            'location' => 'About Us / Our Team'
        );
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
        $data = array(
            'background' => 'aboutus/contact.jpg',
            'title' => 'Contact Us',
            'location' => 'About Us / Contact Us'
        );
        return send_result( $data );
    }

}
