<div id="topheader">
  <nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
  </button>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

  <ul class="nav navbar-nav">
<li class="active"><a href="javascript:void(0)" data-module="summary">Summary</a></li>
<li><a href="javascript:void(0)" data-module="view_app">View Applications</a></li>
<li><a href="javascript:void(0)" data-module="create_user">Create User</a></li>
<li><a href="javascript:void(0)" data-module="allocate_manager">Allocate Managers</a></li>
<li><a href="javascript:void(0)" data-module="check_errors">Inconsistent Data</a></li>
<li><a href="javascript:void(0)" data-module="under">Under Cons</a></li>
  </ul>
</div>
</div>
  </nav>
</div>

<style>
  .navbar .navbar-nav {
  display: inline-block;
  float: none;
  vertical-align: top;
}

.navbar .navbar-collapse {
  text-align: center;
}
  
 #topheader .navbar-nav li > a {
text-transform: capitalize;
color: #333;
transition: background-color .2s, color .2s;
&:hover,
&:focus {
background-color: #333;
color: #fff;
}
}

#topheader .navbar-nav li.active > a {
background-color: #333;
color: #fff;
}

#topheader{margin:0px;}


/* navbar */
#topheader.navbar-default {
    background-color: #F8F8F8;
    border-color: #E7E7E7;
}
/* Title */
.navbar-default .navbar-brand {
    color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
    color: #5E5E5E;
}
/* Link */
.navbar-default .navbar-nav > li > a {
    color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
    color: #333;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
    color: #555;
    background-color: #E7E7E7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
    color: #555;
    background-color: #D5D5D5;
}
/* Caret */
.navbar-default .navbar-nav > .dropdown > a .caret {
    border-top-color: #777;
    border-bottom-color: #777;
}
.navbar-default .navbar-nav > .dropdown > a:hover .caret,
.navbar-default .navbar-nav > .dropdown > a:focus .caret {
    border-top-color: #333;
    border-bottom-color: #333;
}
.navbar-default .navbar-nav > .open > a .caret,
.navbar-default .navbar-nav > .open > a:hover .caret,
.navbar-default .navbar-nav > .open > a:focus .caret {
    border-top-color: #555;
    border-bottom-color: #555;
}
/* Mobile version */
.navbar-default .navbar-toggle {
    border-color: #DDD;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
    background-color: #DDD;
}
.navbar-default .navbar-toggle .icon-bar {
    background-color: #CCC;
}
@media (max-width: 767px) {
    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
        color: #777;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
          color: #333;
    }
}
  
  </style>


  <script> 

$( '#topheader .navbar-nav a' ).on( 'click', function () {
$( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
$( this ).parent( 'li' ).addClass( 'active' );

$.ajax({
    url: "request/getmodule.php",
    type: "POST",
    data: "module="+$(this).data('module'),
    success: function(response){ 
        $('.review').html(response);
        //handle returned arrayList
    },
    error: function(e){  
        alert("error");
        //handle error
    } 
});


});
  
  
  </script>