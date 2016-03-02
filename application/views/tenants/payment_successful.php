
<div class="container">
    	<div class="row">
       <div class="col-sm-3 col-md-2 sidebar">
            <h3 class="lead"><a href="<?php echo base_url();?>tenants">Tenant Options</a></h3>
            <ul class="nav nav-sidebar">
            <li><a href="<?php echo base_url();?>tenants">Home</a></li>
             <li><a href="<?php echo base_url();?>tenants/complaints">Complaint/Notice</a></li>
              <li><a href="<?php echo base_url();?>tenants/house_search">Search Vacant</a></li>
              <li><a href="<?php echo base_url();?>tenants/sign_out">Logout</a></li>
          </ul>
        </div>
        </div>

    		<div class="span3">
            <address>
			       <h1 class="cover-heading">RENTIT AGENCY.</h1>
		    	</address>
    		</div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    		<div class="span3 well">
    			<table class="invoice-head">
    				<tbody>
            
    					<tr>
    						<td class="pull-right"><strong>Tenant Email: </strong></td>
    						<td><?php echo $email;?></td>
            
              <tr>
                <td class="pull-right"><strong>Payers Email: </strong></td>
                <td><?php echo $payer_email;?></td>
    					</tr>
           
    					<tr>
    						<td class="pull-right"><strong>Receipt #: </strong></td>
    						<td><?php echo $invoice_number;?></td>
    					</tr>
             
    					<tr>
    						<td class="pull-right"><strong>Date: </strong></td>
    						<td><?php $this->load->helper('date');
                            $datestring = "%d/%m/%Y";
                            echo mdate($datestring); ?></td>
    					</tr>
    					<tr>
    						<td class="pull-right"><strong>Period: </strong></td>
                          <td>9/1/2103 - 9/30/2013</td>
    					</tr>
    				</tbody>
    			</table>
    		
    	</div>
    	<div class="row">
    		<div class="span8">
    			<h2>Receipt</h2>
    		</div>
    	</div>
    	<div class="row">
		  	<div class="span8 well invoice-body">
		  		<table class="table table-bordered">
					<thead>
						<tr>
							<th>Description</th>
							<th>Date</th>
							<th>Amount</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td>Rent paid For:</td>
						<td>10/8/2013</td>
				
              <td><?php echo $amount;?></td>
						</tr>
            <tr>
							<td>&nbsp;</td>
							<td><strong>Total KSH</strong></td>
            
              <td><?php echo $amount;?></td>
							
						</tr>
            <tr>
              <td>&nbsp;</td>
              <td><strong>Total USD</strong></td>
               
              <td><?php echo round($amount /101.85,2);?></td>
              
            </tr>
					</tbody>
				</table>
		  	</div>
  		</div>
      </div>

      <div class="span1 ">
          <table class="invoice-head">
            <tbody>
              <tr>
               <ul><a href="<?php echo base_url();?>receipt/index" class="btn btn-success btn-info btn-md btn"><h2>Print</h2></a></ul><br>
               
      
                </div>
                  </tr>
            </tbody>
          </table>
        </div>
      </div>
  	</div>