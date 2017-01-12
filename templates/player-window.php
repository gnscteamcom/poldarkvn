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
			<div class="captcha text-center hidden">
				<p>Server Openload hiện đang trong giờ cao điểm.<br>Xin vui lòng nhập lại mã CAPTCHA bên dưới để tiếp tục.</p>
				<img class="captcha-img" alt="Openload CAPTCHA Image"><br><br>
				<form class="form-inline">					
				<input type="text" class="form-control input-sm" id="captcha-input">
				<button type="submit" class="btn btn-success btn-sm submit-captcha">GỬI</button>
				</form>
				<p class="captcha-checking hidden">Đang kiểm tra...</p><br><br>
			</div>
		  	<div class="modal-body hidden">
		  		<div class="text-center">
		  			<h4><strong class="text-info openload">SERVER OPENLOAD<br><small class="text-info">(BETA)</small></strong></h4>	  			
		    		<h4><strong class="text-success google">SERVER GOOGLE</strong></h4>
					<p>Nếu phụ đề không tự động xuất hiện, xin bấm nút <strong class="text-info"><i class="fa fa-cc" aria-hidden="true"></i></strong> ở góc phải bên dưới trình xem phim.</p>
		  		</div>
				<div id="poldark-player"></div>
		  	</div>
		  	<div class="modal-footer">
		    	<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
		  	</div>
		</div>
	</div>
</div>