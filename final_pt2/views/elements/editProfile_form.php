<form id="editProfile_form" action="<?php echo BASE_URL;?>members/updateProfile/<?php echo $uID;?>" method="post">

<fieldset>
<label for="first_name">First Name: <?=REQFIELD?></label>
<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" maxlength="20" required="first_name" />
<br />

<label for="last_name">Last Name: <?=REQFIELD?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" maxlength="20" required="last_name" />
<br />

<label for="email">E-mail Address: <?=REQFIELD?></label>
<input type="text" class="txt" id="email" name="email" value="<?php echo $email;?>" maxlength="100" required="email" />
<br />

<label for="password">Password:</label>
<input type="password" class="txt" id="password" name="password" value="" maxlength="100"/>

<label for="confirm">Confirm Password: </label>
<input type="password" class="txt" id="confirm" name="confirm" value="" maxlength="100" />

<br />

<input type="hidden" name="uID" value="<?php echo $uID;?>"/>




<button id="submit" type="submit" class="btn btn-primary" >Update Profile</button>
</fieldset>
</form>
