$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
//----------------------------------------
function two(num) { return ("0" + num).slice(-2);} // подставляет недостающий ноль 

// t - время в секундах из БД сервера
// mydate возвращает строку  в формате например 12.08.2015 19:03
function mydate(t) {
  var d = new Date((t-time_zone*60)*1000);
  return two(d.getUTCDate())+'.'+ two(d.getUTCMonth()+1)+'.'+d.getUTCFullYear()+' '+ two(d.getUTCHours())+':'+ two(d.getUTCMinutes());
}