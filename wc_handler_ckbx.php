<?php
// This is the array where we keep our exercise names
$name_array = array(
                     0 => 'Biking/cycling',
                     1 => 'Running',
                     2 => 'Soccer/football',
                     3 => 'Stairclimber',
                     4 => 'Weightlifting'
                  );
// This is the array where we keep our duration data
$duration_array = array(
                     0 => '5 hours and 40 minutes',
                     1 => '4 hours and 30 minutes',
                                                      
                                  2 => '4 hours and 30 minutes',
                                  3 => '5 hours',
                                  4 => '7 hours and 30 minutes'
                               );
            // Now pull out the chosen exercise from the submission
            if (is_array($_POST) && count($_POST) > 1) {
              $exercise_value = $_POST['exercise'];
              $exercise_name = $name_array[$exercise_value];
              $hours = $duration_array[$exercise_value];
            }    //Usually you’d test an array for a count of 0, but here
              //there is 1 automatic POST element -- $_POST[‘submit’].
            // Construct a sentence
            // --------------------
            if (isSet($hours)) {
              $message = 'It would take   '.$hours.' of '.$exercise_name.
                  ' to burn one pound of  fat.';
            } else {
              // Hmmm, they didn’t pick   one or something odd happened
              $message = 'Ummm, did you   pick an exercise?';
            }
            // Now lay out the page
            // --------------------
            $page_str = <<< EOPAGE
            <HTML>
            <HEAD>
            <STYLE TYPE="text/css">
            <!--
            BODY, P {color: black; font-family: verdana; font-size: 10 pt}
            H1         {color: black; font-family: arial; font-size: 12 pt}
            -->
            </STYLE>
            </HEAD>
            <BODY>
            <TABLE BORDER=0 CELLPADDING=10 WIDTH=100%>
            <TR>
            <TD BGCOLOR="#F0F8FF" ALIGN=CENTER VALIGN=TOP WIDTH=150>
            </TD>
            <TD BGCOLOR="#FFFFFF" ALIGN=LEFT VALIGN=TOP WIDTH=83%>
            <H1>Workout calculator handler (radio buttons with arrays)</H1>
            <P>The workout calculator says, "$message"</P>
                                                      
                
</TD>
</TR>
</TABLE>
</BODY>
</HTML>
EOPAGE;
echo $page_str;
?>
