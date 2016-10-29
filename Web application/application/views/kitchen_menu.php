<h1>See on köögi menüüde kuvamise leht</h1>
<p>Siin lehel kuvatakse köögi poolt sisestatud menüüd, mille alusel saab kokku panna osakondade menüüd</p>

<p>Vajutage kuupäeval, et koostada menüü.</p>
<p>Juba koostatud menüüsid saab vaadata ja muuta samuti klõpsates kuupäeval.</p>
<?php
foreach ($kitchen_menus as $menu){
	if($role == 'kokk'){
		echo '<b>'.$menu['date'].'</b><br/>';
		echo '<a href="kitchen_menu/orders/'.$menu['date'].'">Kõik tellimused</a><br/>';
		echo '<a href="kitchen_menu/view/'.$menu['date'].'">Köögi menüü</a><br/><br/><br/>';
	}else if($role == 'osakond'){
		$array = $this->menu_model->get_section_menu($menu['date'], $section_name);
		if(!empty($array)){
			echo '<a href="section_menu/view/'.$menu['date'].'">'.$menu['date'].' [Koostatud]<br/>';
		}else{
			echo '<a href="section_menu/create/'.$menu['date'].'">'.$menu['date'].'</a><br/>';
		}
	}else if($role == 'admin'){
		$array = $this->menu_model->get_section_menu($menu['date'], $section_name);
		if(!empty($array)){
			echo '<b>'.$menu['date'].'</b><br/>';
			echo '<a href="section_menu/view/'.$menu['date'].'">Tellimus osakonnale ('.$section_name.') [Koostatud]</a><br/>';
			echo '<a href="kitchen_menu/orders/'.$menu['date'].'">Kõik tellimused</a><br/>';
			echo '<a href="kitchen_menu/view/'.$menu['date'].'">Köögi menüü</a><br/><br/><br/>';
		}else{
			echo '<b>'.$menu['date'].'</b><br/>';
			echo '<a href="section_menu/create/'.$menu['date'].'">Tellimus osakonnale ('.$section_name.')</a><br/>';
			echo '<a href="kitchen_menu/orders/'.$menu['date'].'">Kõik tellimused</a><br/>';
			echo '<a href="kitchen_menu/view/'.$menu['date'].'">Köögi menüü</a><br/><br/><br/>';
		}
	}

}
?>