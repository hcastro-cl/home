<div class="page-container">
	<div class="pageheader">
		<div class="headercontent">
			<div class="section-container">
				<h2 class="title">Publications and preprints</h2>
				<div class="row">
					<div class="col-md-12">
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pagecontents">
		<div class="section color-1" id="filters">
			<div class="section-container">
				<div class="row">
					<div class="col-md-3">
						<h3>Filter by type:</h3>
					</div>
					<div class="col-md-6">
						<select id="cd-dropdown" name="cd-dropdown" class="cd-select">
							<option class="filter" value="all" selected>All types</option>
							<option class="filter" value="jpaper">Articles</option>
							<option class="filter" value="thesis">Thesis</option>
							<!--<option class="filter" value="cpaper">Conference Papers</option>-->
						<!--	<option class="filter" value="bookchapter">Book Chapters</option> -->
							<!--<option class="filter" value="book">Books</option>-->
							<option class="filter" value="preprint">Preprints and work in progress</option>
						<!--<option class="filter" value="tpaper">Technical Papers</option> -->
						</select>
					</div>
					<div class="col-md-3" id="sort">
						<span>Sort by year:<span>
						<div class="btn-group pull-right"> 
							<button type="button" data-sort="data-year" data-order="desc" class="sort btn btn-default"><i class="fa fa-sort-numeric-asc"></i></button>
							<button type="button" data-sort="data-year" data-order="asc" class="sort btn btn-default"><i class="fa fa-sort-numeric-desc"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section color-2" id="pub-grid">
			<div class="section-container">
				<div class="row">
					<div class="col-md-12">
						<div class="pitems">
							<?php include_once 'bibtexParse/PARSEENTRIES.php' ?>
							<?php /*include_once 'bibtexParse/PARSECREATORS.php'*/ ?>
							<?php
								$parse = NEW PARSEENTRIES();
								$parse->expandMacro = FALSE;
								$parse->removeDelimit = TRUE;
								$parse->fieldExtract = TRUE;
								$parse->openBib("files/pages/publications.bib");
								$parse->extractEntries();
								$parse->closeBib();
								list($preamble, $strings, $entries, $undefinedStrings) = $parse->returnArrays();
							?>
							<?php foreach ( $entries as $entry ) { ?>
								<?php
									$type = $entry["bibtexEntryType"];
									$title = $entry["title"];
									$author = $entry["author"];
									$year = isset($entry["year"]) ? $entry["year"]: '';
									$pages = isset($entry["pages"]) ? $entry["pages"] : '';
									$pdf = isset($entry["pdf"]) ? $entry["pdf"] : '';
                                    $pdf2 = isset($entry['pdf2']) ? $entry['pdf2'] : '';
									$doi = isset($entry["doi"]) ? $entry["doi"] : '';
									$abstract = isset($entry["abstract"]) ? $entry["abstract"] : '';
									$funding = isset($entry["funding"]) ? $entry["funding"] : '';
									$labelcolor = '';
									$clase = '';
									
									if($type=="article"){
										$journal = $entry["journal"];
										$volume = $entry["volume"];
										$labelcolor .= 'success';
										$clase .= 'jpaper';
									}
									elseif($type=="book"){
										$publisher = $entry["publisher"];
										$labelcolor .= 'primary';
										$clase .= 'book';
									}
									elseif($type=="preprint"){
										$note = $entry["note"];
										$labelcolor .= 'danger';
										$clase .= 'preprint';
									}
									elseif($type=="thesis"){
										$school = $entry["school"];
										$note = $entry["note"];
										$labelcolor .= 'warning';
										$clase .= 'thesis';
									}
									else{
										$labelcolor .="info";
									}
								?>
								<div class="item mix <?php echo $clase; ?> mix_all" data-year="<?php echo $year?>" style="display: block;  opacity: 1;">
									<div class="pubmain">
										<div class="pubassets">
											<?php
												if($abstract==""){
												}
												else{
													echo '<a href="#" class="pubcollapse">
															<i class="fa fa-plus"></i>
															</a>';
												}
											?>
											<?php
												if($doi==""){
												}
												else{
													echo '<a href="'.$doi.'" class="tooltips" title="" target="_blank" data-original-title="Published version">
															<i class="fa fa-external-link"></i>
															</a>';
												}
											?>
											<?php
												if($pdf==""){
												}
												else{
													echo '<a href="files/preprints/'.$pdf.'" class="tooltips" title="" target="_blank" data-original-title="Download preprint">
															<i class="fa fa-file-pdf-o"></i>
															</a>';
												}
											?>
                                            <?php
												if($pdf2==""){
												}
												else{
													echo '<a href="files/preprints/'.$pdf2.'" class="tooltips" title="" target="_blank" data-original-title="Download addendum">
															<i class="fa fa-file-pdf-o"></i>
															</a>';
												}
											?>
										</div>
										<h4 class="pubtitle"><?php echo '<em>'.$title.'</em>'; ?></h4>
										<div class="pubauthor"><?php echo $author; ?></div>
										<div class="pubcite">
											<span class="label label-<?php echo $labelcolor;?>"><?php echo ucfirst($type); ?></span>
											<?php
												if($type=='article'){
													echo $journal.' <strong>'.$volume.'</strong> ('.$year.'), '.$pages.'.';
												}
												elseif($type=='book'){
													echo $publisher.' ('.$year.')'.', '.$pages.'.';
												}
												elseif($type=='preprint'){
													echo $note.'.';
												}
												elseif($type=='thesis'){
													echo $school.', '.$pages.' pages. '.$note.'.';
												}
												else{
												}
											?>
											<?php
												if($funding==''){
												}
												else{
													echo ' Partially funded by '.$funding.'.';
												}
											?>
										</div>
									</div>
									<?php
										if($abstract==''){
										}
										else{
											echo '<div class="pubdetails"><h4>Abstract</h4><p>'.$abstract.'</p></div>';
										}
									?>
								</div>
								<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>