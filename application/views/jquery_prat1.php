<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>JQuery Tutorial</title>

  <style type="text/css">
  .highlight { background-color: yellow; }
  #wrapper {
    width: 500px;
    margin: auto;
  }
  .ui-menu{
    width: 15em;
  }
  #cartDiv{
    border-style: solid;
    border-width: 5px;
  }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css">

<!--Load jquery.min.js file, which store in js folder.-->
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 
  <!-- Add the JQuery UI CSS -->
  <!-- <link href="jss/jquery-ui.min.css" rel="stylesheet"> -->
 
  <!-- Add the JQuery UI JS file -->
  <!-- <script src ="jss/jquery-ui.min.js" > </script> -->
 
  <!-- <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script> -->

<body>
<div id="wrapper">

<ul id="shMenu">
  <li><a href="JavaScript:void(0)">X Men</a>
    <ul>
      <li><a href="JavaScript:void(0)">Angel</a></li>
      <li><a href="JavaScript:void(0)">Cyclops</a></li>
      <li><a href="JavaScript:void(0)">Beast</a></li>
      <li><a href="JavaScript:void(0)">Marvel Girl</a></li>
      <li><a href="JavaScript:void(0)">Iceman</a></li>
    </ul>
  </li>
  <li><a href="JavaScript:void(0)">Defenders</a>
    <ul>
      <li><a href="JavaScript:void(0)">Hulk</a></li>
      <li><a href="JavaScript:void(0)">Doctor Strange</a></li>
      <li><a href="JavaScript:void(0)">Namor</a></li>
      <li><a href="JavaScript:void(0)">Silver Surfer</a></li>
    </ul>
  </li>
</ul><br />

<div id="accordion">
<h4>Batman</h4>
<div>
Batman is a fictional superhero appearing in American comic books published by DC Comics. The character was created by artist Bob Kane and writer Bill Finger, and first appeared in Detective Comics #27 (May 1939). Originally named "the Bat-Man", the character is also referred to by such epithets as the "Caped Crusader",the "Dark Knight", and the "World's Greatest Detective".
</div>
<h4>Flash</h4>
<div>
The Flash is a fictional superhero appearing in American comic books published by DC Comics. Created by writer Gardner Fox and artist Harry Lampert, the original Flash first appeared in Flash Comics #1 (January 1940).
</div>
<h4>Superman</h4>
<div>
Superman is a fictional superhero appearing in American comic books published by DC Comics. The character is considered an American cultural icon. The Superman character was created by writer Jerry Siegel and artist Joe Shuster in 1933; the character was sold to Detective Comics, Inc. (later DC Comics) in 1938. Superman first appeared in Action Comics #1 (June 1938) and subsequently appeared in various radio serials, newspaper strips, television programs, films, and video games. With the character's success, Superman helped to create the superhero genre and establish its primacy within the American comic book.
</div>
</div><br />

<div id="shTabs">
<ul>
  <li><a href="#ironman">Iron Man</a></li>
  <li><a href="#hulk">Hulk</a></li>
  <li><a href="#thor">Thor</a></li>
  <li><a href="#spiderman">Spiderman</a></li>
</ul>
<div id="ironman">
Iron Man (Tony Stark) is a fictional superhero appearing in American comic books published by Marvel Comics, as well as its associated media. The character was created by writer and editor Stan Lee, developed by scripter Larry Lieber, and designed by artists Don Heck and Jack Kirby. He made his first appearance in Tales of Suspense #39 (cover dated March 1963).
</div>
<div id="hulk">
The Hulk is a fictional superhero appearing in American comic books published by Marvel Comics. The character was created by Stan Lee and Jack Kirby, and first appeared in The Incredible Hulk #1 (May 1962). Throughout his comic book appearances, the Hulk is portrayed as a large green humanoid that possesses immense superhuman strength and great invulnerability, attributes that grow more potent the angrier he becomes. Hulk is the alter ego of Bruce Banner, a socially withdrawn and emotionally reserved physicist who physically transforms into the Hulk under emotional stress and other specific circumstances at will or against it; these involuntary transformations lead to many complications in Banner's life.
</div>
<div id="thor">
Thor is a fictional superhero that appears in American comic books published by Marvel Comics. The character, based on the Norse mythological deity of the same name, is the Asgardian god of thunder and possesses the enchanted hammer Mjolnir, which grants him the ability of flight and weather manipulation amongst his other superhuman attributes.
</div>
<div id="spiderman">
Spider-Man is a fictional superhero appearing in American comic books published by Marvel Comics existing in its shared universe. The character was created by writer-editor Stan Lee and writer-artist Steve Ditko, and first appeared in the anthology comic book Amazing Fantasy #15 (Aug. 1962) in the Silver Age of Comic Books. Lee and Ditko conceived the character as an orphan being raised by his Aunt May and Uncle Ben, and as a teenager, having to deal with the normal struggles of adolescence in addition to those of a costumed crime-fighter.
</div>
</div><br />

<div id ="customDialog" title ="Custom Dialog">
<p>A random dialog box that contains important information</p>
</div>

<a href="JavaScript:void(0)" id="openDialog" title="Open Dialog Box">Open Dialog</a><br /><br />

<form action="#" id="sampForm">

Present:<br />
<select name="present" id="present">
<option>Toy</option>
<option>Video Game</option>
<option>Book</option>
<option>Money</option>
</select><br />

