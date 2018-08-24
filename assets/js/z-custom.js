function initMap() {
  var myLatLng = {lat: 20.655072, lng: -103.393212};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: myLatLng,
    scrollwheel: false
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}

$(document).ready(function() {
  $('button.navbar-toggle').on('click', function (){
    $('.site-content-contain').toggleClass('moved');
    $('.main-navigation-container').toggleClass('alpha');
  });

  $('.main-banners-container').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
    prevArrow: '<button type="button" class="slick-prev icon-arrow-left"><span>Previous</span></button>',
    nextArrow: '<button type="button" class="slick-next icon-arrow-right"><span>Next</span></button>'
  });

  $('.events-container').slick({
    dots: true,
    infinite: true,
    speed: 300,
    autoplaySpeed: 4000,
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.allies-container').slick({
    dots: true,
    infinite: true,
    speed: 300,
    autoplaySpeed: 5000,
    autoplay: true,
    slidesToShow: 5,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });



  $('.ponente-item').hover(
    function() {
      $( this ).addClass( "hover" );
    }, function() {
      $( this ).removeClass( "hover" );
  });

 });

/*-------------------------------
  VALIDATE.JS
  A barebones jQuery validation plugin
  @author Todd Francis
  @version 1.0.3
-------------------------------*/
;(function(r,d,l){d.fn.validate=function(m){return this.each(function(){var f=d(this);if(l===f.data("validate")){var j=new d.validate(m,f);f.data("validate",j)}})};d.validate=function(m,f){function j(a,b){-1==d.inArray(a,b)&&b.push(a);return b}function p(a){a=a.slice(a.indexOf("[")+1,-1);return-1!==a.indexOf(",")?a.split(","):[a]}function n(a){for(var b=[],c=0;c<a.length;c++){var g=a[c],d=[],h=g.indexOf("[");-1!==h&&(d=d.concat(p(g)),g=g.slice(0,h));b.push({rule:g,args:d})}return b}var h=d.extend(!0,
{debug:!1,autoDetect:!1,visibleOnly:!0,beforeSubmit:function(){},singleError:function(){},overallError:function(){},singleSuccess:function(){},overallSuccess:function(){},regExp:{alpha:/^[a-zA-Z]*$/,numeric:/^[0-9]*$/,alphanumeric:/^[a-zA-Z0-9]*$/,url:/^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/,email:/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/}},
m),c=this,q=["checkGroupRequired","checkGroupMin","checkGroupMax"];c.$form=f;c.version="1.0.0";if(f!==l)f.on("submit",function(a){if(!c.validate()||h.debug)a.stopImmediatePropagation(),a.preventDefault()});c.validate=function(a){a="undefined"===typeof a?c.$form:a;var b=!1,e=d();h.beforeSubmit.call(c);c.fieldsToCheck(a).each(function(){var a=d(this);if((h.visibleOnly&&a.is(":visible")||!h.visibleOnly)&&!c.checkField(a))b=!0,e=e.add(a)});b?h.overallError.call(c,a,e):!1===h.overallSuccess.call(c,a)&&
(b=!0);return!b};c.checkField=function(a){var b=a.data("validate")?a.data("validate").split("|"):[];a.val();var e=[];if(h.autoDetect&&a.is('input:not([type="checkbox"], [type="radio"])')&&"text"!=a.attr("type"))switch(e=a.attr("type"),e){case "number":b=j("numeric",b);break;default:b=j(e,b)}b=n(b);e=c.checkValue(a,b);if(e instanceof Object)return h.singleError.call(c,a,e),!1;h.singleSuccess.call(c,a,b);return!0};c.checkValue=function(a,b){if(!b)return!0;b="string"==typeof b?n(b):b;for(var e=[],g=
0;g<b.length;g++){var f=b[g].rule,k="",j=[a].concat(b[g].args.slice());f.indexOf("[");k="check"+f.charAt(0).toUpperCase()+f.slice(1);"checkRequired"==k&&a.is('input[type="checkbox"]')?k="checkRequiredCheckbox":-1!=d.inArray(k,q)&&(f=d('input[type="checkbox"]',a),f.length||(f=d('input[type="radio"]',a)),j=[f].concat(j.slice(1)));c[k]instanceof Function?c[k].apply(c,j)||e.push(b[g]):h.regExp[b[g].rule]?""!==a.val()&&!c.checkRegExp(a,b[g].rule)&&e.push(b[g]):e.push(b[g])}return 0<e.length?e:!0};c.fieldsToCheck=
function(a){a=d("[data-validate]",a===l?c.$form:a);h.autoDetect&&(a=d("input[required]").add(a));return a};c.checkRequired=function(a){return 0<a.val().length?!0:!1};c.checkRequiredCheckbox=function(a){return a.is(":checked")};c.checkGroupRequired=function(a){return a.filter(":checked").length?!0:!1};c.checkGroupMin=function(a,b){return a.filter(":checked").length>=b};c.checkGroupMax=function(a,b){return a.filter(":checked").length<=b};c.checkCustomRegExp=function(a,b,c){if(""===a.val())return!0;
b=RegExp(b,c);return a.val().match(b)?!0:!1};c.checkRegExp=function(a,b){return a.val().match(h.regExp[b])?!0:!1};c.checkMaxLength=function(a,b){return""===a.val()?!0:a.val().length<=b};c.checkMinLength=function(a,b){return""===a.val()?!0:a.val().length>=b};c.checkMax=function(a,b){return""===a.val()?!0:parseFloat(a.val())<=parseFloat(b)};c.checkMin=function(a,b){return""===a.val()?!0:parseFloat(a.val())>=parseFloat(b)}}})(window,jQuery);

