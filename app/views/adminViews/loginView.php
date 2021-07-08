<div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Existing Customers</h3>
        	<p>Sign in with the form below.</p>
        	<form action="<?php echo BASE_URL ."login/checkLogin";?>"method="post" id="member">
                	<input name="username" type="text" class="field" placeholder="Enter username">
                    <input name="password" type="password" class="field" placeholder="Enter password">
                 <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p>
                    <div class="buttons"><div><button class="grey" type="submit">Sign In</button></div></div>
                    </div>
					</form>
    	<div class="register_account">
    		<h3>Register New Account</h3>
    		<form>
		   			 <table>
		   				<tbody><tr><td><div><input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" ></div>
		    			<div><input type="text" value="E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}"></div>
		    			<div><input type="text" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"></div>
		    			 </td>
		    			<td><div><input type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></div>
		          		<input type="text" value="" class="number" style="width: 94.5%;" placeholder="PhoneNumber">
		          </div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><button class="grey">Create Account</button></div></div>
		    <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>