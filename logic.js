var Cevents = [];


// names
// dates
for(var i=0;i<sizeOfArray;i++)
{
    
  Cevents.push({
    title: names[i],
    start: dates[i],
    imageurl : image[i]
  });


}

//console.log(Cevents);


$(function() {

    // page is now ready, initialize the calendar...
  
    $('#calendar').fullCalendar({
      // put your options and callbacks here


       

        events: Cevents ,
     

        eventRender: function(event, eventElement) {
            if (event.imageurl) {
                eventElement.find("div.fc-content").prepend("<img src='" + event.imageurl +"' width='100' height='100' align='middle'><br>");
            }
        },
      
       // contentHeight:$(window).height()
       

    })

    
    
    
  });