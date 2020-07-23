<form name="form1" method="post" action="
<? 
	  $header = "From: $textfield3";
	  mail($select,$textfield,$textarea,$header);
	  ?>
	  ">
          <p class="sub"><span class="sub4"><strong>For questions and inquiries:</strong></span><br>
            <br>
            Your email:<br>
            <input name="textfield3" type="text" size="25" maxlength="25">
            <br>
            <br>
            Select who you wish to contact:<br>
            <select name="select">
              <option value="software_engineer_ot@yahoo.com" selected>Jaswinder Singh (Yahoo)</option>
			  <option value="shinetech@yahoo.com">Jaswinder Singh (Shine Tech)</option>
            </select>
          </p>
          
  <p class="sub">Subject:<br>
    <input name="textfield" type="text" id="textfield" size="15" maxlength="20">
    <br>
    <br>
    Enter your questions and comments below:<br>
    <textarea name="textarea" cols="50" rows="6"></textarea>
    <input type="submit" name="Submit" value="Submit">
  </p>
          <p align="right" class="bod"> <br>
          </p>
        </form>