/*validator*/
$(function(){ 
  var formSettings = {
    singleError : function($field, rules){ 
      $field.closest('.form-group').removeClass('valid').addClass('error');
      $('.alert_fields').fadeIn();
    },
    singleSuccess : function($field, rules){ 
      $field.closest('.form-group').removeClass('error').addClass('valid');
      $('.alert_fields').fadeOut();
    },
    overallSuccess : function(){
      var form      = $('#contactForm'),
        nombre    = form.find( "input[name='nombre']").val(),
        email     = form.find( "input[name='email']").val(),
        mensaje   = form.find( "textarea[name='mensaje']").val(),
        action    = form.attr( "action"),
        url       = action;

      var posting = $.post(
        url, { n: nombre, e: email, m: mensaje }
      );
      posting.done(function( data ){
        console.log(data);
        $('#contactForm')[0].reset();
        $('.email-sent-alert').fadeIn().delay(3000).fadeOut();
      });
    },
    overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
      autoDetect : true, debug : true
    };
  var $validate = $('#contactForm').validate(formSettings).data('validate');
});

$(function(){ 
  var formSettings = {
    singleError : function($field, rules){ 
      $field.closest('.form-group').removeClass('valid').addClass('error');
      $('.alert_fields').fadeIn();
    },
    singleSuccess : function($field, rules){ 
      $field.closest('.form-group').removeClass('error').addClass('valid');
      $('.alert_fields').fadeOut();
    },
    overallSuccess : function(){
      var form      = $('#preregistro'),
        curso       = form.find( "input[name='curso']").val(),
        modalidad   = form.find( "select[name='modalidad']").val(),
        nombre      = form.find( "input[name='nombre']").val(),
        genero      = form.find( "select[name='genero']").val(),
        n_estudios  = form.find( "select[name='nivel_estudios']").val(),
        fnacimiento = form.find( "input[name='fnacimiento']").val(),
        direccion   = form.find( "input[name='direccion']").val(),
        lnacimiento = form.find( "input[name='lnacimiento']").val(),
        email       = form.find( "input[name='email']").val(),
        telefono    = form.find( "input[name='telefono']").val(),
        institucion = form.find( "input[name='institucion']").val(),
        cv          = form.find( "textarea[name='cv']").val(),
        motivos     = form.find( "textarea[name='motivos']").val(),
        medio_info  = form.find( "input[name='medio_info']:checked").val(),
        action      = form.attr( "action"),
        url         = action;

      var posting = $.post(
        url, {  nombre: nombre,
                curso: curso,
                modalidad: modalidad,
                genero: genero,
                n_estudios: n_estudios,
                fnacimiento: fnacimiento,
                direccion: direccion,
                lnacimiento: lnacimiento,
                email: email,
                telefono: telefono,
                institucion: institucion,
                cv: cv,
                motivos: motivos,
                medio_info: medio_info
              }
      );
      posting.done(function( data ){
        console.log(data);
        $('#preregistro')[0].reset();
        $('.email-sent-alert').fadeIn().delay(3000).fadeOut();
      });
    },
    overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
      autoDetect : true, debug : true
    };
  var $validate = $('#preregistro').validate(formSettings).data('validate');
});