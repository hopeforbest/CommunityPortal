<?php
if(isset($users)){
	?>
	Below is the list of Developers registered in community portal 
	<table class="table" >
	<tr style='padding:200px'>
	    
		<th>Id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>password</th>
		<th>job</th>
		<th>Company Name</th>
		<th>City</th>
		<th>Country</th>
	</tr>	
	<?php 
	foreach ($users as $user) {
		if($user!=null){
	?>
		<tr>
		<td><input type="checkbox" name="checkbox[]" id="checkbox_id[]" value="<?php echo $user->email ; ?>"></td>
		<td> <?php echo $user->id; ?></td>
		<td><?php echo $user->firstName;?></td>
		<td><?php echo $user->lastName; ?></td>
		<td><?php echo $user->email; ?></td>
		<td><?php echo $user->password; ?></td>
		<td><?php echo $user->job; ?></td>
		<td><?php echo $user->companyname; ?></td>
		<td><?php echo $user->city; ?></td>
		<td><?php echo $user->country; ?></td>
		<td></td>
		<td > <a href="editProfilepage.php?updateUseremail=<?php echo $user->email;?>">Edit</a></td> 
		<td> <a href="deleteProfilePage.php?deleteUseremail=<?php echo $user->email;?>">Delete</a></td> 
		</tr>
	<?php 
		}
	}
}
	?>
	</table>
	