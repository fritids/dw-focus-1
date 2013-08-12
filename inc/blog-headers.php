<div id="bloghead_photo" class="cat<?php echo $catID; ?>">
	<h1><?php if(is_category()) { 
		single_cat_title(); 
	} else if(is_single()) {
		$catName = get_cat_name($catID);
		$catLink = get_category_link($catID); ?>
		<a href="<?php echo esc_url($catLink); ?>"><?php echo $catName; ?></a>
	<?php }	?></h1>
	<p>
	<?php switch($catID) {
		case 40: 
			echo "Science, climate, weather and water from a New Mexico perspective";
			break;
		case 41:
			echo "News and notes from City Hall, Bernalillo County and local politics";
			break;
		case 159:
			echo "Insider tidbits, analysis and some wonky commentary about education in New Mexico, and particularly Albuquerque";
			break;
		case 215:
			echo "Inside UNM, CNM and higher education issues around the state";
			break;
		case 195:
			echo "Shopping and restaurant news from around the Duke City";
			break;
		case 300:
			echo "Covering UNM Lobos and Mountain West Conference hoops and more";
			break;
		case 259:
			echo "UNM football, combat sports and whatever else is worth blogging about on a given day";
			break;
		case 203:
			echo "From the Northern Bureau, news and notes about sports, the outdoors and general leisure";
			break;
		case 42: 
			echo "Washington politics and government with a New Mexico flavor";
			break;
		case 53:
			echo "News, notes and insight on Santa Fe city and county government";
			break;
		case 50: 
			echo "Daily roundups of the N.M. legislative session by John Robertson";
			break;
		case 45:
			echo "Film and entertainment happenings from around The Land of Enchantment";
			break;
		case 27:
			echo "Reviews and news from the gaming world, with emphasis on major consoles";
			break;
		case 297:
			echo "A look at casino gaming and entertainment around New Mexico";
			break;
		default: 
			echo "";
			break;
	} ?>	
	</p>
</div>
