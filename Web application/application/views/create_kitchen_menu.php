<div class="content">
<h1>See on köögi menüüde koostamise leht</h1>
<a href="<?php base_url() ?>/index.php/kitchen_menu">Tagasi köögi menüüde lehele</a><br/><br/>
<h2>Koostisosad sisesta eraldi ridadele.</h2>


<div class="form_validation_errors"> <?php echo validation_errors(); ?> </div>

<form onsubmit="return saveKitchenMenu('<?php echo $this->lang->line("kitchen_menu_notification"); ?>', '<?php echo $date_info ?>', '<?php echo $this->lang->line("kitchen_menu_notification2"); ?>')" method="post" accept-charset="utf-8" action="/index.php/kitchen_menu/save_menu">

	<label id="menu_date" for="date">Kuupäev: </label>
	<!-- <input type="date" id="date" value="<?php echo date("Y-m-d"); ?>" name="date" min="<?php echo date("Y-m-d"); ?>"><br/> -->
		<input type="text" id="date" value="<?php echo date("Y-m-d"); ?>" name="date" readonly="readonly">
		
		<table>
			<td class="kitchen_menu_column">
				<table id="b">
					<p>Hommikusöök</p>
					Toit:<input id="b_0" type="text"><br/> Koostis:<br/><textarea id="b_c_0" rows="4" cols="50"></textarea><br/>
				</table>
				<button type="button" onClick="oneMore('b');" >+</button><br/>
			</td>

			<td class="kitchen_menu_column">
				<table id="l">
					<p>Lõunasöök</p>
					Toit:<input id="l_0" type="text"><br/> Koostis:<br/><textarea id="l_c_0" rows="4" cols="50"></textarea><br/>
				</table>
				<button type="button" onClick="oneMore('l');" >+</button><br/>
			</td>


			<td class="kitchen_menu_column">
				<table id="s">
					<p>Õhtusöök</p>
					Toit:<input id="s_0" type="text"><br/> Koostis:<br/><textarea id="s_c_0" rows="4" cols="50"></textarea><br/>
				</table>
				<button type="button" onClick="oneMore('s');" >+</button><br/>
			</td>
		</table>

	<input id="breakfast_result" name="breakfast" type="hidden" value="">
	<input id="lunch_result" name="lunch" type="hidden" value="">
	<input id="supper_result" name="supper" type="hidden" value="">
	

	<input type="submit" value="Salvesta menüü">
</form>

