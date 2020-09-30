/*
* @file index.js
* @folder build/js
*/
/*
-----------------------------------------------
1) 	create your iffy
2) 	fetch DOM elements and store them into const variables
2.1) 	store other values into let variables
3) 	set up your initialising pattern
4) 	subscribe handlers to events on elements
5) 	implement handlers
-----------------------------------------------
*/

(function(){


    const submit = document.getElementsByClassName("submitBtn");
    const $menuIcon = $('#openNav');
   
    
    /* FUNCTIONS*/
    
    
    

  /**
     * @name bindBtns
     * @desc this will bind all the elements to their events
     */
    function bindBtns() {
        validation();
        myFunction();
        postersSlider();
    }//bindBtns
    
    
    /**
     * @name init
     * @desc calls other functions, controls the flow
     *
     */
    function init() {
        
    }//end init

    /**
     * @desc onload initilizer
     * @type {init}
     */
    window.onload = init;

})();/*end iffy*/

