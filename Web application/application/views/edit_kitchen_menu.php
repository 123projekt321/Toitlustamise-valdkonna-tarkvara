<script type="text/javascript" src="<?php echo base_url(); ?>js/date_picker_kitchen.js"></script>


<div class="content">
<?php echo '<h1>'.$this->lang->line("menu_on_date").' '.$date.'</h1>';?>
</br>
<a id="lingid" href="<?php base_url() ?>/index.php/kitchen_menu"><?php echo $this->lang->line("back_to_menu"); ?></a>
<br><br>

<?php
if($orders_count > 0){
	echo '<script type="text/javascript"> warnModification(); </script>';
}
	$menu = $menu[0];
	$breakfast_array = explode(';', $menu['breakfast']);
	$lunch_array = explode(';', $menu['lunch']);
	$supper_array = explode(';', $menu['supper']);
echo '<form onsubmit="return saveKitchenMenuEdit(\''.$this->lang->line("kitchen_menu_notification").'\', \''.$date_info.'\');" method="post" accept-charset="utf-8" action="/index.php/kitchen_menu/save_menu_edit/">';

	echo '<label id="menu_date" for="date"><b>'.$this->lang->line("date").': </b></label>';
	echo '<input type="text" id="date" value="'.$menu['date'].'" name="date" readonly="readonly">';
		echo '<table>';
			echo '<td class="kitchen_menu_view">';
				echo '<table id="b">';
					echo '<b><p>'.$this->lang->line("breakfast").'</p></b>';
						$i = 0;
						foreach ($breakfast_array as $breakfast) {
							if($breakfast != ""){
								$breakfast_info = explode('=', $breakfast);
								echo '<b>'.$this->lang->line("food").': </b><input value="'.$breakfast_info[0].'" id="b_'.$i.'" type="text"><br/> <b>'.$this->lang->line("ingredients").': </b><br/><textarea id="b_c_'.$i.'" rows="4" cols="32">'.str_replace("|","\n",$breakfast_info[1]).'</textarea><br/>';
								$i++;
							}
						}
				echo '</table>';
				echo '<button type="button" onClick="oneMore(\'b\');" >+</button><br/>';
			echo '</td>';
			
			echo '<td class="kitchen_menu_view">';
				echo '<table id="l">';
					echo '<b><p>'.$this->lang->line("lunch").'</p></b>';
						$i = 0;
						foreach ($lunch_array as $lunch) {
							if($lunch != ""){
								$lunch_info = explode('=', $lunch);
								echo '<b>'.$this->lang->line("food").': </b><input value="'.$lunch_info[0].'" id="l_'.$i.'" type="text"><br/> <b>'.$this->lang->line("ingredients").': </b><br/><textarea id="l_c_'.$i.'" rows="4" cols="32">'.str_replace("|","\n",$lunch_info[1]).'</textarea><br/>';
								$i++;
							}
						}
				echo '</table>';
				echo '<button type="button" onClick="oneMore(\'l\');" >+</button><br/>';
			echo '</td>';
			
			echo '<td class="kitchen_menu_view">';
				echo '<table id="s">';
					echo '<b><p>'.$this->lang->line("dinner").'</p></b>';
						$i = 0;
						foreach ($supper_array as $supper) {
							if($supper != ""){
								$supper_info = explode('=', $supper);
								echo '<b>'.$this->lang->line("food").': </b><input value="'.$supper_info[0].'" id="s_'.$i.'" type="text"><br/> <b>'.$this->lang->line("ingredients").': </b><br/><textarea id="s_c_'.$i.'" rows="4" cols="32">'.str_replace("|","\n",$supper_info[1]).'</textarea><br/>';
								$i++;
							}
						}
				echo '</table>';
				echo '<button type="button" onClick="oneMore(\'s\');" >+</button><br/>';
			echo '</td>';
		echo '</table>';

	echo '<input id="breakfast_result" name="breakfast" type="hidden" value="">';
	echo '<input id="lunch_result" name="lunch" type="hidden" value="">';
	echo '<input id="supper_result" name="supper" type="hidden" value="">';
	echo '<input name="previous_date" type="hidden" value="'.$date.'">';

	echo '<input type="submit" value='.$this->lang->line("save").'>';
	
	
	
echo '</form>';	
?>