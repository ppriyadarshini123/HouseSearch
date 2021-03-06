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


    /*const submit = document.getElementsByClassName("submitBtn");
    const $menuIcon = $('#openNav');*/
   
    
    /* FUNCTIONS*/
    
     /**
     * @name divFloorPlanClicked
     * @desc Handling clicking of floor plan divs
     */
    function divFloorPlanClicked() {
        $("#divFloorPlan").click(function(e){  
            e.preventDefault()
            $("#clickedDivFloorPlan").show();
            $("#clickedDivDetails").hide();
            $("#divFloorPlan").addClass("background-color", "#358016");
            $("#divFloorPlan").addClass("color", "#FFFFFF");
            $("#divDetails").addClass("background-color", "#1CE823");
            $("#divDetails").addClass("color", "#FEFF1F");
        });//click        
    }//divFloorPlanClicked
    
    
    /**
     * @name divDetailsClicked
     * @desc Handling clicking of details divs
     */
    function divDetailsClicked() {        
        $("#divDetails").click(function(){
            $("#clickedDivFloorPlan").hide();
            $("#clickedDivDetails").show();
            $("#divDetails").addClass("background-color", "#358016");
            $("#divDetails").addClass("color", "#FFFFFF");
            $("#divFloorPlan").addClass("background-color", "#1CE823");
            $("#divFloorPlan").addClass("color", "#FEFF1F");
        });//click        
    }//divDetailsClicked
    
    
    
    /**
     * @name bindBtns
     * @desc this will bind all the elements to their events
     */
    function bindBtns() {
        /*Initial look of Tabs; Details and Floor Plan*/
         $("#divDetails").addClass("background-color", "#358016");
         $("#divDetails").addClass("color", "#FFFFFF");
             
        divDetailsClicked();
        divFloorPlanClicked();
    }//bindBtns
    
    
    /**
     * @name init
     * @desc calls other functions, controls the flow
     *
     */
    function init() {        
        bindBtns();
    }//end init

    /**
     * @desc onload initilizer
     * @type {init}
     */
    window.onload = init;

})();/*end iffy*/