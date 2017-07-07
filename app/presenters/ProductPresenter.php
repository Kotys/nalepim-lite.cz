<?php
/**
 * @author Jan Kotrba <kotrba@kotyslab.cz>
 */

namespace App\Presenters;

use Tracy\Debugger;

class ProductPresenter extends BasePublicPresenter
{
	public function actionDefault($id) {
		Debugger::barDump($id);
	}
}