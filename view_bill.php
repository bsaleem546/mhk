<?php include('header.php'); ?>

<script src="coding/jQuery.js" type="text/jscript"></script>
<script type="text/jscript">
/*	$(document).ready(function() {
        $('#btn1').click(function() {
			var m = $('#m').val();
			var y = $('#y').val();
			var s = $('#s').val();
			
			$.ajax({
				type:"POST",
				url:"table_bill.php",
				data:"month"+m+"&year"+y+"&status"+s,
				dataType:"json",
				success: function(rt,er,jqXHR){
					$('#tbl').html(rt+er+jqXHR);	
				}	
			});
			 	
		});
    });*/
/*  	function stbl(m, y, s)
	{
		var ajx = new  XMLHttpRequest();
		
		ajx.open("GET","table_bill.php?month="+m+"&year="+y+"&status="+s,true);
		
		ajx.onreadystatechange = function()
		{
			document.getElementById('tbl').innerHTML = ajx.responseText;			
		}
		ajx.send();
				
	}*/
	
</script>	
 

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">SEARCH BILLS</h4>
                            </div>
                            <div class="content">
                                <form action="" method="get">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Choose a month</label>
                                                <select name="txt1" class="form-control" id="m">
                                                	<option value="0">Choose any month</option>
                                                    <option value="1">January</option>
                                                    <option value="2">Febuary</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Choose a year</label>
                                                <select name="txt2" class="form-control" id="y">
                                                	<option value="0">Choose any year</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                </select>
                                            </div>
                                        </div>
										
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label>Choose a Status</label>
                                                <select name="txt3" class="form-control" id="s">
                                                	<option value="0">Choose any status</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Paid">Paid</option>
                                                </select>
                                            </div>
                                        </div>
									
                                    </div>


             <input name="btn1" id="btn1" type="submit" class="btn btn-info btn-fill pull-right" value="SEARCH" onClick="stbl(txt1.value,txt2.value,txt3.value)" />
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                                   
                        </div>
						
						 
                   </div>
                </div>
                    
            </div>
      </div>

<div id="tbl"></div>

<?php include('footer.php'); ?>