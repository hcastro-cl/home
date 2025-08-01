<div class="pageheader">
    <div class="headercontent">
        <div class="section-container">
            <h2 class="title">Teaching</h2>
            <div class="row">
                <div class="col-md-12">
                    <p>Here you can find some teaching material (lecture notes, exercises, past exams) from the courses I have taught. Most of the material is in spanish.</p> 
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pagecontents">
	<div class="section color-1">
		<div class="section-container">
            <div class="title text-center">
                <h3>Course List</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="timeline">
						<?php
							$i=0;
							$verifyReport=new SimpleXMLElement('files/pages/cursos.xml', null, true);
							foreach ($verifyReport->sets->set as $set){
								$current = $set->cur;
								$title = $set->legend;
								$dire = $set->dir;
								$syllabus = $set->syllabus;
								$apunte = $set->apunte;
								$datemi = date_parse($set->datei);
								$datei = $datemi['month'];
								$datemf = date_parse($set->datef);
								$datemf = $datemf['month'];
								$year = $set->year;
								$abst = $set->abst;
								$ayudantias = $set->ayudantias;
								$tareas = $set->tareas;
								$pic = $set->pic;
								$clase = '';
								$p11 = '';
								$p12 = '';
								$p13 = '';
								
								if ($i==0){
									echo '<li class="open">';
								}
								else{
									echo '<li>';
								}
								?>    
								<div class="date"><?php echo $datei.'/'.$year; ?></div>
								<div class="circle"></div>
								<div class="data">
								<div class="subject"><?php echo $title; ?></div>
								<?php
								if ($i==0){
									echo '<div class="text row open" style="display: block;">';
								}
								else{
									echo '<div class="text row">';
								}
								?>
									<div class="col-md-2">
										<?php
										if ($pic == ''){
											echo '<img alt="image" src="files/images/blank.png" class="thumbnail img-responsive">';
										}
										else{
											echo '<img alt="image" src="files/teaching/'.$dire.'/'.$pic.'" class="thumbnail img-responsive">';
										}
										?>
									</div>
									<div class="col-md-10">
										<?php echo $abst; ?>
										<p><?php
										if ($syllabus != ''){
											$p11.='<a href="files/teaching/'.$dire.'/'.$syllabus.'" target="_blank">Syllabus</a>';
										}
										if ($apunte != ''){
											$p11.=' - <a href="files/teaching/apuntes/'.$apunte.'" target="_blank">Apunte</a></p>';
										}
										if ($tareas != ''){
											$l=1;
											foreach ($tareas->tarea as $tarea){
												$p11.=' - <a href="files/teaching/'.$dire.'/'.$tarea.'" target="_blank">Tarea '.$l.'</a>';
											$l++;
											}
										}
										if ($ayudantias != ''){
											$l=1;
											foreach ($ayudantias->ayudantia as $ayudantia){
											$p11.=' - <a href="files/teaching/'.$dire.'/'.$ayudantia.'" target="_blank">Ayudantía '.$l.'</a>';
											$l++;
											}
										}
										if ($p11 != ''){
											echo '<p>'.$p11.'</p>';
										}
										else{
											echo '<p></p>';
										}
										?></p>
									</div>
								</div>
							</div>
						</li>
						<?php $i++;} ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
