function nav(){var e=$(document).scrollTop(),o=$(".hero").height();console.log(o),o>0?e>o?$("header").removeClass("light"):$("header").addClass("light",2e4,"ease"):$("header").removeClass("light")}$(document).ready(function(){nav(),$(document).scroll(function(){nav()})});