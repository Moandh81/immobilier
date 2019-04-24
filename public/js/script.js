jQuery(document).ready(function($) {


// Au chargement de la vue update_bien si la valeur est Terrain
// on applique les conditions ci dessous

    if($('#type_bien').val()=='Terrain') {

      $('option[value="Location"]').attr('disabled', true)
      $('#nbre_chambres').attr('disabled', true)
    }

    else {

      $('option[value="Location"]').attr('disabled', false)
      $('#nbre_chambres').attr('disabled', false)

    }







// Au changement de valeur des select
// on applique les conditions ci dessous


   $('#type_bien').on('change', function(event) {

     if($(this).val()=='Terrain') {

       $('option[value="Location"]').attr('disabled', true)
       $('#nbre_chambres').attr('disabled', true)
     }

     else {

       $('option[value="Location"]').attr('disabled', false)
       $('#nbre_chambres').attr('disabled', false)

     }



      })










});
