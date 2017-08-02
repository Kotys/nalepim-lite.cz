<?php
/**
 * @author Jan Kotrba <kotrba@kotyslab.cz>
 */

namespace App\Presenters;

class ArticlePresenter extends BasePublicPresenter
{
	public function actionDefault()
	{
		$this->redirect('Homepage:default');
	}
}