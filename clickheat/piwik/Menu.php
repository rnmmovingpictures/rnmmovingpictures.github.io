<?php
/**
 * ClickHeat - Clicks' heatmap
 *
 * @link http://www.dugwood.com/clickheat/index.html
 * @license http://www.gnu.org/licenses/gpl-3.0.html Gpl v3 or later
 * @author YAMAMOTO Takashi - yamachan@piwikjapan.org
 * @since 2015/4/16
 * @version $Id: 81c99a3a48e3cf5682353286cdfb70cb9b889b94 $
 *
 * @package Piwik\Plugins\ClickHeat
 */

namespace Piwik\Plugins\ClickHeat;

use Piwik\Menu\MenuReporting;

class Menu extends \Piwik\Plugin\Menu
{
    public function configureReportingMenu(MenuReporting $menu)
    {
        $menu->addVisitorsItem('ClickHeat', array('module' => 'ClickHeat', 'action' => 'view'), 1);
    }
}
