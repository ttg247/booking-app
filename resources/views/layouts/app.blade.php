<!DOCTYPE html>
<html lang="en">
<!-- partials/head -->
@include('partials.head')

	<body>
		<div class="container-scroller">
			@include('partials.nav')
			<!-- partial -->

			<div class="container-fluid page-body-wrapper">
				<!-- partial:partials/sidebar -->
				@include('partials.sidebar')
				<!-- partial:partials/sidebar -->
				<div class="main-panel">
					<!-- layout/content -->
					@yield('content', 'Not connected')

					<!-- partial/footer -->
					@include('partials.footer')
				</div>
				<!-- main-panel ends -->
			</div>
			<!-- page-body-wrapper ends -->
		</div>

		<!-- partial/foot -->
		@include('partials.foot')
	</body>
	
</html>