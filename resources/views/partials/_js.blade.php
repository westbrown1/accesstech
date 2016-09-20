<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://unpkg.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<script>
    $(document).ready(function() {
            $('#popup').hide().fadeIn(7000);
            $('#popup').fadeOut(15000);
        }); 
</script>

<script>

  // Masonry Grid
  $('.grid').masonry({
    itemSelector: '.item',
    columnWidth: 160,
    gutter: 10
  });


  $('.item').each(function(i){
    setTimeout(function(){
      $('.item').eq(i).addClass('is-visible');
    }, 200 * i);
  });

</script>

