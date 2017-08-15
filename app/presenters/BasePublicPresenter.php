<?php
/**
 * @author Jan Kotrba <kotrba@kotyslab.cz>
 */

namespace App\Presenters;

use Nette\Application\UI\Presenter;

abstract class BasePublicPresenter extends Presenter
{

	protected function beforeRender()
	{
		parent::beforeRender();

		$file = RESOURCES_DIR . 'public/css/color/light-green.css';
		if (file_exists($file)) {
			$this->getTemplate()->styleHash = md5_file($file);
		}
	}
}