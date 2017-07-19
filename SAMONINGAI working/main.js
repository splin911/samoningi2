console.log("ar tu veiki2?")
//      slider plug-in
$(document).ready(function() {
            /*
             * Plugin intialization 
             */
            $('#pagepiling').pagepiling({
                direction: 'horizontal',
                menu: '#menu',
                anchors: ['page1', 'page2', 'page3', 'page4'],
                sectionsColor: ['cornsilk', 'cornsilk', 'cornsilk', 'cornsilk'],
                navigation: {
                    'position': 'right',
                    'tooltips': ['Samoningi', 'Dalintis', 'Dabar', 'Pgae 4']
                },
                afterRender: function() {
                    $('#pp-nav').addClass('custom');
                },
                afterLoad: function(anchorLink, index) {
                    if (index > 1) {
                        $('#pp-nav').removeClass('custom');
                    } else {
                        $('#pp-nav').addClass('custom');
                    }
                }
            });
        });
  
//      quote generator plug in end

        	$(document).ready(function(){
		var quoteSource=[
		{
			quote: "Mylekite save ir stebėkite, dabar, rytoj, visados",
			name:"Buda"
	    },
        {
			quote: "Aš esu",
			name:"Ramana Mahariši"
	    },
        {
			quote: "Būkite laisvi",
			name:"Ošo"
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
		
		
});//end document ready



//    start VALIDA

$(document).ready(function(){
    

    
});

    	// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();

				// Exemple 2
				/*
				$('.valida').valida({

					// basic settings
					validate: 'novalidate',
					autocomplete: 'off',
					tag: 'p',

					// default messages
					messages: {
						submit: 'Wait ...',
						required: 'Este campo é obrigatório',
						invalid: 'Field with invalid data',
						textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
					},

					// filters & callbacks
					use_filter: true,

					// a callback function that will be called right before valida runs.
					// it must return a boolan value (true for good results and false for errors)
					before_validate: null,

					// a callback function that will be called right after valida runs.
					// it must return a boolan value (true for good results and false for errors)
					after_validate: null

				});
				*/

//               setup the partial validation

				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});
    
    
//                 end VALIDA

///                 laikasNAV

$(document).ready(function(){
    
n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML= y + "." + m + "." + d;
    
n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date2").innerHTML= y + "." + m + "." + d;


    
});

///                 laikasNAV end


//$(document).ready(function(){
//    $('#menu').fadeIn(4000);
//});
//    

