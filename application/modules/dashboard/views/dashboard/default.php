<div class="row">
	<div class="col-md-12">
		<?php if($this->session->flashdata('flashconfirm')): ?>
		<div class="alert alert-success alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  <i class="icon fa fa-check"></i> Sukses! <?php echo $this->session->flashdata('flashconfirm'); ?>.
		</div>
		<?php endif; ?>
		<?php if($this->session->flashdata('flasherror')): ?>
		<div class="alert alert-info alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  <i class="icon fa fa-info"></i> Perhatian! <?php echo $this->session->flashdata('flasherror'); ?>.
		</div>
		<?php endif; ?>
		<div class="box box-primary box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?= isset($head) ? $head : ''; ?></h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<!-- box-body -->
			<div class="box-body">
			
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="info-box bg-red	">
					<span class="info-box-icon"><i class="fa fa-building"></i></span>
		
					<div class="info-box-content">
					<span class="info-box-text">SOPD</span>
					<span class="info-box-number">-</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="info-box bg-yellow">
					<span class="info-box-icon"><i class="fa fa-users"></i></span>
		
					<div class="info-box-content">
					<span class="info-box-text">USERS</span>
					<span class="info-box-number">-</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
				</div>
				<!-- /.col -->
			</div>

			<?php if($record): ?>
			<?php foreach($record as $row): ?>
			<div class="row">
				<div class="col-md-12">
				<div class="alert alert-info alert-dismissible">
                <h4><i class="icon fa fa-file-text-o"></i> <?= $row->judul; ?></h4>
                <?= $row->informasi; ?>
              	</div>	
				</div>
			</div>
			<?php endforeach; ?>
			<?php endif; ?>
			</div>
			<!-- ./box-body -->
			
			<!-- <div class="box-footer">
				<div class="row">
					<div class="col-md-12">
						<!-- <?php //if($record): ?>
						<?php
							// $list = array();
							// $i = 1;
							// foreach($record as $option){
							// 	$visis = $option['visi'];
							// 	$misis = $option['misi'];
							// 	$tujuans = $option['tujuan'];
							// 	$sasarans = $option['sasaran'];
							// 	$list[$visis][$misis][$tujuans][$i] = $sasarans;
							// 	$i++;
							//}
						?>
						<?php
							// $all= array_chunk($list, 1, TRUE);
							// //var_dump($list);
							// foreach($all as $a){
						?> -->
							<!-- <ul>
								<?php
								// foreach($a as $b => $c){
								// 	echo '<p><b>'.$b.'</b></p>';
								// 	foreach($c as $d => $e){
								// 		echo '<dt><u>'.$d.'</u></dt>';
								// 		foreach($e as $f => $g){
								// 			echo '<dd><i>'.$f.'</i></dd>';
								// 			foreach($g as $h => $i){
								// 				echo '<li>'.$i.'</li>';
								// 			}
								// 		}
								// 	}
								// }
								// ?>
							</ul>
						<?php
							//}
						?> -->
						<?php //endif; ?>
					<!-- </div>
				</div>
			</div> -->
		</div>
	</div>
</div>