Birthday:<br />
<input type="text" name="birthday" id="birthday"><br /><br />

<p class="numOfPresents">Number of Presents</p>

<fieldset>
    <legend>Number of Presents</legend>
    <div id="radioPresents">
      <input type="radio" id="onePresent" name="presents" checked="checked">
      <label for="onePresent">1</label>

      <input type="radio" id="twoPresent" name="presents">
      <label for="twoPresent">2</label>

      <input type="radio" id="threePresent" name="presents">
      <label for="threePresent">3</label>
    </div>
  </fieldset>

<br />

<input type="button" id="randButton" value="Click Me"><br /><br />

<div id="cartDiv">
<img src="cart.png" alt="Shopping Cart" id="cart">
</div>

<img src="toy1.png" alt="Bear" id="toy1" class="toy">

<img src="toy2.png" alt="Duck" id="toy2" class="toy">

<img src="toy3.png" alt="Batman" id="toy3" class="toy">

</form>

<script type="text/javascript">

$(document).ready(function() {
  // alert("test");

  // $("#shMenu").menu({
  //   position: {
  //     // Popup menu comes on the right by default
  //     my: "center top",
  //     at: "center bottom"
  //   },
  // });


  $("#accordion").accordion({
    // Slide animation or not or length
    animate: 1500,
    // Starting tab
    active: 1,
    // Collapsible if same tab is clicked
    collapsible: true,
    // Event that triggers
    event: "click",
    // Height based on content (content) or largest (auto)
    heightStyle: "content"
  });

  $("#shTabs").tabs({
    // The event that switches the panel
    event: "click",
    // Effects: fadeIn, fadeOut, slideDown, slideUp, animate
    show: "fadeIn",
    hide: "fadeOut",
    // Starting panel
    active: 3,
    // Collapse by clicking the current tab
    collapsible: true,
    // Height based on content (content) or largest (auto)
    heightStyle: "auto"
  });

  // Create a draggable / resizable dialog box
  $('#customDialog').dialog({
    draggable: true, // Set true by default
    resizable: false, // Set true by default
    // You can use minWidth, minHeight, maxWidth, maxHeight
    height: 150, // Defined in pixels
    width: 150,
    // If set true the user can't do anything until the
    // dialog is closed
    modal: true,
    // Position the dialog with my and define the browser
    // position with at
    // 1st: left, right, center
    // 2nd: top, center, bottom
    position: {
      my: 'center top',
      at: 'center bottom',
      // You can also target to place based on an element
      // on the screen (center under the link)
      of: "#openDialog"
    },
    // Define a delay for showing or hiding it
    show: 1000,
    hide: '1000',
    autoOpen: false, // Open true by default
    // create buttons for the dialog
    buttons : {
      "OK" : function(){
        $("#openDialog").html("You clicked ok");
        $(this).dialog("close");
      },
      "CANCEL": function(){
        $("#openDialog").html("You clicked cancel");
        $(this).dialog("close");
      }
    }
  });

  // Displays the dialog box on click
  $("#openDialog").click(function() {
    $('#customDialog').dialog("open");
  });

  // Use custom tooltip if the element has a title
  $("[title]").tooltip();

  // JQUERY UI FORMS

  $("#present").selectmenu({
    width: 200
  });

  $("#birthday").datepicker({
    // Show month dropdown
    changeMonth: true,
    // Show year dropdown
    changeYear: true,
    dateFormat: "MM dd, yy",
    // Number of months to display
    numberOfMonths: 1,
    // Define maxDate
    maxDate: 365,
    // Define minDate
    minDate: -3650
  });

  // Style radio buttons
  $("#radioPresents").buttonset();

  // Style buttons
  $("#randButton").button();

  // You can make any element draggable
  $("#sampForm").draggable();

  // Dragging and dropping elements
  $("#toy1").draggable();
  $("#toy2").draggable();
  $("#toy3").draggable();

  $("#cartDiv").droppable({
    // Adds the class highlight to the droppable
    activeClass: "highlight",

    // Adds class for when element is hovered
    hoverClass: "hoverDroppable",

    // Function to call when element is dropped
    drop: function(event, ui){

      // Apply an effect when an element is dropped
      // clip, explode, fade, puff,
      // pulsate, scale, shake, slide,
      ui.helper.hide("fade");

      // Get the alt for the itm dropped
      var itemAlt = $(ui.draggable).attr("alt");

      // Display the item dropped
      alert("Item added : " + itemAlt);
    },

    // Define class of elements that can be dropped
    accept: ".toy",

    // Can elements currently be dropped on it
    disabled: false,

    // Add an element when droppable items starts to drag
    activate: function(event, ui){

      $("#cartMsg").remove();
      $(this).append("<span id='cartMsg'>Drop Toy Here</span>");
    },

    // Called when an item isn't dropped in the dropzone
    deactivate: function(event, ui){

      $("#cartMsg").remove();
      $(this).append("<span id='cartMsg'>You know you want it</span>");
    },

    // Called when draggable is over droppable
    over: function(event, ui){

      $("#cartMsg").remove();
      $(this).append("<span id='cartMsg'>Drop It!!!</span>");
    },

    // Called when item leaves dropzone
    out: function(event, ui){

      $("#cartMsg").remove();
      $(this).append("<span id='cartMsg'>NOOOOOO!!!</span>");
    }
  });

}); // End of JQuery

</script>

</div> <!-- End of Wrapper -->
</body>
</html>