<?php

	$logo = get_field('logo_header');
	$logo_src = $logo ? $logo['url'] : 'https://i.ibb.co/C9yCb06/Le-Logo-Weath-Animal.png';
?>

<button class="hamburger hamburger--collapse" type="button">
  <span class="hamburger-box">
    <span class="hamburger-inner"></span>
  </span>
</button>
<nav class="nav">
  <div class="nav__logo">
    <a href="<?php echo site_url(); ?>"><img src="<?php echo $logo_src; ?>" alt="logo"></a>
	</div>

  <?php // SYNTAXE : wp_nav_menu( array $args = array() )
    $args=array(
      'theme_location' => 'header', // name of the slug
      'menu' => 'header_fr', // name to give to this occurence
      'menu_class' => 'nav__links', // class for the created div
  	);
  	wp_nav_menu($args);
  ?>

	<form action="<?php echo site_url(); ?>" method="get" class="search-bar nav__search">
          <div class="search-bloc">
            <input class="search-input autocomplete" type="text" value="<?= $_GET['name'] ?>" name="name" placeholder="Rechercher">
            <span style="fill: #fff;" class="magnifying-icon-js" id="loupe">
              <svg version='1.1' id='search-icon' xmlns='http://www.w3.org/2000/svg' x='0px' y='0px' width='15px' height='25px' viewBox='0 0 446.25 446.25' style='enable-background:new 0 0 446.25 446.25;'><g><g id='search'><path d='M318.75,280.5h-20.4l-7.649-7.65c25.5-28.05,40.8-66.3,40.8-107.1C331.5,73.95,257.55,0,165.75,0S0,73.95,0,165.7S73.95,331.5,165.75,331.5c40.8,0,79.05-15.3,107.1-40.8l7.65,7.649v20.4L408,446.25L446.25,408L318.75,280.5z M165.75,280.5C102,280.5,51,229.5,51,165.75S102,51,165.75,51S280.5,102,280.5,165.75S229.5,280.5,165.75,280.5z'/></g></g></svg>
            </span>
          </div>
  </form>
</nav>


<script>
$form = document.querySelector(".search-bar")
$searchIcon = $form.querySelector(".magnifying-icon-js")
$searchIcon.addEventListener( //A click on the icon will submit the form
	"click",
 	(e)=>{
	$form.submit()
	e.preventDefault()
 	}
)
</script>
