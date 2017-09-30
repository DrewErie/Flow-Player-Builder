<?php include 'include/functions.php';?>
<?php include 'include/head.php';?>
<?php include 'include/head2.php';?>
<?php include 'include/nav.php';?>
		
		<form action="generate.php" method="post">
			
			<!-- General -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Player Settings</h3>
				</div>
				<div class="panel-body">
					<div class="form-group" >
						<label for="player_title">Title</label>
						<input type="text" class="form-control" id="player_title" placeholder="" name="player_title">
					</div>

					<div class="form-group" >
						<label for="player_favicon">Fav Icon URL</label>
						<input type="text" class="form-control" id="player_favicon" placeholder="" name="player_favicon">
					</div>
						
					<div class="form-group checkbox-inline">
						<label><input type="checkbox" value="true" checked="true" name="player_replaceurl">Replace URL</label>
					</div>

				</div>
			</div>

			<!-- Nav -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Navigation</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label>Nav Background Color</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="nav_bg" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Nav Link</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="nav_link" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Nav Link Hover</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="nav_link_hover" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>
					</div>
					
					<div class="checkbox-inline">
						<label><input type="checkbox" value="true" checked="true" name="player_fixednav">Fixed Navigation</label>
					</div>
					<div class="checkbox-inline">
						<label><input type="checkbox" value="true" name="player_iswizard">Is Wizard?</label>
					</div>
				</div>
			</div>

			<!-- Theme  -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Bootwatch Theme / Custom CSS</h3>
				</div>
				<div class="panel-body">
					
					<div class="form-group">
						<label for="sel1"><a href="https://bootswatch.com/" target="_blank">Bootwatch</a> Theme:</label>
						<select class="form-control" name="player_theme">
							<option>default</option>
							<option>darkly</option>
						</select>
					</div>

					<div class="form-group" >
						<label for="player_customcssfile">Custom CSS URL</label>
						<input type="text" class="form-control" id="player_customcssfile" placeholder="" name="player_customcssfile">
					</div>

					<div class="form-group">
						<label for="pastecss">Paste CSS:</label>
						<textarea class="form-control" rows="5" id="pastecss" name="player_pastecss"></textarea>
					</div>

				</div>
			</div>

			<!-- Quick Colors  -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Quick Colors / Brand</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-2 col-sm-4">
							<label>Default Btn Bg</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_default_bg" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Default Btn Bg Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_default_bghover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Default Btn Text Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_default_txt" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Default Btn Border Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_default_brdcolor" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<div class="form-group">
								<label>Default Btn Border Width</label>
								<select class="form-control" name="btn_default_brdwidth">
									<option></option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label>Default Btn Border Radius</label>
								<select class="form-control" name="btn_default_brdrad">
									<option></option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
						</div>

						<div class="col-md-2 col-sm-4">
							<label>Primary Btn Bg</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_primary_bg" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Primary Btn Bg Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_primary_bghover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Primary Btn Text Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_primary_txt" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Primary Btn Border Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_primary_brdcolor" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<div class="form-group">
								<label>Primary Btn Border Width</label>
								<select class="form-control" name="btn_primary_brdwidth">
									<option></option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label>Primary Btn Border Radius</label>
								<select class="form-control" name="btn_primary_brdrad">
									<option></option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-4">
							<label>Success Btn Bg</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_success_bg" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Success Btn Bg Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_success_bghover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Success Btn Text Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_success_txt" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Success Btn Border Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_success_brdcolor" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<div class="form-group">
								<label>Success Btn Border Width</label>
								<select class="form-control" name="btn_success_brdwidth">
									<option></option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label>Success Btn Border Radius</label>
								<select class="form-control" name="btn_success_brdrad">
									<option></option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
						</div>

						<div class="col-md-2 col-sm-4">
							<label>Info Btn Bg</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_info_bg" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Info Btn Bg Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_info_bghover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Info Btn Text Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_info_txt" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Info Btn Border Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_info_brdcolor" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<div class="form-group">
								<label>Info Btn Border Width</label>
								<select class="form-control" name="btn_info_brdwidth">
									<option></option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label>Info Btn Border Radius</label>
								<select class="form-control" name="btn_info_brdrad">
									<option></option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
						</div>

						<div class="col-md-2 col-sm-4">
							<label>Warning Btn Bg</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_warning_bg" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Warning Btn Bg Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_warning_bghover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Warning Btn Text Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_warning_txt" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Warning Btn Border Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_warning_brdcolor" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<div class="form-group">
								<label>Warning Btn Border Width</label>
								<select class="form-control" name="btn_warning_brdwidth">
									<option></option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label>Warning Btn Border Radius</label>
								<select class="form-control" name="btn_warning_brdrad">
									<option></option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
						</div>

						<div class="col-md-2 col-sm-4">
							<label>Danger Btn Bg</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_danger_bg" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Danger Btn Bg Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_danger_bghover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Danger Btn Text Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_danger_txt" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Danger Btn Border Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_danger_brdcolor" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<div class="form-group">
								<label>Danger Btn Border Width</label>
								<select class="form-control" name="btn_danger_brdwidth">
									<option></option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label>danger Btn Border Radius</label>
								<select class="form-control" name="btn_danger_brdrad">
									<option></option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
						</div>



					</div>
				</div>
			</div>

		
			<button type="submit" class="btn btn-primary">Generate</button>

		</form>


<?php include 'include/footer.php';?>

<script>
$(function() {
	$('.colorpick').colorpicker();
});
</script>

<?php include 'include/footer_close.php';?>