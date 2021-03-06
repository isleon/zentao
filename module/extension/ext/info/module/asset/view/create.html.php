<?php include '../../info/view/header.html.php';?>
<?php include '../../common/view/datepicker.html.php';?>
<script language='Javascript'>
userList = "<?php echo join(',', array_keys($users));?>".split(',');
changeLibConfirmed = false;
confirmChangeLib   = '<?php echo $lang->asset->confirmChangeLib;?>';
</script>
<form method='post' enctype='multipart/form-data' target='hiddenwin'>
	<div id='titlebar'>
		<div id='main'>
			<?php echo $lang->asset->create;?>
		</div>
		<div><?php echo html::submitButton()?></div>
	</div>
	<table class='cont-rt5'>
		<tr valign='top'>
			<td>
				<fieldset>
					<legend><?php echo $lang->asset->legendBasicInfo;?></legend>
					<table class='table-1 a-left fixed'>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->hostname;?></th>
							<td> <?php echo html::input('hostname', $hostname, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->address;?></th>
							<td> <?php echo html::input('address', $address, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->extendaddress;?></th>
							<td> <?php echo html::input('extendaddress', $extendaddress, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->os;?></th>
							<td><?php echo html::select('os', $lang->asset->osList, $os, "class='select-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->username;?></th>
							<td> <?php echo html::input('username', $username, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->password;?></th>
							<td> <?php echo html::input('password', $password, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->status;?></th>
							<td><?php echo html::select('status', $lang->asset->statusList, $status, "class='select-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->duty;?></th>
							<td><?php echo html::select('duty', $users, $duty, "class='select-3'");?></td>
						</tr>
					</table>
				</fieldset>
				<fieldset>
					<legend><?php echo $lang->asset->legendExtendInfo;?></legend>
					<table class='table-1 a-left fixed'>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->lib;?></th>
							<td><?php echo html::select('lib', $libs, $libID, "class='select-3' "."onchange=loadAll(this.value);");?></td>
						</tr>
						<tr>
							<th class='rowhead'><?php echo $lang->asset->module;?></th>
							<td><span id='moduleIdBox'><?php echo html::select('module', $moduleOptionMenu, $moduleID,"class='select-3'");?></span></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->product;?></th>
							<td><?php echo html::select('product', $products, $product, "class='select-3' "."onchange=loadProductProjects(this.value);");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->project;?></th>
							<td><span id='projectIdBox'><?php echo html::select('project', $projects, $project,"class='select-3' ");?></span></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->position;?></th>
							<td> <?php echo html::input('position', $assetposition, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->devicenumber;?></th>
							<td> <?php echo html::input('devicenumber', $devicenumber, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->rootusername;?></th>
							<td> <?php echo html::input('rootusername', $rootusername, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->rootpassword;?></th>
							<td> <?php echo html::input('rootpassword', $rootpassword, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->codeversion;?></th>
							<td> <?php echo html::input('codeversion', $codeversion, "class='text-3'");?></td>
						</tr>
					</table>
				</fieldset>
			</td>
			<td class='divider'></td>
			<td class='w-p50'>
				<fieldset>
					<legend><?php echo $lang->asset->legendIntrinsicInfo;?></legend>
					<table class='table-1 a-left fixed'>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->name;?></th>
							<td> <?php echo html::input('name', $name, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->serial;?></th>
							<td> <?php echo html::input('serial', $serial, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->model;?></th>
							<td> <?php echo html::input('model', $model, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->cpu;?></th>
							<td> <?php echo html::input('cpu', $cpu, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->memory;?></th>
							<td> <?php echo html::input('memory', $memory, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->disk;?></th>
							<td> <?php echo html::input('disk', $disk, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->graphics;?></th>
							<td> <?php echo html::input('graphics', $graphics, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->price;?></th>
							<td> <?php echo html::input('price', $price, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->netvalue;?></th>
							<td> <?php echo html::input('netvalue', $netvalue, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->code;?></th>
							<td> <?php echo html::input('code', $code, "class='text-3'");?></td>
						</tr>
					</table>
				</fieldset>
				<fieldset>
					<legend><?php echo $lang->asset->legendOtherInfo;?></legend>
					<table class='table-1 a-left fixed'>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->from;?></th>
							<td> <?php echo html::input('from', $from, "class='text-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->lend;?></th>
							<td><?php echo html::select('lend', $users, $lend, "class='select-3'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->lenddate;?></th>
							<td><?php echo html::input('lenddate', $lenddate, "class='text-3 date'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->returndate;?></th>
							<td><?php echo html::input('returndate', $returndate, "class='text-3 date'");?></td>
						</tr>
						<tr>
							<th class='rowhead w-p20'><?php echo $lang->asset->use;?></th>
							<td> <?php echo html::input('use', $use, "class='text-3'");?></td>
						</tr>
					</table>
				</fieldset>
			</td>
		</tr>
	</table>
	<fieldset>
		<legend><?php echo $lang->asset->legendCommentInfo;?></legend>
		<?php echo html::textarea('assetcomment', $assetcomment, "class='area-1'");?>
	</fieldset>
	<?php if(!empty($customs)):?>
	<fieldset>
		<legend><?php echo $lang->asset->legendCustomInfo;?></legend>
		<table class='table-1'>
			<?php foreach($customs as $custom):?>
			<tr>
				<th class='rowhead'><?php echo $custom->Comment;?></th>
				<td>
					<?php if(preg_match('@^(TINYTEXT|TEXT|MEDIUMTEXT|LONGTEXT|VARCHAR|CHAR)$@i', $custom->Type)):?>
					<?php echo html::textarea($custom->Field, ${$custom->Field}, "class='area-1' rows=3");?>
					<?php elseif(preg_match('@^(ENUM|SET)$@i', $custom->Type)):?>
					<?php 
						$selectOptions=explode(',',$custom->Length);
						foreach($selectOptions as $key => $value) {
							$value = trim($value,"'");
							$selectOptions[$value]=$value;
							unset($selectOptions[$key]);
						}
						unset($value);
						if (preg_match('@^(SET)$@i', $custom->Type)) {
							echo html::select($custom->Field.'[]', $selectOptions, ${$custom->Field}, "class='select-3' multiple");
						}
						else {
							echo html::select($custom->Field, $selectOptions, ${$custom->Field}, "class='select-3'");
						}
					?>
					<?php else:?>
					<?php echo html::input($custom->Field, ${$custom->Field}, "class='text-1'");?>
					<?php endif;?>
				</td>
			</tr>
			<?php endforeach;?>
		</table>
	</fieldset>
	<?php endif;?>
	<div class='a-center' style='font-size:16px; font-weight:bold'>
		<?php
		$browseLink = $app->session->assetList != false ? $app->session->assetList : inlink('browse', "libID=$libID");
		echo html::submitButton().html::resetButton().html::hidden('editedCount', 0);
		echo html::linkButton($lang->goback, $browseLink);
		?>
	</div>
</form>
<?php include '../../info/view/footer.html.php';?>
