var $tip1 = $('#tip1');

$tip1.tooltip({trigger: 'hover'})
  .on('click', function() {
     $tip1.tooltip('toggle');
  });