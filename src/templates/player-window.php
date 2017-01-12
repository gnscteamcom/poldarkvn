<div class="modal fade" id="video-player">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title text-center"></h4>
			</div>						
			<div class="loading text-center">
				<div class="loading-text">			
					<i class="fa fa-circle-o-notch fa-spin fa-4x fa-fw"></i>
					<h3>Đang tải...</h3>
				</div>
				<div class="error-text text-center hidden">
					<h3 class="text-danger"></h3>
					<button class="btn btn-info">THỬ LẠI</button>
				</div>
			</div>
		  	<div class="modal-body hidden">
		    	<ul class="nav nav-tabs">
		    		<li><a><strong>Server:</strong></a></li>
			  		<li class="active"><a href="#google" data-toggle="tab">Google</a></li>
				</ul>
				<br>
				<div id="myTabContent" class="tab-content">
					<p>Nếu phụ đề không tự động xuất hiện, xin bấm nút <strong class="text-info"><i class="fa fa-cc" aria-hidden="true"></i></strong> ở góc phải bên dưới trình xem phim và chọn <strong class="text-info">Tiếng Việt</strong>.</p>
				  	<div class="tab-pane fade active in" id="google">
		    			<div id="poldark-player"></div>
				  	</div>
				</div>
		  	</div>
		  	<div class="modal-footer">
		    	<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
		  	</div>
		</div>
	</div>
</div>