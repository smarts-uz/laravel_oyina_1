
  // Wheather

  function myNewFunction(sel) {
    const input = sel.options[sel.selectedIndex].value;
    const form = document.querySelector("form");
  /*SUBSCRIBE HERE FOR API KEY: https://home.openweathermap.org/users/sign_up*/
  const apiKey = "4d8fb5b93d4af21d66a2948710284366";
  
    let inputVal = input;
  
    //check if there's already a city
  
    
  
    //ajax here
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${inputVal}&appid=${apiKey}&units=metric`;
  
    fetch(url)
      .then(response => response.json())
      .then(data => {
        const { main, name, sys, weather } = data;
        const icon = `https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/${
          weather[0]["icon"]
        }.svg`;
          
          document.getElementById('wheahterimg').src = icon;
          document.getElementById('gradus').innerHTML = Math.round(main.temp);
      });	
  }
  
  whet("Tashkent");
  function whet(sel) {
    const input = sel;
    const form = document.querySelector("form");
  /*SUBSCRIBE HERE FOR API KEY: https://home.openweathermap.org/users/sign_up*/
  const apiKey = "4d8fb5b93d4af21d66a2948710284366";
  
    let inputVal = input;
  
    //check if there's already a city
  
    
  
    //ajax here
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${inputVal}&appid=${apiKey}&units=metric`;
  
    fetch(url)
      .then(response => response.json())
      .then(data => {
        const { main, name, sys, weather } = data;
        const icon = `https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/${
          weather[0]["icon"]
        }.svg`;
  
        
  
          document.getElementById('wheahterimg').src = icon;
          document.getElementById('gradus').innerHTML = Math.round(main.temp);
      });	
  }



  // Day and year time
  const getCurrentTimeDate = () => {
    let currentTimeDate = new Date();

    var month = new Array();
    month[0] = "01";
    month[1] = "02";
    month[2] = "03";
    month[3] = "04";
    month[4] = "05";
    month[5] = "06";
    month[6] = "07";
    month[7] = "08";
    month[8] = "09";
    month[9] = "10";
    month[10] = "11";
    month[11] = "12";

    var hours   =  currentTimeDate.getHours();

    var minutes =  currentTimeDate.getMinutes();
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var second =  currentTimeDate.getSeconds();
    second = second < 10 ? '0'+second : second;


    

    var currentTime = `${hours}:${minutes}:${second}`;

    var currentDate  = currentTimeDate.getDate();
    var currentMonth = month[currentTimeDate.getMonth()];
    var CurrentYear = currentTimeDate.getFullYear();

    var fullDate = `${currentDate}.${currentMonth}.${CurrentYear}`;


    document.getElementById("timefull").innerHTML = currentTime;
    document.getElementById("datefull").innerHTML = fullDate;
    document.getElementById("timefull1").innerHTML = currentTime;
    document.getElementById("datefull1").innerHTML = fullDate;

    setTimeout(getCurrentTimeDate, 500);

}
getCurrentTimeDate();