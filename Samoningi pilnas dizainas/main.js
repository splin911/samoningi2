
$(document).ready(function(){
		var quoteSource=[
		{
			quote: "Mylekite save ir stebėkite, dabar, rytoj, visados",
			name:"Buda"
	    },
        {
			quote: "Sąlygotumo atsisakiusi sąmonė suvokia savo nesąlygotą prigimtį. Tai yra išsilaisvinimas",
			name:"Vasištha"
	    },
        {
			quote: "Neišmanėlis, kuris neturi išminties bei narsos ir yra atsidavęs savo ego jausmui, jau miręs.",
			name:"Vasištha"
	    },  
        {
			quote: "Patirties aprašymas: seniai laisvas nuo sertifikacijų ir diplomų.",
			name:"Haridas"
	    }, 
        {
			quote: "Proto suvokiama platybė - tai dar ne Savastis. Platybė, kurioje suvokiamas protas - tai Savastis",
			name:"Mooji"
	    },
        {
			quote: "Tiesa, ištarta aistroje ją įrodyti, praranda vertę. Žodžiai, pasakyti širdimi, niekad nemeluoja",
			name:"Rytų išmintis"
	    },
            
            


	   

	];
		

		$('#quoteButton').click(function(evt){
			//define the containers of the info we target
			var quote = $('#quoteContainer p').text();
			var quoteGenius = $('#quoteGenius').text();
			//prevent browser's default action
			evt.preventDefault();
			//getting a new random number to attach to a quote and setting a limit
			var sourceLength = quoteSource.length;
			var randomNumber= Math.floor(Math.random()*sourceLength);
			//set a new quote
			for(i=0;i<=sourceLength;i+=1){
			var newQuoteText = quoteSource[randomNumber].quote;
			var newQuoteGenius = quoteSource[randomNumber].name;
			//console.log(newQuoteText,newQuoteGenius);
      var timeAnimation = 500;
      var quoteContainer = $('#quoteContainer');
      //fade out animation with callback
      quoteContainer.fadeOut(timeAnimation, function(){
        quoteContainer.html('');
				quoteContainer.append('<p>'+newQuoteText+'</p>'+'<p id="quoteGenius">'+'-								'+newQuoteGenius+'</p>');
        
        //fadein animation.
        quoteContainer.fadeIn(timeAnimation);
      });  
			
			break;
		};//end for loop
	
	});//end quoteButton function
		
		
});//end document ready for QUOTE

$(document).ready(function(){
///////////////////////////////////////Pradedame responsive QUOTE
    
        $(window).width(function(){

       if ($(window).width() <= 768) {  
           
           	var quoteSource=[
		{
			quote: "Mylekite save ir stebėkite, dabar, rytoj, visados",
			name:"Buda"
	    },
        {
			quote: "Sąlygotumo atsisakiusi sąmonė suvokia savo nesąlygotą prigimtį. Tai yra išsilaisvinimas",
			name:"Vasištha"
	    },
        {
			quote: "Neišmanėlis, kuris neturi išminties bei narsos ir yra atsidavęs savo ego jausmui, jau miręs.",
			name:"Vasištha"
	    },  
        {
			quote: "Patirties aprašymas: seniai laisvas nuo sertifikacijų ir diplomų.",
			name:"Haridas"
	    }, 
        {
			quote: "Proto suvokiama platybė - tai dar ne Savastis. Platybė, kurioje suvokiamas protas - tai Savastis",
			name:"Mooji"
	    },
        {
			quote: "Tiesa, ištarta aistroje ją įrodyti, praranda vertę. Žodžiai, pasakyti širdimi, niekad nemeluoja",
			name:"Rytų išmintis"
	    },
            
            


	   

	];

		$(document).ready(function(evt){
			//define the containers of the info we target
			var quote = $('#quoteContainer p').text();
			var quoteGenius = $('#quoteGenius').text();
			//prevent browser's default action
//			evt.preventDefault();
			//getting a new random number to attach to a quote and setting a limit
			var sourceLength = quoteSource.length;
			var randomNumber= Math.floor(Math.random()*sourceLength);
			//set a new quote
			for(i=0;i<=sourceLength;i+=1){
			var newQuoteText = quoteSource[randomNumber].quote;
			var newQuoteGenius = quoteSource[randomNumber].name;
			//console.log(newQuoteText,newQuoteGenius);
      var timeAnimation = 500;
      var quoteContainer = $('#quoteContainer');
      //fade out animation with callback
      quoteContainer.fadeOut(timeAnimation, function(){
        quoteContainer.html('');
				quoteContainer.append('<p>'+newQuoteText+'</p>'+'<p id="quoteGenius">'+'-								'+newQuoteGenius+'</p>');
        
        //fadein animation.
        quoteContainer.fadeIn(timeAnimation);
      });  
			
			break;
		};//end for loop
	
	});//end quoteButton function
           
       }     

});
//////////////////////////////// END Of responsive QUOTE 
    

    
    
   
function redirect(){            ///// redirect.php dalykelis
$('.redirect').fadeOut(1000);
$('#cit').hide().delay(1000).fadeIn(1000);
};
redirect();

    
    
    
    
  
    
    
    
    
    
    
    
    
    
    
    var url = window.location.href; /////// menu.php lauko saugotojas

// Will only work if string in href matches with location
$('.menu a[href="'+ url +'"]').addClass('active');

// Will also work for relative and absolute hrefs
$('#menu a').filter(function() {
    return this.href == url;
}).addClass('active');
    
        /////fadein page
        $(function() { 
        $('body').removeClass('fade-out');
    });
    
        /////fadein page
    //////////////////// validacija dalintis.php
    
     $.validate({ 
    modules : 'location, date, security, file',
    onModulesLoaded : function() {
      $('#country').suggestCountry();
    }
  });

  // Restrict presentation length
  $('#presentation').restrictLength( $('#pres-max-length') );

    
    $(function() {
    $("#field12").datepicker({
       
    }).on('change', function() {
        $(this).valid();  // triggers the validation test
        // '$(this)' refers to '$("#datepicker")'
    });
});
    
//////////////////// validacija dalintis.php
    
    
    console.log("hey")
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});



    
    
    
    

	


    




