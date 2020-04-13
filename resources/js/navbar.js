$(document).ready(function(){

    $('.navbar .hamburger').on( 'click', toggleNavbar );
    $('.navbar .dropdown').mouseover( hoverInDropdown );
    $('.navbar .dropdown').mouseout( hoverOutDropdown );

    function toggleNavbar() {
        this.classList.toggle("change");
        document.getElementById("menuLeft").classList.toggle("change");

        if ( $('#laravel_datatable').length > 0 ) {
            setTimeout( function(){
               $('#laravel_datatable').DataTable().columns.adjust();               
            }, 510);
        }
    }

    function hoverInDropdown(){
        this.classList.add("show");
        document.getElementsByClassName("dropdown-menu")[0].classList.add("show");
    }

    function hoverOutDropdown(){
        this.classList.remove("show");
        document.getElementsByClassName("dropdown-menu")[0].classList.remove("show");
    }

});