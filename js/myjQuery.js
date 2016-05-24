/* myjQuery
//   javascript for fading in Full stack 
//   Matt Lee 05-09-26
*/

 
$( document).ready(function(){
   //once page load add class 'fade-in' to em element.
   $('em').addClass('fade-in');
   $('em').hide();
  $('em').fadeIn(10000);
});

$ ( document).ready(function() {
    // testing class assignment on adding click event to website
    $( 'em').click(function(){
        console.log('No Way !');
        alert("Hello Full Stack !");
    });
});

$ ( document).ready(function() {
   // adding a read more interaction on my bio page . 
  // $('.iAM').hide();
   $('#iAM').hide();
   $('#ofMyself').click(function(){
       $('#iAM').fadeIn(3000);
   });
});