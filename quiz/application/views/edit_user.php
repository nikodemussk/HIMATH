 <div class="container">

   
 <h3><?php echo $title;?></h3>
   
 

  <div class="row">
     <form method="post" action="<?php echo site_url('user/update_user/'.$uid);?>">
	
<div class="col-md-8">
<br> 
 <div class="login-panel panel panel-default">
		<div class="panel-body"> 
	
	
	
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		
				<div class="form-group">	 
				<?php echo $this->lang->line('group_name');?>: <?php echo $result['group_name'];?> <!--(<?php echo $this->lang->line('price_');?>: <?php echo $result['price'];?>) -->
				</div>
				
				
		
				<div class="form-group">	 
					<label for="inputEmail" class="sr-only"><?php echo $this->lang->line('email_address');?></label> 
					<input type="email" id="inputEmail" name="email" value="<?php echo $result['email'];?>" class="form-control" placeholder="<?php echo $this->lang->line('email_address');?>" required autofocus>
			</div>
			<div class="form-group">	  
					<label for="inputPassword" class="sr-only"><?php echo $this->lang->line('password');?></label>
					<input type="password" id="inputPassword" name="password"   value=""  class="form-control" placeholder="<?php echo $this->lang->line('password');?>"   >
			 </div>
				<div class="form-group">	 
					<label for="inputEmail" class="sr-only"><?php echo $this->lang->line('first_name');?></label> 
					<input type="text"  name="first_name"  class="form-control"  value="<?php echo $result['first_name'];?>"  placeholder="<?php echo $this->lang->line('first_name');?>"   autofocus>
			</div>
				<div class="form-group">	 
					<label for="inputEmail" class="sr-only"><?php echo $this->lang->line('last_name');?></label> 
					<input type="text"   name="last_name"  class="form-control"  value="<?php echo $result['last_name'];?>"  placeholder="<?php echo $this->lang->line('last_name');?>"   autofocus>
			</div>
				<div class="form-group">	 
					<label for="inputEmail" class="sr-only"><?php echo $this->lang->line('contact_no');?></label> 
					<input type="text" name="contact_no"  class="form-control"  value="<?php echo $result['contact_no'];?>"  placeholder="<?php echo $this->lang->line('contact_no');?>"   autofocus>
			</div>
				<div class="form-group">	 
					<label   ><?php echo $this->lang->line('select_group');?></label> 
					<select class="form-control" name="gid"  onChange="getexpiry();" id="gid">
					<?php 
					foreach($group_list as $key => $val){
						?>
						
						<option value="<?php echo $val['gid'];?>" <?php if($result['gid']==$val['gid']){ echo 'selected';}?> ><?php echo $val['group_name'];?> <!-- (<?php echo $this->lang->line('price_');?>: <?php echo $val['price'];?>) --></option>
						<?php 
					}
					?>
					</select>
			</div>
			<div class="form-group">	 
					<label for="inputEmail"  ><?php echo $this->lang->line('subscription_expired');?></label> 
					<input type="text" name="subscription_expired"  id="subscription_expired" class="form-control" value="<?php if($result['subscription_expired']!='0'){ echo date('Y-m-d',$result['subscription_expired']); }else{ echo '0';} ?>" placeholder="<?php echo $this->lang->line('subscription_expired');?>"  value=""  autofocus>
			</div>


				<div class="form-group">	 
					<label   ><?php echo $this->lang->line('account_type');?></label> 
					<select class="form-control" name="su">
						<option value="0" <?php if($result['su']==0){ echo 'selected';}?>  ><?php echo $this->lang->line('user');?></option>
						<option value="1" <?php if($result['su']==1){ echo 'selected';}?>  ><?php echo $this->lang->line('administrator');?></option>
					</select>
			</div>

 
	<button class="btn btn-default" type="submit"><?php echo $this->lang->line('submit');?></button>
 
		</div>
</div>
 
 
 
 
</div>
      </form>
</div>


<!--
<div class="row">
<div class="col-md-8">
<h3><?php echo $this->lang->line('payment_history');?></h3>
<table class="table table-bordered">
<tr>
 <th><?php echo $this->lang->line('payment_gateway');?></th>
<th><?php echo $this->lang->line('paid_date');?> </th>
<th><?php echo $this->lang->line('amount');?></th>
<th><?php echo $this->lang->line('transaction_id');?> </th>
<th><?php echo $this->lang->line('status');?> </th>
</tr>
<?php 
if(count($payment_history)==0){
	?>
<tr>
 <td colspan="5"><?php echo $this->lang->line('no_record_found');?></td>
</tr>	
	
	
	<?php
}
foreach($payment_history as $key => $val){
?>
<tr>
 <td><?php echo $val['payment_gateway'];?></td>
 <td><?php echo date('Y-m-d H:i:s',$val['paid_date']);?></td>
 <td><?php echo $val['amount'];?></td>
 <td><?php echo $val['transaction_id'];?></td>
 <td><?php echo $val['payment_status'];?></td>
 
</tr>

<?php 
}
?>
</table>

</div>

</div>
-->

 



</div>