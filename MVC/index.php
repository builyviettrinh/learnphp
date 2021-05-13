<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Form Hiến Máu</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
    <?php
    include_once("Controller/Controller.php");
    $Controller = new Controller();
    $Controller->show();
    ?>
	<div class="wrapper sidebar_minimize">
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="row">
						<div class="col-md-10">
                            <form name="formDK" method="POST" >
							<div class="card">
								<div class="card-header">
									<div class="card-title">ĐÂY LÀ FORM ĐĂNG KÍ HIẾN MÁU TÌNH NGUYỆN</div>
								</div>
								<div class="card-body">
									<div class="row">
                                        
										<div class="col-md-6 col-lg-4">
											<div class="form-group form-inline" >
												<label for="inlineinput" class="col-md-3 col-form-label"> Họ và tên:</label>
												<div class="col-md-9 p-0">
													<input type="text" name="name" class="form-control input-full" id="inlineinput" placeholder="Enter ho va ten">
												</div>
                                            </div>
                                            <div class="form-group form-inline">
												<label for="inlineinput" class="col-md-3 col-form-label">Năm sinh:</label>
												<div class="col-md-5 p-0">
													<input type="number"  name="year" class="form-control input-full" id="inlineinput" placeholder="Enter nam sinh">
												</div>
                                            </div>
                                            <div class="form-group form-inline">
												<label for="inlineinput" class="col-md-3 col-form-label">Số CMND:</label>
												<div class="col-md-9 p-0">
													<input type="number"  name="cmnd" class="form-control input-full" id="inlineinput" placeholder="Enter chung minh nhan dan">
												</div>
                                            </div>
                                            <div class="form-group form-inline">
												<label for="inlineinput" class="col-md-3 col-form-label">Quê quán:</label>
												<div class="col-md-9 p-0">
													<input type="text"  name="country" class="form-control input-full" id="province" placeholder="Enter que quan">
												</div>
                                            </div>

											<div class="form-group  form-inline">
                                                <label class="col-md-3 col-form-label" for="exampleFormControlSelect1">Nhóm máu:</label>
                                                <div class="col-md-3 p-0">
                                                    <select class="form-control"  name="mau" id="exampleFormControlSelect1">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>O</option>
                                                        <option>AB</option>		
                                                    </select>
                                                 </div>
                                            </div>
                                            <div class="form-check" style="margin-left: 80px" >
                                                     <label class="form-check-label">
													<input  name="thamgia" class="form-check-input" type="checkbox" value="1">
													<span class="form-check-sign" >Đã tham gia</span>
												</label>
                                            </div>
                                            
				
								<div class="card-action">
									<input type="submit"  name="gui" class="btn btn-success" value="Gửi" />
                                </div>
                            </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo2.js"></script>
    <script>
        // $('input[name ="name"]'.val())
        // console.log( $('input[name="name"]'.val()));
    </script>
</body>
</html>