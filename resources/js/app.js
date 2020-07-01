require('./bootstrap');

const $ = require('jquery');
const { find } = require('lodash');

// $(document).ready(() => alert('hello world!'));

$('.faq-question').click(function() {
  $(this).find('i').toggleClass('fa-plus fa-minus');
  // $('.faq-question').find('answer').removeClass('active');
  // $(this).find('.answer').slideDown('slow');
  if (!$(this).find('.answer').hasClass('active')) {
    
    $('.active').siblings('.question').children('i').toggleClass('fa-plus fa-minus');
    $('.active').slideUp('slow');
    $('.active').removeClass('active');
    
    $(this).find('.answer').slideDown('slow');
    $(this).find('.answer').addClass('active');
  } else {
    $(this).find('.answer').toggleClass('active');
    $(this).find('.answer').slideUp('slow');
  }
})