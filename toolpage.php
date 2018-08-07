<?php /** Template name: Tool */ get_header(); ?>
<!-- #Content -->
<div id="Content">
	<div class="content_wrapper clearfix">
		<!-- .sections_group -->
		<div class="sections_group">		
			<div class="entry-content" itemprop="mainContentOfPage">			
				<?php 
					while ( have_posts() ){
						the_post();							// Post Loop
						mfn_builder_print( get_the_ID() );	// Content Builder & WordPress Editor Content
					}
				?>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<!--      Wizard container        -->
							<div class="wizard-container">
								<div class="card wizard-card" data-color="orange" id="wizard">
									<form action="" method="">
										<div class="wizard-header">
											<h3 class="wizard-title">
												SEROI+ TOOL
											</h3>
											<h5>Kratek opis orodja</h5>
										</div>
										<div class="wizard-navigation">
											<ul>
												<li><a href="#goals" data-toggle="tab">Goals</a></li>
												<li><a href="#stakeholder_services" data-toggle="tab">Stakeholders and services</a></li>
												<li><a href="#impacts_indicators" data-toggle="tab">Impacts and indicators</a></li>
											</ul>
										</div>
										<div class="tab-content">
											<div class="tab-pane" id="goals">
												<div class="row">
													<div class="col-sm-12">
														<h4 class="info-text"> Let's start with the basic details.</h4>
													</div>
													<div class="container col-sm-12">
														<div class="panel-group">
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" href="#collapse1"><i class="material-icons">help_outline</i> How to define a goal?</a>
																	</h4>
																</div>
																<div id="collapse1" class="panel-collapse collapse">
																	<div class="panel-body">Define a goal by asking yourself WHAT, WHO, WHY, WHERE and WHEN.</div>
																	<div class="panel-footer"><a href="http://seroi.plus/tool/goals/">More about how to define a goal</a></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="input-group">
															<div class="form-group label-floating">
																<label class="control-label">Goal</label>
																<input name="name" type="text" class="form-control input-lg">
															</div>
														</div>
													</div>
												</div>
											</div>										
											<div class="tab-pane" id="stakeholder_services">
												<h4 class="info-text">What are your stakeholders and what is your main service.</h4>
												<div class="row">
												<div class="container col-sm-12">
														<div class="panel-group">
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" href="#collapse2"><i class="material-icons">help_outline</i> How to define a goal?</a>
																	</h4>
																</div>
																<div id="collapse2" class="panel-collapse collapse">
																	<div class="panel-body">Define a goal by asking yourself WHAT, WHO, WHY, WHERE and WHEN.</div>
																	<div class="panel-footer"><a href="http://seroi.plus/tool/goals/">More about how to define a goal</a></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-10 col-sm-offset-1">
														<div class="col-sm-4">
															<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="This is good if you travel alone.">
																<input type="radio" name="job" value="Design">
																<div class="icon">
																	<i class="material-icons">weekend</i>
																</div>
																<h6>Single</h6>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this room if you're traveling with your family.">
																<input type="radio" name="job" value="Code">
																<div class="icon">
																	<i class="material-icons">home</i>
																</div>
																<h6>Family</h6>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you are coming with your team.">
																<input type="radio" name="job" value="Code">
																<div class="icon">
																	<i class="material-icons">business</i>
																</div>
																<h6>Business</h6>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="impacts_indicators">
												<div class="row">
													<h4 class="info-text"> Define impacts and indicators.</h4>
													<div class="col-sm-6 col-sm-offset-1">
														<div class="form-group">
															<label>Room description</label>
															<textarea class="form-control" placeholder="" rows="6"></textarea>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<label class="control-label">Example</label>
															<p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
														</div>
													</div>
												</div>
											</div>
										</div>									
										<div class="wizard-footer">
											<div class="pull-right">
												<input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
												<input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
											</div>
											<div class="pull-left">
												<input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
											</div>
											<div class="clearfix"></div>
											<table class="table table-bordered">
											<thead>
												<tr>
												<th scope="col">#</th>
												<th scope="col">First</th>
												<th scope="col">Last</th>
												<th scope="col">Handle</th>
												</tr>
											</thead>
											<tbody>
												<tr>
												<th scope="row">1</th>
												<td class="table-active">Mark</td>
												<td class="table-primary">Otto</td>
												<td class="table-secondary">@mdo</td>
												</tr>
												<tr>
												<th scope="row">2</th>
												<td class="table-success">Jacob</td>
												<td>Thornton</td>
												<td class="table-danger">@fat</td>
												</tr>
												<tr>
												<th scope="row">3</th>
												<td colspan="2">Larry the Bird</td>
												<td>@twitter</td>
												</tr>
											</tbody>
										</table>
										</div>
									</form>
								</div>
							</div> <!-- wizard container -->
						</div>
					</div> <!-- row -->
				</div> <!--  big container -->				
				<div class="section section-page-footer">
					<div class="section_wrapper clearfix">					
						<div class="column one page-pager">
							<?php
								// List of pages
								wp_link_pages(array(
									'before'			=> '<div class="pager-single">',
									'after'				=> '</div>',
									'link_before'		=> '<span>',
									'link_after'		=> '</span>',
									'next_or_number'	=> 'number'
								));
							?>
						</div>						
					</div>
                </div>				
			</div>			
			<?php if( mfn_opts_get('page-comments') ): ?>
				<div class="section section-page-comments">
					<div class="section_wrapper clearfix">					
						<div class="column one comments">
							<?php comments_template( '', true ); ?>
						</div>						
					</div>
				</div>
			<?php endif; ?>	
		</div>		
		<!-- .four-columns - sidebar -->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer();