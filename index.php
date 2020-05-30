<?php
include "includes/header.php";
include "includes/navber.php";
include "includes/sidenavp.php";
include "includes/sidenavm.php";
?>  


<!--Dropdown menu-->
<?php
if(isset($_SESSION['username']))
{
?>



<!--This is Dashboard Section-->

<div class="mainp">
<div class="card-panel" style="margin:10px;">
<?php
if(isset($_SESSION['message']))
{
echo  $_SESSION['message'];
unset($_SESSION['message']);
}
?>


<div class="row">
<div class="col s12">

<div class="col l4 m6 s12">
<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="admin/pubg4.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
</div>

<div class="col l4 m6 s12">
<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="admin/pubg4.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
</div>

<div class="col l4 m6 s12">
<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="admin/pubg4.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
</div>

<div class="col l4 m6 s12">
<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="admin/pubg4.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
</div>

<div class="col l4 m6 s12">
<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="admin/pubg4.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
</div>

<div class="col l4 m6 s12">
<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="admin/pubg4.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
</div>

</div>
</div>
  



</div>
</div>

<?php
include "includes/footer.php";
?>
<?php
}
else
{
    
    header("Location: admin/adminlogin.php");
}
?>



