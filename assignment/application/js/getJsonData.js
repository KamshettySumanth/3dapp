
// JavaScript Document
$(document).ready(function(){

    $.ajax({
        url:'../../assignment/index.php/apiGetData',
        type: 'GET',
        dataType: 'json',
        success: function(data){
            console.log(data);
       //Get the home page main text data
       $('#coketitle_home').html('<h2>' + data[0].title1 + '<h2>');
       $('#cokesubTitle_home').html('<h3>' + data[0].title2 + '</h3>');
       $('#cokedescription_home').html('<p>' + data[0].description + '</p>');
       $('#cokeName').html('<h3>' + data[0].name + '</h3>');
       $('#coke3Ddescription').html('<p>' + data[0].description2 + '</p>');
       
        //Get the home page left column text data
       $('#spritetitle_home').html('<h2>' + data[1].title1 + '<h2>');
       $('#spritesubtitle_home').html('<h3>' + data[1].title2 + '</h3>');
       $('#spritedescription_home').html('<p>' + data[1].description + '</p>');	
       $('#spriteName').html('<h3>' + data[1].name + '</h3>');
       $('#sprite3Ddescription').html('<p>' + data[1].description2 + '</p>');
       
       //Get the home page centre column text data
       $('#peppertitle_home').html('<h2>' + data[2].title1 + '<h2>');
       $('#peppersubTitle_home').html('<h3>' + data[2].title2 + '</h3>');
       $('#pepperdescription_home').html('<p>' + data[2].description + '</p>');	
       $('#pepperName').html('<h3>' + data[2].name + '</h3>');
       $('#pepper3Ddescription').html('<p>' + data[2].description2 + '</p>');
        }
    });
});
