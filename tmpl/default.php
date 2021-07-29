<?php
/**
 * @package    M.S. Services Module
 *
 * @author     Koen Vandezande <koen@rioguides.biz>
 * @copyright  RioGuides.Biz
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://rioguides.biz
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

// Load the smart search component language file.
$lang = $app->getLanguage();
$tag  = $lang->getTag();
$lang->load('mod_msservices', JPATH_SITE);
?>

<p>
	<span style="font-family: courier new, courier, monospace;">
		<div class="therapies_wrapper">
			<br />
			<h2 class="therapies_title">SERVICIOS</h2>
			<br />
			<div class="therapies_flex">
				<br />
				<a href="https://marielaspoltore.com/index.php/es/terapias/sanacion-de-utero">
					<div>
						<br />
						<div class="therapies_item"></div>
						<br />
						<img class="therapies_image" src="https://marielaspoltore.com/images/illustration/utero_440.png" alt="">
						<br />
						<span class="therapies_text">Sanación de útero</span>
						<br />
					</div>
					<br />
				</a>
				<br />
				<a href="https://marielaspoltore.com/index.php/es/terapias/clases-de-yoga">
					<br />
					<div class="therapies_item">
						<br />
						<img class="therapies_image" src="https://marielaspoltore.com/images/illustration/yoga_440.png" alt="">
						<br />
						<span class="therapies_text">Clases de Yoga</span>
						<br />
					</div>
					<br />
				</a>
				<br />
				<?php if($tag != 'en-GB') {?>
					<a href="https://marielaspoltore.com/index.php/es/tienda">
						<br />
						<div class="therapies_item">
							<br />
							<img class="therapies_image" src="https://marielaspoltore.com/images/illustration/tienda_440.png" alt="">
							<br />
							<span class="therapies_text">
								Tienda
							</span>
							<br />
						</div>
						<br />
					</a>
					<br />
				<?php } ?>	
				<a href="https://marielaspoltore.com/index.php/es/terapias/terapia-menstrual">
					<br />
					<div class="therapies_item">
						<br />
						<img class="therapies_image" src="https://marielaspoltore.com/images/illustration/moon_440.png" alt="">
						<br />
						<span class="therapies_text">Terapia Menstrual</span>
						<br />
					</div>
					<br />
				</a>
				<br />
				<a href="https://marielaspoltore.com/index.php/es/terapias/terapia-floral">
					<br />
					<div class="therapies_item">
						<br />
						<img class="therapies_image" src="https://marielaspoltore.com/images/illustration/bach_440.png" alt="">
						<br />
						<span class="therapies_text">Terapia floral</span>
						<br />
					</div>
					<br />
				</a>
				<br />
			</div>
			<br />
		</div>
	</span>
</p>