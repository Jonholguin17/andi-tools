<?php
$thejson=null;
$events = ReservationData::getEvery();
foreach($events as $event){
	$thejson[] = array("title"=>$event->title,"url"=>"./?view=editreservation&id=".$event->id,"start"=>$event->date_at."T".$event->time_at);
}
?>
<script>
	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '<?php echo date('Y-m-d');?>',
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: <?php echo json_encode($thejson); ?>
		});
		
	});

</script>


				<div class="row">
			<div class="col-md-12">
			<div class="card">
			  <div class="card-header" data-background-color="blue">
				  <h4 class="title">Servicios</h4>
			  </div>
			  
			  <br><br>
							<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                  <!--  <div class="huge">Conferencia</div> -->
                                     <div>Conferencia</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" >
                            <div class="panel-footer">
							<script src="https://apis.google.com/js/platform.js" async defer></script>
								<script src="https://apis.google.com/js/platform.js" async defer>  /*id : '1234', invite_type : 'PROFILE'*/</script>
   
									<g:hangout render="createhangout"
										invites="[{ id : 'jon.holguin17@gmail.com', invite_type : 'EMAIL' }]">
									</g:hangout>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <!-- <div class="huge">12</div> -->
                                    <div>Historia clinica</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
								<a href="http://www.pacific-hs.co/portafolio-pms/" target="_blank">
									<span class="pull-left">Iniciar</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <!-- <div class="huge">124</div> -->
                                    <div>Cardiosoft</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
								<a href="http://www3.gehealthcare.es/es-es/productos/categorias/cardiologia/analisis_de_ecg" target="_blank">
									<span class="pull-left">Iniciar</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                     <!-- <div class="huge">13</div> -->
                                    <div>Dermopix</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Iniciar</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
			 
			 
			 
			 
			</div>
			</div>
			</div>

			<div class="row">
			<div class="col-md-12">
			<div class="card">
			  <div class="card-header" data-background-color="blue">
				  <h4 class="title">Repositorio archivos</h4>
			  </div>
			 
			 	<br><br>
			  <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Google Drive
                        </div>
                        <div class="panel-body">
                            <p>Repositorio archivos Andicloud</p>
                        </div>
                        <div class="panel-footer">
                           <a href="repositorio.php" target="_blank">
									<span class="pull-left">Ver</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</a>
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
				
				
                <div class="col-lg-4">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            File Server
                        </div>
                        <div class="panel-body">
                            <p>Acceso a repositorio historio de archivos</p>
                        </div>
                        <div class="panel-footer">
                            Ver
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
				<!-- 
                <div class="col-lg-4">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Google Drive
                        </div>
                        <div class="panel-body">
                            <p>Acceso a back up en la nube</p>
                        </div>
                        <div class="panel-footer">
                            Ver
                        </div>
                    </div>

                </div>
				-->
            </div>
			 
			</div>
			</div>
			</div>
            
		

           
      <!--  </div> -->
        <!-- /#page-wrapper -->


<div class="row">
<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Calendario de Citas</h4>
  </div>
  <div class="card-content table-responsive">
<div id="calendar"></div>
</div>
</div>
</div>
</div>

