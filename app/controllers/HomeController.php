<?php
/**
* HomeController
*/
class HomeController extends BaseController
{
    public function home()
    {
        // return string
        /* echo "<h1>控制器成功！</h1>";
        Article::first();
        require dirname(__FILE__).'/../views/home.php';
        exit(); */
    	// view sample
		$this->view = View::make('home')->with('article',Article::first())
                                    ->withTitle('MFFC :-D')
                                    ->withThankYou('OK!');
		// mail sample
	    // $this->mail = Mail::to(['ooxx@gmail.com', 'ooxx@qq.com'])
	    //                     ->from('xx <xx@163.com>')
	    //                     ->title('Hello World!')
	    //                     ->content('<h1>Hello,how are you~~</h1>');
	    //					   ->send();
	
		// redis sample
		/*Rediss::set('key1','value1',3000,'m');//ms
	    echo Rediss::get('key1');*/
	    try {
		    //所有的对象通过这个方法创建，api在下方有详细说明
		    $g = \Mohuishou\Lib\ScuplusJwc::create('Shadice', 'goodluck004', '78963214');
		    $grade = $g->index();
		    print_r($grade);
		}catch (\Exception $e){
		    echo $e->getMessage();
		}
    }
}