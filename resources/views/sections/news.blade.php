<div class="theme-heading">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-md-offset-3">
				<h3>news</h3>
				<div class="dd-theme-border">
					<span class="theme-icon"><i class="fa fa-tint" aria-hidden="true"></i></span>
				</div>
				<p>SWAMP is a community and volunteer run organization.
					Our activities help monitor and improve the health of wetlands in
					Washington state.
				</p>
				<p>
					Peter Ritson, PhD., an environmental scientist,
					is looking for volunteers to search for amphibians and their eggs.
					This is the tenth year of this entirely volunteer program which monitors
					Clark County's wetlands by examining amphibian populations. The project
					involves training community volunteers to search for pond breeding
					amphibians and their eggs this winter, then reporting the findings to
					local and state agencies.
				</p>
			</div>

		</div>
	</div>
</div>

<div class="bolg-section">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-12 col-xs-12 marB30">
				<!-- {!! json_encode($posts) !!}
				 -->
				@foreach ($posts as $post)
					<div class="item">
						
							<div class="blog">
								<div class="blog-detail">
									<h4><b>{{ $post->title }}</b></h4>
									<p>
										{{ $post->date }}
										<br> 
										{{ $post->time }}
									</p>
									<div class="row padT20">
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="blog-member-detail">
												@if ($post->download)
													<!-- href='content/maps/MyPlaces.kmz' -->
													<!-- download='monitoring_sites_map.kmz' -->
													<a class="swamp-btn submit"
														href="#" href='content/maps/MyPlaces.kmz'
														target='_self' download='monitoring_sites_map.kmz'>
														Download GoogleMap's File
													</a>
												@else
													<p><a class="null-link" href="#">@&nbsp;{{ $post->slug }}</a></p>
												@endif
											</div>
										</div>
									</div>
								</div>
							</div>
						
					</div>
				@endforeach
			</div>
		
		</div>
	</div>
</div>