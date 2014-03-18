<?PHP

class Application_Models_PersonModel
{


	public function getName()
	{


		$a = 0;

		for($i=0; $i<=1000; $i++)
			$a = $a+$i;

		return 'josé';
	}


}