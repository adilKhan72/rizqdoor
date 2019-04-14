'use strict';

;( function ( document, window, index )
{
    var inputs = document.querySelectorAll( '.inputfile' );
    Array.prototype.forEach.call( inputs, function( input )
    {
        var label    = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener( 'change', function( e )
        {
            var fileName = '';
            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else
                fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
                label.querySelector( 'span' ).innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });

        // Firefox bug fix
        input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
        input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
    });
}( document, window, 0 ));




/////////////////////////////////////////////////
// Top Responsive NavBar 

function navResponsive() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
    var x = document.getElementById("topnavicon");
    if (x.className === "customico-menu") {
        x.className = "customico-menu3";
    } else {
        x.className = "customico-menu";
    }
}
/////////////////////////////////////////////////
// Another portion...

function abc1() {
    var x = document.getElementById("logo");
        x.className = "icon-search3";
   
}
function cba() {
    var x = document.getElementById("logo");
        x.className = "icon-LOGO";
   
}

function abc2() {
    var x = document.getElementById("logo");
        x.className = " icon-write";
   
}
function abc3() {
    var x = document.getElementById("logo");
        x.className = "icon-book-alt2";
   
}

 function abc4() {
    var x = document.getElementById("logo");
        x.className = "icon-information";
   
}

 function abc5() {
    var x = document.getElementById("logo");
        x.className = "icon-login2";
   
}

$(document).ready(function(){
   
});