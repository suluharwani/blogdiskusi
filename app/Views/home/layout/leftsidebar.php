				<div class="container">
					<div class="row justify-content-center">
						<aside class="sidebar col-sm-8 col-md-7 col-lg-3 order-2 order-lg-1 mb-5 mb-lg-0">
							<div class="accordion accordion-default accordion-toggle accordion-style-1" role="tablist">

								<div class="card">
									<div id="toggleSidebarSearch" class="accordion-body accordion-body-show-border-top collapse show p-0" role="tabpanel" aria-labelledby="sidebarSearchForm">
										<div class="card-body pt-4">
											<form id="sidebarSearchForm" class="sidebar-search" action="page-search-results.html" method="get">
												<div class="input-group">
													<input type="text" class="form-control line-height-1 bg-light-5" name="s" id="s" placeholder="Search..." required="">
													<span class="input-group-btn">
														<button class="btn btn-light" type="submit"><i class="fas fa-search text-color-primary"></i></button>
													</span>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header accordion-header" role="tab" id="categories">
										<h3 class="text-3 mb-0">
											<a href="#" data-bs-toggle="collapse" data-bs-target="#toggleCategories" aria-expanded="false" aria-controls="toggleCategories">CATEGORIES</a>
										</h3>
									</div>
									<div id="toggleCategories" class="accordion-body collapse show p-0" aria-labelledby="categories">
										<div class="card-body">
											<ul class="list list-unstyled">
												<li class="mb-2">
													<a href="#" class="font-weight-semibold"><i class="fas fa-angle-right ms-1 me-1"></i> Design</a>
												</li>
												<li class="mb-2">
													<a href="#" class="font-weight-semibold text-color-primary"><i class="fas fa-angle-right ms-1 me-1" id="photos" data-bs-toggle="collapse" data-bs-target="#submenuPhotos" aria-expanded="true" aria-controls="submenuPhotos" role="list" onclick="return false;"></i> Photos (3)</a>
													<ul class="list list-unstyled collapse show" id="submenuPhotos" aria-labelledby="photos">
														<li>
															<a href="#">Animals</a>
														</li>
														<li>
															<a href="#">Business (4)</a>
														</li>
														<li>
															<a href="#">Sports</a>
														</li>
													</ul>
												</li>
												<li class="mb-2">
													<a href="#" class="font-weight-semibold"><i class="fas fa-angle-right ms-1 me-1"></i> Videos</a>
												</li>
												<li class="mb-2">
													<a href="#" class="font-weight-semibold"><i class="fas fa-angle-right ms-1 me-1"></i> Lifestyle</a>
												</li>
												<li class="mb-2">
													<a href="#" class="font-weight-semibold"><i class="fas fa-angle-right ms-1 me-1"></i> Technology</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header accordion-header" role="tab" id="tags">
										<h3 class="text-3 mb-0">
											<a href="#" data-bs-toggle="collapse" data-bs-target="#toggleTags" aria-expanded="false" aria-controls="toggleTags">TAGS</a>
										</h3>
									</div>
									<div id="toggleTags" class="accordion-body collapse show p-0" role="tabpanel" aria-labelledby="tags">
										<div class="card-body">
											<ul class="list-inline">
												<li class="list-inline-item"><a href="#" class="badge bg-dark badge-sm badge-pill rounded-pill px-3 py-2 mb-2">NEWS</a></li>
												<li class="list-inline-item"><a href="#" class="badge bg-dark badge-sm badge-pill rounded-pill px-3 py-2 mb-2">JOBS</a></li>
												<li class="list-inline-item"><a href="#" class="badge bg-dark badge-sm badge-pill rounded-pill px-3 py-2 mb-2">POST</a></li>
												<li class="list-inline-item"><a href="#" class="badge bg-dark badge-sm badge-pill rounded-pill px-3 py-2 mb-2">PHOTOS</a></li>
												<li class="list-inline-item"><a href="#" class="badge bg-dark badge-sm badge-pill rounded-pill px-3 py-2 mb-2">INNOVATION</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</aside>